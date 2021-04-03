
			<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<!-- LEFT -->
						<div class="col-sm-9">

							<!-- 
								controlls-over		= navigation buttons over the image 
								buttons-autohide 	= navigation buttons visible on mouse hover only
								
								data-plugin-options:
									"singleItem": true
									"autoPlay": true (or ms. eg: 4000)
									"navigation": true
									"pagination": true
									"transitionStyle":"fadeUp" (fade,backSlide,goDown,fadeUp)
							-->
							<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"singleItem": true, "autoPlay": true, "navigation": true, "pagination": true, "transitionStyle":"fade"}'>
								<a href="#">
									<?= $this->Html->image('images/magazine/1-min.jpg', ['class' => 'img-responsive']) ?>
									<!-- <img class="img-responsive" src=<=$this->Html->url('/demo_files/images/magazine/1-min.jpg')?> alt=""> -->
								</a>
								<a href="#">
									<?= $this->Html->image('images/magazine/2-min.jpg', ['class' => 'img-responsive']) ?>
									<!--  <img class="img-responsive" src=<=$this->Html->url('/demo_files/images/magazine/2-min.jpg')?> alt=""> -->
								</a>
								<a href="#">
									<?= $this->Html->image('images/magazine/3-min.jpg', ['class' => 'img-responsive']) ?>
									<!-- <img class="img-responsive" src=<=$this->Html->url('/demo_files/images/magazine/3-min.jpg')?> alt=""> -->
								</a>
							</div>

							<!-- breaking news -->
							<div class="alert alert-mini alert-primary margin-bottom-30"><!-- DANGER -->
								<strong>ÚLTIMAS NOTÍCIAS:</strong>
								<div class="owl-carousel controlls-over nomargin" data-plugin-options='{"autoPlay":3000, "stopOnHover":true, "items": 1, "singleItem": true, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
							     
							     <?php $i=0; foreach ($imagesevents as $imagesevent): ?>
									<div class="text-left size-14">
										<a href="#"><?= $this->Html->link($imagesevent->noticia->title,'/') ?></a>
									</div>
									<!-- <div class="text-left size-14">
										<a href="#">2/3 Australia thrash England to win T20 series in Melbourne</a>
									</div>
									<div class="text-left size-14">
										<a href="#">3/3 China's bulldozer mayor kicked out of party, handed to prosecutors</a>
									</div> -->
								<?php endforeach; ?>
								</div>
							</div><!-- /breaking news -->

							<!-- TWO COLUMNS -->
							<div class="row">

								<!-- first column -->
								<div class="col-md-8">

									<h3 class="page-header weight-300">
										<a href="#" data-toggle="tooltip" title="view more"><i class="fa fa-plus-square-o"></i></a>
										<!-- <strong>Recent</strong> --> Notícias
									</h3>

									<!-- article summary -->
									<?php $i=0; foreach ($imagesevents as $imagesevent): ?>
									<div class="row">
										<div class="col-md-4 text-center">
											<!-- carousel -->
											<div class="owl-carousel controlls-over nomargin" data-plugin-options='{"items": 1, "singleItem": true, "navigation": false, "pagination": true, "transitionStyle":"fadeUp", "itemsScaleUp":true}'>
										
												<div>
													<?= $this->Html->image('fotos/noticias/'. $imagesevent->imagem, ['class' => 'img-responsive']) ?>
													<!-- <img alt="" class="img-responsive" src="<=$this->Html->url('/demo_files/images/magazine/thumbs/thumb_1-min.jpg')?>" /> -->
												</div>

											</div>
											<!-- /carousel -->
											<!-- rating -->
											<!-- <div class="rating rating-4 size-13 margin-top-10 width-100"> --><!-- rating-0 ... rating-5 --><!-- </div> -->
											<!-- /rating -->
										</div>
										<div class="col-md-8">
											<h4><?= $this->Html->link($imagesevent->noticia->title,'/') ?><!-- <a href="#">Boulder smashes through Italian farm</a> --></h4>
											<p>
												Dramatic pictures are released showing the destruction wrought by a huge boulder that smashed through a farm in northern Italy after being dislodged by a landslide.
												<small class="block">29 June 2014, 9:55</small>
											</p>
										</div>
									</div>
									<!-- /article summary -->

                                   <?php   
                                      $i++; 
									  if($i < 3){echo "<hr /><!-- separator -->";} 	   
                                   ?>    

                              <?php endforeach; ?>



								</div>

								<!-- second column -->
								<div class="col-md-4">

									<h3 class="page-header weight-300">
										<a href="#" data-toggle="tooltip" title="view more"><i class="fa fa-plus-square-o"></i></a> 
										 Artigos<!-- <strong>Artigos</strong>  --> 
									</h3>

									<h4><a href="#">Chinese New Year by the numbers</a></h4>
									<p>
										Billions of people travel in China during Lunar New Year. Check out the mind-boggling figures.
										<small class="block">29 June 2014, 9:55</small>
									</p>

									<hr class="half-margins" /><!-- separator -->

									<h4><a href="#">Chinese New Year by the numbers</a></h4>
									<p>
										Billions of people travel in China during Lunar New Year. Check out the mind-boggling figures.
										<small class="block">29 June 2014, 9:55</small>
									</p>

									<hr class="half-margins" /><!-- separator -->

									<h4><a href="#">Chinese New Year by the numbers</a></h4>
									<p>
										Billions of people travel in China during Lunar New Year. Check out the mind-boggling figures.
										<small class="block">29 June 2014, 9:55</small>
									</p>
								</div>

							</div>
							<!-- /TWO COLUMNS -->


						</div>
						<!-- /LEFT -->

						<!-- RIGHT -->
						<div class="col-sm-3">

							<!-- HOT -->
							<h3 class="page-header nomargin-top weight-300">
							TUTORIAIS RECENTES	<!-- Today's <span>Hot</span> -->
							</h3>

							<!-- No #1 Hot -->
							<?php  $i=0; foreach ($metodos as $metodo):?>
							<!-- <div class="item-box nomargin-top"> -->
<!-- 								<figure>
									<a class="item-hover" href="#">
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>READ</strong> ARTICLE
										</span>
									</a>
									<= $this->Html->image('images/magazine/thumbs/thumb_4-min.jpg', ['class' => 'img-responsive']) ?>
	
								</figure> -->
							 <?php $i++; if ($i<=2): ?>
							    <div class="embed-responsive embed-responsive-16by9 margin-top-30">
								    <iframe class="embed-responsive-item" src= <?= $metodo->video ?> width="800" height="450"></iframe>
							    </div>
								<div class="item-box-desc padding-10">
									<small>29 June 2014, 08:33</small>
									<h4><?= $this->Html->link($metodo->nome, ['controller' => 'Metodos', 'action' => 'operation', $metodo->cod_metodo]) ?></h4>
								</div>
							<!-- </div> -->
							  <?php endif; ?>
							<?php endforeach;?>

							<!-- /No #1 Hot -->
                            


							<!-- video -->
							<!-- <div class="embed-responsive embed-responsive-16by9 margin-top-30">
								<iframe class="embed-responsive-item" src='http://player.vimeo.com/video/8408210' width="800" height="450"></iframe>
							</div> -->
							<!-- <h5 class="weight-300 padding-top-10 size-13">
								<i class="fa fa-comments"></i> <a href="#">Comment this video</a> 
								<small class="pull-right margin-top-3">(0 comments)</small>
							</h5> -->
							<!-- /video -->



							<!-- small articles -->
							<div class="row margin-top-30">
								<!-- <div class="col-xs-6 col-md-6">
									<a href="#">
										<= $this->Html->image('images/magazine/thumbs/thumb_3-min.jpg', ['class' => 'img-responsive']) ?>
										<img alt="" class="img-responsive" src="<=$this->Html->url('/demo_files/images/magazine/thumbs/thumb_3-min.jpg')?>" />
										<h6 class="fsize12 font300 padding6">Horses hypnotized by the sea</h6>
									</a>							
								</div> -->
								<?php  $i=0; foreach ($metodos as $metodo):?>
								<?php $i++; if ($i>2): ?>
								<div class="col-xs-6 col-md-6">
									<a href="#">
										<div class="embed-responsive embed-responsive-16by9 margin-top-30">
										<iframe class="embed-responsive-item" src= <?= $metodo->video ?> width="800" height="450"></iframe>
									</div>
										<!-- <= $this->Html->image('images/magazine/thumbs/thumb_4-min.jpg', ['class' => 'img-responsive']) ?> -->
										<!-- <img alt="" class="img-responsive" src="<=$this->Html->url('/demo_files/images/magazine/thumbs/thumb_4-min.jpg')?>" /> -->
										<h6 class="fsize12 font300 padding6"><?= $this->Html->link($metodo->nome, ['controller' => 'Metodos', 'action' => 'operation', $metodo->cod_metodo]) ?></h6>
									</a>							
								</div>
							<?php endif; ?>
							<?php endforeach;?>
							</div>
							<!-- /small articles -->



							<!-- LATEST -->
							<h3 class="page-header weight-300 margin-top-60">
								Teses, <span>Dissertações</span><!-- Read <span>this</span>, Watch <span>that</span> -->
							</h3>

							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<!-- <i class="fa fa-heart-o"> --></i>
												Dissertações<!-- Most readed -->
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="accordion-body collapse in">
										<div class="panel-body">
											<ul class="list-unstyled list-icons margin-bottom-10">
												<li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Boulder smashes through Italian farm</a></li>
												<li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Fall in eurozone inflation rate fuels deflation concerns</a></li>
												<li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												<!-- <i class="fa fa-comment"> --></i>
												Teses<!-- Most Commented -->
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="accordion-body collapse">
										<div class="panel-body">
											<ul class="list-unstyled list-icons margin-bottom-10">
												<li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Boulder smashes through Italian farm</a></li>
												<li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Fall in eurozone inflation rate fuels deflation concerns</a></li>
												<li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>



				<!-- /Social Icons -->

						</div>
						<!-- /RIGHT -->

					</div>

				</div>
			</section>
			<!-- / -->