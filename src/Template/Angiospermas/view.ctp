<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Angiosperma'), ['action' => 'edit', $angiosperma->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Angiosperma'), ['action' => 'delete', $angiosperma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $angiosperma->id)]) ?> </li>
<li><?= $this->Html->link(__('List Angiospermas'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Angiosperma'), ['action' => 'add']) ?> </li>
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
<li><?= $this->Html->link(__('Edit Angiosperma'), ['action' => 'edit', $angiosperma->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Angiosperma'), ['action' => 'delete', $angiosperma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $angiosperma->id)]) ?> </li>
<li><?= $this->Html->link(__('List Angiospermas'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Angiosperma'), ['action' => 'add']) ?> </li>
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
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($angiosperma->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Nome') ?></td>
            <td><?= h($angiosperma->nome) ?></td>
        </tr>
        <tr>
            <td><?= __('Imagem') ?></td>
            <td><?= h($angiosperma->imagem) ?></td>
        </tr>
        <tr>
            <td><?= __('Local') ?></td>
            <td><?= $angiosperma->has('local') ? $this->Html->link($angiosperma->local->id, ['controller' => 'Locals', 'action' => 'view', $angiosperma->local->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Species') ?></td>
            <td><?= $angiosperma->has('species') ? $this->Html->link($angiosperma->species->id, ['controller' => 'Species', 'action' => 'view', $angiosperma->species->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $angiosperma->has('user') ? $this->Html->link($angiosperma->user->id, ['controller' => 'Users', 'action' => 'view', $angiosperma->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($angiosperma->id) ?></td>
        </tr>
    </table>
</div>

