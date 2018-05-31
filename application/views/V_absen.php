<?php 
$this->load->view('parts/header');
$this->load->view('parts/nav');
 ?>       

		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form role="form" method="post" action="<?= base_url('absensi/input_absen') ?>">
              <table id="mhs" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NPM</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Hadir</th>
                </tr>
                </thead>

                <tbody>
                	<input type="text" name="tgl_absen" value="<?= $tgl_absen ?>">
                	<input type="text" name="matkul" value="<?= $matkul?>">
                	<input type="text" name="smt" value="<?= $smt->semester?>">
                <?php $no = 1; foreach ($mhs as $row) { ?>
                <tr>
                  <td><?= $no ?></td>
                  <th><?= $row->npm ?>
                  	<input type="hidden" name="npm" value="<?= $row->npm;  ?>">
                  </th>
                  <td><?= $row->nama ?>                  	
                  	<input type="hidden" name="nama" value="<?= $row->nama;  ?>">
                  </td>
                  <td><?= $row->kelas ?>
                  	<input type="hidden" name="kelas" value="<?= $row->kls;  ?>">
                  </td>
                  <th>
                  	<center>
                  	<div class="form-group">
                		<label>
                  			<input type="checkbox" class="flat-red" name="absen[<?= $row->id_mhs?>]" value="H">
                  			<input type="text" name="mhs[]" value="<?= $row->id_mhs?>">
		                </label>
		                </label>
              		</div>
              		</center>
                  </th>
                </tr>
                <?php $no++; } ?>
                </tbody>
              </table>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?= base_url('alfana') ?>" class="btn btn-danger" >Batal</a>
              </div>
          	</form>
            </div>
            <!-- /.box-body -->
          </div>
 
<script type="text/javascript">
    // $(document).ready(function() {
    //     var link = $(location).attr('href');
    //     var segment = link.split('/');
    //     var posisi  = segment[5];

    //     switch(posisi){
    //         case "absensi":
    //           $(".absensi").addClass("active");
    //           break;

    //         default:
    //           console.log('halaman lain');
    //           break;
    //     }        
    // });
</script>
<?php 
$this->load->view('parts/footer');
 ?>