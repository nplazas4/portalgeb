<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project[]|\Cake\Collection\CollectionInterface $projects
 */
?>
  <table id="example" class="display highlight centered" cellspacing="0" width="100%">
<!-- <div class="projects index large-9 medium-8 columns content"> -->
    <!-- <h3><?//= __('Projects') ?></h3> -->
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ID_PROJECT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PROJECT_NAME') ?></th>
                <!-- <th scope="col"><?//= $this->Paginator->sort('DESCRIPTION') ?></th>
                <th scope="col"><?//= $this->Paginator->sort('PLANNED_START_DATE') ?></th>
                <th scope="col"><?//= $this->Paginator->sort('PLANNED_FINISH_DATE') ?></th>
                <th scope="col"><?//= $this->Paginator->sort('EPS_OBJECT_ID') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projects as $project): ?>
            <tr>
                <td><?= $this->Number->format($project->id) ?></td>
                <td><?= h($project->ID_PROJECT) ?></td>
                <td><?= h($project->PROJECT_NAME) ?></td>
                <!-- <td><?//= h($project->DESCRIPTION) ?></td>
                <td><?//= h($project->PLANNED_START_DATE) ?></td>
                <td><?//= h($project->PLANNED_FINISH_DATE) ?></td>
                <td><?//= $this->Number->format($project->EPS_OBJECT_ID) ?></td>-->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
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
