        <?php
        session_start();  
        //calculations for user
        //role
        
        $commercial = round(($_SESSION['Q15'] + $_SESSION['Q22'] + $_SESSION['Q19'] + $_SESSION['Q23'])/4,1);     
        $ethical = round(($_SESSION['Q18'] + $_SESSION['Q24'] + $_SESSION['Q27'])/3,1); 
        $exploitation = round(($_SESSION['Q14'] + $_SESSION['Q21'] + $_SESSION['Q26'])/3,1); 
        $independence = round(($_SESSION['Q11'] + $_SESSION['Q17'])/2,1); 
        $advisory = round(($_SESSION['Q13'] + $_SESSION['Q16'])/2,1); 
        $subservient = round(($_SESSION['Q12'] + $_SESSION['Q20'] + $_SESSION['Q25'] + $_SESSION['Q28'])/4,1); 

        $roleave = round(($commercial+$ethical+$exploitation+$independence+$advisory+$subservient*0.56)/6,1);
        //organizational
        $resistant = round(($_SESSION['Q31'] + $_SESSION['Q32'] + $_SESSION['Q33'])/3,1); 
        $positive = round(($_SESSION['Q29'] + $_SESSION['Q30'])/2,1); 
        $uneven = round(($_SESSION['Q34'] + $_SESSION['Q35'])/2,1); 

        $organizationalave = round(($resistant*0.71+$positive*0.84+$uneven*0.8)/3,1);
        //team
        $eo = round(($_SESSION['Q36'] + $_SESSION['Q38'] + $_SESSION['Q40'])/3,1); 
        $financial = round(($_SESSION['Q41'] + $_SESSION['Q43'])/2,1);
        $society = round(($_SESSION['Q37'] + $_SESSION['Q39'])/2,1); 
        $product = round(($_SESSION['Q44'] + $_SESSION['Q42'])/2,1); 

        $teamave = round(($eo*0.73+$financial*0.62+$society*0.82+$product*0.7)/4,1);
        //professional
        $II = round(($_SESSION['Q45'] + $_SESSION['Q46'] + $_SESSION['Q47'] + $_SESSION['Q50'] + $_SESSION['Q52'])/5,1); 
        $EI = round(($_SESSION['Q48'] + $_SESSION['Q51'] + $_SESSION['Q53'])/3,1); 
        $CI = round(($_SESSION['Q49'])/1,1); 

        $professionalave = round(($II*0.81+$EI*0.71+$CI)/3,1);
        //moral
        $perceptual = round(($_SESSION['Q54'] + $_SESSION['Q55'] + $_SESSION['Q57'])/3,1); 
        $reflective = round(($_SESSION['Q56'] + $_SESSION['Q58'])/2,1); 
        //ethical
        $environment = round(($_SESSION['Q61'] + $_SESSION['Q62'])/2,1); 
        $EP = round(($_SESSION['Q59'] + $_SESSION['Q60'])/2,1); 

        $ethave = round(($environment*0.69+$EP*0.71)/2,1);
        //MD
        $moral = round(($_SESSION['Q63'] + $_SESSION['Q64'] + $_SESSION['Q65'] + $_SESSION['Q66']+$_SESSION['Q67'] + $_SESSION['Q68'] + $_SESSION['Q69'] + $_SESSION['Q70'])/8,1); 

        //role
        $commercialall = array();
        $ethicalall = array();
        $exploitationall = array();
        $independenceall = array();
        $advisoryall = array();
        $subservientall = array();
        //organizational
        $resistantall = array();
        $positiveall = array();
        $unevenall = array();
        //team
        $eoall = array();
        $financialall = array();
        $societyall = array();
        $productall = array();
        //professional
        $IIall = array();
        $EIall = array();
        $CIall = array();
        //ethical
        $environmentall = array();
        $EPall = array();

        //overall data
        require "database/config.php";  
          $conn = new mysqli($host, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          } 

          $sql = "SELECT * FROM answersheet";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            //role
            $commercialbench = ($row["Q15"]+$row["Q19"]+$row["Q22"]+$row["Q23"])/4;
            array_push($commercialall,$commercialbench);
            $ethicalbench = ($row["Q18"]+$row["Q24"]+$row["Q27"])/3;
            array_push($ethicalall,$ethicalbench);
            $exploitationbench = ($row["Q14"]+$row["Q21"]+$row["Q26"])/3;
            array_push($exploitationall,$exploitationbench);
            $independencebench = ($row["Q11"]+$row["Q17"])/2;
            array_push($independenceall,$independencebench);
            $advisorybench = ($row["Q13"]+$row["Q16"])/2;
            array_push($advisoryall,$advisorybench);
            $subservientbench = ($row["Q12"]+$row["Q20"]+$row["Q25"]+$row["Q28"])/4;
            array_push($subservientall,$subservientbench);
            $resistantbench = ($row["Q31"]+$row["Q32"]+$row["Q33"])/3;
            array_push($resistantall,$resistantbench);
            $positivebench = ($row["Q29"]+$row["Q30"])/2;
            array_push($positiveall,$positivebench);
            $unevenbench = ($row["Q34"]+$row["Q35"])/2;
            array_push($unevenall,$unevenbench);
            $eobench = ($row["Q36"]+$row["Q38"]+$row["Q40"])/3;
            array_push($eoall,$eobench);
            $financialbench = ($row["Q41"]+$row["Q43"])/2;
            array_push($financialall,$financialbench);
            $societybench = ($row["Q37"]+$row["Q39"])/2;
            array_push($societyall,$societybench);
            $productbench = ($row["Q42"]+$row["Q44"])/2;
            array_push($productall,$productbench);
            $IIbench = ($row["Q45"]+$row["Q46"]+$row["Q47"]+$row["Q50"]+$row["Q52"])/5;
            array_push($IIall,$IIbench);
            $EIbench = ($row["Q48"]+$row["Q51"]+$row["Q53"])/3;
            array_push($EIall,$EIbench);
            $CIbench = ($row["Q49"])/1;
            array_push($CIall,$CIbench);
            $environmentbench = ($row["Q61"]+$row["Q62"])/2;
            array_push($environmentall,$environmentbench);
            $EPbench = ($row["Q59"]+$row["Q60"])/2;
            array_push($EPall,$EPbench);
            
            //echo round($commercialbench,1)."<br>";
            //echo $row["Q41"];

          }} else {
            echo "0 results";
          }
          $commercialave = round(array_sum($commercialall)/sizeof($commercialall),1);  
          $ethicalave = round(array_sum($ethicalall)/sizeof($ethicalall),1);  
          $exploitationave = round(array_sum($exploitationall)/sizeof($exploitationall),1); 
          $independenceave = round(array_sum($independenceall)/sizeof($independenceall),1); 
          $advisoryave = round(array_sum($advisoryall)/sizeof($advisoryall),1); 
          $subservientave = round(array_sum($subservientall)/sizeof($subservientall),1); 
          $resistantave = round(array_sum($resistantall)/sizeof($resistantall),1);  
          $positiveave = round(array_sum($positiveall)/sizeof($positiveall),1);  
          $unevenave = round(array_sum($unevenall)/sizeof($unevenall),1);  
          $eoave = round(array_sum($eoall)/sizeof($eoall),1);  
          $financialave = round(array_sum($financialall)/sizeof($financialall),1);  
          $societyave = round(array_sum($societyall)/sizeof($societyall),1);  
          $productave = round(array_sum($productall)/sizeof($productall),1);  
          $IIave = round(array_sum($IIall)/sizeof($IIall),1);  
          $EIave = round(array_sum($EIall)/sizeof($EIall),1);  
          $CIave = round(array_sum($CIall)/sizeof($CIall),1);  
          $environmentave = round(array_sum($environmentall)/sizeof($environmentall),1);  
          $EPave = round(array_sum($EPall)/sizeof($EPall),1);  

          $commercialround = $commercialall;

          for($id = 0; $id < sizeof($commercialround); $id++) {
          $commercialround[$id] = round($commercialround[$id],1);
          }

          //charts
          //commercial
          $one=0;
          $two=0;
          $three=0;
          $four=0;
          $five=0;
          $six=0;
          $seven=0;
          $eight=0;
          $nine=0;
          $ten=0;
          $eleven=0;
          $twelve=0;

          for($id = 0; $id < sizeof($commercialall); $id++) {
            if($commercialall[$id]>=1 && $commercialall[$id]<1.5){
              $one += 1;
            } elseif ($commercialall[$id]>=1.5 && $commercialall[$id]<2) {
              $two += 1;
            } elseif ($commercialall[$id]>=2 && $commercialall[$id]<2.5) {
              $three += 1;
            } elseif ($commercialall[$id]>=2.5 && $commercialall[$id]<3) {
              $four += 1;
            } elseif ($commercialall[$id]>=3 && $commercialall[$id]<3.5) {
              $five += 1;
            } elseif ($commercialall[$id]>=3.5 && $commercialall[$id]<4) {
              $six += 1;
            } elseif ($commercialall[$id]>=4 && $commercialall[$id]<4.5) {
              $seven += 1;
            } elseif ($commercialall[$id]>=4.5 && $commercialall[$id]<5) {
              $eight += 1;
            } elseif ($commercialall[$id]>=5 && $commercialall[$id]<5.5) {
              $nine += 1;
            } elseif ($commercialall[$id]>=5.5 && $commercialall[$id]<6) {
              $ten += 1;
            } elseif ($commercialall[$id]>=6 && $commercialall[$id]<6.5) {
              $eleven += 1;
            } elseif ($commercialall[$id]>=6.5 && $commercialall[$id]<=7) {
              $twelve += 1;
            }             
          }
          $one=round($one/sizeof($commercialall)*100,1);
          $two=round($two/sizeof($commercialall)*100,1);
          $three=round($three/sizeof($commercialall)*100,1);
          $four=round($four/sizeof($commercialall)*100,1);
          $five=round($five/sizeof($commercialall)*100,1);
          $six=round($six/sizeof($commercialall)*100,1);
          $seven=round($seven/sizeof($commercialall)*100,1);
          $eight=round($eight/sizeof($commercialall)*100,1);
          $nine=round($nine/sizeof($commercialall)*100,1);
          $ten=round($ten/sizeof($commercialall)*100,1);
          $eleven=round($eleven/sizeof($commercialall)*100,1);
          $twelve=round($twelve/sizeof($commercialall)*100,1);

          //ethical
          $one2=0;
          $two2=0;
          $three2=0;
          $four2=0;
          $five2=0;
          $six2=0;
          $seven2=0;
          $eight2=0;
          $nine2=0;
          $ten2=0;
          $eleven2=0;
          $twelve2=0;

          for($id = 0; $id < sizeof($ethicalall); $id++) {
            if($ethicalall[$id]>=1 && $ethicalall[$id]<1.5){
              $one2 += 1;
            } elseif ($ethicalall[$id]>=1.5 && $ethicalall[$id]<2) {
              $two2 += 1;
            } elseif ($ethicalall[$id]>=2 && $ethicalall[$id]<2.5) {
              $three2 += 1;
            } elseif ($ethicalall[$id]>=2.5 && $ethicalall[$id]<3) {
              $four2 += 1;
            } elseif ($ethicalall[$id]>=3 && $ethicalall[$id]<3.5) {
              $five2 += 1;
            } elseif ($ethicalall[$id]>=3.5 && $ethicalall[$id]<4) {
              $six2 += 1;
            } elseif ($ethicalall[$id]>=4 && $ethicalall[$id]<4.5) {
              $seven2 += 1;
            } elseif ($ethicalall[$id]>=4.5 && $ethicalall[$id]<5) {
              $eight2 += 1;
            } elseif ($ethicalall[$id]>=5 && $ethicalall[$id]<5.5) {
              $nine2 += 1;
            } elseif ($ethicalall[$id]>=5.5 && $ethicalall[$id]<6) {
              $ten2 += 1;
            } elseif ($ethicalall[$id]>=6 && $ethicalall[$id]<6.5) {
              $eleven2 += 1;
            } elseif ($ethicalall[$id]>=6.5 && $ethicalall[$id]<=7) {
              $twelve2 += 1;
            }             
          }
          $one2=round($one2/sizeof($ethicalall)*100,1);
          $two2=round($two2/sizeof($ethicalall)*100,1);
          $three2=round($three2/sizeof($ethicalall)*100,1);
          $four2=round($four2/sizeof($ethicalall)*100,1);
          $five2=round($five2/sizeof($ethicalall)*100,1);
          $six2=round($six2/sizeof($ethicalall)*100,1);
          $seven2=round($seven2/sizeof($ethicalall)*100,1);
          $eight2=round($eight2/sizeof($ethicalall)*100,1);
          $nine2=round($nine2/sizeof($ethicalall)*100,1);
          $ten2=round($ten2/sizeof($ethicalall)*100,1);
          $eleven2=round($eleven2/sizeof($ethicalall)*100,1);
          $twelve2=round($twelve2/sizeof($ethicalall)*100,1);

          //Exploitation
          $one3=0;
          $two3=0;
          $three3=0;
          $four3=0;
          $five3=0;
          $six3=0;
          $seven3=0;
          $eight3=0;
          $nine3=0;
          $ten3=0;
          $eleven3=0;
          $twelve3=0;

          for($id = 0; $id < sizeof($exploitationall); $id++) {
            if($exploitationall[$id]>=1 && $exploitationall[$id]<1.5){
              $one3 += 1;
            } elseif ($exploitationall[$id]>=1.5 && $exploitationall[$id]<2) {
              $two3 += 1;
            } elseif ($exploitationall[$id]>=2 && $exploitationall[$id]<2.5) {
              $three3 += 1;
            } elseif ($exploitationall[$id]>=2.5 && $exploitationall[$id]<3) {
              $four3 += 1;
            } elseif ($exploitationall[$id]>=3 && $exploitationall[$id]<3.5) {
              $five3 += 1;
            } elseif ($exploitationall[$id]>=3.5 && $exploitationall[$id]<4) {
              $six3 += 1;
            } elseif ($exploitationall[$id]>=4 && $exploitationall[$id]<4.5) {
              $seven3 += 1;
            } elseif ($exploitationall[$id]>=4.5 && $exploitationall[$id]<5) {
              $eight3 += 1;
            } elseif ($exploitationall[$id]>=5 && $exploitationall[$id]<5.5) {
              $nine3 += 1;
            } elseif ($exploitationall[$id]>=5.5 && $exploitationall[$id]<6) {
              $ten3 += 1;
            } elseif ($exploitationall[$id]>=6 && $exploitationall[$id]<6.5) {
              $eleven3 += 1;
            } elseif ($exploitationall[$id]>=6.5 && $exploitationall[$id]<=7) {
              $twelve3 += 1;
            }             
          }
          $one3=round($one3/sizeof($exploitationall)*100,1);
          $two3=round($two3/sizeof($exploitationall)*100,1);
          $three3=round($three3/sizeof($exploitationall)*100,1);
          $four3=round($four3/sizeof($exploitationall)*100,1);
          $five3=round($five3/sizeof($exploitationall)*100,1);
          $six3=round($six3/sizeof($exploitationall)*100,1);
          $seven3=round($seven3/sizeof($exploitationall)*100,1);
          $eight3=round($eight3/sizeof($exploitationall)*100,1);
          $nine3=round($nine3/sizeof($exploitationall)*100,1);
          $ten3=round($ten3/sizeof($exploitationall)*100,1);
          $eleven3=round($eleven3/sizeof($exploitationall)*100,1);
          $twelve3=round($twelve3/sizeof($exploitationall)*100,1);

          //independence
          $one4=0;
          $two4=0;
          $three4=0;
          $four4=0;
          $five4=0;
          $six4=0;
          $seven4=0;
          $eight4=0;
          $nine4=0;
          $ten4=0;
          $eleven4=0;
          $twelve4=0;

          for($id = 0; $id < sizeof($independenceall); $id++) {
            if($independenceall[$id]>=1 && $independenceall[$id]<1.5){
              $one4 += 1;
            } elseif ($independenceall[$id]>=1.5 && $independenceall[$id]<2) {
              $two4 += 1;
            } elseif ($independenceall[$id]>=2 && $independenceall[$id]<2.5) {
              $three4 += 1;
            } elseif ($independenceall[$id]>=2.5 && $independenceall[$id]<3) {
              $four4 += 1;
            } elseif ($independenceall[$id]>=3 && $independenceall[$id]<3.5) {
              $five4 += 1;
            } elseif ($independenceall[$id]>=3.5 && $independenceall[$id]<4) {
              $six4 += 1;
            } elseif ($independenceall[$id]>=4 && $independenceall[$id]<4.5) {
              $seven4 += 1;
            } elseif ($independenceall[$id]>=4.5 && $independenceall[$id]<5) {
              $eight4 += 1;
            } elseif ($independenceall[$id]>=5 && $independenceall[$id]<5.5) {
              $nine4 += 1;
            } elseif ($independenceall[$id]>=5.5 && $independenceall[$id]<6) {
              $ten4 += 1;
            } elseif ($independenceall[$id]>=6 && $independenceall[$id]<6.5) {
              $eleven4 += 1;
            } elseif ($independenceall[$id]>=6.5 && $independenceall[$id]<=7) {
              $twelve4 += 1;
            }             
          }
          $one4=round($one4/sizeof($independenceall)*100,1);
          $two4=round($two4/sizeof($independenceall)*100,1);
          $three4=round($three4/sizeof($independenceall)*100,1);
          $four4=round($four4/sizeof($independenceall)*100,1);
          $five4=round($five4/sizeof($independenceall)*100,1);
          $six4=round($six4/sizeof($independenceall)*100,1);
          $seven4=round($seven4/sizeof($independenceall)*100,1);
          $eight4=round($eight4/sizeof($independenceall)*100,1);
          $nine4=round($nine4/sizeof($independenceall)*100,1);
          $ten4=round($ten4/sizeof($independenceall)*100,1);
          $eleven4=round($eleven4/sizeof($independenceall)*100,1);
          $twelve4=round($twelve4/sizeof($independenceall)*100,1);  

          //independence
          $one5=0;
          $two5=0;
          $three5=0;
          $four5=0;
          $five5=0;
          $six5=0;
          $seven5=0;
          $eight5=0;
          $nine5=0;
          $ten5=0;
          $eleven5=0;
          $twelve5=0;

          for($id = 0; $id < sizeof($advisoryall); $id++) {
            if($advisoryall[$id]>=1 && $advisoryall[$id]<1.5){
              $one5 += 1;
            } elseif ($advisoryall[$id]>=1.5 && $advisoryall[$id]<2) {
              $two5 += 1;
            } elseif ($advisoryall[$id]>=2 && $advisoryall[$id]<2.5) {
              $three5 += 1;
            } elseif ($advisoryall[$id]>=2.5 && $advisoryall[$id]<3) {
              $four5 += 1;
            } elseif ($advisoryall[$id]>=3 && $advisoryall[$id]<3.5) {
              $five5 += 1;
            } elseif ($advisoryall[$id]>=3.5 && $advisoryall[$id]<4) {
              $six5 += 1;
            } elseif ($advisoryall[$id]>=4 && $advisoryall[$id]<4.5) {
              $seven5 += 1;
            } elseif ($advisoryall[$id]>=4.5 && $advisoryall[$id]<5) {
              $eight5 += 1;
            } elseif ($advisoryall[$id]>=5 && $advisoryall[$id]<5.5) {
              $nine5 += 1;
            } elseif ($advisoryall[$id]>=5.5 && $advisoryall[$id]<6) {
              $ten5 += 1;
            } elseif ($advisoryall[$id]>=6 && $advisoryall[$id]<6.5) {
              $eleven5 += 1;
            } elseif ($advisoryall[$id]>=6.5 && $advisoryall[$id]<=7) {
              $twelve5 += 1;
            }             
          }
          $one5=round($one5/sizeof($advisoryall)*100,1);
          $two5=round($two5/sizeof($advisoryall)*100,1);
          $three5=round($three5/sizeof($advisoryall)*100,1);
          $four5=round($four5/sizeof($advisoryall)*100,1);
          $five5=round($five5/sizeof($advisoryall)*100,1);
          $six5=round($six5/sizeof($advisoryall)*100,1);
          $seven5=round($seven5/sizeof($advisoryall)*100,1);
          $eight5=round($eight5/sizeof($advisoryall)*100,1);
          $nine5=round($nine5/sizeof($advisoryall)*100,1);
          $ten5=round($ten5/sizeof($advisoryall)*100,1);
          $eleven5=round($eleven5/sizeof($advisoryall)*100,1);
          $twelve5=round($twelve5/sizeof($advisoryall)*100,1);

          //subservient   
          $one6=0;
          $two6=0;
          $three6=0;
          $four6=0;
          $five6=0;
          $six6=0;
          $seven6=0;
          $eight6=0;
          $nine6=0;
          $ten6=0;
          $eleven6=0;
          $twelve6=0;

          for($id = 0; $id < sizeof($subservientall); $id++) {
            if($subservientall[$id]>=1 && $subservientall[$id]<1.5){
              $one6 += 1;
            } elseif ($subservientall[$id]>=1.5 && $subservientall[$id]<2) {
              $two6 += 1;
            } elseif ($subservientall[$id]>=2 && $subservientall[$id]<2.5) {
              $three6 += 1;
            } elseif ($subservientall[$id]>=2.5 && $subservientall[$id]<3) {
              $four6 += 1;
            } elseif ($subservientall[$id]>=3 && $subservientall[$id]<3.5) {
              $five6 += 1;
            } elseif ($subservientall[$id]>=3.5 && $subservientall[$id]<4) {
              $six6 += 1;
            } elseif ($subservientall[$id]>=4 && $subservientall[$id]<4.5) {
              $seven6 += 1;
            } elseif ($subservientall[$id]>=4.5 && $subservientall[$id]<5) {
              $eight6 += 1;
            } elseif ($subservientall[$id]>=5 && $subservientall[$id]<5.5) {
              $nine6 += 1;
            } elseif ($subservientall[$id]>=5.5 && $subservientall[$id]<6) {
              $ten6 += 1;
            } elseif ($subservientall[$id]>=6 && $subservientall[$id]<6.5) {
              $eleven6 += 1;
            } elseif ($subservientall[$id]>=6.5 && $subservientall[$id]<=7) {
              $twelve6 += 1;
            }             
          }
          $one6=round($one6/sizeof($subservientall)*100,1);
          $two6=round($two6/sizeof($subservientall)*100,1);
          $three6=round($three6/sizeof($subservientall)*100,1);
          $four6=round($four6/sizeof($subservientall)*100,1);
          $five6=round($five6/sizeof($subservientall)*100,1);
          $six6=round($six6/sizeof($subservientall)*100,1);
          $seven6=round($seven6/sizeof($subservientall)*100,1);
          $eight6=round($eight6/sizeof($subservientall)*100,1);
          $nine6=round($nine6/sizeof($subservientall)*100,1);
          $ten6=round($ten6/sizeof($subservientall)*100,1);
          $eleven6=round($eleven6/sizeof($subservientall)*100,1);
          $twelve6=round($twelve6/sizeof($subservientall)*100,1);       

          //resistant   
          $one7=0;
          $two7=0;
          $three7=0;
          $four7=0;
          $five7=0;
          $six7=0;
          $seven7=0;
          $eight7=0;
          $nine7=0;
          $ten7=0;
          $eleven7=0;
          $twelve7=0;

          for($id = 0; $id < sizeof($resistantall); $id++) {
            if($resistantall[$id]>=1 && $resistantall[$id]<1.5){
              $one7 += 1;
            } elseif ($resistantall[$id]>=1.5 && $resistantall[$id]<2) {
              $two7 += 1;
            } elseif ($resistantall[$id]>=2 && $resistantall[$id]<2.5) {
              $three7 += 1;
            } elseif ($resistantall[$id]>=2.5 && $resistantall[$id]<3) {
              $four7 += 1;
            } elseif ($resistantall[$id]>=3 && $resistantall[$id]<3.5) {
              $five7 += 1;
            } elseif ($resistantall[$id]>=3.5 && $resistantall[$id]<4) {
              $six7 += 1;
            } elseif ($resistantall[$id]>=4 && $resistantall[$id]<4.5) {
              $seven7 += 1;
            } elseif ($resistantall[$id]>=4.5 && $resistantall[$id]<5) {
              $eight7 += 1;
            } elseif ($resistantall[$id]>=5 && $resistantall[$id]<5.5) {
              $nine7 += 1;
            } elseif ($resistantall[$id]>=5.5 && $resistantall[$id]<6) {
              $ten7 += 1;
            } elseif ($resistantall[$id]>=6 && $resistantall[$id]<6.5) {
              $eleven7 += 1;
            } elseif ($resistantall[$id]>=6.5 && $resistantall[$id]<=7) {
              $twelve7 += 1;
            }             
          }
          $one7=round($one7/sizeof($resistantall)*100,1);
          $two7=round($two7/sizeof($resistantall)*100,1);
          $three7=round($three7/sizeof($resistantall)*100,1);
          $four7=round($four7/sizeof($resistantall)*100,1);
          $five7=round($five7/sizeof($resistantall)*100,1);
          $six7=round($six7/sizeof($resistantall)*100,1);
          $seven7=round($seven7/sizeof($resistantall)*100,1);
          $eight7=round($eight7/sizeof($resistantall)*100,1);
          $nine7=round($nine7/sizeof($resistantall)*100,1);
          $ten7=round($ten7/sizeof($resistantall)*100,1);
          $eleven7=round($eleven7/sizeof($resistantall)*100,1);
          $twelve7=round($twelve7/sizeof($resistantall)*100,1);   

          //positive   
          $one8=0;
          $two8=0;
          $three8=0;
          $four8=0;
          $five8=0;
          $six8=0;
          $seven8=0;
          $eight8=0;
          $nine8=0;
          $ten8=0;
          $eleven8=0;
          $twelve8=0;

          for($id = 0; $id < sizeof($positiveall); $id++) {
            if($positiveall[$id]>=1 && $positiveall[$id]<1.5){
              $one8 += 1;
            } elseif ($positiveall[$id]>=1.5 && $positiveall[$id]<2) {
              $two8 += 1;
            } elseif ($positiveall[$id]>=2 && $positiveall[$id]<2.5) {
              $three8 += 1;
            } elseif ($positiveall[$id]>=2.5 && $positiveall[$id]<3) {
              $four8 += 1;
            } elseif ($positiveall[$id]>=3 && $positiveall[$id]<3.5) {
              $five8 += 1;
            } elseif ($positiveall[$id]>=3.5 && $positiveall[$id]<4) {
              $six8 += 1;
            } elseif ($positiveall[$id]>=4 && $positiveall[$id]<4.5) {
              $seven8 += 1;
            } elseif ($positiveall[$id]>=4.5 && $positiveall[$id]<5) {
              $eight8 += 1;
            } elseif ($positiveall[$id]>=5 && $positiveall[$id]<5.5) {
              $nine8 += 1;
            } elseif ($positiveall[$id]>=5.5 && $positiveall[$id]<6) {
              $ten8 += 1;
            } elseif ($positiveall[$id]>=6 && $positiveall[$id]<6.5) {
              $eleven8 += 1;
            } elseif ($positiveall[$id]>=6.5 && $positiveall[$id]<=7) {
              $twelve8 += 1;
            }             
          }
          $one8=round($one8/sizeof($positiveall)*100,1);
          $two8=round($two8/sizeof($positiveall)*100,1);
          $three8=round($three8/sizeof($positiveall)*100,1);
          $four8=round($four8/sizeof($positiveall)*100,1);
          $five8=round($five8/sizeof($positiveall)*100,1);
          $six8=round($six8/sizeof($positiveall)*100,1);
          $seven8=round($seven8/sizeof($positiveall)*100,1);
          $eight8=round($eight8/sizeof($positiveall)*100,1);
          $nine8=round($nine8/sizeof($positiveall)*100,1);
          $ten8=round($ten8/sizeof($positiveall)*100,1);
          $eleven8=round($eleven8/sizeof($positiveall)*100,1);
          $twelve8=round($twelve8/sizeof($positiveall)*100,1);  

          //uneven   
          $one9=0;
          $two9=0;
          $three9=0;
          $four9=0;
          $five9=0;
          $six9=0;
          $seven9=0;
          $eight9=0;
          $nine9=0;
          $ten9=0;
          $eleven9=0;
          $twelve9=0;

          for($id = 0; $id < sizeof($unevenall); $id++) {
            if($unevenall[$id]>=1 && $unevenall[$id]<1.5){
              $one9 += 1;
            } elseif ($unevenall[$id]>=1.5 && $unevenall[$id]<2) {
              $two9 += 1;
            } elseif ($unevenall[$id]>=2 && $unevenall[$id]<2.5) {
              $three9 += 1;
            } elseif ($unevenall[$id]>=2.5 && $unevenall[$id]<3) {
              $four9 += 1;
            } elseif ($unevenall[$id]>=3 && $unevenall[$id]<3.5) {
              $five9 += 1;
            } elseif ($unevenall[$id]>=3.5 && $unevenall[$id]<4) {
              $six9 += 1;
            } elseif ($unevenall[$id]>=4 && $unevenall[$id]<4.5) {
              $seven9 += 1;
            } elseif ($unevenall[$id]>=4.5 && $unevenall[$id]<5) {
              $eight9 += 1;
            } elseif ($unevenall[$id]>=5 && $unevenall[$id]<5.5) {
              $nine9 += 1;
            } elseif ($unevenall[$id]>=5.5 && $unevenall[$id]<6) {
              $ten9 += 1;
            } elseif ($unevenall[$id]>=6 && $unevenall[$id]<6.5) {
              $eleven9 += 1;
            } elseif ($unevenall[$id]>=6.5 && $unevenall[$id]<=7) {
              $twelve9 += 1;
            }             
          }
          $one9=round($one9/sizeof($unevenall)*100,1);
          $two9=round($two9/sizeof($unevenall)*100,1);
          $three9=round($three9/sizeof($unevenall)*100,1);
          $four9=round($four9/sizeof($unevenall)*100,1);
          $five9=round($five9/sizeof($unevenall)*100,1);
          $six9=round($six9/sizeof($unevenall)*100,1);
          $seven9=round($seven9/sizeof($unevenall)*100,1);
          $eight9=round($eight9/sizeof($unevenall)*100,1);
          $nine9=round($nine9/sizeof($unevenall)*100,1);
          $ten9=round($ten9/sizeof($unevenall)*100,1);
          $eleven9=round($eleven9/sizeof($unevenall)*100,1);
          $twelve9=round($twelve9/sizeof($unevenall)*100,1);  

          //eo   
          $one10=0;
          $two10=0;
          $three10=0;
          $four10=0;
          $five10=0;
          $six10=0;
          $seven10=0;
          $eight10=0;
          $nine10=0;
          $ten10=0;
          $eleven10=0;
          $twelve10=0;

          for($id = 0; $id < sizeof($eoall); $id++) {
            if($eoall[$id]>=1 && $eoall[$id]<1.5){
              $one10 += 1;
            } elseif ($eoall[$id]>=1.5 && $eoall[$id]<2) {
              $two10 += 1;
            } elseif ($eoall[$id]>=2 && $eoall[$id]<2.5) {
              $three10 += 1;
            } elseif ($eoall[$id]>=2.5 && $eoall[$id]<3) {
              $four10 += 1;
            } elseif ($eoall[$id]>=3 && $eoall[$id]<3.5) {
              $five10 += 1;
            } elseif ($eoall[$id]>=3.5 && $eoall[$id]<4) {
              $six10 += 1;
            } elseif ($eoall[$id]>=4 && $eoall[$id]<4.5) {
              $seven10 += 1;
            } elseif ($eoall[$id]>=4.5 && $eoall[$id]<5) {
              $eight10 += 1;
            } elseif ($eoall[$id]>=5 && $eoall[$id]<5.5) {
              $nine10 += 1;
            } elseif ($eoall[$id]>=5.5 && $eoall[$id]<6) {
              $ten10 += 1;
            } elseif ($eoall[$id]>=6 && $eoall[$id]<6.5) {
              $eleven10 += 1;
            } elseif ($eoall[$id]>=6.5 && $eoall[$id]<=7) {
              $twelve10 += 1;
            }             
          }
          $one10=round($one10/sizeof($eoall)*100,1);
          $two10=round($two10/sizeof($eoall)*100,1);
          $three10=round($three10/sizeof($eoall)*100,1);
          $four10=round($four10/sizeof($eoall)*100,1);
          $five10=round($five10/sizeof($eoall)*100,1);
          $six10=round($six10/sizeof($eoall)*100,1);
          $seven10=round($seven10/sizeof($eoall)*100,1);
          $eight10=round($eight10/sizeof($eoall)*100,1);
          $nine10=round($nine10/sizeof($eoall)*100,1);
          $ten10=round($ten10/sizeof($eoall)*100,1);
          $eleven10=round($eleven10/sizeof($eoall)*100,1);
          $twelve10=round($twelve10/sizeof($eoall)*100,1); 

          //financial 
          $one11=0;
          $two11=0;
          $three11=0;
          $four11=0;
          $five11=0;
          $six11=0;
          $seven11=0;
          $eight11=0;
          $nine11=0;
          $ten11=0;
          $eleven11=0;
          $twelve11=0;

          for($id = 0; $id < sizeof($financialall); $id++) {
            if($financialall[$id]>=1 && $financialall[$id]<1.5){
              $one11 += 1;
            } elseif ($financialall[$id]>=1.5 && $financialall[$id]<2) {
              $two11 += 1;
            } elseif ($financialall[$id]>=2 && $financialall[$id]<2.5) {
              $three11 += 1;
            } elseif ($financialall[$id]>=2.5 && $financialall[$id]<3) {
              $four11 += 1;
            } elseif ($financialall[$id]>=3 && $financialall[$id]<3.5) {
              $five11 += 1;
            } elseif ($financialall[$id]>=3.5 && $financialall[$id]<4) {
              $six11 += 1;
            } elseif ($financialall[$id]>=4 && $financialall[$id]<4.5) {
              $seven11 += 1;
            } elseif ($financialall[$id]>=4.5 && $financialall[$id]<5) {
              $eight11 += 1;
            } elseif ($financialall[$id]>=5 && $financialall[$id]<5.5) {
              $nine11 += 1;
            } elseif ($financialall[$id]>=5.5 && $financialall[$id]<6) {
              $ten11 += 1;
            } elseif ($financialall[$id]>=6 && $financialall[$id]<6.5) {
              $eleven11 += 1;
            } elseif ($financialall[$id]>=6.5 && $financialall[$id]<=7) {
              $twelve11 += 1;
            }             
          }
          $one11=round($one11/sizeof($financialall)*100,1);
          $two11=round($two11/sizeof($financialall)*100,1);
          $three11=round($three11/sizeof($financialall)*100,1);
          $four11=round($four11/sizeof($financialall)*100,1);
          $five11=round($five11/sizeof($financialall)*100,1);
          $six11=round($six11/sizeof($financialall)*100,1);
          $seven11=round($seven11/sizeof($financialall)*100,1);
          $eight11=round($eight11/sizeof($financialall)*100,1);
          $nine11=round($nine11/sizeof($financialall)*100,1);
          $ten11=round($ten11/sizeof($financialall)*100,1);
          $eleven11=round($eleven11/sizeof($financialall)*100,1);
          $twelve11=round($twelve11/sizeof($financialall)*100,1); 

          //society
          $one12=0;
          $two12=0;
          $three12=0;
          $four12=0;
          $five12=0;
          $six12=0;
          $seven12=0;
          $eight12=0;
          $nine12=0;
          $ten12=0;
          $eleven12=0;
          $twelve12=0;

          for($id = 0; $id < sizeof($societyall); $id++) {
            if($societyall[$id]>=1 && $societyall[$id]<1.5){
              $one12 += 1;
            } elseif ($societyall[$id]>=1.5 && $societyall[$id]<2) {
              $two12 += 1;
            } elseif ($societyall[$id]>=2 && $societyall[$id]<2.5) {
              $three12 += 1;
            } elseif ($societyall[$id]>=2.5 && $societyall[$id]<3) {
              $four12 += 1;
            } elseif ($societyall[$id]>=3 && $societyall[$id]<3.5) {
              $five12 += 1;
            } elseif ($societyall[$id]>=3.5 && $societyall[$id]<4) {
              $six12 += 1;
            } elseif ($societyall[$id]>=4 && $societyall[$id]<4.5) {
              $seven12 += 1;
            } elseif ($societyall[$id]>=4.5 && $societyall[$id]<5) {
              $eight12 += 1;
            } elseif ($societyall[$id]>=5 && $societyall[$id]<5.5) {
              $nine12 += 1;
            } elseif ($societyall[$id]>=5.5 && $societyall[$id]<6) {
              $ten12 += 1;
            } elseif ($societyall[$id]>=6 && $societyall[$id]<6.5) {
              $eleven12 += 1;
            } elseif ($societyall[$id]>=6.5 && $societyall[$id]<=7) {
              $twelve12 += 1;
            }             
          }
          $one12=round($one12/sizeof($societyall)*100,1);
          $two12=round($two12/sizeof($societyall)*100,1);
          $three12=round($three12/sizeof($societyall)*100,1);
          $four12=round($four12/sizeof($societyall)*100,1);
          $five12=round($five12/sizeof($societyall)*100,1);
          $six12=round($six12/sizeof($societyall)*100,1);
          $seven12=round($seven12/sizeof($societyall)*100,1);
          $eight12=round($eight12/sizeof($societyall)*100,1);
          $nine12=round($nine12/sizeof($societyall)*100,1);
          $ten12=round($ten12/sizeof($societyall)*100,1);
          $eleven12=round($eleven12/sizeof($societyall)*100,1);
          $twelve12=round($twelve12/sizeof($societyall)*100,1); 
          //product
          $one13=0;
          $two13=0;
          $three13=0;
          $four13=0;
          $five13=0;
          $six13=0;
          $seven13=0;
          $eight13=0;
          $nine13=0;
          $ten13=0;
          $eleven13=0;
          $twelve13=0;

          for($id = 0; $id < sizeof($productall); $id++) {
            if($productall[$id]>=1 && $productall[$id]<1.5){
              $one13 += 1;
            } elseif ($productall[$id]>=1.5 && $productall[$id]<2) {
              $two13 += 1;
            } elseif ($productall[$id]>=2 && $productall[$id]<2.5) {
              $three13 += 1;
            } elseif ($productall[$id]>=2.5 && $productall[$id]<3) {
              $four13 += 1;
            } elseif ($productall[$id]>=3 && $productall[$id]<3.5) {
              $five13 += 1;
            } elseif ($productall[$id]>=3.5 && $productall[$id]<4) {
              $six13 += 1;
            } elseif ($productall[$id]>=4 && $productall[$id]<4.5) {
              $seven13 += 1;
            } elseif ($productall[$id]>=4.5 && $productall[$id]<5) {
              $eight13 += 1;
            } elseif ($productall[$id]>=5 && $productall[$id]<5.5) {
              $nine13 += 1;
            } elseif ($productall[$id]>=5.5 && $productall[$id]<6) {
              $ten13 += 1;
            } elseif ($productall[$id]>=6 && $productall[$id]<6.5) {
              $eleven13 += 1;
            } elseif ($productall[$id]>=6.5 && $productall[$id]<=7) {
              $twelve13 += 1;
            }             
          }
          $one13=round($one13/sizeof($productall)*100,1);
          $two13=round($two13/sizeof($productall)*100,1);
          $three13=round($three13/sizeof($productall)*100,1);
          $four13=round($four13/sizeof($productall)*100,1);
          $five13=round($five13/sizeof($productall)*100,1);
          $six13=round($six13/sizeof($productall)*100,1);
          $seven13=round($seven13/sizeof($productall)*100,1);
          $eight13=round($eight13/sizeof($productall)*100,1);
          $nine13=round($nine13/sizeof($productall)*100,1);
          $ten13=round($ten13/sizeof($productall)*100,1);
          $eleven13=round($eleven13/sizeof($productall)*100,1);
          $twelve13=round($twelve13/sizeof($productall)*100,1); 
          //II
          $one14=0;
          $two14=0;
          $three14=0;
          $four14=0;
          $five14=0;
          $six14=0;
          $seven14=0;
          $eight14=0;
          $nine14=0;
          $ten14=0;
          $eleven14=0;
          $twelve14=0;

          for($id = 0; $id < sizeof($IIall); $id++) {
            if($IIall[$id]>=1 && $IIall[$id]<1.5){
              $one14 += 1;
            } elseif ($IIall[$id]>=1.5 && $IIall[$id]<2) {
              $two14 += 1;
            } elseif ($IIall[$id]>=2 && $IIall[$id]<2.5) {
              $three14 += 1;
            } elseif ($IIall[$id]>=2.5 && $IIall[$id]<3) {
              $four14 += 1;
            } elseif ($IIall[$id]>=3 && $IIall[$id]<3.5) {
              $five14 += 1;
            } elseif ($IIall[$id]>=3.5 && $IIall[$id]<4) {
              $six14 += 1;
            } elseif ($IIall[$id]>=4 && $IIall[$id]<4.5) {
              $seven14 += 1;
            } elseif ($IIall[$id]>=4.5 && $IIall[$id]<5) {
              $eight14 += 1;
            } elseif ($IIall[$id]>=5 && $IIall[$id]<5.5) {
              $nine14 += 1;
            } elseif ($IIall[$id]>=5.5 && $IIall[$id]<6) {
              $ten14 += 1;
            } elseif ($IIall[$id]>=6 && $IIall[$id]<6.5) {
              $eleven14 += 1;
            } elseif ($IIall[$id]>=6.5 && $IIall[$id]<=7) {
              $twelve14 += 1;
            }             
          }
          $one14=round($one14/sizeof($IIall)*100,1);
          $two14=round($two14/sizeof($IIall)*100,1);
          $three14=round($three14/sizeof($IIall)*100,1);
          $four14=round($four14/sizeof($IIall)*100,1);
          $five14=round($five14/sizeof($IIall)*100,1);
          $six14=round($six14/sizeof($IIall)*100,1);
          $seven14=round($seven14/sizeof($IIall)*100,1);
          $eight14=round($eight14/sizeof($IIall)*100,1);
          $nine14=round($nine14/sizeof($IIall)*100,1);
          $ten14=round($ten14/sizeof($IIall)*100,1);
          $eleven14=round($eleven14/sizeof($IIall)*100,1);
          $twelve14=round($twelve14/sizeof($IIall)*100,1);
          //EI
          $one15=0;
          $two15=0;
          $three15=0;
          $four15=0;
          $five15=0;
          $six15=0;
          $seven15=0;
          $eight15=0;
          $nine15=0;
          $ten15=0;
          $eleven15=0;
          $twelve15=0;

          for($id = 0; $id < sizeof($EIall); $id++) {
            if($EIall[$id]>=1 && $EIall[$id]<1.5){
              $one15 += 1;
            } elseif ($EIall[$id]>=1.5 && $EIall[$id]<2) {
              $two15 += 1;
            } elseif ($EIall[$id]>=2 && $EIall[$id]<2.5) {
              $three15 += 1;
            } elseif ($EIall[$id]>=2.5 && $EIall[$id]<3) {
              $four15 += 1;
            } elseif ($EIall[$id]>=3 && $EIall[$id]<3.5) {
              $five15 += 1;
            } elseif ($EIall[$id]>=3.5 && $EIall[$id]<4) {
              $six15 += 1;
            } elseif ($EIall[$id]>=4 && $EIall[$id]<4.5) {
              $seven15 += 1;
            } elseif ($EIall[$id]>=4.5 && $EIall[$id]<5) {
              $eight15 += 1;
            } elseif ($EIall[$id]>=5 && $EIall[$id]<5.5) {
              $nine15 += 1;
            } elseif ($EIall[$id]>=5.5 && $EIall[$id]<6) {
              $ten15 += 1;
            } elseif ($EIall[$id]>=6 && $EIall[$id]<6.5) {
              $eleven15 += 1;
            } elseif ($EIall[$id]>=6.5 && $EIall[$id]<=7) {
              $twelve15 += 1;
            }             
          }
          $one15=round($one15/sizeof($EIall)*100,1);
          $two15=round($two15/sizeof($EIall)*100,1);
          $three15=round($three15/sizeof($EIall)*100,1);
          $four15=round($four15/sizeof($EIall)*100,1);
          $five15=round($five15/sizeof($EIall)*100,1);
          $six15=round($six15/sizeof($EIall)*100,1);
          $seven15=round($seven15/sizeof($EIall)*100,1);
          $eight15=round($eight15/sizeof($EIall)*100,1);
          $nine15=round($nine15/sizeof($EIall)*100,1);
          $ten15=round($ten15/sizeof($EIall)*100,1);
          $eleven15=round($eleven15/sizeof($EIall)*100,1);
          $twelve15=round($twelve15/sizeof($EIall)*100,1);
          //CI
          $one16=0;
          $two16=0;
          $three16=0;
          $four16=0;
          $five16=0;
          $six16=0;
          $seven16=0;
          $eight16=0;
          $nine16=0;
          $ten16=0;
          $eleven16=0;
          $twelve16=0;

          for($id = 0; $id < sizeof($CIall); $id++) {
            if($CIall[$id]>=1 && $CIall[$id]<1.5){
              $one16 += 1;
            } elseif ($CIall[$id]>=1.5 && $CIall[$id]<2) {
              $two16 += 1;
            } elseif ($CIall[$id]>=2 && $CIall[$id]<2.5) {
              $three16 += 1;
            } elseif ($CIall[$id]>=2.5 && $CIall[$id]<3) {
              $four16 += 1;
            } elseif ($CIall[$id]>=3 && $CIall[$id]<3.5) {
              $five16 += 1;
            } elseif ($CIall[$id]>=3.5 && $CIall[$id]<4) {
              $six16 += 1;
            } elseif ($CIall[$id]>=4 && $CIall[$id]<4.5) {
              $seven16 += 1;
            } elseif ($CIall[$id]>=4.5 && $CIall[$id]<5) {
              $eight16 += 1;
            } elseif ($CIall[$id]>=5 && $CIall[$id]<5.5) {
              $nine16 += 1;
            } elseif ($CIall[$id]>=5.5 && $CIall[$id]<6) {
              $ten16 += 1;
            } elseif ($CIall[$id]>=6 && $CIall[$id]<6.5) {
              $eleven16 += 1;
            } elseif ($CIall[$id]>=6.5 && $CIall[$id]<=7) {
              $twelve16 += 1;
            }             
          }
          $one16=round($one16/sizeof($CIall)*100,1);
          $two16=round($two16/sizeof($CIall)*100,1);
          $three16=round($three16/sizeof($CIall)*100,1);
          $four16=round($four16/sizeof($CIall)*100,1);
          $five16=round($five16/sizeof($CIall)*100,1);
          $six16=round($six16/sizeof($CIall)*100,1);
          $seven16=round($seven16/sizeof($CIall)*100,1);
          $eight16=round($eight16/sizeof($CIall)*100,1);
          $nine16=round($nine16/sizeof($CIall)*100,1);
          $ten16=round($ten16/sizeof($CIall)*100,1);
          $eleven16=round($eleven16/sizeof($CIall)*100,1);
          $twelve16=round($twelve16/sizeof($CIall)*100,1);

          //environment
          $one17=0;
          $two17=0;
          $three17=0;
          $four17=0;
          $five17=0;
          $six17=0;
          $seven17=0;
          $eight17=0;
          $nine17=0;
          $ten17=0;
          $eleven17=0;
          $twelve17=0;

          for($id = 0; $id < sizeof($environmentall); $id++) {
            if($environmentall[$id]>=1 && $environmentall[$id]<1.5){
              $one17 += 1;
            } elseif ($environmentall[$id]>=1.5 && $environmentall[$id]<2) {
              $two17 += 1;
            } elseif ($environmentall[$id]>=2 && $environmentall[$id]<2.5) {
              $three17 += 1;
            } elseif ($environmentall[$id]>=2.5 && $environmentall[$id]<3) {
              $four17 += 1;
            } elseif ($environmentall[$id]>=3 && $environmentall[$id]<3.5) {
              $five17 += 1;
            } elseif ($environmentall[$id]>=3.5 && $environmentall[$id]<4) {
              $six17 += 1;
            } elseif ($environmentall[$id]>=4 && $environmentall[$id]<4.5) {
              $seven17 += 1;
            } elseif ($environmentall[$id]>=4.5 && $environmentall[$id]<5) {
              $eight17 += 1;
            } elseif ($environmentall[$id]>=5 && $environmentall[$id]<5.5) {
              $nine17 += 1;
            } elseif ($environmentall[$id]>=5.5 && $environmentall[$id]<6) {
              $ten17 += 1;
            } elseif ($environmentall[$id]>=6 && $environmentall[$id]<6.5) {
              $eleven17 += 1;
            } elseif ($environmentall[$id]>=6.5 && $environmentall[$id]<=7) {
              $twelve17 += 1;
            }             
          }
          $one17=round($one17/sizeof($environmentall)*100,1);
          $two17=round($two17/sizeof($environmentall)*100,1);
          $three17=round($three17/sizeof($environmentall)*100,1);
          $four17=round($four17/sizeof($environmentall)*100,1);
          $five17=round($five17/sizeof($environmentall)*100,1);
          $six17=round($six17/sizeof($environmentall)*100,1);
          $seven17=round($seven17/sizeof($environmentall)*100,1);
          $eight17=round($eight17/sizeof($environmentall)*100,1);
          $nine17=round($nine17/sizeof($environmentall)*100,1);
          $ten17=round($ten17/sizeof($environmentall)*100,1);
          $eleven17=round($eleven17/sizeof($environmentall)*100,1);
          $twelve17=round($twelve17/sizeof($environmentall)*100,1);

          //EP
          $one18=0;
          $two18=0;
          $three18=0;
          $four18=0;
          $five18=0;
          $six18=0;
          $seven18=0;
          $eight18=0;
          $nine18=0;
          $ten18=0;
          $eleven18=0;
          $twelve18=0;

          for($id = 0; $id < sizeof($EPall); $id++) {
            if($EPall[$id]>=1 && $EPall[$id]<1.5){
              $one18 += 1;
            } elseif ($EPall[$id]>=1.5 && $EPall[$id]<2) {
              $two18 += 1;
            } elseif ($EPall[$id]>=2 && $EPall[$id]<2.5) {
              $three18 += 1;
            } elseif ($EPall[$id]>=2.5 && $EPall[$id]<3) {
              $four18 += 1;
            } elseif ($EPall[$id]>=3 && $EPall[$id]<3.5) {
              $five18 += 1;
            } elseif ($EPall[$id]>=3.5 && $EPall[$id]<4) {
              $six18 += 1;
            } elseif ($EPall[$id]>=4 && $EPall[$id]<4.5) {
              $seven18 += 1;
            } elseif ($EPall[$id]>=4.5 && $EPall[$id]<5) {
              $eight18 += 1;
            } elseif ($EPall[$id]>=5 && $EPall[$id]<5.5) {
              $nine18 += 1;
            } elseif ($EPall[$id]>=5.5 && $EPall[$id]<6) {
              $ten18 += 1;
            } elseif ($EPall[$id]>=6 && $EPall[$id]<6.5) {
              $eleven18 += 1;
            } elseif ($EPall[$id]>=6.5 && $EPall[$id]<=7) {
              $twelve18 += 1;
            }             
          }
          $one18=round($one18/sizeof($EPall)*100,1);
          $two18=round($two18/sizeof($EPall)*100,1);
          $three18=round($three18/sizeof($EPall)*100,1);
          $four18=round($four18/sizeof($EPall)*100,1);
          $five18=round($five18/sizeof($EPall)*100,1);
          $six18=round($six18/sizeof($EPall)*100,1);
          $seven18=round($seven18/sizeof($EPall)*100,1);
          $eight18=round($eight18/sizeof($EPall)*100,1);
          $nine18=round($nine18/sizeof($EPall)*100,1);
          $ten18=round($ten18/sizeof($EPall)*100,1);
          $eleven18=round($eleven18/sizeof($EPall)*100,1);
          $twelve18=round($twelve18/sizeof($EPall)*100,1);
         ?>