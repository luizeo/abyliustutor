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
									<li ><!--class="active" dropdown HOME -->
										<?= $this->Html->link('INÍCIO', '/')  ?>
										<!--<a  href="#"> class="dropdown-toggle" HOME 
											INÍCIO
										</a>-->						
									</li>
									<li ><!-- class="dropdown" PAGES -->
										<?= $this->Html->link('ABYLIUS', '/pages/about/')  ?>
										<!--<a  href="page-about-us-5.html">  class="dropdown-toggle" PAGES 
											ABYLIUS
										</a>-->
									</li>
									<li ><!-- class="dropdown" FEATURES -->
										<?= $this->Html->link('TUTORIAL', '/metodos/tutorial/') ?>
											<!-- ['controller' => 'Metodos', 'action' => 'tutorial']   -->
										<!--<a  href="tutorial/">  class="dropdown-toggle"> 
											TUTORIAL
										</a>-->
										
									</li>
									
									<li ><!-- class="dropdown mega-menu" SHORTCODES -->
										<?= $this->Html->link('DESENVOLVEDOR', '/metodos/')  ?>
										<!--<a  href="dev/">  class="dropdown-toggle" 
											DESENVOLVEDOR
										</a>-->
									</li>
									<li class="dropdown"><!-- class="dropdown mega-menu" SHORTCODES -->
										<?= $this->Html->link('PRODUÇÃO ACADÊMICA', '#', ['class' => 'dropdown-toggle'])  ?>
										<ul class="dropdown-menu">
											<li><?= $this->Html->link('ARTIGOS CIENTÍFICOS', '/metodos/') ?></li>
											<li><?= $this->Html->link('LIVROS', '/metodos/')  ?></li>
											<li><?= $this->Html->link('CAPÍTULOS DE LIVROS', '/metodos/')  ?></li>
											<li><?= $this->Html->link('DISSERTAÇOES/TESES', '/metodos/')  ?></li>
										</ul>
									</li>
									<li class="dropdown"><!-- class="dropdown mega-menu" SHORTCODES -->
										<?= $this->Html->link('PESSOAL','#', ['class' => 'dropdown-toggle'])  ?>
										<ul class="dropdown-menu">
													<li><?= $this->Html->link('DOCENTE', '/metodos/')  ?></li>
													<li><?= $this->Html->link('DISCENTE', '/metodos/')  ?></li>
										</ul>
									</li>

								</ul>

							</nav>
						</div>

					</div>