<?php
      
      $c_name_tb = $_POST['c_name_tb'];
      $c_role_tb = $_POST['c_role_tb'];
      $c_edu_tb = $_POST['c_edu_tb'];
      $c_per_tb = $_POST['c_per_tb'];
      $c_sal_tb = $_POST['c_sal_tb'];
      $c_exp_tb = $_POST['c_exp_tb'];
      
       
       

        // Create Connection
          $conn = new mysqli('localhost','root','','job_search', 3307);
          if($conn->connect_error) {
            die("connection failed");
           }
            else{
              $stmt = $conn->prepare("insert into criteria_tb(c_name_tb, c_role_tb, c_edu_tb,  c_per_tb, c_sal_tb , c_exp_tb ) VALUES ( ?, ?, ?, ?, ?, ? )");
               $stmt->bind_param("ssssss", $c_name_tb, $c_role_tb, $c_edu_tb,  $c_per_tb, $c_sal_tb , $c_exp_tb );
               $stmt->execute();
               echo '<script>alert("upload successfully")</script>';
               $stmt->close();
               $conn->close();
            }
?>