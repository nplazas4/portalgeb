<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?= $this->Html->css('login')?>
<div class="row">
  <br/>
   <!-- <form class="col s12"> -->
   <?= $this->Form->create($projectcodes,['class'=>'col s12']) ?>
     <div class="row">
       <fieldset>
       <div class="input-field col s12">
         <?php echo $this->Form->input('CODE_NAME',['label'=>'','placeholder'=>'Nombre','class'=>'validate','required']);?>
         <!-- <input id="Id_Proyecto" type="text" class="validate">
         <label for="Id_Proyecto">ID de proyecto</label> -->
       </div>
       <div class="input-field col s12">
         <!-- <input id="Nombre_Proyecto" type="text" class="validate">
         <label for="Nombre_Proyecto">Nombre de proyecto</label> -->
         <?php echo $this->Form->textarea('CODE_DESCRIPTION',['label'=>'','placeholder'=>'Descripción','class'=>'materialize-textarea','required']);?>
       </div>
     </div>
     </fieldset>
     <div class="btns mb-2">
         <!-- <a href="http://localhost/web/pages/home" class="btn waves-effect btn-depressed">Crear</a> -->
         <!-- <?//= $this->Form->button('Crear',['class'=>'btn waves-effect btn-depressed'])?> -->
         <?= $this->Form->button(__('Crear'),['class'=>'btn waves-effect btn-depressed'])?>
     </div>
      <?= $this->Form->end() ?>
 </div>
