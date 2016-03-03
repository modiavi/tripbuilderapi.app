<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Route'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="routes index large-9 medium-8 columns content">
    <h3><?= __('Routes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Airline') ?></th>
                <th><?= $this->Paginator->sort('Airline_Id') ?></th>
                <th><?= $this->Paginator->sort('Source_airport') ?></th>
                <th><?= $this->Paginator->sort('Source_airport_Id') ?></th>
                <th><?= $this->Paginator->sort('Destination_airport') ?></th>
                <th><?= $this->Paginator->sort('Destination_airport_Id') ?></th>
                <th><?= $this->Paginator->sort('Stops') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($routes as $route): ?>
            <tr>
                <td><?= h($route->Airline) ?></td>
                <td><?= $this->Number->format($route->Airline_Id) ?></td>
                <td><?= h($route->Source_airport) ?></td>
                <td><?= $this->Number->format($route->Source_airport_Id) ?></td>
                <td><?= h($route->Destination_airport) ?></td>
                <td><?= $this->Number->format($route->Destination_airport_Id) ?></td>
                <td><?= $this->Number->format($route->Stops) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $route->Airline_Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $route->Airline_Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $route->Airline_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $route->Airline_Id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
