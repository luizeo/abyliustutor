<section>
<div class="container">

<div class="row">
						
    <div class="panel panel-default">
							<div class="panel-heading panel-heading-transparent">
								<h1 class="panel-title">Atualizar Imagem</h1>
							</div>

							<div class="panel-body">
                           <?= $this->Form->create($imagesevent,['class'=>'validate', 'enctype'=>'multipart/form-data', 'data-toastr-position'=>'top-right', 'type' => 'file']) ?>
								<!-- <form class="validate" action="php/contact.php" method="post" enctype="multipart/form-data" data-success="Sent! Thank you!" data-toastr-position="top-right"> -->
									<fieldset>
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
										<div class="row">
											<div class="form-group">
												<div class="col-md-6 col-sm-6">
													<label>Imagem *</label>
													<?= $this->Form->control('imagem',['label' => false, 'class' => 'form-control required', 'type' => 'file'])?>
												</div>
											</div>
										</div>
									</fieldset>

								<!-- </form> -->
                            <div class="col-md-6 col-sm-6  text-right"> <!-- col-xs-6 -->

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