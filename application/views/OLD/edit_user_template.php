<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit  </h6>
    </div>
    <div class="card-body">
      <?php foreach ($user_list as $value): ?>
      <form action="<?php echo base_url();?>app/home/update_user" method="post" enctype="multipart/form-data">
        <input type="hidden" class="form-control"  name="iduser" value="<?php echo $value->iduser; ?>">
      <div class="form-group">
        <label for="email">NAME:</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $value->nama; ?>" >
      </div>
      <div class="form-group">
        <label for="pwd">Username:</label>
        <input type="text" class="form-control"  name="username" value="<?php echo $value->username; ?>">
      </div>

      <div class="form-group">
        <label for="pwd">password:</label>
        <input type="password" class="form-control"  name="password" required>
      </div>

      <button type="submit" class="btn btn-info">Submit</button>
    </form>
      <?php endforeach; ?>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
