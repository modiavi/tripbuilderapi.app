<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Airline'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="airlines index large-9 medium-8 columns content">
    <h3><?= __('Airlines') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Airline_ID') ?></th>
                <th><?= $this->Paginator->sort('Name') ?></th>
                <th><?= $this->Paginator->sort('IATA') ?></th>
                <th><?= $this->Paginator->sort('ICAO') ?></th>
                <th><?= $this->Paginator->sort('Country') ?></th>
                <th><?= $this->Paginator->sort('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($airlines as $airline): ?>
            <tr>
                <td><?= $this->Number->format($airline->Airline_ID) ?></td>
                <td><?= h($airline->Name) ?></td>
                <td><?= h($airline->IATA) ?></td>
                <td><?= h($airline->ICAO) ?></td>
                <td><?= h($airline->Country) ?></td>
                <td><?= h($airline->Active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $airline->Airline_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $airline->Airline_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $airline->Airline_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $airline->Airline_ID)]) ?>
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
