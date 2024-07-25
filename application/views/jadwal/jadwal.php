<!-- View: mahasiswa_list.php -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="card-title">Periode Survey</h2>
                <!-- Button to add new dosen with icon -->
                <a href="<?= base_url('jadwal/add') ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add
                </a>
            </div>
            <div class="card-body">
                <table id="mahasiswaTable" class="table table-rounded table-striped border gy-7 gs-7">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-300 border-bottom border-gray-200">
                            <th style="width: 200px;">Periode</th> <!-- Set the width here -->
                            <th style="width: 200px;">Tanggal</th> <!-- Set the width here -->
                            <th style="width: 200px;">Status</th> <!-- Set the width here -->

                            <th>Action</th> <!-- Add action column -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($jadwal as $jdl) : ?>
                            <tr>
                                <td><?= $jdl['periode'] ?></td>
                                <td><?= $jdl['tgl_periode'] ?></td>
                                <td><?= $jdl['status_survey'] == 1 ? 'Aktif' : 'Tidak Aktif' ?></td>
                                <td>
                                    <!-- Delete button with icon -->
                                    <a href="<?= base_url('jadwal/delete/' . $jdl['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
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

<!-- Font Awesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

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