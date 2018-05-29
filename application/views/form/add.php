<?php 
$this->load->view('parts/header');
$this->load->view('parts/nav');
?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?= base_url('alfana/new') ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NPM</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="NPM" name="npm">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama" name="nama">
                </div>
                <input type="hidden" name="id_list" value="<?= $mhs->id_list ?>">
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?= base_url('alfana') ?>" class="btn btn-danger" >Batal</a>
              </div>
            </form>
          </div>

<?php
$this->load->view('login/footer');
 ?>