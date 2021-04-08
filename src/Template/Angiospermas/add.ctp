<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Angiosperma $angiosperma
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

?>

<div class="container">

    <div class="row">

        <div class="col-md-3"></div>


        <div class="col-md-6">

            <?= $this->Form->create($angiosperma, ['enctype' => 'multipart/form-data']); ?>
            <fieldset>
                <legend><?= 'Adicionar foto da angiosperma' ?></legend>
                <?php

                echo $this->Form->control('imagem', ['type' => 'file']);

                ?>
            </fieldset>
            <?= $this->Form->button(__("Add")); ?>
            <?= $this->Form->end() ?>


        </div>

        <div class="col-md-3"></div>


    </div>


</div>