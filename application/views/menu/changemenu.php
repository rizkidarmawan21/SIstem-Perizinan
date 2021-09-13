<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



<div class="row">
    <div class="col-lg-6">
        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('menu/changeMenu')?>" method="post">
        <div class="form-group">
            <label for="current_password">Name Menu</label>
            <input type="hidden" name="id" id="id" value="<?= $menu['id'];?>" >
            <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu'];?>">
            <?= form_error('menu','<small class="text-danger pl-3 ">','</small>'); ?>
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-primary">Change Menu</button>
        </div>
        </form>
    </div>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
