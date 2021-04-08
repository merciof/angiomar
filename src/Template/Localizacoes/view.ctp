<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Localizaco'), ['action' => 'edit', $localizaco->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Localizaco'), ['action' => 'delete', $localizaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $localizaco->id)]) ?> </li>
<li><?= $this->Html->link(__('List Localizacoes'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Localizaco'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Localizaco'), ['action' => 'edit', $localizaco->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Localizaco'), ['action' => 'delete', $localizaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $localizaco->id)]) ?> </li>
<li><?= $this->Html->link(__('List Localizacoes'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Localizaco'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($localizaco->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Cidade') ?></td>
            <td><?= h($localizaco->cidade) ?></td>
        </tr>
        <tr>
            <td><?= __('Estado') ?></td>
            <td><?= h($localizaco->estado) ?></td>
        </tr>
        <tr>
            <td><?= __('Bairro') ?></td>
            <td><?= h($localizaco->bairro) ?></td>
        </tr>
        <tr>
            <td><?= __('Rua') ?></td>
            <td><?= h($localizaco->rua) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($localizaco->id) ?></td>
        </tr>
    </table>
</div>

