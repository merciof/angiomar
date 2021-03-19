<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/default');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Angiosperma'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('nome'); ?></th>
            <th><?= $this->Paginator->sort('imagem'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($angiospermas as $angiosperma): ?>
        <tr>
            <td><?= $this->Number->format($angiosperma->id) ?></td>
            <td><?= h($angiosperma->nome) ?></td>
            <td><?= h($angiosperma->imagem) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $angiosperma->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $angiosperma->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $angiosperma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $angiosperma->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
