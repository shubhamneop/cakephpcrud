<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demo $demo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $demo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $demo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Demos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="demos form large-9 medium-8 columns content">
    <?= $this->Form->create($demo) ?>
    <fieldset>
        <legend><?= __('Edit Demo') ?></legend>
        <?php
            echo $this->Form->control('name',['class'=>'form-control']);
            echo $this->Form->control('mobile',['class'=>'form-control']);
            echo $this->Form->control('email',['class'=>'form-control']);
            echo $this->Form->control('password',['class'=>'form-control']);
            echo $this->Form->control('date',['class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
