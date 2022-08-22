    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12"><br><br>
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tambah Data User</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Tambah User</a></li>
                            </ul>
                        </div>
                    </div><br>
                    <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
                </div>
            </div>
            <div class="card-body">
                <hr>
                <div class="row">
                    <div class="col-md-6">

                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Auth/User/proses_tambah_data_user">

                            <div class="form-group">
                                <label for="username">E-mail</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter username" required>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="text" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <button type="submit" name="submit" class="btn  btn-primary">Submit</button>

                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Nama User</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Level</label>
                            <select class="form-control" name="level" id="exampleFormControlSelect1" required>
                                <option>admin</option>
                                <option>user</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Foto</label>
                            <div><input type="file" name="foto"></div>
                        </div>

                        </form>
                    </div>
                </div>