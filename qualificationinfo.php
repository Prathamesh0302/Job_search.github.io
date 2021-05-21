<?php
include('db_connect.php');
session_start();
if($_SESSION['is_adminlogin']){
    $a_user = $_SESSION['a_user'];
    }else{
    
      echo "<script>location.href='admin.html'</script>";
    }

    $selectquery="select * from qualification_tb";
    $query= mysqli_query($conn, $selectquery);
    $nums= mysqli_num_rows($query);
    
   
        
?>






<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

 <link rel="stylesheet" href="css/bootstrap.min.css">

 
 <link rel="stylesheet" href="css/all.min.css">
 <link rel="stylesheet" href="css/font-awesome.min.css">
 <link rel="stylesheet" href="css/aos.css">
 <link rel="stylesheet" href="css/custom.css">

<title>Job Search</title>    
</head>
<body>

<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="userprofile.php">Job Search</a></nav>


<div class="container-fluid" style="margin-top:40px;">
<div class="row">
<nav class="col-sm-2 bg-light sidebar py-5" > <!--start sidebar 1 column-->

<div class=sidebar-sticky>
<ul class="nav flex-column">
<li class="nav-item"><a class="nav-link" href="dashboard.php">Admin profile</a></li>
<li class="nav-item"><a class="nav-link" href="memberinfo.php">Member Information</a></li>
<li class="nav-item"><a class="nav-link" href="trainerinfo.php">company Information</a></li>
<li class="nav-item"><a class="nav-link" href="qualificationinfo.php">Members Qualification </a></li>
<li class="nav-item"><a class="nav-link" href="criteriainfo.php">Company Requirements</a></li>
<li class="nav-item"><a class="nav-link" href="index-.php">Send Email</a></li>
<li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>logout</a></li>


</ul>
</div>
</nav><!--end sidebar 1 st column-->
<div class="col-sm-6 mt-5"><!--start profile area 2nd column-->
<div class="jumbotron"  style="background: url('images/mem.jfif') no-repeat;background-size: cover;height: 300px;"></div>	
 </div>
 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="dashboard.php" class="btn btn-light">Go Back</a>
             </div><br><br>
             <div class="col-md-3" ><h3>Members Qualification Details</h23></div>
            
            </div></div>
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
       
        <th> Name</th>
         <th>Email id</th>
         <th>SSC Marks</th>
         <th>HSC Marks</th>
         <th>Final Year marks</th>
         <th>Year</th>
         <th>year of experience</th>
         <th>Select</th>

    </tr>   
        <?php
         while($res= mysqli_fetch_array($query)){
        ?>
           <tr>
              
                <td><?php echo $res['name_tb']; ?></td>
                <td><?php echo $res['email_tb']; ?></td> 
                <td><?php echo $res['ssc_tb'];?></td>
                <td><?php echo $res['hsc_tb'];?></td>
                <td><?php echo $res['graduation_tb']; ?></td>
                <td><?php echo $res['year_tb']; ?></td> 
                <td><?php echo $res['exp_tb'];?></td>
                <td><a href="index-.php"><button>send email</button></a></td>

              
               
               
            </tr>
        <?php
          }
        ?>
    </table>
     </div>
    </div>
    </div>
    
<!--end profile area 2nd column-->

</div>
</div>
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/all.min.js"></script>

</body>
</html>    