<?php
class Survei extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('response_model');
        $this->load->model('Periode_model');
    }

    function mean($array)
{
    return array_sum($array) / count($array);
}

// Fungsi untuk menghitung varians dari sebuah array
function variance($array)
{
    $mean = $this->mean($array);
    $variance = 0.0;
    foreach ($array as $value) {
        $variance += pow($value - $mean, 2);
    }
    return $variance / (count($array) - 1);
}

// Menghitung nilai Cronbach's Alpha
function cronbach_alpha($responses)
{
    $num_items = count($responses[0]);
    $num_respondents = count($responses);

    // Menghitung varians dari setiap pertanyaan
    $item_variances = [];
    for ($i = 0; $i < $num_items; $i++) {
        $item_responses = array_column($responses, $i);
        $item_variances[] = $this->variance($item_responses);
    }

    // Menghitung varians total dari skor setiap responden
    $total_scores = array_map('array_sum', $responses);
    $total_variance = $this->variance($total_scores);

    // Menghitung Cronbach's Alpha
    $sum_item_variances = array_sum($item_variances);
    $alpha = ($num_items / ($num_items - 1)) * (1 - ($sum_item_variances / $total_variance));

    return $alpha;
}

    function hitungTotalSkor($data)
    {
        $totalSkor = array();
        foreach ($data as $responden) {
            $total = array_sum($responden);
            $totalSkor[] = $total;
        }
        return $totalSkor;
    }

    // Fungsi untuk menghitung rata-rata total skor
    function hitungRataRata($totalSkor)
    {
        $jumlahResponden = count($totalSkor);
        $total = array_sum($totalSkor);
        $rataRata = $total / $jumlahResponden;
        return $rataRata;
    }

    // Fungsi untuk menghitung korelasi antara setiap pertanyaan dan total skor
    function hitungKorelasi($data, $totalSkor)
    {
        $korelasi = array();
        $jumlahPertanyaan = count($data[0]); // Ambil jumlah kolom pertama sebagai jumlah pertanyaan
        // return $jumlahPertanyaan;
        for ($i = 0; $i < $jumlahPertanyaan; $i++) {
            $pertanyaan = array_column($data, $i); // Ambil kolom pertanyaan dari data
            $korelasi[] = $this->correlation($pertanyaan, $totalSkor);
        }
        return $korelasi;
    }

    // Fungsi untuk menghitung korelasi
    function correlation($x, $y)
    {
        $n = count($x);
        $meanX = array_sum($x) / $n;
        $meanY = array_sum($y) / $n;
        $numerator = 0;
        $denominatorX = 0;
        $denominatorY = 0;
        for ($i = 0; $i < $n; $i++) {
            $numerator += ($x[$i] - $meanX) * ($y[$i] - $meanY);
            $denominatorX += pow($x[$i] - $meanX, 2);
            $denominatorY += pow($y[$i] - $meanY, 2);
        }
        $denominator = sqrt($denominatorX) * sqrt($denominatorY);
        if ($denominator == 0) {
            return 0; // Menghindari pembagian oleh nol
        } else {
            return $numerator / $denominator;
        }
    }

    public function survei_ipa($id_periode) {
        //hasil IPA per periode
        $data['get_nilai_rata'] = $this->Periode_model->get_nilai_rata($id_periode);
        $values_rata = array();
            foreach ($data['get_nilai_rata'] as $row) {
                $values_rata[] = array_values($row);
            }
         $data['get_nilai_rata'] = $values_rata;
         $data['nilai_importance'] = [
            [
                4,
                3.8, 
                3.8,
                3.8, 
                3.5, 
                3.6, 
                3.3,
                3, 
                2, 
                4,
                3.7,
                3.8
            ]
         ];
        //  return print_r($data['get_nilai_rata'][0]);
        $data['results_ipa'] = $this->Periode_model->get_data_ipa($id_periode);
        $data['results_ipa_json'] = $this->Periode_model->get_json_data_with_ipa($id_periode);
        $dataResponden = $this->Periode_model->get_data_responden($id_periode);
        $values = array();
            foreach ($dataResponden as $row) {
                $values[] = array_values($row);
            }
        $totalSkorResponden = $this->hitungTotalSkor($values);
        // return print_r($totalSkorResponden);
        // return json_encode($dataResponden);
// Hitung rata-rata total skor
$rataRataTotalSkor =  $this->hitungRataRata($totalSkorResponden);

// Hitung korelasi antara setiap pertanyaan dan total skor
$korelasi =  $this->hitungKorelasi($values, $totalSkorResponden);
// return print_r($korelasi);
// Tampilkan hasil
// echo "Rata-rata total skor: " . $rataRataTotalSkor . "<br>";
// echo "Korelasi antara setiap pertanyaan dan total skor:<br>";
// foreach ($korelasi as $index => $nilai) {
//     if ($nilai > 0.10) {
//         $valid = 'Valid';
//     } else {
//         $valid = 'Tidak Valid';
//     }
//     echo "Pertanyaan " . ($index + 1) . ": " . $nilai . ' ' . $valid . "<br>";
// }
        // return print_r($data['results_responden']);
       
        $data['title'] = 'Hasil Survei IPA';
        $data['content'] = 'survei/survei-ipa';
        $data['korelasi'] = $korelasi;
        $data['realibilitas'] = $this->cronbach_alpha($values);
        $this->load->view('layouts/main', $data);
    }
    public function submit_survey() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            // Menangkap semua data POST
            $postData = $this->input->post();
            // return print_r($postData);
            // Menampilkan data POST
            if ($this->response_model->save_responses($postData)) {
                $this->session->set_flashdata('success', 'Data survei berhasil dikirim');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Data survei gagal dikirim');
                redirect('dashboard');
            }
        }
    }
    public function view($id) {
        // Memuat model
        $this->load->model('survei_model');

        // Mengambil data dari model
        $data['results'] = $this->survei_model->get_data();
        $data['results_periode'] = $this->Periode_model->get_data_by_periode($id);

        $data['title'] = 'Pengisian Survei';
        $data['content'] = 'survei/survei';
        $this->load->view('layouts/main', $data);
    }
}
