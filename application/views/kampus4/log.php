

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h2 text-gray-800"><?= $title; ?></h2>
    <h1 class="h5 mb-4 text-gray-500"> <span  class="badge badge-pill badge-success">Kampus 4</span></h1>

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
                <th>Keterangan</th>
                <th>Tgl Izin</th>
                <th>Tgl Kembali</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach( $izin as $i):?>
            <tr>
                <td><?= $no++;?></td>
                <td><?= $i['nama']?></td>
                <td><?= $i['kelas']?></td>
                <td><?= $i['gedung']?>-<?= $i['kamar']?></td>
                <td><?= $i['izin']?></td>
                <td><?= $i['keterangan']?></td>
                <td><?= date('d F Y', $i['tgl_ijin'])?></td>
                <td><?= date('d F Y', strtotime($i['tgl_kembali']))?></td>
                <td> 
                <?php if($i['status'] == 0 ):?>
                <span class="badge badge-pill badge-danger"> Waiting Verified </span></td>
                <?php endif;?>

                <?php if($i['status'] == 1 ):?>
                <span class="badge badge-pill badge-warning"> Verified - 

                                <?php if (date('d F Y') > date('d F Y',strtotime($i["tgl_kembali"]))) { ?>
									
									<span class="text-danger">Terlambat</span>
									
								<?php } else {?>
										
									<span class="text-secondary">Masa Izin</span>	
						        <?php } ?>
                
                
                </span></td>
                <?php endif;?>
                <?php if($i['status'] == 2 ):?>
                <span class="badge badge-pill badge-success"> Sudah Kembali </span></td>
                <?php endif;?>
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
