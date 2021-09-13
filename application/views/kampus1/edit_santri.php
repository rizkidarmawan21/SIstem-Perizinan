
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-7">

            <form action="<?= base_url('kampus_1/editSantri_aksi')?>" method="post">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Santri</label>
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $santri['id']?>">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $santri['nama']?>" required>
                        <?= form_error('nama','<small class="text-danger pl-3 ">','</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <!-- <input type="text" class="form-control" id="kelas" name="kelas" value=""> -->
                        <select name="kelas" id="kelas" class="form-control" required >
                            <option value="<?= $santri['kelas']?>"><?= $santri['kelas']?></option>
                            <option value="7 SMP 1"> 7 SMP 1 </>
                            <option value="8 SMP 1"> 8 SMP 1 </option>
                            <option value="9 SMP 1"> 9 SMP 1 </option>
                            <option value="7 SMP 2"> 7 SMP 2 </option>
                            <option value="8 SMP 2"> 8 SMP 2 </option>
                            <option value="9 SMP 2"> 9 SMP 2 </option>
                            <option value="7 MTs"> 7 MTs </option>
                            <option value="8 MTs"> 8 MTs </option>
                            <option value="9 MTs"> 9 MTs </option>
                            <option value="10 SMK"> 10 SMK </option>
                            <option value="11 SMK"> 11 SMK </option>
                            <option value="12 SMK"> 12 SMK </option>
                            <option value="10 MA"> 10 MA </option>
                            <option value="11 MA"> 11 MA </option>
                            <option value="12 MA"> 12 MA </option>
                        </select>

                        <?= form_error('kelas','<small class="text-danger pl-3 ">','</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gedung" class="col-sm-2 col-form-label">Gedung</label>
                    <div class="col-sm-10">
                        <select name="gedung" id="gedung" class="form-control">
                            <option value="<?= $santri['gedung']?>"> <?= $santri['gedung']?> </option>
                            <option value="Umar bin Khattab"> Ummar bin Khattab </option>
                            <option value="Utsman bin Affan"> Utsman bin Affan </option>
                            <option value="Imam Ghazali"> Imam Ghozali </option>
                        </select>
                        <?= form_error('gedung','<small class="text-danger pl-3 ">','</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kamar" class="col-sm-2 col-form-label">Kamar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kamar" name="kamar" value="<?= $santri['kamar']?>" required>
                        <?= form_error('kamar','<small class="text-danger pl-3 ">','</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="wali" class="col-sm-2 col-form-label">Nama Wali</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="wali" name="wali" value="<?= $santri['wali']?>" required>
                        <?= form_error('wali','<small class="text-danger pl-3 ">','</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nohp" class="col-sm-2 col-form-label">No Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $santri['nohp']?>" required>
                        <?= form_error('nohp','<small class="text-danger pl-3 ">','</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $santri['alamat']?>" required>
                        <?= form_error('alamat','<small class="text-danger pl-3 ">','</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="foto" name="foto" readonly value="<?= $santri['foto']?>">
                        <?= form_error('foto','<small class="text-danger pl-3 ">','</small>'); ?>
                    </div>
                </div>
                        <input type="hidden" class="form-control" id="created_at" name="created_at" readonly  value="<?= $santri['created_at']?>">
                        <input type="hidden" class="form-control" id="updated_at" name="updated_at" readonly value="<?= $santri['updated_at']?>">

                <div class="form-group row justify-content-end" >
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </div>


            </form>

        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
