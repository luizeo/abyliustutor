<section>
    <div class="container">

        <div class="row">

            <div class="col-md-6 col-md-offset-3">


                <div class="box-static box-border-top padding-30">

                    <div class="box-title margin-bottom-30">
                        <h2 class="size-20">Acesso ao Gerenciador</h2>
                    </div>

                      <?= $this->Form->create()?>

                        <div class="clearfix">

                            <!-- Email -->
                            <div class="form-group">
                                <?= $this->Form->input('username', ['type' => 'text', 'label' => false, 'class' => 'form-control', 'placeholder' => 'Usuário', 'required' => true])?>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <?= $this->Form->input('password', ['type' => 'password', 'label' => false, 'class' => 'form-control', 'placeholder'=> 'Senha', 'required' => true])?>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <!-- Inform Tip -->
                                <div class="form-tip pt-20">
                                    <a class="no-text-decoration size-13 margin-top-10 block" href="#">Esqueceu sua senha?</a>
                                </div>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">

                                <?= $this->Form->button(__('Acessar'),['class'=>'btn btn-primary']) ?><!-- <button class="btn btn-primary">Acessar</button> -->

                            </div>

                        </div>

                    <?= $this->Form->end()?>

                </div>

            </div>
        </div>

    </div>
</section>