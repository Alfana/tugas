<?php 
$this->load->view('parts/header');
$this->load->view('parts/nav');
 ?>       

  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Mata Kuliah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="matkul" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Mata Kuliah</th>
                  <th>Semester</th>
                  <th>Aksi</th>
                </tr>
                </thead>

                <tbody>
                <?php $no = 1; foreach ($matkul as $row) { ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $row->matkul ?>
                  	<input type="hidden" name="matkul" value="<?= $row->matkul;  ?>">
                  </td>
                  <td><?= $row->semester ?>                  	
                  	<input type="hidden" name="smt" value="<?= $row->semester;  ?>">
                  </td>
                  <td>
                  	<center>
                      <a href="<?= base_url('absensi/editmatkul/'.$row->id_matkul) ?>" class="btn btn-xs btn-success"> <span class="glyphicon glyphicon-pencil"></span> </a>
                      <!-- <button onclick="del()" class="btn btn-xs btn-danger glyphicon glyphicon-trash"></button> -->
                      <a href="<?= base_url('absensi/delmatkul/'.$row->id_matkul) ?>" class="btn btn-xs btn-danger" > <span class="glyphicon glyphicon-trash"></span> </a>
                  	</center>
                  </td>
                </tr>
                <?php $no++; } ?>
                </tbody>
              </table>
            </div>
            <div class="box-footer">            	
              <a href="<?= base_url('absensi/admatkul') ?>" class="btn btn-success" >Tambah Mata Kuliah</a>
            </div>
            <!-- /.box-body -->
          </div>

<script type="text/javascript">
	function del() {
    if (window.confirm("Hapus Data?")) {
        window.location = 'base_url('absensi/delmatkul/'.$row->id_matkul)';
    } else {
        
    }
}
</script>
<?php 
$this->load->view('parts/footer');
 ?>