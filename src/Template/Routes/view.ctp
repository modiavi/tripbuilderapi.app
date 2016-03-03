<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Route'), ['action' => 'edit', $route->Airline_Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Route'), ['action' => 'delete', $route->Airline_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $route->Airline_Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Routes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Route'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="routes view large-9 medium-8 columns content">
    <h3><?= h($route->Airline_Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Airline') ?></th>
            <td><?= h($route->Airline) ?></td>
        </tr>
        <tr>
            <th><?= __('Source Airport') ?></th>
            <td><?= h($route->Source_airport) ?></td>
        </tr>
        <tr>
            <th><?= __('Destination Airport') ?></th>
            <td><?= h($route->Destination_airport) ?></td>
        </tr>
        <tr>
            <th><?= __('Equipment') ?></th>
            <td><?= h($route->Equipment) ?></td>
        </tr>
        <tr>
            <th><?= __('Airline Id') ?></th>
            <td><?= $this->Number->format($route->Airline_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Source Airport Id') ?></th>
            <td><?= $this->Number->format($route->Source_airport_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Destination Airport Id') ?></th>
            <td><?= $this->Number->format($route->Destination_airport_Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Stops') ?></th>
            <td><?= $this->Number->format($route->Stops) ?></td>
        </tr>
    </table>
</div>
