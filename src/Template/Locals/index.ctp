<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Local'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Angiospermas'), ['controller' => 'Angiospermas', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Angiosperma'), ['controller' => 'Angiospermas', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('rua'); ?></th>
            <th><?= $this->Paginator->sort('bairro'); ?></th>
            <th><?= $this->Paginator->sort('cidade'); ?></th>
            <th><?= $this->Paginator->sort('estado'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($locals as $local): ?>
        <tr>
            <td><?= $this->Number->format($local->id) ?></td>
            <td><?= h($local->rua) ?></td>
            <td><?= h($local->bairro) ?></td>
            <td><?= h($local->cidade) ?></td>
            <td><?= h($local->estado) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $local->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $local->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $local->id], ['confirm' => __('Are you sure you want to delete # {0}?', $local->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
