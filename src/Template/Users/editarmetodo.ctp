<section>
<div class="container">

					<div class="row">

						
					
<div class="panel panel-default">
							<div class="panel-heading panel-heading-transparent">
								<h1 class="panel-title">Atualizar Método</h1>
							</div>

							<div class="panel-body">
                           <?= $this->Form->create($metodo,['class'=>'validate', 'enctype'=>'multipart/form-data', 'data-toastr-position'=>"top-right"]) ?>
								<!-- <form class="validate" action="php/contact.php" method="post" enctype="multipart/form-data" data-success="Sent! Thank you!" data-toastr-position="top-right"> -->
									<fieldset>
										<!-- required [php action request] -->
										<!-- <input type="hidden" name="action" value="contact_send" /> -->

										<div class="row">
											<div class="form-group">
												<div class="col-md-12 col-sm-12">
													<label>Método *</label>
													<?= $this->Form->text('nome',['label' => false, 'class' => 'form-control required'])?>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12 col-sm-12">
													<label>Descrição *</label>
													<?= $this->Form->textarea('descricao',['label' => false,'class' => 'form-control required','data-height'=>'200','data-lang'=>"pt-BR"])?>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div  class="col-md-12 col-sm-12">
													<label>Passos-a-Passos no Abylius *</label>
													<?= $this->Form->textarea('passos',['label' => false,'class' => 'form-control required','data-height'=>'200','data-lang'=>"pt-BR"])?>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div id="summernote" class="col-md-12 col-sm-12">
													<label>Referências</label>
													<?= $this->Form->textarea('referencias',['label' => false,'class' => 'form-control ','data-height'=>'200','data-lang'=>"pt-BR"])?>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12 col-sm-12">
													<label>
														Vídeo-Tutorial
														<!-- <small class="text-muted">- optional</small> -->
													</label>
													<?= $this->Form->control('video',['label' => false,'class' => ' form-control', 'placeholder'=>'http://'])?>
													<!-- <input type="text" name="contact[website]" placeholder="http://" class="form-control"> -->
												</div>
											</div>
										</div>
									</fieldset>

								<!-- </form> -->
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">

                                <?= $this->Form->button(__('Enviar'),['class'=>'btn btn-primary']) ?><!-- <button class="btn btn-primary">Acessar</button> -->

                            </div>
                                  <?= $this->Form->end() ?>
						</div>
					</div>
					</div>

				</div>
				<!-- <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script> -->
</section>