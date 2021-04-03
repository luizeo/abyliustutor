
<section>
<div class="container">

					<div class="row">

						
					
<div class="panel panel-default">
							<div class="panel-heading panel-heading-transparent">
								<h1 class="panel-title">Adicionar Imagem</h1>
							</div>

							<div class="panel-body">
                           <?= $this->Form->create($imagesevent,['class'=>'validate', 'enctype'=>'multipart/form-data', 'data-toastr-position'=>'top-right', 'type' => 'file']) ?>
								<!-- <form class="validate" action="php/contact.php" method="post" enctype="multipart/form-data" data-success="Sent! Thank you!" data-toastr-position="top-right"> -->
									<fieldset>
										<!-- required [php action request] -->
										<!-- <input type="hidden" name="action" value="contact_send" /> -->

										<div class="row">
											<div class="form-group">
												<div class="col-md-12 col-sm-12">
													<label>Descrição *</label>
													<?= $this->Form->text('descricao',['label' => false, 'class' => 'form-control required'])?>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-12 col-sm-12">
													<label>Notícia *</label>
													<?= $this->Form->control('noticia_id',['label' => false, 'class' => 'form-control required', 'options' => $noticias])?>
												</div>
											</div>
										</div>
							<!-- 			<div class="row">
											<div class="form-group">
												<div class="col-md-6 col-sm-6">
													<label>Imagem *</label>
													<= $this->Form->control('imagem',['label' => false, 'class' => 'form-control required', 'type' => 'file'])?>
												</div>
											</div>
										</div> -->
										<label>Imagem *</label>
										<div class="fancy-file-upload fancy-file-primary">
														
														<i class="fa fa-upload"></i>
														<input name="imagem" type="file" class="form-control" onchange="jQuery(this).next('input').val(this.value);" />
														<input type="text" class="form-control" placeholder="no file selected" readonly="" />
														<!-- <= $this->Form->control('imagem',['label' => false, 'class' => 'form-control', 'type' => 'file', "onchange" => "jQuery(this).next('input').val(this.value)"])?>
														<= $this->Form->text('path', ['class' => 'form-control', 'placeholder'=>'Nenhum arquivo selecionado', 'readonly'=>'""'])?> -->
														
														<!-- <input type="text" class="form-control" placeholder="no file selected" readonly="" /> -->
														<span class="button">Selecione Imagem</span>
											</div>
       
<!-- 										<div class="row">
											<div class="form-group">
												<div class="col-md-12 col-sm-12">
													<label>Descrição *</label>
													<= $this->Form->contral('descricao',['label' => false,'class' => 'form-control required','data-height'=>'200','data-lang'=>"pt-BR"])?>
												</div>
											</div>
										</div >-->

										
									</fieldset>

								<!-- </form> -->
                            <div class="col-md-6 col-sm-6 text-right"> <!-- col-xs-6 -->

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