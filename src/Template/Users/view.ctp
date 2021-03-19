<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($user->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Nome') ?></td>
            <td><?= h($user->nome) ?></td>
        </tr>
        <tr>
            <td><?= __('Email') ?></td>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <td><?= __('Password') ?></td>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Plantas') ?></h3>
    </div>
    <?php if (!empty($user->plantas)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Angiosperma Id') ?></th>
                <th><?= __('Localizacao Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($user->plantas as $plantas): ?>
                <tr>
                    <td><?= h($plantas->id) ?></td>
                    <td><?= h($plantas->angiosperma_id) ?></td>
                    <td><?= h($plantas->localizacao_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Plantas', 'action' => 'view', $plantas->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Plantas', 'action' => 'edit', $plantas->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Plantas', 'action' => 'delete', $plantas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plantas->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Plantas</p>
    <?php endif; ?>
</div>
