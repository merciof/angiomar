<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Localizaco'), ['action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('cidade'); ?></th>
            <th><?= $this->Paginator->sort('estado'); ?></th>
            <th><?= $this->Paginator->sort('bairro'); ?></th>
            <th><?= $this->Paginator->sort('rua'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($localizacoes as $localizaco): ?>
        <tr>
            <td><?= $this->Number->format($localizaco->id) ?></td>
            <td><?= h($localizaco->cidade) ?></td>
            <td><?= h($localizaco->estado) ?></td>
            <td><?= h($localizaco->bairro) ?></td>
            <td><?= h($localizaco->rua) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $localizaco->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $localizaco->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $localizaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $localizaco->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
