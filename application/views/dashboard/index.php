<div class="row g-5">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-header">
				<h1 class="card-title">Daftar Matakuliah</h1>
			</div>
			<div class="card-body">

				<table class="table table-rounded table-striped border gy-7 gs-7">
					<thead>
						<tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
							<th>No</th>
							<th>Kode Matakuliah</th>
							<th>Nama Matakuliah</th>
							<th class="text-center">Survey</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; 
                        
                        foreach($matakuliah_mahasiswa as $mk): 
                        $conditions = array(
                            'status_survey' => 1,
                            'id_matakuliah' => $mk->idmatkul
                        );
                        
                        $jumlah_survey = cek_survey_by_id_matkul($conditions);
                        ?>

						<tr>
							<td><?= $no++ ?></td>
							<td><?= $mk->kode ?></td>
							<td><?= $mk->matakuliah ?></td>
							<td class=" text-center ">
								<?php if(count($jumlah_survey) > 0): ?>
								<?php foreach($jumlah_survey as $js): ?>
								<?php                                        
                                    $conditions2 = array(
                                        'periode_id' => $js->id,
                                        'mahasiswa_id' => $mk->maha_id
                                    );
                                    $cek_jawaban = cek_survey_by_id_matkul_idmhs($conditions2);
                                    ?>
								<?php 
                                if(count( $cek_jawaban) > 0){
                                ?>
								<a href="" class="badge badge-success"><?= $mk->nilai?></a>
								<?php }else{ ?>
								<a href="<?= base_url('survei/'.$js->id) ?>" class="btn btn-icon btn-primary"><i
										class="fa-solid fa-clipboard-list fs-2"></i></a>
								<?php } ?>
								<?php endforeach; ?>

								<?php else: ?>
								<a href="" class="badge badge-secondary">Belum ada Survei</a>
								<?php endif; ?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
