<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pizza'), ['action' => 'edit', $pizza->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pizza'), ['action' => 'delete', $pizza->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pizza->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pizza'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pizza'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pizza view large-9 medium-8 columns content">
    <h3><?= h($pizza->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pizzasize') ?></th>
            <td><?= h($pizza->pizzasize) ?></td>
        </tr>
        <tr>
            <th><?= __('Crusttype') ?></th>
            <td><?= h($pizza->crusttype) ?></td>
        </tr>
        <tr>
            <th><?= __('Toppings') ?></th>
            <td><?= h($pizza->toppings) ?></td>
        </tr>
        <tr>
            <th><?= __('Customername') ?></th>
            <td><?= h($pizza->customername) ?></td>
        </tr>
        <tr>
            <th><?= __('Customeraddress') ?></th>
            <td><?= h($pizza->customeraddress) ?></td>
        </tr>
        <tr>
            <th><?= __('Customercontact') ?></th>
            <td><?= h($pizza->customercontact) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pizza->id) ?></td>
        </tr>
    </table>
</div>
