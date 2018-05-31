  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Absensi</li>
        <li class="<?php echo $ac = ($this->uri->segment(1)=='home'?"active":""); ?>">
          <a href="<?= base_url('home')?>">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li class="treeview <?php echo $ac = ($this->uri->segment(1)=='absensi' && $this->uri->segment(2)==''?"active":""); ?>">
          <a href="<?= base_url('home')?>">
            <i class="fa fa-th"></i> <span>Mahasiswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>            
          </a>
            <ul class="treeview-menu">
              <li class="<?php echo $ac = ($this->uri->segment(1)=='absensi' && $this->uri->segment(2)==''?"active":""); ?>"><a href="<?= base_url('absensi') ?>"><i class="fa fa-circle-o"></i> Absensi</a></li>              
              <li><a href="#"><i class="fa fa-circle-o"></i> Rekap</a></li>
              <!-- <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                </ul> -->
              </li>
            </ul>
        </li>
        <li class="header">Data</li>
        <li class="<?php echo $ac = ($this->uri->segment(2)=='matkul'?"active":""); ?>">
          <a href="<?= base_url('absensi/matkul')?>">
            <i class="fa fa-th"></i> <span>Mata Kuliah</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>