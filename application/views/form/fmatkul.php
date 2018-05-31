<?php 
$this->load->view('parts/header');
$this->load->view('parts/nav');

$sel="";$sel2="";$sel3="";$sel4="";$sel5="";$sel6="";$sel7="";$sel8="";
if ($status == 'edit') {
  $action = 'ematkul';
  $smt = $matkul->semester;
  $id = $matkul->id_matkul;
  $matkul = $matkul->matkul;

  if ($smt == 1) {
    $sel = "selected";
  }elseif ($smt == 2) {
    $sel2 = "selected";
  }elseif ($smt == 3) {
    $sel3 = "selected";
  }elseif ($smt == 4) {
    $sel4 = "selected";
  }elseif ($smt == 5) {
    $sel5 = "selected";
  }elseif ($smt == 6) {
    $sel6 = "selected";
  }elseif ($smt == 7) {
    $sel7 = "selected";
  }elseif ($smt == 8) {
    $sel8 = "selected";
  }
}else{
  $action = 'addmatkul';
  $id = "";
  $matkul = "";
}

 ?>      

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Mata Kuliah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?= base_url('absensi/'.$action) ?>">
              <div class="box-body">
                <input type="hidden" name="id_matkul" value="<?= $id ?>">
                <div class="form-group">
                  <label>Nama Matkul</label>
                  <input type="text" class="form-control" placeholder="Nama Matkul" name="matkul" value="<?= $matkul ?>">
                </div>
                <div class="form-group">
                  <div class="form-group">
                  <label>Semester</label>
                  <select class="form-control" name="smt">
                    <option value="1" <?= $sel ?>>Semester 1</option>
                    <option value="2" <?= $sel2 ?>>Semester 2</option>
                    <option value="3" <?= $sel3 ?>>Semester 3</option>
                    <option value="4" <?= $sel4 ?>>Semester 4</option>
                    <option value="5" <?= $sel5 ?>>Semester 5</option>
                    <option value="6" <?= $sel6 ?>>Semester 6</option>
                    <option value="7" <?= $sel7 ?>>Semester 7</option>
                    <option value="8" <?= $sel8 ?>>Semester 8</option>
                  </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?= base_url('absensi/matkul') ?>" class="btn btn-danger" >Batal</a>
              </div>
            </form>
          </div>

<?php 
$this->load->view('parts/footer');
 ?>