<div class="row g-5">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-header">
				<h2 class="card-title">Daftar Semua Survei </h2>
			</div>
			<div class="card-body">
				<table class="table table-rounded table-striped border gy-7 gs-7">
					<thead>
						<tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
							<th>No</th>
							<th>Matakuliah</th>
							<th>Nama Dosen</th>
							<th width='350px' class="text-center">Survey</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1;
                            foreach ($all_periode as $value) :
                        ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $value->matakuliah ?></td>
							<td><?= $value->nama_dosen ?></td>
							<td>
								<a href="<?= base_url('survei-ipa/'.$value->idperiod); ?>"
									class='btn btn-primary'>IPA</a>
								<button class='btn btn-success'>Validitas</button>
								<button class='btn btn-warning'>Realibilitas</button>
							</td>
						</tr>
						<?php  endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
