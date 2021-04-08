<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Angiosperma $angiosperma
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $angiosperma->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $angiosperma->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Angiospermas'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Locals'), ['controller' => 'Locals', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Local'), ['controller' => 'Locals', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Species'), ['controller' => 'Species', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Species'), ['controller' => 'Species', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $angiosperma->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $angiosperma->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Angiospermas'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Locals'), ['controller' => 'Locals', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Local'), ['controller' => 'Locals', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Species'), ['controller' => 'Species', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Species'), ['controller' => 'Species', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($angiosperma); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Angiosperma']) ?></legend>
    <?php
    echo $this->Form->control('nome');
    echo $this->Form->control('imagem');
    echo $this->Form->control('local_id', ['options' => $locals]);
    echo $this->Form->control('species_id', ['options' => $species]);
    echo $this->Form->control('user_id', ['options' => $users]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
