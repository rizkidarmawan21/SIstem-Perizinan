

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h2 text-gray-800"><?= $title; ?></h2>
    <h1 class="h5 mb-4 text-gray-500"> <span  class="badge badge-pill badge-success">Kampus 1</span></h1>

    <hr class="sidebar-divider mt-3">
    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-md-12">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Kamar</th>
                <th>Keperluan</th>
                <th>Tgl Izin</th>
                <th>Tgl Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach( $izin as $i):?>
            <tr>
                <td><?= $no++;?></td>
                <td><?= $i['nama']?></td>
                <td><?= $i['kelas']?></td>
                <td><?= $i['gedung']?>-<?= $i['kamar']?></td>
                <td><strong><?= $i['izin']?></strong></td>
                <td>
                    
                <?= date('d F Y', $i['tgl_ijin'])?>
                <?php if ($i['izin'] == 'Pulang' ) {
                    echo "";
                } else {
                    echo "- ",date('H:i',$i['jam_keluar']);
                }  ?>
            
                </td>
                <td>
                    <?= date('d F Y', strtotime($i['tgl_kembali']))?>
                    <?php if ($i['izin'] == 'Pulang' ) {
                    echo "";
                } else {
                    echo "- ",date('H:i',strtotime($i['jam_kembali_keluar']));
                }  ?>
                </td>
                <td> 
                <?php if($i['status'] == 0 ):?>
                <span class="badge badge-pill badge-danger"> Waiting Verified </span></td>
                <?php endif;?>

                <?php if($i['status'] == 1 ):?>
                <span class="badge badge-pill badge-warning"> Verified - 
                        <?php if ($i['izin'] == 'Pulang') :?>
                            <?php if (date('d F Y') > date('d F Y',strtotime($i["tgl_kembali"])) ) { ?>
									
									<span class="text-danger">Terlambat</span>	
									
								<?php } else {?>
										
									<span class="text-secondary">Masa Izin</span>	
						        <?php } ?>
                        <?php else :?>
                            <?php if (date('H:i') > date('H:i',strtotime($i['jam_kembali_keluar'])) ) { ?>
									
									<span class="text-danger">Terlambat</span>	
									
								<?php } else {?>
										
									<span class="text-secondary">Masa Izin</span>	
						        <?php } ?>
                        <?php endif?>


                
                </span></td>
                <?php endif;?>
                <?php if($i['status'] == 2 ):?>
                <span class="badge badge-pill badge-success"> Sudah Kembali </span></td>
                <?php endif;?>
                
                <td>
                <a href="<?= base_url('kampus_1/detail/'. $i['id'])?>" class="badge badge-pill badge-warning">Detail</a>
                <a href="<?= base_url('kampus_1/back/'. $i['id']);?>" class="badge badge-pill badge-success">Kembali</a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>




        </div>
    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
