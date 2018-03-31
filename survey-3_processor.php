<?php
        session_start(); 

        // define variables and set to empty values (Q10-14)

        for($questionId = 61; $questionId <=70; $questionId++) {
          $Q[$questionId] = "";
          $questionErr[$questionId] = " ";
        }

        //check empty questions 


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($questionId = 61; $questionId <= 70; $questionId++){
              if (empty($_POST["Q$questionId"])) {
                $questionErr[$questionId] = "* Answer required";
              } else{
                $questionErr[$questionId] = "";
                $Q[$questionId] = $_POST["Q$questionId"];
              }
            }
                        
        }    

        //check if all the questions are answered
        $emptytest = array_filter($questionErr);

        if(empty($emptytest)) {
          //start time
          date_default_timezone_set('Europe/London');    
          $end = date('m/d/Y h:i:s a', time());

          $duration = (strtotime($end) - strtotime($_SESSION['start'])) / 60;

          $_SESSION['Q61'] = 6-$_POST["Q61"];
          $_SESSION['Q62'] = 6-$_POST["Q62"];
          $_SESSION['Q63'] = 8-$_POST["Q63"];
          $_SESSION['Q64'] = 8-$_POST["Q64"];
          $_SESSION['Q65'] = 8-$_POST["Q65"];
          $_SESSION['Q66'] = 8-$_POST["Q66"];
          $_SESSION['Q67'] = 8-$_POST["Q67"];
          $_SESSION['Q68'] = 8-$_POST["Q68"];
          $_SESSION['Q69'] = 8-$_POST["Q69"];
          $_SESSION['Q70'] = 8-$_POST["Q70"];    

          require "database/config.php";  
          $conn = new mysqli($host, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          } 

          $sql = "INSERT INTO answersheet (Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12, Q13, Q14, Q15, Q16, Q17, Q18, Q19, Q20, Q21, Q22, Q23, Q24, Q25, Q26, Q27, Q28, Q29, Q30, Q31, Q32, Q33, Q34, Q35, Q36, Q37, Q38, Q39, Q40, Q41, Q42, Q43, Q44, Q45, Q46, Q47, Q48, Q49, Q50, Q51, Q52, Q53, Q54, Q55, Q56, Q57, Q58, Q59, Q60, Q61, Q62, Q63, Q64, Q65, Q66, Q67, Q68, Q69, Q70, starttime, endtime, duration_min) VALUES ('".$_SESSION["Q1"]."', '".$_SESSION["Q2"]."', '".$_SESSION['Q3']."', '".$_SESSION["Q4"]."', '".$_SESSION["Q5"]."','".$_SESSION["Q6"]."','".$_SESSION["Q7"]."','".$_SESSION["Q8"]."','".$_SESSION["Q9"]."','".$_SESSION['Q10']."','".$_SESSION["Q11"]."', '".$_SESSION["Q12"]."', '".$_SESSION['Q13']."', '".$_SESSION["Q14"]."', '".$_SESSION["Q15"]."','".$_SESSION["Q16"]."','".$_SESSION["Q17"]."','".$_SESSION["Q18"]."','".$_SESSION["Q19"]."','".$_SESSION['Q20']."','".$_SESSION["Q21"]."', '".$_SESSION["Q22"]."', '".$_SESSION['Q23']."', '".$_SESSION["Q24"]."', '".$_SESSION["Q25"]."','".$_SESSION["Q26"]."','".$_SESSION["Q27"]."','".$_SESSION["Q28"]."','".$_SESSION["Q29"]."','".$_SESSION['Q30']."','".$_SESSION["Q31"]."', '".$_SESSION["Q32"]."', '".$_SESSION['Q33']."', '".$_SESSION["Q34"]."', '".$_SESSION["Q35"]."','".$_SESSION["Q36"]."','".$_SESSION["Q37"]."','".$_SESSION["Q38"]."','".$_SESSION["Q39"]."','".$_SESSION['Q40']."','".$_SESSION["Q41"]."', '".$_SESSION["Q42"]."', '".$_SESSION['Q43']."', '".$_SESSION["Q44"]."', '".$_SESSION["Q45"]."','".$_SESSION["Q46"]."','".$_SESSION["Q47"]."','".$_SESSION["Q48"]."','".$_SESSION["Q49"]."','".$_SESSION['Q50']."','".$_SESSION["Q51"]."', '".$_SESSION["Q52"]."', '".$_SESSION['Q53']."', '".$_SESSION["Q54"]."', '".$_SESSION["Q55"]."','".$_SESSION["Q56"]."','".$_SESSION["Q57"]."','".$_SESSION["Q58"]."','".$_SESSION["Q59"]."','".$_SESSION['Q60']."','".$_SESSION["Q61"]."', '".$_SESSION["Q62"]."', '".$_SESSION['Q63']."', '".$_SESSION["Q64"]."', '".$_SESSION["Q65"]."','".$_SESSION["Q66"]."','".$_SESSION["Q67"]."','".$_SESSION["Q68"]."','".$_SESSION["Q69"]."','".$_SESSION['Q70']."','".$_SESSION['start']."','".$end."','".$duration."')";
          if ($conn->query($sql) === FALSE) {
           echo "Error: " . $sql . "<br>" . $conn->error;
          }
           // destroy the session 
           // session_destroy(); 

           echo '<script> window.location.replace("results.php"); </script>';
          } 
 
        ?>