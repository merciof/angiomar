<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Localizaco $localizaco
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $localizaco->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $localizaco->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Localizacoes'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $localizaco->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $localizaco->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Localizacoes'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($localizaco); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Localizaco']) ?></legend>
    <?php
    echo $this->Form->control('cidade');
    echo $this->Form->control('estado');
    echo $this->Form->control('bairro');
    echo $this->Form->control('rua');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
