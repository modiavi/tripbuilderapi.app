<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $route->Airline_Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $route->Airline_Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Routes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="routes form large-9 medium-8 columns content">
    <?= $this->Form->create($route) ?>
    <fieldset>
        <legend><?= __('Edit Route') ?></legend>
        <?php
            echo $this->Form->input('Airline');
            echo $this->Form->input('Source_airport');
            echo $this->Form->input('Destination_airport');
            echo $this->Form->input('Stops');
            echo $this->Form->input('Equipment');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
