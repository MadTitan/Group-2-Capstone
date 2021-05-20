<?php 
session_start();
 if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_access'])){
            header('Location:../login.php');
}else{
    if($_SESSION['user_access'] != 1){
            header('Location:../login.php');
    }
}
include('includes/header.php');
      include('includes/navbar.php');
      require_once '../connection.php';

     
 ?>

        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                       
                      <a href="../logout.php"><button>Logout</button></a>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    

                    <!-- Content Row -->
                    <table class="table table-hover">
                        <thead>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>

                    <?php 
                        $usr_sql = "select * from tbl_user_account where uacc_active='1' and uacc_deleted='0'";
                        $usr_res = $con->query($usr_sql);
                        
                        while($usr_rec = $usr_res->fetch_assoc()){
                    ?>
                        <tr>
                        <td><?php echo $usr_rec['uaccnt_email'];  ?></td>
                        <td class="text-success">Active</td>
                        <td class="text-success">
                            <a href="../logout.php?id=<?php echo $usr_rec['uaccnt_id']  ?>" class="btn btn-danger btn-sm">Log-out</a>
                        </td>
                        </tr>
                    <?php 
                        }

                    ?>
                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            

   <?php
include('includes/scripts.php');
include('includes/footer.php');
   ?>
    

    

