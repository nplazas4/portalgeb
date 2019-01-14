<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projectcode[]|\Cake\Collection\CollectionInterface $projectcodes
 */
?>
<?= $this->Html->css('textlength')?>
<div class="projectcodes index large-9 medium-8 columns content">
    <h3><?= __('Projectcodes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CODE_NAME',['Nombre']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('CODE_DESCRIPTION',['Descripción']) ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projectcodes as $projectcode): ?>
            <tr>
                <td><?= $this->Number->format($projectcode->id) ?></td>
                <td><?= h($projectcode->CODE_NAME) ?></td>
                <td width="100"><?= h($projectcode->CODE_DESCRIPTION) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $projectcode->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $projectcode->id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $projectcode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectcode->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
