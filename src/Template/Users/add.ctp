<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

?>

<div class="container">

    <div class="row">

        <div class="col-md-4"></div>

        <div class="col-md-4" style="margin-top: 5%;">
            <?= $this->Form->create($user); ?>
            <fieldset>
                <legend><?= 'Adicionar Usuário' ?></legend>
                <?php
                echo $this->Form->control('nome');
                echo $this->Form->control('email');
                echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__("Add")); ?>
            <?= $this->Form->end() ?>


        </div>

        <div class="col-md-4"></div>

    </div>

</div>