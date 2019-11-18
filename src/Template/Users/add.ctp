<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('name',['class'=>'form-control','placeholder'=>'Ex. Abc']);
            echo $this->Form->control('lastname',['class'=>'form-control','placeholder'=>'Ex. Xyz']);
            echo $this->Form->control('emailid',['class'=>'form-control','placeholder'=>'Ex. abc@domain.com']);
            echo $this->Form->control('mobileno',['class'=>'form-control','placeholder'=>'Ex. 7896354210']);
        ?>
    </fieldset>
    <?php echo $this->Form->button(__('Submit'),['class'=>'btn btn-success']); ?>
    <?= $this->Form->end() ?>
</div>
