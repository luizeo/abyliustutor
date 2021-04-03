           
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
						<div id = "conteudo" class="col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">

							<!-- <div class="heading-title heading-border-bottom heading-color">
									    <h2><= h($metodo->nome) ?></h2>
						</div> -->
						 <div class="col-lg-6"><!-- col-lg-6 -->
									<!--<div class="heading-title heading-border-bottom heading-color">
									    <h2><?= h($metodo->nome) ?></h2>
								    </div>-->
								<!-- <div> -->
									       <?= $this->Text->autoParagraph(h($met->descricao)); ?>
						        <!-- </div> -->
					
						  </div> 
						
						<div class="col-lg-6">

								<div class="embed-responsive embed-responsive-16by9 box-shadow-1">
									<iframe class="embed-responsive-item" width="800" height="450" src=<?= h($met->video) ?> ></iframe>
								</div>
						</div>
                                   
                           <!-- Passo-a-Passo -->
                           <div>
                                   <div class="heading-title heading-border-bottom heading-color">
										<h4>Passo-a-Passo</h4>
								   </div>
								   <div>
									     <?= $this->Text->autoParagraph(h($met->passos)); ?>

								   </div>
								   <div class="heading-title heading-border-bottom heading-color">
										<h4>Referências</h4>
								   </div>
								    <div>
									 <?= h($met->referencias) ?>

								   </div>
						   </div>

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

									
				</div>
			</section>

			<!-- -->
			