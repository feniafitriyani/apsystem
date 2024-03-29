<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">LAPORAN</li>
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="header">KELOLA</li>
        
        <li><a href="attendance.php"><i class="fa fa-calendar"></i> <span>Kehadiran</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="employee.php"><i class="fa fa-circle-o"></i> Daftar Siswa</a></li>
            <li><a href="schedule.php"><i class="fa fa-circle-o"></i> Jadwal</a></li>
          </ul>
        </li>
        <li><a href="position.php"><i class="fa fa-suitcase"></i> Kelas</a></li>
        <li class="header">CETAK</li>
        <li><a href="schedule_employee.php"><i class="fa fa-clock-o"></i> <span>Kehadiran</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>