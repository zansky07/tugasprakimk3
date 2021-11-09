<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info" >
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      
      <ul class="nav sidebar-menu" >     
      <li style="color:white;" class="nav-header">&nbsp;MAIN</li>
        <li class="">
          <a href="index.php" > 
          <i class="fa fa-home" style='font-size:18px'></i> 
          <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="index_artikel.php">
          <i class='fa fa-file-text-o'></i>
            <span>Artikel</span>
            <span class="pull-right-container">              
            <i class='far fa-caret-square-down'></i>

            </span>
          </a>
          <ul class="treeview-menu">
            <li><a  href="artikel.php"><i class='fas fa-user-cog'></i>&nbsp;Semua artikel</a></li>
            <li><a href="kategori_artikel.php"><i class='fas fa-user-cog'></i>&nbsp;Kategori artikel</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="">
          <i class='fa fa-file-text-o'></i>
            <span>Obat</span>
            <span class="pull-right-container">              
            <i class='far fa-caret-square-down'></i>

            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="obat.php"><i class='fas fa-user-cog'></i>&nbsp;Semua obat</a></li>
            <li><a href="kategori_obat.php"><i class='fas fa-user-cog'></i>&nbsp;Kategori obat</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="">
          <i class='fas fa-user-friends'></i>
            <span>Daftar akun</span>
            <span class="pull-right-container">              
            <i class='far fa-caret-square-down'></i>

            </span>
          </a>
          <ul class="treeview-menu">
            <li><a  href="daftardokter.php"><i class='fas fa-user-cog'></i>&nbsp;Akun dokter</a></li>
            <li><a href="daftarpengguna.php"><i class='fas fa-user-cog'></i>&nbsp;Akun pengguna</a></li>
          </ul>
        </li>
        
      <li style="color:white;" class="nav-header">&nbsp;LOGOUT</li>
      <li class="">
          <a href="logout.php" > 
          <i class="fa fa-home" style='font-size:18px'></i> 
          <span>Keluar</span>
          </a>
        </li>
           
         </ul>
         
    </section>
    <!-- /.sidebar -->
  </aside>