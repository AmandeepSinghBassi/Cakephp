<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pizza'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pizza index large-9 medium-8 columns content">
    <h3><?= __('Pizza') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id') ?></th>
                <th><?= $this->Paginator->sort('Pizza Size') ?></th>
                <th><?= $this->Paginator->sort('Crust Type') ?></th>
                <th><?= $this->Paginator->sort('Toppings') ?></th>
                <th><?= $this->Paginator->sort('Customer Name') ?></th>
                <th><?= $this->Paginator->sort('Customer Address') ?></th>
                <th><?= $this->Paginator->sort('Customer Contact') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pizza as $pizza): ?>
            <tr>
                <td><?= $this->Number->format($pizza->id) ?></td>
                <td><?= h($pizza->pizzasize) ?></td>
                <td><?= h($pizza->crusttype) ?></td>
                <td><?= h($pizza->toppings) ?></td>
                <td><?= h($pizza->customername) ?></td>
                <td><?= h($pizza->customeraddress) ?></td>
                <td><?= h($pizza->customercontact) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pizza->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pizza->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pizza->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pizza->id)]) ?>
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
