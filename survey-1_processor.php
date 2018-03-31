        <?php
        session_start();  
        //start time
        date_default_timezone_set('Europe/London');    
        $start = date('m/d/Y h:i:s a', time());

        $_SESSION['start'] = $start;

        // define variables and set to empty values (Q1-10)

        for($questionId = 1; $questionId <=10; $questionId++) {
          $Q[$questionId] = "";
          $questionErr[$questionId] = " ";
        }
        $checked = NULL; 

        //check empty questions 


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($questionId = 1; $questionId <= 10; $questionId++){
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
          $Q3_string = implode(" ",$Q[3]);
          $Q10_string = implode(" ",$Q[10]);
          $_SESSION['Q1'] = $_POST["Q1"];
          $_SESSION['Q2'] = $_POST["Q2"];
          $_SESSION['Q3'] = $Q3_string;
          $_SESSION['Q4'] = $_POST["Q4"];
          $_SESSION['Q5'] = $_POST["Q5"];
          $_SESSION['Q6'] = $_POST["Q6"];
          $_SESSION['Q7'] = $_POST["Q7"];
          $_SESSION['Q8'] = $_POST["Q8"];
          $_SESSION['Q9'] = $_POST["Q9"];
          $_SESSION['Q10'] = $Q10_string;    

           echo '<script> window.location.replace("survey-2.php"); </script>';
          } 
 
        ?>