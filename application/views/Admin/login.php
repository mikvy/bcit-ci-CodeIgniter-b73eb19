<?php include("header.php") ?>

  <?php echo form_open('admin/index'); ?>
  <div class="container" style="margin-top:20px;">
  <h1>Admin Form</h1>

  <div class="row">

    <div class="col-lg-6">

  <div class="form-group">
  <label for="username">Username :</label>

    <?php echo form_input(['class'=>'form-control','name'=>'username','placeholder'=>'Enter Username','value'=>set_value("username")]); ?>

  </div>
</div>
<div class="col-lg-6" style="margin-top:40px;">
  <?php echo form_error("username"); ?>
</div>

</div>
<div class="row">

  <div class="col-lg-6">

  <div class="form-group">
    <label for="pwd">Password :</label>
    <?php echo form_password(['class'=>'form-control','name'=>'password','placeholder'=>'Enter Password','value'=>set_value("password")]); ?>

  </div>
</div>
<div class="col-lg-6" style="margin-top:40px;">
  <?php echo form_error("password"); ?>
</div>

</div>

<!-- <div class="checkbox">
  <label for=""><input type="checkbox" name="" value=""> Remember Me </label>

</div> -->
<?php echo form_submit(['class'=>'btn btn-primary','type'=>'Submit','value'=>'Submit']); ?>
<?php echo form_reset(['class'=>'btn btn-danger','type'=>'Reset','value'=>'Reset']); ?>

<div>

<?php include("footer.php") ?>
