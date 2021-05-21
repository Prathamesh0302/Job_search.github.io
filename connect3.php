<?php
      
      $name_tb = $_POST['name_tb'];
      $email_tb = $_POST['email_tb'];
      $ssc_tb = $_POST['ssc_tb'];
      $hsc_tb = $_POST['hsc_tb'];
      $year_tb = $_POST['year_tb'];
      $graduation_tb = $_POST['graduation_tb'];
      $exp_tb = $_POST['exp_tb'];
      
       
       

        // Create Connection
          $conn = new mysqli('localhost','root','','job_search', 3307);
          if($conn->connect_error) {
            die("connection failed");
           }
            else{
              $stmt = $conn->prepare("insert into qualification_tb(name_tb, email_tb , ssc_tb, hsc_tb, graduation_tb, year_tb, exp_tb ) VALUES ( ?, ?, ?, ?, ?, ?, ? )");
               $stmt->bind_param("sssssss", $name_tb, $email_tb , $ssc_tb, $hsc_tb, $graduation_tb, $year_tb, $exp_tb);
               $stmt->execute();
               echo '<script>alert("upload successfully")</script>';
               $stmt->close();
               $conn->close();
            }
?>