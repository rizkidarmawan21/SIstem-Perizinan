<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


<div class="row">
    <div class="col-lg-6">
    <?= form_error('menu','<div class="alert alert-danger" role="alert">
 			 ','
			</div>')?>


    <?= $this->session->flashdata('message');?>
    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Add New Role</a>

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1;  foreach($role as $r): ?>
    <tr>
      <th scope="row"><?= $no++;?></th>
      <td><?= $r['id']?></td>
      <td><?= $r['role']?></td>
      <td>
      <a href="<?= base_url('admin/roleaccess/') . $r['id'] ;?>" class="badge badge-secondary">Access</a>
      <a href="<?= base_url('admin/getRoleById/') . $r['id'] ;?>" class="badge badge-success">Edit</a>
      <a href="<?= base_url('admin/deleteRole/') . $r['id'] ;?>" onclick="return confirm('Are you sure you want to delete this data?')" class="badge badge-danger">Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="<?= base_url('admin/role')?>" method="post">
      <div class="modal-body">

        <div class="form-group">
            <input type="text" class="form-control" id="role" name="role" placeholder="Role Name...">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>

      </form>
    </div>
  </div>
</div>
