
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Application created with ❤️ By <a href="https://rizkidarmawan21.github.io" target="blank"> Aska Developers</a>  <?= date('Y')?></span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url('auth/logout')?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets/');?>js/sb-admin-2.min.js"></script>

        <!-- <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap4.min.css"></script>

    -->
    
    

    
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>    
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.25/af-2.3.7/b-1.7.1/b-colvis-1.7.1/b-html5-1.7.1/b-print-1.7.1/cr-1.5.4/date-1.1.0/fc-3.3.3/fh-3.1.9/kt-2.6.2/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.4/sb-1.1.0/sp-1.3.0/sl-1.3.3/datatables.min.js"></script>


        <script>

            // manipulasi input gambar
            $('.custom-file-input').on('change',function(){
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });


            $('.form-check-input').on('click',function(){
                const menuId = $(this).data('menu');
                const roleId = $(this).data('role');

                $.ajax({
                    url: "<?= base_url('admin/changeaccess');?>",
                    type: 'post',
                    data: {
                        menuId:menuId,
                        roleId:roleId
                    },
                    success: function(){
                        document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                    }
                });
            });


        // datatables
            $(document).ready(function() {
                var table = $('#example').DataTable( {
                    "paging": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": true,
                    "responsive": true,
                    "lengthChange": true,
                    "buttons": [ 'copy','csv', 'excel','print', 'pdf', 'colvis' ]
                } );
            
                table.buttons().container()
                    .appendTo( '#example_wrapper .col-md-6:eq(0)' );
            } );


            $("#izin").change(function() {
			// console.log($("#izin option:selected").val());
            // console.log('hello')
			if ($("#izin option:selected").val() == 'Pulang') {
				$('#jam').prop('hidden', 'true');
			} else if ($("#izin option:selected").val() == 'Keluar') {
				$('#jam').prop('hidden', false);
			} else {
                $('#jam').prop('hidden', 'true');tttttttttttttttttttttttttttttttttt
            }
		});

        </script>

    </body>

    </html>