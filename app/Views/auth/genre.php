<?= $this->include('Template/header') ?>


<?php if(session()->getFlashdata('success')): ?>
    <p style="color:green;"><?= session()->getFlashdata('success') ?></p>
<?php endif; ?>

<?php if(isset($validation)): ?>
    <div style="color:red;">
        <?= $validation->listErrors() ?>
    </div>
<?php endif; ?>

<form method="post" action="<?= base_url('/Genre/save') ?>">
  <div class="form-row">
     <div class="form-group col-md-4">
      <label for="inputEmail4">Nom :</label>
      <input name="nom"  type="text" class="form-control"  id="inputEmail4" placeholder="Nom du genre" value="<?php echo set_value('nom'); ?>">
    </div>
     
    
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>


<?= $this->include('Template/footer') ?>