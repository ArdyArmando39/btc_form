<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->

  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">ADD USER</button>
  <p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"> Account</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Password</th>

              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
           <?php foreach ($user_list as $value): ?>

            <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $value->nama; ?></td>
              <td><?php echo $value->username; ?></td>
              <td><?php echo $value->password; ?></td>


              <td><a href="<?php echo prefix_url;?>app/home/edit_user/<?php echo $value->iduser; ?>" class="btn btn-primary btn-sm"> EDIT</a>
                <a href="<?php echo prefix_url;?>app/home/deleteuser/<?php echo $value->iduser; ?>" class="btn btn-danger btn-sm"> DELETE</a> </td>
            </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">add Data</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url();?>app/home/add_user" method="post" enctype="multipart/form-data">
            Nama
            <input type="text" name="nama" class="form-control" /><br>
            username
            <input type="text" name="username" class="form-control" /><br>
            Password
            <input type="password" name="password" class="form-control" /><br>
            <button type="submit" class="btn btn-info btn-sm">SAVE</button>
        </form><p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!--END Modal -->
