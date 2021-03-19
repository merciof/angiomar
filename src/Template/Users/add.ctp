<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($user); ?>
<fieldset>
    <legend><?= __('Add {0}', ['User']) ?></legend>
    <?php
    echo $this->Form->control('nome');
    echo $this->Form->control('email');
    echo $this->Form->control('password');
    echo $this->Form->control('plantas._ids', ['options' => $plantas]);
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>