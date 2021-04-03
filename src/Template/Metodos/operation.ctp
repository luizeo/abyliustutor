
<section class="page-header">
				<div class="container">

					<h1><?= h($met->nome) ?></h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">INÍCIO</a></li>
						<li>TUTORIAL</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>


			<!-- -->
			<section>
				<div class="container">
					
					<div class="row">
                        
                      <!--RIGHT -->
						<!-- RIGHT -->
						<div class="col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">

							<!-- <h1 class="blog-post-title">DESCRIÇÃO E VIDEO-TUTORIAL</h1> -->
                            <div class="heading-title heading-dotted text-center">
								<h3><span>DESCRIÇÃO E VIDEO-TUTORIAL</span></h3>
							</div>
							<!-- OWL SLIDER -->
							<!--
							<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "autoPlay": 4500, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>
								<a class="lightbox" href="demo_files/images/1200x800/10-min.jpg" data-plugin-options='{"type":"image"}'>
									<img class="img-responsive" src="demo_files/images/content_slider/10-min.jpg" alt="" />
								</a>
								<a class="lightbox" href="demo_files/images/1200x800/3-min.jpg" data-plugin-options='{"type":"image"}'>
									<img class="img-responsive" src="demo_files/images/content_slider/3-min.jpg" alt="" />
								</a>
								<a class="lightbox" href="demo_files/images/1200x800/21-min.jpg" data-plugin-options='{"type":"image"}'>
									<img class="img-responsive" src="demo_files/images/content_slider/21-min.jpg" alt="" />
								</a>
							</div>
							-->
							<!-- /OWL SLIDER -->

							<!-- IMAGE -->
							<div class="margin-bottom-20 embed-responsive embed-responsive-16by9 ">
									<iframe class="embed-responsive-item" width="600" height="338" src=<?= h($met->video) ?> ></iframe>
							</div>


							<?= $this->Text->autoParagraph(h($met->descricao)); ?>

							<div class="heading-title heading-dotted text-center">
								<h4><span>Passo-a-Passo</span></h4>
							</div>
							<?= $this->Text->autoParagraph(h($met->passos)); ?>
							<div class="heading-title heading-dotted text-center">
								<h4><span>Referências</span></h4>
							</div>
							 <?= h($met->referencias) ?>

							<!-- <div class="divider divider-dotted">divider</div> -->

							<!-- /COMMENTS -->


				</div>

						<!-- LEFT -->
						<div class="col-lg-3 col-md-3 col-sm-3 col-lg-pull-9 col-md-pull-9 col-sm-pull-9">

							<!-- CATEGORIES -->
							<div  class="side-nav margin-bottom-60">

								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>Busca</h4>
									 <ul class="nav nav-pills nav-second-main"> 
										<!-- SEARCH -->
										<li class="search">
											<div class="search-box">
												<form action="page-search-result-1.html" method="get">
													<div class="input-group">
														<input type="text" name="src" placeholder="Procure por..." class="form-control" />
														<!-- <span class="input-group-btn">
															<button class="btn btn-primary" type="submit">Busca</button>
														</span> -->
													</div>
												</form>
											</div> 
										</li>
										<!-- /SEARCH -->
						           </ul>
						<!-- /BUTTONS -->

								</div>

								<ul class="list-group list-group-bordered list-group-noicon uppercase">
									<li class="list-group-item">
										<a class="dropdown-toggle" href="#">FERRAMENTAS</a>
										<ul>
											<li><a href="#"> Em Construção</a></li>
											<li class="active"><a href="#"> Em Construção</a></li>
											<li><a href="#">Em Construção</a></li>
											<li><a href="#">Em Construção</a></li>
										</ul>
									</li>
									<li class="list-group-item">
										<a class="dropdown-toggle" href="#">OPERAÇÕES</a>
										<ul id="opera">
                                           <?php foreach ($metodos as $metodo): ?>
											
											<li><?= $this->Html->link($metodo->nome, ['controller' => 'Metodos', 'action' => 'operation', $metodo->cod_metodo]) ?>
											
											</li>
											<!-- <li><= $this->Html->link($metodo->nome, ['controller' => 'Metodos', 'action' => 'operation', $metodo->cod_metodo], ['class'=> 'size-11 text-muted pull-right', 'onclick' =>'return loadmetodo(this)']) ?> -->
											  <!-- <a href="#">

												<span class="size-11 text-muted pull-right">(88)</span> Accessories</a> </li>-->
										<?php endforeach; ?>
											<!-- <li><a href="#"><span class="size-11 text-muted pull-right">(67)</span> Shoes &amp; Boots</a></li>
											<li><a href="#"><span class="size-11 text-muted pull-right">(32)</span> Dresses &amp; Skirts</a></li>
											<li class="active"><a href="#"><span class="size-11 text-muted pull-right">(78)</span> Top &amp; Blouses</a></li> -->
									   </ul>
									</li>

								</ul>

							</div>
							<!-- /CATEGORIES -->

						</div>

                    </div>
                  <!--  row -->
									
				</div>
				<!-- conteiner -->
			</section>