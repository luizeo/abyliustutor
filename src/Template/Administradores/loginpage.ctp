<?php
/**
 * @var \App\View\AppView $this
 * 
 */
?>

<section>
    <div class="container">

        <div class="row">

            <div class="col-md-6 col-md-offset-3">


                <!-- < $msgErro = $this->Session->flash()?> -->

               <!--  <? if ($msgErro) {  ?> -->
                <!--<div class="alert alert-mini2 alert-danger margin-bottom-30">
                    <strong> <?= $msgErro?> </strong>
                </div>-->
                <!-- <? } ?> -->


                <div class="box-static box-border-top padding-30">

                    <div class="box-title margin-bottom-30">
                        <h2 class="size-20">Acesso ao Gerenciador</h2>
                    </div>

                    <?= $this->Flash->render('auth') ?>
                    <?= $this->Form->create('Administradores', ['url' => '/administradores/loginpage/', 'class' => 'nomargin', 'autocomplete' => 'off'])?>

                        <div class="clearfix">

                            <!-- Email -->
                            <div class="form-group">
                                <?= $this->Form->input('email', ['type' => 'text', 'label' => false, 'class' => 'form-control', 'placeholder' => 'E-mail', 'required' => true])?>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <?= $this->Form->input('senha', ['type' => 'password', 'label' => false, 'class' => 'form-control', 'placeholder'=> 'Senha', 'required' => true])?>
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

                                <button class="btn btn-primary">Acessar</button>

                            </div>

                        </div>

                    <?= $this->Form->end()?>

                </div>

            </div>
        </div>

    </div>
</section>