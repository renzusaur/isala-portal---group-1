<?php
include_once('db-connect.php')
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Portal</title>
  <link rel="stylesheet" type="text/css" href="portal-grade.css">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body style="background-color: #DDDDDD;">

            <img src="isala-logo2.png" style="height: 100px; width: 100px; margin-left: 275px; margin-top: 70px;">
           <h2 style="margin-top: -95px; margin-left: 400px; font-family: rubik;">Student Portal</h2>
           <small style="margin-left: 400px; font-family: arial;  font-size: 12px;">Check and manage your grade here at your portal.</small>

                    <table style="width: 650px; height: 300px; background-color: #FAFAFA; margin-left: 270px; margin-top: 50px; border-radius: 15px; " class="table table-hover">
                    <thead  class="table">
                      <tr>
                        <th >Subject</th>
                        <th>1st Quarter</th>
                         <th>2nd Quarter</th>
                        <th>3rd Quarter</th>
                        <th>4th Quarter</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                      $sql = "SELECT * FROM tbl_gardes";
                      $viewStudent = mysqli_query($conn, $sql) or die(mysqli_error());
                      
                      while($row = mysqli_fetch_array($viewStudent)){
                          $id = $row['id'];
                          $subjs = $row["Subjects"];
                          $qtr1 = $row['1st Quarter'];
                          $qtr2 = $row['2nd Quarter'];
                          $qtr3 = $row['3rd Quarter'];
                          $qtr4 = $row['4th Quarter'];
                       ?>  
                   <tr>

                    <td><?php echo $subjs?></td>
                    <td><?php echo $qtr1?></td>
                    <td><?php echo $qtr2?></td>
                    <td><?php echo $qtr3?></td>
                    <td><?php echo $qtr4?></td>
                     
                  </tr>
        
                  <?php 
                    }
                  ?>
                        
                    </tbody>

                     

                  </table>
                  <br>


                  
           <div style="width: 550px; margin-top: -345px; margin-left: 950px;  border-radius: 15px; " class="list-group">
            <a style="color: #ffffff;" href="#" class="list-group-item list-group-item-action active " aria-current="true">
              <div class="d-flex w-100 justify-content-between">
                <h5  class="mb-1">Notifications</h5>
               
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div style="height: 55px;" class="d-flex w-100 justify-content-between">
                <h5 style="color: #fe0000;" class="mb-1">General Alert!</h5>
                <small class="text-muted">2 mins ago</small>
              </div>
              <p class="mb-1">Lorem ipsum dolor sit amet. Qui velit beatae qui voluptas reiciendis id iste commodi id voluptatem voluptas quo nulla obcaecati vel dolor animi! Est unde ipsum vel voluptates expedita aut quod corrupti? Ut consequuntur sunt est asperiores autem aut accusantium aliquam est minus corporis. Cum vitae quia ut maiores dolores sit esse optio est dolores suscipit est adipisci galisum ex voluptas odit sed minus impedit?</p>
              <small class="text-muted"></small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div style="height: 55px;" class="d-flex w-100 justify-content-between">
                <h5 style="color: #fe0000;" class="mb-1">General ALert!</h5>
                <small class="text-muted">10 mins ago</small>
              </div>
              <p class="mb-1">Lorem ipsum dolor sit amet. Qui velit beatae qui voluptas reiciendis id iste commodi id voluptatem voluptas quo nulla obcaecati vel dolor animi! Est unde ipsum vel voluptates expedita aut quod corrupti? Ut consequuntur sunt est asperiores autem aut accusantium aliquam est minus corporis. Cum vitae quia ut maiores dolores sit esse optio est dolores suscipit est adipisci galisum ex voluptas odit sed minus impedit?</p>
              
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div style="height: 55px;" class="d-flex w-100 justify-content-between">
                <h5 style="color: #fe0000;"class="mb-1">General ALert!</h5>
                <small class="text-muted">Yesterday</small>
              </div>
              <p class="mb-1">Lorem ipsum dolor sit amet. Qui velit beatae qui voluptas reiciendis id iste commodi id voluptatem voluptas quo nulla obcaecati vel dolor animi! Est unde ipsum vel voluptates expedita aut quod corrupti? Ut consequuntur sunt est asperiores autem aut accusantium aliquam est minus corporis. Cum vitae quia ut maiores dolores sit esse optio est dolores suscipit est adipisci galisum ex voluptas odit sed minus impedit?</p>
              <small class="text-muted"></small>
            </a>
            <button style="font-family: rubik;" type="button" class="btn btn-warning">View all Notifications</button>
          </div>
          <br/>


                 <ul style="width: 650px; background-color: #ffffff; height: 350px; margin-top: -400px;" class="list-group">
                    <li class="list-group-item active" aria-current="true">Class Standing</li>
                    <div class="row d-flex justify-content-center mt-100">

           <div class="col-md-6">
                <p style="margin-left: 50px; margin-top: 65px;">Your class standing is at 74% keep it high. And maintain your record.</p>
                <p style="margin-left: 50px; margin-top: 65px;">You're estimated to be one of the top student in class.</p>


               <div style="margin-left: -140px; margin-top: -175px;"  class="progress blue">
                 <span class="progress-left">
                                   <span class="progress-bar"></span>
                 </span>
                 <span class="progress-right">
                                   <span class="progress-bar"></span>
                 </span>
                 <div class="progress-value">74%</div>
               </div>


            <!-- Sidebar -->
             <div   class="back">
            <nav style="margin-top: -15px; " id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
              <img style="height: 150px; width:150px; margin-left: 50px; border-radius: 100px;" src="friendpic5.png">
             <div class="dropdown">
             <button style="margin-left: 13px; width: 212px; background-color: #fe0000;" class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  View Information
                </button> 
              </p>



              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                 <p><b>Name:</b> Noli Mark Corpuz</p>
                 <p><b>Section:</b> TECH-VOC</p>
                 <p><b>Student's LRN:</b><br>
                 10220206123456</p>
                 <p><b>Gmail:</b> nolimark@gmail.com</p>
                </div>
              </div>
                <br>
                 <br>
                  <br>
                   <br>
                    <br>

                
              <div style="font-family: Arial; margin-top: -150px; width: 243px;" class="position-sticky" >
                <div class="list-group list-group-flush mx-2 mt-4" >
                  <a href="portal.php" class="list-group-item list-group-item-action py-2 ripple " aria-current="true" >
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Check Portal</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action py-2 ripple active " style=" background-color: #fe0000;">
                    <i class="fas fa-chart-area fa-fw me-3"></i><span>Grades</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                      class="fas fa-lock fa-fw me-3"></i><span>Progress</span></a>
                  <a href="#" class="list-group-item list-group-item-action py-2 ripple" ><i
                      class="fas fa-chart-line fa-fw me-3"></i><span>Recent Activities</span></a>
                  <a href="login.html" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-pie fa-fw me-3"></i><span>Log-out</span>
                  </a>
                 
                </div>
              </div>
            </nav>
            <!-- Sidebar -->

            <!-- Navbar -->
            <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
              <!-- Container wrapper -->
              <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                  aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
                </button>
                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">

                 </div>
                 <br>


                  
            
                      
             
</body>
</html>