<section>
<div class="container">
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Imagens de Notícias - Atualização/Exclusão</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Imagens Registradas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Imagem</th>
                                        <th>Descrição</th>
                                        <th>Notícia</th>
                                        <th>Criado em</th>
                                        <th>Modificado em</th>
                                        <th>Operações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php foreach ($imagesevents as $imagesevent): ?>
                                    <tr class="odd gradeA">
                                        <td><?= $this->Number->format($imagesevent->id) ?></td>
                                        <td><?= $this->Html->image('fotos/noticias/'. $imagesevent->imagem) ?></td>
                                        <td class="center"><?= h($imagesevent->descricao) ?></td>
                                        <td class="center"><?= $imagesevent->has('noticia') ? $this->Html->link($imagesevent->noticia->title, ['controller' => 'Noticias', 'action' => 'view', $imagesevent->noticia->id]) : '' ?></td>
                                        <td class="center"><?= h($imagesevent->created) ?></td>
                                        <td class="center"><?= h($imagesevent->modified) ?></td>

                                        <td class="actions center">
                                        	
						                    <?= $this->Html->link(__('Alterar'), ['action' => 'editimage', $imagesevent->id]) ?>
						                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delimage', $imagesevent->id], ['confirm' => __('Tem certeza quer excluir o método # {0}?', $imagesevent->id)]) ?>
                                        </td>
                                    </tr>
                                     <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        </div>
        <!-- /#container -->
    </section>