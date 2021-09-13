<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h2 text-gray-800"><?= $title; ?></h2>
    <h1 class="h5 mb-4 text-gray-500"> <span  class="badge badge-pill badge-success">Kampus 2</span></h1>


    <hr class="sidebar-divider mt-3">

          <div class="row">
                <div class="col-md-6">
                    <form action="<?= base_url('kampus_2/editIzin_aksi')?>" method="post">
                            <div class="form-group">
                                 <label for="nama">Nama Santri</label>
                                 <input type="hidden" name="id" id="name" value="<?= $santri['id']?>">
                                <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $santri['nama']?>"  required  >
                                <?= form_error('nama','<small class="text-danger pl-3 ">','</small>'); ?>
                            </div>
                            <div class="form-group">
                                 <label for="kelas">Kelas</label>
                                <input type="text" class="form-control form-control-user" id="kelas" name="kelas" value="<?= $santri['kelas']?>"  required  >
                                <?= form_error('kelas','<small class="text-danger pl-3 ">','</small>'); ?>
                            </div>

                            <div class="form-group">
                                 <label for="alamat">Alamat</label>
                                <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?= $santri['alamat']?>"  required  >
                                <?= form_error('alamat','<small class="text-danger pl-3 ">','</small>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="gedung">Gedung</label>
                                        <input type="text" class="form-control form-control-user" id="gedung" name="gedung" value="<?= $santri['gedung']?>"  required  >
                                        <?= form_error('nama','<small class="text-danger pl-3 ">','</small>'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="kamar">Kamar</label>
                                        <input type="text" class="form-control form-control-user" id="kamar" name="kamar" value="<?= $santri['kamar']?>"  required  >
                                        <?= form_error('kamar','<small class="text-danger pl-3 ">','</small>'); ?>
                                    </div>
                                </div>
                            </div>

                           
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                            <label for="wali">Nama Wali</label>
                                        <input type="text" class="form-control form-control-user" id="wali" name="wali" value="<?= $santri['wali']?>"  required  >
                                        <?= form_error('wali','<small class="text-danger pl-3 ">','</small>'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nohp">No Telepon</label>
                                        <input type="text" class="form-control form-control-user" id="no_telepon" name="no_telepon" value="<?= $santri['no_telepon']?>"  required  >
                                        <?= form_error('nohp','<small class="text-danger pl-3 ">','</small>'); ?>
                                    </div>
                                </div>
                            </div>

                        
                </div>

                <div class="col-md-6">
                        <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="tgl_izin">Tanggal Izin</label>
                                        <input type="text" class="form-control form-control-user" id="" name=""  value="<?= date('d F Y', $santri['tgl_ijin']) ?>" readonly >
                                        <input type="hidden" class="form-control form-control-user" id="tgl_izin" name="tgl_izin"  value="<?= $santri['tgl_ijin']?>"  readonly >
                                    
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tgl_kembali">Tanggal Kembali</label>
                                        <input type="date" class="form-control form-control-user" value="<?= $santri['tgl_kembali']?>" id="tgl_kembali" name="tgl_kembali" required >
                                        <?= form_error('tgl_kembali','<small class="text-danger pl-3 ">','</small>'); ?>
                                    </div>
                                </div>
                        </div>


                        <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                    <label for="jenjang">jenjang</label>
                                    <select name="jenjang" id="jenjang" class="form-control" required>
                                        <option value="<?= $santri['jenjang']?>"><?= $santri['jenjang']?></option>
                                        <option value="SMP">SMP 1</option>
                                        <option value="SMP">SMP 2</option>
                                        <option value="SMK">SMK</option>
                                        <option value="MTS">MTS</option>
                                        <option value="MA">MA</option>
                                    </select>
                                    <?= form_error('jenjang','<small class="text-danger pl-3 ">','</small>'); ?>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="izin">Keperluan</label>
                                    <select name="izin" id="izin" class="form-control" required>
                                        <option value="<?= $santri['izin']?>"><?= $santri['izin']?></option>
                                        <option value="Pulang">Pulang</option>
                                        <option value="Keluar">Keluar</option>
                                    </select>
                                    <?= form_error('izin','<small class="text-danger pl-3 ">','</small>'); ?>
                                    </div>
                                </div>
                        </div>

                        
                        <div class="form-group">
                                 <label for="keterangan">Keterangan</label>
                                    <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="8" placeholder="Keterangan Izin Ex: Sakit,Acara keluarga, etc" value="<?= $santri['keterangan']?>" required> <?= $santri['keterangan']?></textarea>

                                     <input type="hidden" class="form-control" id="status" name="status" value="<?= $santri['status']?>" >
                                <?= form_error('keterangan','<small class="text-danger pl-3 ">','</small>'); ?>
                        </div>
               


                        <a class="btn btn-secondary mr-1 mb-3" href="<?= base_url('kampus_2')?>">Back</a>
                            <button type="submit" class="btn btn-success mb-3" >Edit</button>
                        </form>
                </div>
                
        </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
