<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Airline'), ['action' => 'edit', $airline->Airline_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Airline'), ['action' => 'delete', $airline->Airline_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $airline->Airline_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Airlines'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Airline'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="airlines view large-9 medium-8 columns content">
    <h3><?= h($airline->Airline_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($airline->Name) ?></td>
        </tr>
        <tr>
            <th><?= __('IATA') ?></th>
            <td><?= h($airline->IATA) ?></td>
        </tr>
        <tr>
            <th><?= __('ICAO') ?></th>
            <td><?= h($airline->ICAO) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($airline->Country) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= h($airline->Active) ?></td>
        </tr>
        <tr>
            <th><?= __('Airline ID') ?></th>
            <td><?= $this->Number->format($airline->Airline_ID) ?></td>
        </tr>
    </table>
</div>
