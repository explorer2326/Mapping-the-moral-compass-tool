        <?php
        session_start(); 

        // define variables and set to empty values (Q10-14)

        for($questionId = 11; $questionId <=60; $questionId++) {
          $Q[$questionId] = "";
          $questionErr[$questionId] = " ";
        }

        //check empty questions 


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($questionId = 11; $questionId <= 60; $questionId++){
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
          $_SESSION['Q11'] = 8-$_POST["Q11"];
          $_SESSION['Q12'] = 8-$_POST["Q12"];
          $_SESSION['Q13'] = 8-$_POST["Q13"];
          $_SESSION['Q14'] = 8-$_POST["Q14"];
          $_SESSION['Q15'] = 8-$_POST["Q15"];
          $_SESSION['Q16'] = 8-$_POST["Q16"];
          $_SESSION['Q17'] = 8-$_POST["Q17"];
          $_SESSION['Q18'] = 8-$_POST["Q18"];
          $_SESSION['Q19'] = 8-$_POST["Q19"];
          $_SESSION['Q20'] = 8-$_POST["Q20"];  
          $_SESSION['Q21'] = 8-$_POST["Q21"];
          $_SESSION['Q22'] = 8-$_POST["Q22"];
          $_SESSION['Q23'] = 8-$_POST["Q23"];
          $_SESSION['Q24'] = 8-$_POST["Q24"];
          $_SESSION['Q25'] = 8-$_POST["Q25"];
          $_SESSION['Q26'] = 8-$_POST["Q26"];
          $_SESSION['Q27'] = 8-$_POST["Q27"];
          $_SESSION['Q28'] = 8-$_POST["Q28"];
          $_SESSION['Q29'] = 8-$_POST["Q29"];
          $_SESSION['Q30'] = 8-$_POST["Q30"]; 
          $_SESSION['Q31'] = 8-$_POST["Q31"];
          $_SESSION['Q32'] = 8-$_POST["Q32"];
          $_SESSION['Q33'] = 8-$_POST["Q33"];
          $_SESSION['Q34'] = 8-$_POST["Q34"];
          $_SESSION['Q35'] = 8-$_POST["Q35"];
          $_SESSION['Q36'] = 8-$_POST["Q36"];
          $_SESSION['Q37'] = 8-$_POST["Q37"];
          $_SESSION['Q38'] = 8-$_POST["Q38"];
          $_SESSION['Q39'] = 8-$_POST["Q39"];
          $_SESSION['Q40'] = 8-$_POST["Q40"]; 
          $_SESSION['Q41'] = 8-$_POST["Q41"];
          $_SESSION['Q42'] = 8-$_POST["Q42"];
          $_SESSION['Q43'] = 8-$_POST["Q43"];
          $_SESSION['Q44'] = 8-$_POST["Q44"];
          $_SESSION['Q45'] = 8-$_POST["Q45"];
          $_SESSION['Q46'] = 8-$_POST["Q46"];
          $_SESSION['Q47'] = 8-$_POST["Q47"];
          $_SESSION['Q48'] = 8-$_POST["Q48"];
          $_SESSION['Q49'] = 8-$_POST["Q49"];
          $_SESSION['Q50'] = 8-$_POST["Q50"];   
          $_SESSION['Q51'] = 8-$_POST["Q51"];
          $_SESSION['Q52'] = 8-$_POST["Q52"];
          $_SESSION['Q53'] = 8-$_POST["Q53"];
          $_SESSION['Q54'] = 8-$_POST["Q54"];
          $_SESSION['Q55'] = 8-$_POST["Q55"];
          $_SESSION['Q56'] = 8-$_POST["Q56"];
          $_SESSION['Q57'] = 8-$_POST["Q57"];
          $_SESSION['Q58'] = 8-$_POST["Q58"];
          $_SESSION['Q59'] = 8-$_POST["Q59"];
          $_SESSION['Q60'] = 8-$_POST["Q60"];   

           echo '<script> window.location.replace("survey-3.php"); </script>';
          } 
 
        ?>