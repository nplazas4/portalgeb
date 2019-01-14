<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ep[]|\Cake\Collection\CollectionInterface $eps
 */
?>
<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages'],
        [ 'EPS', 'index','EPS'],
    ];
?>
<div class="section bcrumb portal-projects">
    <div class="breadcrumb-container">
        <?php foreach ($breadcrumb as $item): ?>
            <!-- <a href="<?= $item[1] ?>" class="breadcrumb"><?= $item[0] ?></a> -->
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
    </div>
<!-- <?//= $this->Html->css('table')?>
<div class="container">
  <div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h2>EPS</h2>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th scope="col"><?//= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?//= $this->Paginator->sort('EPS_ID') ?></th>
                  <th scope="col"><?//= $this->Paginator->sort('EPS_NAME') ?></th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
              <?//php foreach ($eps as $ep): ?>
              <tr>
                  <td><?//= $this->Number->format($ep->id) ?></td>
                  <td><?//= h($ep->EPS_ID) ?></td>
                  <td><?//= h($ep->EPS_NAME) ?></td>
                  <td class="actions">
                      <?//= $this->Html->link(__('View'), ['action' => 'view', $ep->id]) ?>
                      <?//= $this->Html->link(__('Edit'), ['action' => 'edit', $ep->id]) ?>
                      <?//= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ep->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ep->id)]) ?>
                  </td>
              </tr>
              <?//php endforeach; ?>
            </tbody>
        </table>
      </div>
        <div class="paginator">
            <ul class="pagination">
              <?//= $this->Paginator->first('<< ' . __('first')) ?>
              <?//= $this->Paginator->prev('< ' . __('previous')) ?>
              <?//= $this->Paginator->numbers() ?>
              <?//= $this->Paginator->next(__('next') . ' >') ?>
              <?//= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?//= $this->Paginator->counter() ?></p>
        </div>
    </div>
  </div>
</div> -->


<table id="example" class="display highlight centered" cellspacing="0" width="100%">
      <thead>
          <tr>
            <th scope="col"><?= $this->Paginator->sort('id',['#']) ?></th>
            <th scope="col"><?= $this->Paginator->sort('EPS_ID',['ID']) ?></th>
            <th scope="col"><?= $this->Paginator->sort('EPS_NAME',['Nombre']) ?></th>
            <!-- <th scope="col" class="actions"><?//= __('Actions') ?></th> -->
            <th>Acciones</th>
          </tr>
      </thead>
      <tbody>
        <?php foreach ($eps as $ep): ?>
        <tr>
            <td><?= $this->Number->format($ep->id) ?></td>
            <td><?= h($ep->EPS_ID) ?></td>
            <td><?= h($ep->EPS_NAME) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $ep->id],['class'=>'waves-effect waves-light btn-small']) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ep->id],['class'=>'waves-effect waves-light btn-small blue darken-1']) ?>
                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $ep->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ep->id),'class'=>'waves-effect waves-light btn-small btn red lighten-1']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
  </table>
  <!-- <div class="paginator">
      <ul class="pagination">
        <?//= $this->Paginator->first('<< ' . __('first')) ?>
        <?//= $this->Paginator->prev('< ' . __('previous')) ?>
        <?//= $this->Paginator->numbers() ?>
        <?//= $this->Paginator->next(__('next') . ' >') ?>
        <?//= $this->Paginator->last(__('last') . ' >>') ?>
      </ul>
      <p><?//= $this->Paginator->counter() ?></p>
  </div> -->
</div>
