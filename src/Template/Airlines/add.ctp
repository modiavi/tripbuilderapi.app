<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Airlines'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="airlines form large-9 medium-8 columns content">
    <?= $this->Form->create($airline) ?>
    <fieldset>
        <legend><?= __('Add Airline') ?></legend>
        <?php
            echo $this->Form->input('Name');
            echo $this->Form->input('IATA');
            echo $this->Form->input('ICAO');
            echo $this->Form->input('Country');
            echo $this->Form->input('Active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
