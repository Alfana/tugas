<?php 
$this->load->view('parts/header');
$this->load->view('parts/nav');
 ?>  
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Update</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="mhs" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NPM</th>
                  <th>Nama</th>
                  <th>Waktu Dirubah</th>
                  <th>User</th>
                </tr>
                </thead>

                <tbody>
                <?php $no = 1; foreach ($mhs as $row) { ?>
                <tr>
                  <td><?= $no ?></td>
                  <th><?= $row->npm ?></th>
                  <td><?= $row->nama ?></td>
                  <td><?= $row->tgl_update ?></td>
                  <td><?= $row->nama_user ?></td>
                </tr>
                <?php $no++; } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

<?php 
$this->load->view('parts/footer');

 ?>