<?php 
$this->load->view('parts/header');
$this->load->view('parts/nav');
?>

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pilih Tanggal Dan Matkul</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?= base_url('absensi/iabsen') ?>">
              <div class="box-body">              
                <div class="form-group">
                  <div class="form-group">
                  <label>Mata Kuliah</label>
                  <?php 
                    $data = array();                    
                    foreach ($matkul as $m) {
                      $y = array($m->id_matkul => $m->matkul);
                      $data += $y;
                    }
                    echo form_dropdown('matkul', $data, '', 'class="form-control"');
                   ?>
                  </div>
                </div>
              <div class="form-group">
                <label>Tanggal Absen </label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="tgl_absen">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
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