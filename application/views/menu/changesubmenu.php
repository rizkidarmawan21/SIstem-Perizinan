<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



<div class="row">
    <div class="col-lg-6">
        <?= $this->session->flashdata('message'); ?>
        
        <form action="<?= base_url('menu/changeSubMenu')?>" method="post">

        <div class="form-group">
            <label for="submenu">Name Sub Menu</label>
            <input type="hidden" name="id" id="id" value="<?= $submenu['id'];?>" >
            <input type="text" class="form-control" id="submenu" name="submenu" value="<?= $submenu['title'];?>">
            <?= form_error('tilte','<small class="text-danger pl-3 ">','</small>'); ?>
        </div>
        <div class="form-group">
            <label for="url">Url</label>
            <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url'];?>">
            <?= form_error('url','<small class="text-danger pl-3 ">','</small>'); ?>
        </div>
        <div class="form-group">
            <label for="menu">Menu</label>
            <select name="menu_id" id="menu_id"  class="form-control">
                
                <option value="<?= $submenu['menu_id']?>"><?= $submenu['menu_id']?></option>
                <?php foreach($menu as $m) :?>
                <option value="<?= $m['id']?>"><?= $m['menu']?></option>
                <?php endforeach;?>
            </select>
            <?= form_error('menu_id','<small class="text-danger pl-3 ">','</small>'); ?>
        </div>


        <div class="form-group">
            <label for="Icon">Icon</label>
            <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon'];?>">
            <?= form_error('icon','<small class="text-danger pl-3 ">','</small>'); ?>
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                <label class="form-check-label" for="id_active">
                    Active
                </label>
                </div>
        </div>


        <div class="form-group">
                <button type="submit" class="btn btn-success">Change Submenu</button>
        </div>
        </form>

    </div>
</div>
</div>
<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->
