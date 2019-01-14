<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
      <div class="card-body">
        <h5 class="card-title text-center">Editar EPS</h5>
        <?= $this->Form->create($eps,['novalidate']) ?>
        <fieldset>
            <?php
                echo $this->Form->input('EPS_ID',['label'=>'ID','class'=>'form-control','placeholder'=>'ID']);
                echo $this->Form->input('EPS_NAME',['label'=>'Nombre','class'=>'form-control','placeholder'=>'Nombre']);
                // echo $this->Form->input('role',['label'=>'Rol','class'=>'form-control','options'=>['admin'=>'Administrador','user'=>'Usuario']]);
                // echo $this->Form->control('active',['label'=>'Activo']);
            ?>
        </fieldset>
        <?= $this->Form->button('Editar',['class'=>'btn btn-primary mt-2'])?>
        <?= $this->Form->end() ?>
    </div>
  </div>
</div>
</div>
