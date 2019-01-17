<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages'],
        [ 'Portal Proyectos', 'index','PortalProjects'],
        [ 'IDM','companies','PortalProjects'],
        [ 'Unidad de Transmisión Colombia','company','PortalProjects'],
    ];
?>
<div class="section bcrumb company">
    <div class="breadcrumb-container">
        <?php foreach ($breadcrumb as $item): ?>
            <!-- <a href="<?= $item[1] ?>" class="breadcrumb"><?= $item[0] ?></a> -->
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
    </div>

    <div class="company-content">
        <a href="" class="company-content-tower sustenance">
            <?= $this->Html->image('icons/torre-sostenimiento.svg') ?>
            <div class="number">
                <h3>10</h3>
            </div>
            <h2>Sostenimiento</h2>
        </a>
        <div class="company-content-data">
            <?= $this->Html->image('logos/logo-unidad-transmision-colombia.svg') ?>
            <div class="number">
                <h2>25</h2>
            </div>
        </div>
        <!-- <a href="" class="company-content-tower increase">
            <?= $this->Html->image('icons/torre-crecimiento.svg') ?>
            <div class="number">
                <h3>15</h3>
            </div>
            <h2>Crecimiento</h2>
        </a> -->
        <?php echo $this->Html->link(
          $this->Html->image('icons/torre-crecimiento.svg').
          $this->Html->tag('div',$this->Html->tag('h3','15'),array('class'=>'number')).
          $this->Html->tag('h2','Crecimiento'),
          array('controller'=>'Projects','action'=>'projects'),
          array('escape' => false,'class'=>'company-content-tower increase'))?>
    </div>
</div>
