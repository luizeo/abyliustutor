<div class="container">

						<!-- Mobile Menu Button -->
						<!-- <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button> -->

						<!-- BUTTONS -->
						<!-- <ul class="pull-right nav nav-pills nav-second-main"> -->

							<!-- SEARCH -->
							<!-- <li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
								<div class="search-box">
									<form action="page-search-result-1.html" method="get">
										<div class="input-group">
											<input type="text" name="src" placeholder="Procure por..." class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Busca</button>
											</span>
										</div>
									</form>
								</div> 
							</li> -->
							<!-- /SEARCH -->


						<!-- </ul> -->
						<!-- /BUTTONS -->


						<!-- Logo -->
				           <?= $this->Html->link(
						   $this->Html->image("images/_smarty/logo_dark.png", ["alt" => "Sistema Abylius"]), "/", ['class' =>'logo pull-left','escape' => false]) ?>
						
						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<!--INÍCIO-->
									<li ><!--class="active" dropdown HOME -->
										<?= $this->Html->link('INÍCIO', '/users/admin/')  ?>
										<!--<a  href="#"> class="dropdown-toggle" HOME 
											INÍCIO
										</a>-->						
									</li>
                                      <!--MÉTODOS-->
									<li class="dropdown"><!-- class="dropdown mega-menu" SHORTCODES -->
										<?= $this->Html->link('MÉTODOS', '#', ['class' => 'dropdown-toggle'])  ?>
										<ul class="dropdown-menu">
											<li><?= $this->Html->link('ADICIONAR', '/users/addmetodo/') ?></li>
											<!-- <li><= $this->Html->link('EDITAR', '/metodos/') ?></li> -->
											<li><?= $this->Html->link('VISUALIZAR', '/users/listmetodos/')  ?></li>
										</ul>
									</li>
									<!--PRODUÇÃO ACADÊMICA-->
									<li class="dropdown"><!-- class="dropdown mega-menu" SHORTCODES -->
										<?= $this->Html->link('PRODUÇÃO ACADÊMICA','#', ['class' => 'dropdown-toggle'])  ?>
										<ul class="dropdown-menu">
												 <li class="dropdown">
												    <?= $this->Html->link('ARTIGOS CIENTÍFICOS', '#',['class' => 'dropdown-toggle'])?>
													<ul class="dropdown-menu">
													   <li><?= $this->Html->link('ADICIONAR','#')  ?></li>
													   <li><?= $this->Html->link('VISUALIZAR','#')  ?></li>
													</ul>
												 </li>
												<li class="dropdown">
												    <?= $this->Html->link('LIVROS', '#',['class' => 'dropdown-toggle'])?>
													<ul class="dropdown-menu">
													   <li><?= $this->Html->link('ADICIONAR','#')  ?></li>
													   <li><?= $this->Html->link('VISUALIZAR','#')  ?></li>
													</ul>
												</li>
												<li>
												     <?= $this->Html->link('CAPÍTULOS DE LIVROS', '#',['class' => 'dropdown-toggle'])  ?>
													<ul class="dropdown-menu">
														 <li><?= $this->Html->link('ADICIONAR','#')  ?></li>
														 <li><?= $this->Html->link('VISUALIZAR','#')  ?></li>
												    </ul>
												</li>
												<li><?= $this->Html->link('DISSERTAÇÕES/TESES', '#',['class' => 'dropdown-toggle'])  ?>
													<ul class="dropdown-menu">
														<li><?= $this->Html->link('ADICIONAR','#')  ?></li>
														<li><?= $this->Html->link('VISUALIZAR','#')  ?></li>
													</ul>
												</li>
										</ul>
									</li>
									<!--NOTÍCIAS-->
									<li class="dropdown"><!--class="active" dropdown HOME -->
										<?= $this->Html->link('NOTÍCIAS', '#', ['class' => 'dropdown-toggle'])  ?>
										<ul class="dropdown-menu">
											<li><?= $this->Html->link('ADICIONAR NOTÍCIA', '/noticias/add') ?></li>
											<!-- <li><= $this->Html->link('EDITAR', '/metodos/') ?></li> -->
											<li><?= $this->Html->link('VISUALIZAR NOTÍCIAS', '/noticias/index')  ?></li>
											<li><?= $this->Html->link('ADICIONAR IMAGENS', '/users/addimage')  ?></li>
											<li><?= $this->Html->link('VISUALIZAR IMAGENS', '/users/listimages')  ?></li>
										</ul>
					
									</li>
									 <li class="dropdown"><!-- class="dropdown mega-menu" SHORTCODES -->
										<?= $this->Html->link('PESSOAL', '#', ['class' => 'dropdown-toggle'])  ?>
										  <ul class="dropdown-menu">
													<li class="dropdown">
													  <?= $this->Html->link('DOCENTE', '#',['class' => 'dropdown-toggle'])?>
														  <ul class="dropdown-menu">
																<li><?= $this->Html->link('ADICIONAR', '/docentes/add') ?></li>
																<!-- <li><= $this->Html->link('EDITAR', '/metodos/') ?></li> -->
																<li><?= $this->Html->link('VISUALIZAR', '/docentes/index')  ?></li>
														  </ul>
													
													</li>
													<li class="dropdown">
													   <?= $this->Html->link('DISCENTE', '/metodos/',['class' => 'dropdown-toggle'])?>
														   <ul class="dropdown-menu">
																<li><?= $this->Html->link('ADICIONAR', '/discentes/add') ?></li>
																<!-- <li><= $this->Html->link('EDITAR', '/metodos/') ?></li> -->
																<li><?= $this->Html->link('VISUALIZAR', '/discentes/index')  ?></li>
														   </ul>
													
													</li>
										   </ul>
									</li>

								</ul>

							</nav>
						</div>

					</div>