<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Angiosperma'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Locals'), ['controller' => 'Locals', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Local'), ['controller' => 'Locals', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Species'), ['controller' => 'Species', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Species'), ['controller' => 'Species', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th> Id </th>
            <th> Imagem </th>
            <th><?= $this->Paginator->sort('local_id'); ?></th>
            <th><?= $this->Paginator->sort('species_id'); ?></th>
            <th> Usuário </th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($angiospermas as $angiosperma): ?>
        <tr>
            <td><?= $this->Number->format($angiosperma->id) ?></td>
            <td class="thumbnail"><?= $this->Html->image('../imagens_angiospermas/' .  $angiosperma->id . '/' . $angiosperma->imagem  , ['alt' => 'Foto da angiosperma']); ?></td>
            <td>
                <?= $angiosperma->has('local') ? $this->Html->link($angiosperma->local->bairro, ['controller' => 'Locals', 'action' => 'view', $angiosperma->local->id]) : '' ?>
            </td>
            <td>
                <?= $angiosperma->has('species') ? $this->Html->link($angiosperma->species->nome_cientifico, ['controller' => 'Species', 'action' => 'view', $angiosperma->species->id]) : '' ?>
            </td>
            <td>
                <?= $angiosperma->has('user') ? $this->Html->link($angiosperma->user->email, ['controller' => 'Users', 'action' => 'view', $angiosperma->user->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('Ver', ['action' => 'view', $angiosperma->id], ['title' => 'Ver', 'class' => 'btn btn-success ']) ?>
                <?= $this->Html->link('Editar', ['action' => 'edit', $angiosperma->id], ['title' => 'Editar', 'class' => 'btn btn-warning']) ?>
                <?= $this->Form->postLink('Remover', ['action' => 'delete', $angiosperma->id], ['confirm' => 'Você tem certeza que deseja deletar?', 'title' => 'Deletar', 'class' => 'btn btn-danger']) ?>
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
