<?php 
$this->load->view('parts/header');
$this->load->view('parts/nav');
 ?>       

  <div class="callout callout-info">
    <h4>Selamat Datang <?php echo $this->session->userdata('nama'); ?> !</h4>
  </div>
  
<?php 
$this->load->view('parts/footer');
 ?>