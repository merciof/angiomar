<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Local $local
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $local->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $local->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Locals'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Angiospermas'), ['controller' => 'Angiospermas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Angiosperma'), ['controller' => 'Angiospermas', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $local->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $local->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Locals'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Angiospermas'), ['controller' => 'Angiospermas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Angiosperma'), ['controller' => 'Angiospermas', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($local); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Local']) ?></legend>
    <?php
    echo $this->Form->control('rua');
    echo $this->Form->control('bairro');
    echo $this->Form->control('cidade');
    echo $this->Form->control('estado');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
