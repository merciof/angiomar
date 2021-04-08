<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Local $local
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


?>

<div class="container">


    <div class="row">

        <div class="col-md-12">

            <?= $this->Form->create($local); ?>
            <fieldset>
                <legend><?= __('Add {0}', ['Local']) ?></legend>
                <?php
                echo $this->Form->control('rua');
                echo $this->Form->control('bairro');
                echo $this->Form->control('cidade');
                echo $this->Form->control('estado');
                ?>
            </fieldset>
            <?= $this->Form->button(__("Add")); ?>
            <?= $this->Form->end() ?>


        </div>



    </div>

</div>