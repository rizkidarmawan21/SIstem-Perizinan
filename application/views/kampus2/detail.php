<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h2 text-gray-800"><?= $title; ?></h2>
    <h1 class="h5 mb-4 text-gray-500"> <span  class="badge badge-pill badge-success">Kampus 2</span></h1>


    <hr class="sidebar-divider mt-3">

          <div class="row">
                <div class="col-md-6">
                            <div class="form-group">
                                 <label for="nama">Nama Santri</label>
                                <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $santri['nama']?>" readonly>
                            </div>
                            <div class="form-group">
                                 <label for="kelas">Kelas</label>
                                <input type="text" class="form-control form-control-user" id="kelas" name="kelas" value="<?= $santri['kelas']?>" readonly  >
                               
                            </div>

                            <div class="form-group">
                                 <label for="alamat">Alamat</label>
                                <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?= $santri['alamat']?>" readonly >
                              
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="gedung">Gedung</label>
                                        <input type="text" class="form-control form-control-user" id="gedung" name="gedung" value="<?= $santri['gedung']?>" readonly >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="kamar">Kamar</label>
                                        <input type="text" class="form-control form-control-user" id="kamar" name="kamar" value="<?= $santri['kamar']?>" readonly>
                                    </div>
                                </div>
                            </div>

                           
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                            <label for="wali">Nama Wali</label>
                                        <input type="text" class="form-control form-control-user" id="wali" name="wali" value="<?= $santri['wali']?>" readonly >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nohp">No Telepon</label>
                                        <input type="text" class="form-control form-control-user" id="nohp" name="nohp" value="<?= $santri['no_telepon']?>" readonly >
                                    </div>
                                </div>
                            </div>

                        
                </div>

                <div class="col-md-6">
                        <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="tgl_izin">Tanggal Izin</label>
                                        <input type="text" class="form-control form-control-user" value="<?= date('d F Y',$santri['tgl_ijin']) ?>" readonly >
                                    
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tgl_kembali">Tanggal Kembali</label>
                                        <input type="text" class="form-control form-control-user" id="tgl_kembali" value="<?= date('d F Y', strtotime($santri['tgl_kembali'])); ?>" name="tgl_kembali" readonly >
                                        
                                    </div>
                                </div>
                        </div>


                        <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                    <label for="jenjang">jenjang</label>
                                    <input type="text" id="jenjang" name="jenjang" class="form-control" value="<?= $santri['jenjang']?>" readonly>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="izin">Keperluan</label>
                                    <input type="text" id="izin" name="izin" class="form-control" value="<?= $santri['izin']?>" readonly>
                                    </div>
                                </div>
                        </div>

                        
                        <div class="form-group">
                                 <label for="keterangan">Keterangan</label>
                                    <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="8" placeholder="<?= $santri['keterangan']?>" readonly></textarea>
                        </div>


                </div>
                        <a class="btn btn-secondary ml-3" href="<?= base_url('kampus_2')?>">Back</a>
                
        </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
