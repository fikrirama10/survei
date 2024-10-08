<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h2 class="card-title">Survey Kepuasan Mahasiswa Terhadap Metode Pengajaran Dosen</h2>
			</div>
			<div class="card-body">
				<form id='form-survei' action="<?php echo base_url(); ?>submit_survey" method="POST">
					<input type="hidden" value="<?= $results_periode->id?>" name="periode_id">
					<input type="hidden" value="<?= $results_periode->id_dosen?>" name="id_dosen">
					<input type="hidden" value="<?= $results_periode->id_matakuliah?>" name="id_matakuliah">
					<input type="hidden" value="<?= $this->session->userdata('id_mahasiwa') ?>" name="mahasiswa_id">
				
					<table class="table table-striped table-bordered table-checkable">
						<thead>
							<tr class="fw-bold fs-6 text-gray-800">
								<th>Pertanyaan</th>
								<!-- <th>Jenis</th> -->
								<!-- <th>Nilai</th> -->
							</tr>
						</thead>
						<tbody>
							<?php foreach ($results['importance'] as $question): ?>
							<input type="hidden" name='response_id' value="<?= $question->id ?>">
							<tr>
								<td class="align-middle">
									<div class="d-flex align-items-center fs-3 mb-5 fw-bold">
										<?= htmlspecialchars($question->pertanyaan) ?> ?
									</div>
									<div class="d-flex align-items-center fs-4">
									<?php if($question->pilihan != null){ ?>
										<div class="py-5 mb-5">
										<?php foreach(json_decode(($question->pilihan)) as  $pilihan ): ?>									
											<div class="mb-10">
												<div class="form-check">
													<input class="form-check-input" type="radio" value="<?= $pilihan->id ?>" required <?= $pilihan->id == 3 ? 'checked':'' ?>
														id="flexCheckDefault1<?=$question->id ?>" name="pilihan[<?=$question->id ?>]">
													<label class="form-check-label text-dark" for="flexCheckDefault1<?=$question->id ?>">
														<?= $pilihan->deskripsi ?> ? 
													</label>
												</div>
											</div>
										<?php endforeach; ?>
										</div>
										<?php
											}
										?>
									</div>
								</td>
								<!-- <td class="bg-danger">Importance</td>
								<td>
									<div class="rating">
										<label class="rating-label" for="kt_rating_<?= $question->id ?>_input_1">
											<i class="ki-duotone ki-star fs-1"></i>
										</label>
										<input class="rating-input" name="importance_response[<?= $question->id ?>]"
											value="1" checked type="radio"
											id="kt_rating_<?= $question->id ?>_input_0" />
										<?php for ($i = 2; $i <= 4; $i++): ?>
										<label class="rating-label"
											for="kt_rating_<?= $question->id ?>_input_<?= $i ?>">
											<i class="ki-duotone ki-star fs-1"></i>
										</label>
										<input class="rating-input" name="importance_response[<?= $question->id ?>]"
											value="<?= $i ?>" type="radio"
											id="kt_rating_<?= $question->id ?>_input_<?= $i ?>" />
										<?php endfor; ?>

									</div>
								</td> -->

							</tr>
							<!-- <tr>
								<td class="bg-success text-light">Performance</td>
								<td>
									<div class="rating">
										<label class="rating-label"
											for="kt_rating_performance_response<?= $question->id ?>_input_1">
											<i class="ki-duotone ki-star fs-1"></i>
										</label>
										<input class="rating-input" name="performance_response[<?= $question->id ?>]"
											value="1" checked type="radio"
											id="kt_rating_performance_response<?= $question->id ?>_input_0" />
										<?php for ($i = 2; $i <= 4; $i++): ?>
										<label class="rating-label"
											for="kt_rating_performance_response<?= $question->id ?>_input_<?= $i ?>">
											<i class="ki-duotone ki-star fs-1"></i>
										</label>
										<input class="rating-input" name="performance_response[<?= $question->id ?>]"
											value="<?= $i ?>" type="radio"
											id="kt_rating_performance_response<?= $question->id ?>_input_<?= $i ?>" />
										<?php endfor; ?>
									</div>

								</td>

							</tr> -->
							<?php endforeach; ?>
						</tbody>
					</table>


					<button type="button" id='submit_survei' class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
