<!-- View: mahasiswa_list.php -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="card-title">List Mahasiswa</h2>
                <!-- Button to add new mahasiswa with icon -->
                <a href="<?= base_url('mahasiswa/add') ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Mahasiswa
                </a>
            </div>
            <div class="card-body">
                <table id="mahasiswaTable" class="table table-rounded table-striped border gy-7 gs-7">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-300 border-bottom border-gray-200">
                            <th>Nama</th>
                            <th>NIM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <td><?= $mhs['nama_mahasiswa'] ?></td>
                                <td><?= $mhs['npm'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<!-- Initialize DataTables -->
<script>
    $(document).ready(function() {
        $('#mahasiswaTable').DataTable({
            "paging": true, // Enable pagination
            "searching": true, // Enable search box
            "ordering": true, // Enable column ordering
            "info": true // Show table information
        });
    });
</script>