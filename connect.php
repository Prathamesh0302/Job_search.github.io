<?php
      
        $r_name = $_POST['r_name'];
        $r_email = $_POST['r_email'];
        $r_password = $_POST['r_password'];
        $r_contact = $_POST['r_contact'];
        $r_address = $_POST['r_address'];
       

        // Create Connection
          $conn = new mysqli('localhost','root','','job_search', 3307);
          if($conn->connect_error) {
            die("connection failed");
           }
            else{
              $stmt = $conn->prepare("insert into companyregister_tb(r_name, r_email, r_password, r_contact, r_address) VALUES ( ?, ?, ?, ?, ? )");
               $stmt->bind_param("sssis", $r_name,  $r_email, $r_password, $r_contact, $r_address);
               $stmt->execute();
               echo '<script>alert("registration successfully...")</script>';
               
               $stmt->close();
               $conn->close();
            }
?>