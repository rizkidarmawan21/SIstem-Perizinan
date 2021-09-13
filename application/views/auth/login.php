
    <div class="container mt-5" >

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img class="img mb-3" src="<?= base_url('assets/img/logo ponpes.png')?>" width="100"  alt="">
                                        <h1 class="h4 text-gray-900 mb-3">Sistem Perizinan Santri <br> Pondok Pesantren Askhabul Kahfi</h1>
                                    </div>


                                    <?= $this->session->flashdata('message'); ?>
                                    <form class="user" action="<?= base_url('auth'); ?> " method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email" name="email"
                                                placeholder="Enter Email Address..." value =<?= set_value('email')?>>
                                                <?= form_error('email','<small class="text-danger pl-3 ">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">

                                                <?= form_error('password','<small class="text-danger pl-3 ">','</small>'); ?>
                                        </div>
                                        <button type="submit" name ="submit" class="btn btn-success btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?=  base_url('auth/forgotpassword')?>">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registration')?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
