<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Airports'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="airports form large-9 medium-8 columns content">
    <?= $this->Form->create($airport) ?>
    <fieldset>
        <legend><?= __('Add Airport') ?></legend>
        <?php
            echo $this->Form->input('Name');
            echo $this->Form->input('City');
            echo $this->Form->input('Country');
            echo $this->Form->input('IATA_FAA');
            echo $this->Form->input('ICAO');
            echo $this->Form->input('Latitude');
            echo $this->Form->input('Longitude');
            echo $this->Form->input('Timezone');
            echo $this->Form->input('DST');
            echo $this->Form->input('time_zone_area');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
