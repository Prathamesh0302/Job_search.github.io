<?php
include('db_connect.php');
session_start();
if($_SESSION['is_login']){
$m_email = $_SESSION['r_email'];
}else{

  echo "<script>location.href='company_login.html'</script>";
}

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
<li class="nav-item"><a class="nav-link" href="userprofile1.php">profile</a></li>
<li class="nav-item"><a class="nav-link" href="cpass1.php">change password</a></li>
<li class="nav-item"><a class="nav-link" href="criteria.php">Company Criteria</a></li>
<li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>logout</a></li>

</ul>
</div>
</nav><!--end sidebar 1 st column-->
<div class="col-sm-6 mt-5"><!--start profile area 2nd column-->
<form action="connect4.php" method="POST" >
    <div class="form-group">
    
               
				<h4><label>Job Requirements</label></h4></br>

				<label>Company Name </label>
                <input type="text" name="c_name_tb" class="form-control" autocomplete="off" required><br> 
                
                <label>Role in Company  </label>
                <input type="text" name="c_role_tb" class="form-control" autocomplete="off" required><br> 
                
                <label>Education Required</label>
                <input type="text" name="c_edu_tb" class="form-control" autocomplete="off" required><br>
                
				<label>Percentage Criteria(Final Year)</label>
                <input type="text" name="c_per_tb" class="form-control" autocomplete="off" required><br>

                <label> Salary</label>
                <input type="text" name="c_sal_tb" class="form-control" autocomplete="off" required><br>

				<div>
                <label class="form-group">  year of experience</label>
                <select name="c_exp_tb">
                <option value="">  --Select-- </option>
                <option value="Fresher"> Fresher </option>
                <option value="1 Yr ">  1 Yr </option>
                <option value="2 Yrs"> 2 Yrs </option>
                <option value="3 Yrs ">  3 Yrs </option>
                <option value="4 Yrs"> 4 Yrs </option>
                <option value="more than 5 Yrs">more than 5 Yrs </option>
                </select><br> 
                </div>

               <button type="submit" class="btn btn-danger" name="p_submit">Submit</button>
    <?php if(isset($passmsg)) {echo $passmsg; } ?>
    </form>

</div><!--end profile area 2nd column-->

</div>
</div>
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/all.min.js"></script>



</body>
</html>    

     
    
    