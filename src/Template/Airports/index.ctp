<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Airport'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="airports index large-9 medium-8 columns content">
    <h3><?= __('Airports') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Airport_ID') ?></th>
                <th><?= $this->Paginator->sort('Name') ?></th>
                <th><?= $this->Paginator->sort('City') ?></th>
                <th><?= $this->Paginator->sort('Country') ?></th>
                <th><?= $this->Paginator->sort('IATA_FAA') ?></th>
                <th><?= $this->Paginator->sort('ICAO') ?></th>
                <th><?= $this->Paginator->sort('Latitude') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($airports as $airport): ?>
            <tr>
                <td><?= $this->Number->format($airport->Airport_ID) ?></td>
                <td><?= h($airport->Name) ?></td>
                <td><?= h($airport->City) ?></td>
                <td><?= h($airport->Country) ?></td>
                <td><?= h($airport->IATA_FAA) ?></td>
                <td><?= h($airport->ICAO) ?></td>
                <td><?= $this->Number->format($airport->Latitude) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $airport->Airport_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $airport->Airport_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $airport->Airport_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $airport->Airport_ID)]) ?>
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
