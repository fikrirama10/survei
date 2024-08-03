<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="card-title">List Mahasiswa</h2>
                <!-- Button to add new mahasiswa with icon -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMahasiswaModal">
                    <i class="fas fa-plus"></i> Add
                </button>
            </div>
            <div class="card-body">
                <table id="mahasiswaTable" class="table table-rounded table-striped border gy-7 gs-7">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-300 border-bottom border-gray-200">
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Action</th> <!-- Add action column -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <td><?= $mhs['nama_mahasiswa'] ?></td>
                                <td><?= $mhs['npm'] ?></td>
                                <td>
                                    <!-- Delete button with icon -->
                                    <a href="<?= base_url('mahasiswa/delete/' . $mhs['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
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

<!-- Add Mahasiswa Modal -->
<div class="modal fade" id="addMahasiswaModal" tabindex="-1" aria-labelledby="addMahasiswaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('mahasiswa/create') ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMahasiswaModalLabel">Tambah Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_mahasiswa">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" required>
                    </div>
                    <div class="form-group">
                        <label for="npm">NIM</label>
                        <input type="text" class="form-control" id="npm" name="npm" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Font Awesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

<!-- Initialize DataTables -->
<script>
    $(document).ready(function() {
        $('#mahasiswaTable').DataTable({
            "language": {
		"lengthMenu": "Show _MENU_",
	},
	"dom":
		"<'row mb-2'" +
		"<'col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar'l>" +
		"<'col-sm-6 d-flex align-items-center justify-content-end dt-toolbar'f>" +
		">" +

		"<'table-responsive'tr>" +

		"<'row'" +
		"<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
		"<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
		">",
            "paging": true, // Enable pagination
            "searching": true, // Enable search box
            "ordering": true, // Enable column ordering
            "info": true // Show table information
        });
    });
</script>