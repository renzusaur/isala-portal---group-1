<?php
include_once("conn.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="logo.png" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="isala-reg-form.css" />
   <title>LOGIN AND REGISTRATION</title>
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-danger">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img id="Logo" src="logo.png" alt="Logo" width="40" height="40" />
          <span
            >INTERNATIONAL SCHOOL OF THE ARTS, THE LANGUAGES, AND THE
            ACADEME</span
          >
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active text-light d-inline" href="#">Home</a>
            <li class="nav-item">
              <a class="nav-link text-light d-inline" href="#">CurriculumMaps</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light d-inline" href="#">LearningModules</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light d-inline" href="#">AboutUs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light d-inline" href="#">Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light d-inline" href="#">More</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light d-inline" href="login.html">StudentPortal</a>
            </li>
          </li>
        </ul>
      </div>
    </nav>

 <?php
  if(@$flag==1){
?>
<div class="row">
  <div class="col">
    <div class="alert alert-primary" role="alert">
      Portal Successfully Created <a href="view_student.php" class="alert-link"> Go to Log in page</a>.
    </div>
  </div>
</div>
  <?php }?>

      <?php

   if(isset($_POST['create'])){
     
      @$firstname  =  ($_POST['firstname']);
      @$surname    =  ($_POST['surname']);
      @$lastname   =  ($_POST['lastname']);
      @$username   =  ($_POST['username']);
      @$emailID    =  ($_POST['emailID']);
      @$studentsLRN = ($_POST['studentsLRN']);
      @$password   =  ($_POST['password']);
    
       $sql = "INSERT INTO usercred (firstname, surname, lastname, username, emailID, studentsLRN, password) VALUES (?,?,?,?,?,?,?)";
       $stmtinsert = @$db->prepare($sql);
     $result = $stmtinsert->execute([$firstname, $username, $lastname, $username, $emailID, $studentsLRN, $password]);

          if($result){
            echo '<script>alert("Account Successfully created!")</script>';
            
          }  

          else{
            echo'Account failed to create!.';
          }


        } 

 ?>

    <form method="POST" action="" class="frm">
      <img class="img1" src="logo.png" alt="Bootstrap" />
      <img class="img2" src="Title.PNG" alt="Bootstrap" />
        
        

          <div>
        <label for="exampleInputEmail1" class="form-label">First Name</label>
        <input id="userinfo"
          type="text"
          class="form-control"
          required
          placeholder="First Name" 
          name = "firstname"
        />
      </div>

       <div>
        <label for="exampleInputEmail1" class="form-label">Surname</label>
        <input id="userinfo"
          type="text"
          class="form-control"
          required
          placeholder="Surname" 
          name = "surname"
        />
      </div>

      <div>
        <label for="exampleInputEmail1" class="form-label">Last Name</label>
        <input id="userinfo"
          type="text"
          class="form-control"
          required
          placeholder="Last Name" 
          name = "lastname"
        />
      </div>

      <div>
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input id="userinfo"
          type="text"
          class="form-control"
          required
          placeholder="User Name" 
          name = "username"
        />
      </div>

       <div>
        <label for="exampleInputEmail1" class="form-label">Email ID</label>
        <input id="userinfo"
          type="text"
          class="form-control"
          required
          placeholder="Email ID" 
          name = "emailID"
        />
      </div>

      <div>
        <label for="exampleInputEmail1" class="form-label">Student's LRN</label>
        <input id="userinfo"
          type="text"
          class="form-control"
          required
          placeholder="Student's LRN" 
          name = "studentsLRN"
        />
      </div>

      <div>
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input id="userinfo"
          type="password"
          class="form-control"
          required
          placeholder="Password" 
          name = "password"
        />
      </div>

      <input type="checkbox" class="check-box" >    <span>Remember my Password</span>
          <button type="submit" class="submit-btn" name="create" onclick="validate()">Sign up</button> <br>
          <a href="Isala-index.php">
          <button type="button" class="btn-back" onclick="back">Back</button>
          </a>




      <p>
        Copyright &copy; 2020 INTERNATIONAL SCHOOL OF THE ARTS, <br />
        LANGUAGES, AND THE ACADEME- All Rights Reserved
      </p>
    </form>
  </body>
</html>