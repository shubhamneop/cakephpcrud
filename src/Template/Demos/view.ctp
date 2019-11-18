<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demo $demo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Demo'), ['action' => 'edit', $demo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Demo'), ['action' => 'delete', $demo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Demos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="demos view large-9 medium-8 columns content">
    <h3><?= h($demo->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($demo->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($demo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= $this->Number->format($demo->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($demo->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= $demo->gender ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Email') ?></h4>
        <?= $this->Text->autoParagraph(h($demo->email)); ?>
    </div>
    <div class="row">
        <h4><?= __('Password') ?></h4>
        <?= $this->Text->autoParagraph(h($demo->password)); ?>
    </div>
</div>
