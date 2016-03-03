<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Airport'), ['action' => 'edit', $airport->Airport_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Airport'), ['action' => 'delete', $airport->Airport_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $airport->Airport_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Airports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Airport'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="airports view large-9 medium-8 columns content">
    <h3><?= h($airport->Airport_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($airport->Name) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($airport->City) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($airport->Country) ?></td>
        </tr>
        <tr>
            <th><?= __('IATA FAA') ?></th>
            <td><?= h($airport->IATA_FAA) ?></td>
        </tr>
        <tr>
            <th><?= __('ICAO') ?></th>
            <td><?= h($airport->ICAO) ?></td>
        </tr>
        <tr>
            <th><?= __('DST') ?></th>
            <td><?= h($airport->DST) ?></td>
        </tr>
        <tr>
            <th><?= __('Time Zone Area') ?></th>
            <td><?= h($airport->time_zone_area) ?></td>
        </tr>
        <tr>
            <th><?= __('Airport ID') ?></th>
            <td><?= $this->Number->format($airport->Airport_ID) ?></td>
        </tr>
        <tr>
            <th><?= __('Latitude') ?></th>
            <td><?= $this->Number->format($airport->Latitude) ?></td>
        </tr>
        <tr>
            <th><?= __('Longitude') ?></th>
            <td><?= $this->Number->format($airport->Longitude) ?></td>
        </tr>
        <tr>
            <th><?= __('Timezone') ?></th>
            <td><?= $this->Number->format($airport->Timezone) ?></td>
        </tr>
    </table>
</div>
