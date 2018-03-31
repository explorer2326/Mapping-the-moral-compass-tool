<!doctype html>
<html lang="en">
<head>
<style>
    .error {color: #FF0000;}
    /* "Next button style */
    input[type="submit"]{
    
    background-color: #555;
    color: #fff;
    border-radius: 10px;
    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">



    <title> Survey | Mapping The Moral Compass</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!-- Link to internal stylesheet -->
    <link rel="stylesheet" type="text/css" href="styles/stylesheet-master.css">

    <!-- Links to Google Fonts: -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="styles/survey-1.css" rel="stylesheet">
    <?php include('survey-2_processor.php'); ?>

</head>


<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <img class="nav-left">

        <img class="featurette-image img-fluid mx-auto" src="res/icons/u-icon.png" alt="Image"> </img>

        <a class="navbar-brand" href="#">ID Explore</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto" >
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Exit Survey<span class="sr-only">(current)</span></a>
            </ul>
        </div>
    </nav>
</header>


<hr>
<div class="survey-box">
    <h1>Survey Section</h1>

    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="70"
             aria-valuemin="0" aria-valuemax="100" style="width:33%">
            33%
        </div>
    </div>

<form id="survey-2" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

<ol start="10">
    <li><td>What is your attitude to the following statements about the in­house lawyer role.</td></li>
    
    <table>
            <tr>
                <td>
                </td>
                <td>
                    Strongly agree
                </td>
                <td>
                    Agree
                </td>
                <td>
                    Somewhat Agree
                </td>
                <td>
                   Neither Agree nor Disagree 
                </td>
                <td>
                    Somewhat Disagree
                </td>
                <td>
                    Disagree
                </td>
                <td>
                    Strongly Disagree
                </td>
            </tr>
            <tr>
                <td>
                    1. It is important to me that I can offer an independent opinion on the legality of business action<i><span class="error"> <?php echo $questionErr[11];?></span>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q11']) && $_POST['Q11'] == '1') echo 'checked="checked"'; ?> name="Q11">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q11']) && $_POST['Q11'] == '2') echo 'checked="checked"'; ?> name="Q11">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q11']) && $_POST['Q11'] == '3') echo 'checked="checked"'; ?> name="Q11">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q11']) && $_POST['Q11'] == '4') echo 'checked="checked"'; ?> name="Q11">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q11']) && $_POST['Q11'] == '5') echo 'checked="checked"'; ?> name="Q11"> 
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q11']) && $_POST['Q11'] == '6') echo 'checked="checked"'; ?> name="Q11">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q11']) && $_POST['Q11'] == '7') echo 'checked="checked"'; ?> name="Q11">
                </td>
            </tr>
            <tr>
                <td>
                   2. Where commercial desirability and legal professional judgement are in tension, commercial desirability is more important<i><span class="error"> <?php echo $questionErr[12];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q12']) && $_POST['Q12'] == '1') echo 'checked="checked"'; ?> name="Q12">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q12']) && $_POST['Q12'] == '2') echo 'checked="checked"'; ?> name="Q12">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q12']) && $_POST['Q12'] == '3') echo 'checked="checked"'; ?> name="Q12">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q12']) && $_POST['Q12'] == '4') echo 'checked="checked"'; ?> name="Q12">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q12']) && $_POST['Q12'] == '5') echo 'checked="checked"'; ?> name="Q12">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q12']) && $_POST['Q12'] == '6') echo 'checked="checked"'; ?> name="Q12">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q12']) && $_POST['Q12'] == '7') echo 'checked="checked"'; ?> name="Q12">
                </td>
            </tr>
            <tr>
                <td>
                   3. My job is to advise on legal risk and the business decides how much risk it then wants to take<i><span class="error"> <?php echo $questionErr[13];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q13']) && $_POST['Q13'] == '1') echo 'checked="checked"'; ?> name="Q13"> 
                </td>
               
                     <input type="radio" value="2" <?php if (isset($_POST['Q13']) && $_POST['Q13'] == '2') echo 'checked="checked"'; ?> name="Q13">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q13']) && $_POST['Q13'] == '3') echo 'checked="checked"'; ?> name="Q13"> 
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q13']) && $_POST['Q13'] == '4') echo 'checked="checked"'; ?> name="Q13">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q13']) && $_POST['Q13'] == '5') echo 'checked="checked"'; ?> name="Q13">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q13']) && $_POST['Q13'] == '6') echo 'checked="checked"'; ?> name="Q13">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q13']) && $_POST['Q13'] == '7') echo 'checked="checked"'; ?> name="Q13">
                </td>
            </tr>
            <tr>
                <td>
                   4. Where the law is uncertain, I help the business benefit from that uncertainty<i><span class="error"> <?php echo $questionErr[14];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q14']) && $_POST['Q14'] == '1') echo 'checked="checked"'; ?> name="Q14">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q14']) && $_POST['Q14'] == '2') echo 'checked="checked"'; ?> name="Q14">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q14']) && $_POST['Q14'] == '3') echo 'checked="checked"'; ?> name="Q14">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q14']) && $_POST['Q14'] == '4') echo 'checked="checked"'; ?> name="Q14">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q14']) && $_POST['Q14'] == '5') echo 'checked="checked"'; ?> name="Q14">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q14']) && $_POST['Q14'] == '6') echo 'checked="checked"'; ?> name="Q14">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q14']) && $_POST['Q14'] == '7') echo 'checked="checked"'; ?> name="Q14">
                </td>
            </tr>
            <tr>
                <td>
                   5. The commercial success of my organisation is important to me<i><span class="error"> <?php echo $questionErr[15];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q15']) && $_POST['Q15'] == '1') echo 'checked="checked"'; ?> name="Q15">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q15']) && $_POST['Q15'] == '2') echo 'checked="checked"'; ?> name="Q15">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q15']) && $_POST['Q15'] == '3') echo 'checked="checked"'; ?> name="Q15">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q15']) && $_POST['Q15'] == '4') echo 'checked="checked"'; ?> name="Q15">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q15']) && $_POST['Q15'] == '5') echo 'checked="checked"'; ?> name="Q15">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q15']) && $_POST['Q15'] == '6') echo 'checked="checked"'; ?> name="Q15">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q15']) && $_POST['Q15'] == '7') echo 'checked="checked"'; ?> name="Q15">
                </td>
            </tr>
            <tr>
                <td>
                   6. Where the law is uncertain, we advise and the business decides<i><span class="error"> <?php echo $questionErr[16];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q16']) && $_POST['Q16'] == '1') echo 'checked="checked"'; ?> name="Q16">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q16']) && $_POST['Q16'] == '2') echo 'checked="checked"'; ?> name="Q16">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q16']) && $_POST['Q16'] == '3') echo 'checked="checked"'; ?> name="Q16">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q16']) && $_POST['Q16'] == '4') echo 'checked="checked"'; ?> name="Q16">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q16']) && $_POST['Q16'] == '5') echo 'checked="checked"'; ?> name="Q16">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q16']) && $_POST['Q16'] == '6') echo 'checked="checked"'; ?> name="Q16">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q16']) && $_POST['Q16'] == '7') echo 'checked="checked"'; ?> name="Q16">
                </td>
            </tr>
            <tr>
                <td>
                   7. The organisation needs to understand that my view is independent<i><span class="error"> <?php echo $questionErr[17];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q17']) && $_POST['Q17'] == '1') echo 'checked="checked"'; ?> name="Q17">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q17']) && $_POST['Q17'] == '2') echo 'checked="checked"'; ?> name="Q17">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q17']) && $_POST['Q17'] == '3') echo 'checked="checked"'; ?> name="Q17">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q17']) && $_POST['Q17'] == '4') echo 'checked="checked"'; ?> name="Q17">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q17']) && $_POST['Q17'] == '5') echo 'checked="checked"'; ?> name="Q17">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q17']) && $_POST['Q17'] == '6') echo 'checked="checked"'; ?> name="Q17">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q17']) && $_POST['Q17'] == '7') echo 'checked="checked"'; ?> name="Q17">
                </td>
            </tr>
            <tr>
                <td>
                   8. Where the law is uncertain, I take a lead on what the right thing to do is<i><span class="error"> <?php echo $questionErr[18];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q18']) && $_POST['Q18'] == '1') echo 'checked="checked"'; ?> name="Q18">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q18']) && $_POST['Q18'] == '2') echo 'checked="checked"'; ?> name="Q18">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q18']) && $_POST['Q18'] == '3') echo 'checked="checked"'; ?> name="Q18">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q18']) && $_POST['Q18'] == '4') echo 'checked="checked"'; ?> name="Q18">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q18']) && $_POST['Q18'] == '5') echo 'checked="checked"'; ?> name="Q18">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q18']) && $_POST['Q18'] == '6') echo 'checked="checked"'; ?> name="Q18">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q18']) && $_POST['Q18'] == '7') echo 'checked="checked"'; ?> name="Q18">
                </td>
            </tr>
            <tr>
                <td>
                   9. Our advice goes beyond legal matters to consider business considerations<i><span class="error"> <?php echo $questionErr[19];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q19']) && $_POST['Q19'] == '1') echo 'checked="checked"'; ?> name="Q19">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q19']) && $_POST['Q19'] == '2') echo 'checked="checked"'; ?> name="Q19">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q19']) && $_POST['Q19'] == '3') echo 'checked="checked"'; ?> name="Q19">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q19']) && $_POST['Q19'] == '4') echo 'checked="checked"'; ?> name="Q19">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q19']) && $_POST['Q19'] == '5') echo 'checked="checked"'; ?> name="Q19">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q19']) && $_POST['Q19'] == '6') echo 'checked="checked"'; ?> name="Q19">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q19']) && $_POST['Q19'] == '7') echo 'checked="checked"'; ?> name="Q19">
                </td>
            </tr>
            <tr>
                <td>
                   10. An emphasis on commercial awareness sometimes inhibits the in-house lawyer in performing his or her role<i><span class="error"> <?php echo $questionErr[20];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q20']) && $_POST['Q20'] == '1') echo 'checked="checked"'; ?> name="Q20">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q20']) && $_POST['Q20'] == '2') echo 'checked="checked"'; ?> name="Q20">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q20']) && $_POST['Q20'] == '3') echo 'checked="checked"'; ?> name="Q20">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q20']) && $_POST['Q20'] == '4') echo 'checked="checked"'; ?> name="Q20">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q20']) && $_POST['Q20'] == '5') echo 'checked="checked"'; ?> name="Q20">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q20']) && $_POST['Q20'] == '6') echo 'checked="checked"'; ?> name="Q20">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q20']) && $_POST['Q20'] == '7') echo 'checked="checked"'; ?> name="Q20">
                </td>
            </tr>
            <tr>
                <td>
                   11. My role is to exploit the law for commercial ends<i><span class="error"> <?php echo $questionErr[21];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q21']) && $_POST['Q21'] == '1') echo 'checked="checked"'; ?> name="Q21">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q21']) && $_POST['Q21'] == '2') echo 'checked="checked"'; ?> name="Q21">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q21']) && $_POST['Q21'] == '3') echo 'checked="checked"'; ?> name="Q21">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q21']) && $_POST['Q21'] == '4') echo 'checked="checked"'; ?> name="Q21">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q21']) && $_POST['Q21'] == '5') echo 'checked="checked"'; ?> name="Q21">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q21']) && $_POST['Q21'] == '6') echo 'checked="checked"'; ?> name="Q21">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q21']) && $_POST['Q21'] == '7') echo 'checked="checked"'; ?> name="Q21">
                </td>
            </tr>
            <tr>
                <td>
                   12. Commercial awareness is vital to the function of in-house lawyers<i><span class="error"> <?php echo $questionErr[22];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q22']) && $_POST['Q22'] == '1') echo 'checked="checked"'; ?> name="Q22">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q22']) && $_POST['Q22'] == '2') echo 'checked="checked"'; ?> name="Q22">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q22']) && $_POST['Q22'] == '3') echo 'checked="checked"'; ?> name="Q22">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q22']) && $_POST['Q22'] == '4') echo 'checked="checked"'; ?> name="Q22">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q22']) && $_POST['Q22'] == '5') echo 'checked="checked"'; ?> name="Q22">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q22']) && $_POST['Q22'] == '6') echo 'checked="checked"'; ?> name="Q22">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q22']) && $_POST['Q22'] == '7') echo 'checked="checked"'; ?> name="Q22">
                </td>
            </tr>
            <tr>
                <td>
                   13. It is important for a legal adviser to add value to the business<i><span class="error"> <?php echo $questionErr[23];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q23']) && $_POST['Q23'] == '1') echo 'checked="checked"'; ?> name="Q23">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q23']) && $_POST['Q23'] == '2') echo 'checked="checked"'; ?> name="Q23">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q23']) && $_POST['Q23'] == '3') echo 'checked="checked"'; ?> name="Q23">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q23']) && $_POST['Q23'] == '4') echo 'checked="checked"'; ?> name="Q23">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q23']) && $_POST['Q23'] == '5') echo 'checked="checked"'; ?> name="Q23">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q23']) && $_POST['Q23'] == '6') echo 'checked="checked"'; ?> name="Q23">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q23']) && $_POST['Q23'] == '7') echo 'checked="checked"'; ?> name="Q23">
                </td>
            </tr>
            <tr>
                <td>
                   14. Where a proposed action is lawful, but I think it is nevertheless unethical, I will not hesitate to voice my concerns<i><span class="error"> <?php echo $questionErr[24];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q24']) && $_POST['Q24'] == '1') echo 'checked="checked"'; ?> name="Q24">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q24']) && $_POST['Q24'] == '2') echo 'checked="checked"'; ?> name="Q24">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q24']) && $_POST['Q24'] == '3') echo 'checked="checked"'; ?> name="Q24">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q24']) && $_POST['Q24'] == '4') echo 'checked="checked"'; ?> name="Q24">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q24']) && $_POST['Q24'] == '5') echo 'checked="checked"'; ?> name="Q24">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q24']) && $_POST['Q24'] == '6') echo 'checked="checked"'; ?> name="Q24">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q24']) && $_POST['Q24'] == '7') echo 'checked="checked"'; ?> name="Q24">
                </td>
            </tr>
            <tr>
                <td>
                   15. Others in the organization are responsible for considering the ethics of its decisions; my role is to advise on the law<i><span class="error"> <?php echo $questionErr[25];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q25']) && $_POST['Q25'] == '1') echo 'checked="checked"'; ?> name="Q25">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q25']) && $_POST['Q25'] == '2') echo 'checked="checked"'; ?> name="Q25">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q25']) && $_POST['Q25'] == '3') echo 'checked="checked"'; ?> name="Q25">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q25']) && $_POST['Q25'] == '4') echo 'checked="checked"'; ?> name="Q25">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q25']) && $_POST['Q25'] == '5') echo 'checked="checked"'; ?> name="Q25">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q25']) && $_POST['Q25'] == '6') echo 'checked="checked"'; ?> name="Q25">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q25']) && $_POST['Q25'] == '7') echo 'checked="checked"'; ?> name="Q25">
                </td>
            </tr>
            <tr>
                <td>
                   16. Loopholes in the law should be identified that benefit the business<i><span class="error"> <?php echo $questionErr[26];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q26']) && $_POST['Q26'] == '1') echo 'checked="checked"'; ?> name="Q26">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q26']) && $_POST['Q26'] == '2') echo 'checked="checked"'; ?> name="Q26">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q26']) && $_POST['Q26'] == '3') echo 'checked="checked"'; ?> name="Q26">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q26']) && $_POST['Q26'] == '4') echo 'checked="checked"'; ?> name="Q26">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q26']) && $_POST['Q26'] == '5') echo 'checked="checked"'; ?> name="Q26">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q26']) && $_POST['Q26'] == '6') echo 'checked="checked"'; ?> name="Q26">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q26']) && $_POST['Q26'] == '7') echo 'checked="checked"'; ?> name="Q26">
                </td>
            </tr>
            <tr>
                <td>
                   17. My advice goes beyond legal considerations to assess whether something is the right thing ethically to do<i><span class="error"> <?php echo $questionErr[27];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q27']) && $_POST['Q27'] == '1') echo 'checked="checked"'; ?> name="Q27">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q27']) && $_POST['Q27'] == '2') echo 'checked="checked"'; ?> name="Q27">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q27']) && $_POST['Q27'] == '3') echo 'checked="checked"'; ?> name="Q27">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q27']) && $_POST['Q27'] == '4') echo 'checked="checked"'; ?> name="Q27">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q27']) && $_POST['Q27'] == '5') echo 'checked="checked"'; ?> name="Q27">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q27']) && $_POST['Q27'] == '6') echo 'checked="checked"'; ?> name="Q27">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q27']) && $_POST['Q27'] == '7') echo 'checked="checked"'; ?> name="Q27">
                </td>
            </tr>
            <tr>
                <td>
                   18. Saying “no” to the organisation is to be avoided, even when there is no legally acceptable alternative to suggest<i><span class="error"> <?php echo $questionErr[28];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q28']) && $_POST['Q28'] == '1') echo 'checked="checked"'; ?> name="Q28">
                </td>
                <td>
                     <input type="radio" value="2" <?php if (isset($_POST['Q28']) && $_POST['Q28'] == '2') echo 'checked="checked"'; ?> name="Q28">
                </td>
                <td>
                      <input type="radio" value="3" <?php if (isset($_POST['Q28']) && $_POST['Q28'] == '3') echo 'checked="checked"'; ?> name="Q28">
                </td>
                <td>
                      <input type="radio" value="4" <?php if (isset($_POST['Q28']) && $_POST['Q28'] == '4') echo 'checked="checked"'; ?> name="Q28">
                </td>
                <td>
                       <input type="radio" value="5" <?php if (isset($_POST['Q28']) && $_POST['Q28'] == '5') echo 'checked="checked"'; ?> name="Q28">
                </td>
                <td>
                      <input type="radio" value="6" <?php if (isset($_POST['Q28']) && $_POST['Q28'] == '6') echo 'checked="checked"'; ?> name="Q28">
                </td>
                <td>
                     <input type="radio" value="7" <?php if (isset($_POST['Q28']) && $_POST['Q28'] == '7') echo 'checked="checked"'; ?> name="Q28">
                </td>
            </tr>
    </table>

    <hr>
    <li><td>To what extent do you agree with the following statements about your organisation? </td></li>

    <table>
          <tr>
                <td>
                </td>
                <td>
                    Strongly agree
                </td>
                <td>
                    Agree
                </td>
                <td>
                    Somewhat Agree
                </td>
                <td>
                    Neither Agree nor Disagree
                </td>
                <td>
                    Somewhat Disagree
                </td>
                <td>
                    Disagree
                </td>
                <td>
                    Strongly Disagree
                </td>
            </tr>
            <tr>
                <td>
                1. There is a clear and common understanding within the business of what the role of the legal function is<i><span class="error"> <?php echo $questionErr[29];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q29']) && $_POST['Q29'] == '1') echo 'checked="checked"'; ?> name="Q29">
                </td>
                <td>
                    <input type="radio" value="2" <?php if (isset($_POST['Q29']) && $_POST['Q29'] == '2') echo 'checked="checked"'; ?> name="Q29">
                </td>
                <td>
                    <input type="radio" value="3" <?php if (isset($_POST['Q29']) && $_POST['Q29'] == '3') echo 'checked="checked"'; ?> name="Q29">
                </td>
                <td>
                    <input type="radio" value="4" <?php if (isset($_POST['Q29']) && $_POST['Q29'] == '4') echo 'checked="checked"'; ?> name="Q29">
                </td>
                <td>
                    <input type="radio" value="5" <?php if (isset($_POST['Q29']) && $_POST['Q29'] == '5') echo 'checked="checked"'; ?> name="Q29">
                </td>
                <td>
                    <input type="radio" value="6" <?php if (isset($_POST['Q29']) && $_POST['Q29'] == '6') echo 'checked="checked"'; ?> name="Q29">
                </td>
                <td>
                    <input type="radio" value="7" <?php if (isset($_POST['Q29']) && $_POST['Q29'] == '7') echo 'checked="checked"'; ?> name="Q29">
                </td>
            </tr>
            <tr>
                <td>
                2. The independence of the legal function within the business is strongly supported by the business functions<i><span class="error"> <?php echo $questionErr[30];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q30']) && $_POST['Q30'] == '1') echo 'checked="checked"'; ?> name="Q30">
                 </td>
                <td>
                    <input type="radio" value="2" <?php if (isset($_POST['Q30']) && $_POST['Q30'] == '2') echo 'checked="checked"'; ?> name="Q30">
                </td>
                <td>
                    <input type="radio" value="3" <?php if (isset($_POST['Q30']) && $_POST['Q30'] == '3') echo 'checked="checked"'; ?> name="Q30">
                </td>
                <td>
                    <input type="radio" value="4" <?php if (isset($_POST['Q30']) && $_POST['Q30'] == '4') echo 'checked="checked"'; ?> name="Q30">
                </td>
                <td>
                    <input type="radio" value="5" <?php if (isset($_POST['Q30']) && $_POST['Q30'] == '5') echo 'checked="checked"'; ?> name="Q30">
                </td>
                <td>
                    <input type="radio" value="6" <?php if (isset($_POST['Q30']) && $_POST['Q30'] == '6') echo 'checked="checked"'; ?> name="Q30">
                </td>
                <td>
                    <input type="radio" value="7" <?php if (isset($_POST['Q30']) && $_POST['Q30'] == '7') echo 'checked="checked"'; ?> name="Q30">
                </td>
            </tr>
            <tr>
                <td>
                3. The legal function is sometimes criticised for inhibiting or slowing business decisions<i><span class="error"> <?php echo $questionErr[31];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q31']) && $_POST['Q31'] == '1') echo 'checked="checked"'; ?> name="Q31">
                </td>
                <td>
                    <input type="radio" value="2" <?php if (isset($_POST['Q31']) && $_POST['Q31'] == '2') echo 'checked="checked"'; ?> name="Q31">
                </td>
                <td>
                    <input type="radio" value="3" <?php if (isset($_POST['Q31']) && $_POST['Q31'] == '3') echo 'checked="checked"'; ?> name="Q31">
                </td>
                <td>
                    <input type="radio" value="4" <?php if (isset($_POST['Q31']) && $_POST['Q31'] == '4') echo 'checked="checked"'; ?> name="Q31">
                </td>
                <td>
                    <input type="radio" value="5" <?php if (isset($_POST['Q31']) && $_POST['Q31'] == '5') echo 'checked="checked"'; ?> name="Q31">
                 </td>
                <td>
                    <input type="radio" value="6" <?php if (isset($_POST['Q31']) && $_POST['Q31'] == '6') echo 'checked="checked"'; ?> name="Q31">
                </td>
                <td>
                    <input type="radio" value="7" <?php if (isset($_POST['Q31']) && $_POST['Q31'] == '7') echo 'checked="checked"'; ?> name="Q31">
                </td>
            </tr>
            <tr>
                <td>
                4. Colleagues are sometimes reluctant to raise matters with in-house lawyers<i><span class="error"> <?php echo $questionErr[32];?></span></i>
             </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q32']) && $_POST['Q32'] == '1') echo 'checked="checked"'; ?> name="Q32">
                </td>
                <td>
                    <input type="radio" value="2" <?php if (isset($_POST['Q32']) && $_POST['Q32'] == '2') echo 'checked="checked"'; ?> name="Q32">
                </td>
                <td>
                    <input type="radio" value="3" <?php if (isset($_POST['Q32']) && $_POST['Q32'] == '3') echo 'checked="checked"'; ?> name="Q32">
                </td>
                <td>
                    <input type="radio" value="4" <?php if (isset($_POST['Q32']) && $_POST['Q32'] == '4') echo 'checked="checked"'; ?> name="Q32">
                </td>
                <td>
                    <input type="radio" value="5" <?php if (isset($_POST['Q32']) && $_POST['Q32'] == '5') echo 'checked="checked"'; ?> name="Q32">
                </td>
                <td>
                    <input type="radio" value="6" <?php if (isset($_POST['Q32']) && $_POST['Q32'] == '6') echo 'checked="checked"'; ?> name="Q32">
                </td>
                <td>
                    <input type="radio" value="7" <?php if (isset($_POST['Q32']) && $_POST['Q32'] == '7') echo 'checked="checked"'; ?> name="Q32">
                </td>
            </tr>
            <tr>
                <td>
                5. The organisation sometimes takes actions which are against my advice on legally important matters<i><span class="error"> <?php echo $questionErr[33];?></span></i>
                </td>
                 <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q33']) && $_POST['Q33'] == '1') echo 'checked="checked"'; ?> name="Q33">
                </td>
                <td>
                    <input type="radio" value="2" <?php if (isset($_POST['Q33']) && $_POST['Q33'] == '2') echo 'checked="checked"'; ?> name="Q33">
                </td>
                <td>
                    <input type="radio" value="3" <?php if (isset($_POST['Q33']) && $_POST['Q33'] == '3') echo 'checked="checked"'; ?> name="Q33">
                </td>
                <td>
                    <input type="radio" value="4" <?php if (isset($_POST['Q33']) && $_POST['Q33'] == '4') echo 'checked="checked"'; ?> name="Q33">
                </td>
                <td>
                    <input type="radio" value="5" <?php if (isset($_POST['Q33']) && $_POST['Q33'] == '5') echo 'checked="checked"'; ?> name="Q33">
                </td>
                <td>
                    <input type="radio" value="6" <?php if (isset($_POST['Q33']) && $_POST['Q33'] == '6') echo 'checked="checked"'; ?> name="Q33">
                </td>
                <td>
                    <input type="radio" value="7" <?php if (isset($_POST['Q33']) && $_POST['Q33'] == '7') echo 'checked="checked"'; ?> name="Q33">
                </td>
            </tr>
            <tr>
                <td>
                6. Parts of the business are more supportive of legal than others<i><span class="error"> <?php echo $questionErr[34];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q34']) && $_POST['Q34'] == '1') echo 'checked="checked"'; ?> name="Q34">
                </td>
                <td>
                    <input type="radio" value="2" <?php if (isset($_POST['Q34']) && $_POST['Q34'] == '2') echo 'checked="checked"'; ?> name="Q34">
                </td>
                <td>
                    <input type="radio" value="3" <?php if (isset($_POST['Q34']) && $_POST['Q34'] == '3') echo 'checked="checked"'; ?> name="Q34">
                </td>
                <td>
                    <input type="radio" value="4" <?php if (isset($_POST['Q34']) && $_POST['Q34'] == '4') echo 'checked="checked"'; ?> name="Q34">
                </td>
                <td>
                    <input type="radio" value="5" <?php if (isset($_POST['Q34']) && $_POST['Q34'] == '5') echo 'checked="checked"'; ?> name="Q34">
                </td>
                <td>
                    <input type="radio" value="6" <?php if (isset($_POST['Q34']) && $_POST['Q34'] == '6') echo 'checked="checked"'; ?> name="Q34">
                </td>
                <td>
                    <input type="radio" value="7" <?php if (isset($_POST['Q34']) && $_POST['Q34'] == '7') echo 'checked="checked"'; ?> name="Q34">
                </td>
            </tr>
            <tr>
                <td>
                7. Parts of the business are more challenging to in-house lawyers than others<i><span class="error"> <?php echo $questionErr[35];?></span></i>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q35']) && $_POST['Q35'] == '1') echo 'checked="checked"'; ?> name="Q35">
                 </td>
                <td>
                    <input type="radio" value="2" <?php if (isset($_POST['Q35']) && $_POST['Q35'] == '2') echo 'checked="checked"'; ?> name="Q35">
                </td>
                <td>
                    <input type="radio" value="3" <?php if (isset($_POST['Q35']) && $_POST['Q35'] == '3') echo 'checked="checked"'; ?> name="Q35">
                </td>
                <td>
                    <input type="radio" value="4" <?php if (isset($_POST['Q35']) && $_POST['Q35'] == '4') echo 'checked="checked"'; ?> name="Q35">
                </td>
                <td>
                    <input type="radio" value="5" <?php if (isset($_POST['Q35']) && $_POST['Q35'] == '5') echo 'checked="checked"'; ?> name="Q35">
                </td>
                <td>
                    <input type="radio" value="6" <?php if (isset($_POST['Q35']) && $_POST['Q35'] == '6') echo 'checked="checked"'; ?> name="Q35">
                </td>
                <td>
                    <input type="radio" value="7" <?php if (isset($_POST['Q35']) && $_POST['Q35'] == '7') echo 'checked="checked"'; ?> name="Q35">
                </td>
            </tr>
    </table>

    <hr>
    <li><td>To what extent do the following obligations have an important influence on you in practice? </td></li>

    <table>
         <tr>
                <td>
                </td>
                <td>
                    Strongly agree
                </td>
                <td>
                    Agree
                </td>
                <td>
                    Somewhat Agree
                </td>
                <td>
                   Neither Agree nor Disagree 
                </td>
                <td>
                    Somewhat Disagree
                </td>
                <td>
                    Disagree
                </td>
                <td>
                    Strongly Disagree
                </td>
        </tr>
        <tr>
            <td>
                1. Doing the right thing<i><span class="error"> <?php echo $questionErr[36];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q36']) && $_POST['Q36'] == '1') echo 'checked="checked"'; ?> name="Q36">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q36']) && $_POST['Q36'] == '2') echo 'checked="checked"'; ?> name="Q36">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q36']) && $_POST['Q36'] == '3') echo 'checked="checked"'; ?> name="Q36">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q36']) && $_POST['Q36'] == '4') echo 'checked="checked"'; ?> name="Q36">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q36']) && $_POST['Q36'] == '5') echo 'checked="checked"'; ?> name="Q36">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q36']) && $_POST['Q36'] == '6') echo 'checked="checked"'; ?> name="Q36">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q36']) && $_POST['Q36'] == '7') echo 'checked="checked"'; ?> name="Q36">
            </td>
        </tr>
        <tr>
            <td>
                2. Seeking the good of society<i><span class="error"> <?php echo $questionErr[37];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q37']) && $_POST['Q37'] == '1') echo 'checked="checked"'; ?> name="Q37">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q37']) && $_POST['Q37'] == '2') echo 'checked="checked"'; ?> name="Q37">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q37']) && $_POST['Q37'] == '3') echo 'checked="checked"'; ?> name="Q37">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q37']) && $_POST['Q37'] == '4') echo 'checked="checked"'; ?> name="Q37">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q37']) && $_POST['Q37'] == '5') echo 'checked="checked"'; ?> name="Q37">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q37']) && $_POST['Q37'] == '6') echo 'checked="checked"'; ?> name="Q37">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q37']) && $_POST['Q37'] == '7') echo 'checked="checked"'; ?> name="Q37">
            </td>
        </tr>
        <tr>
            <td>
                3. Treating people fairly<i><span class="error"> <?php echo $questionErr[38];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q38']) && $_POST['Q38'] == '1') echo 'checked="checked"'; ?> name="Q38">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q38']) && $_POST['Q38'] == '2') echo 'checked="checked"'; ?> name="Q38">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q38']) && $_POST['Q38'] == '3') echo 'checked="checked"'; ?> name="Q38">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q38']) && $_POST['Q38'] == '4') echo 'checked="checked"'; ?> name="Q38">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q38']) && $_POST['Q38'] == '5') echo 'checked="checked"'; ?> name="Q38">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q38']) && $_POST['Q38'] == '6') echo 'checked="checked"'; ?> name="Q38">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q38']) && $_POST['Q38'] == '7') echo 'checked="checked"'; ?> name="Q38">
            </td>
        </tr>
        <tr>
            <td>
                4. The organisation’s role in society<i><span class="error"> <?php echo $questionErr[39];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q39']) && $_POST['Q39'] == '1') echo 'checked="checked"'; ?> name="Q39">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q39']) && $_POST['Q39'] == '2') echo 'checked="checked"'; ?> name="Q39">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q39']) && $_POST['Q39'] == '3') echo 'checked="checked"'; ?> name="Q39">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q39']) && $_POST['Q39'] == '4') echo 'checked="checked"'; ?> name="Q39">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q39']) && $_POST['Q39'] == '5') echo 'checked="checked"'; ?> name="Q39">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q39']) && $_POST['Q39'] == '6') echo 'checked="checked"'; ?> name="Q39">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q39']) && $_POST['Q39'] == '7') echo 'checked="checked"'; ?> name="Q39">
            </td>
        </tr>
        <tr>
            <td>
                5. Valuing integrity as much as profits<i><span class="error"> <?php echo $questionErr[40];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q40']) && $_POST['Q40'] == '1') echo 'checked="checked"'; ?> name="Q40">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q40']) && $_POST['Q40'] == '2') echo 'checked="checked"'; ?> name="Q40">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q40']) && $_POST['Q40'] == '3') echo 'checked="checked"'; ?> name="Q40">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q40']) && $_POST['Q40'] == '4') echo 'checked="checked"'; ?> name="Q40">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q40']) && $_POST['Q40'] == '5') echo 'checked="checked"'; ?> name="Q40">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q40']) && $_POST['Q40'] == '6') echo 'checked="checked"'; ?> name="Q40">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q40']) && $_POST['Q40'] == '7') echo 'checked="checked"'; ?> name="Q40">
            </td>
        </tr>
        <tr>
            <td>
                6. Financial performance<i><span class="error"> <?php echo $questionErr[41];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q41']) && $_POST['Q41'] == '1') echo 'checked="checked"'; ?> name="Q41">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q41']) && $_POST['Q41'] == '2') echo 'checked="checked"'; ?> name="Q41">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q41']) && $_POST['Q41'] == '3') echo 'checked="checked"'; ?> name="Q41">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q41']) && $_POST['Q41'] == '4') echo 'checked="checked"'; ?> name="Q41">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q41']) && $_POST['Q41'] == '5') echo 'checked="checked"'; ?> name="Q41">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q41']) && $_POST['Q41'] == '6') echo 'checked="checked"'; ?> name="Q41">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q41']) && $_POST['Q41'] == '7') echo 'checked="checked"'; ?> name="Q41">
            </td>
        </tr>
        <tr>
            <td>
                7. Strategy and planning<i><span class="error"> <?php echo $questionErr[42];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q42']) && $_POST['Q42'] == '1') echo 'checked="checked"'; ?> name="Q42">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q42']) && $_POST['Q42'] == '2') echo 'checked="checked"'; ?> name="Q42">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q42']) && $_POST['Q42'] == '3') echo 'checked="checked"'; ?> name="Q42">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q42']) && $_POST['Q42'] == '4') echo 'checked="checked"'; ?> name="Q42">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q42']) && $_POST['Q42'] == '5') echo 'checked="checked"'; ?> name="Q42">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q42']) && $_POST['Q42'] == '6') echo 'checked="checked"'; ?> name="Q42">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q42']) && $_POST['Q42'] == '7') echo 'checked="checked"'; ?> name="Q42">
            </td>
        </tr>
        <tr>
            <td>
                8. Shareholders and investors<i><span class="error"> <?php echo $questionErr[43];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q43']) && $_POST['Q43'] == '1') echo 'checked="checked"'; ?> name="Q43">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q43']) && $_POST['Q43'] == '2') echo 'checked="checked"'; ?> name="Q43">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q43']) && $_POST['Q43'] == '3') echo 'checked="checked"'; ?> name="Q43">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q43']) && $_POST['Q43'] == '4') echo 'checked="checked"'; ?> name="Q43">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q43']) && $_POST['Q43'] == '5') echo 'checked="checked"'; ?> name="Q43">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q43']) && $_POST['Q43'] == '6') echo 'checked="checked"'; ?> name="Q43">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q43']) && $_POST['Q43'] == '7') echo 'checked="checked"'; ?> name="Q43">
            </td>
        </tr>
        <tr>
            <td>
                9. Productivity and efficiency<i><span class="error"> <?php echo $questionErr[44];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q44']) && $_POST['Q44'] == '1') echo 'checked="checked"'; ?> name="Q44">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q44']) && $_POST['Q44'] == '2') echo 'checked="checked"'; ?> name="Q44">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q44']) && $_POST['Q44'] == '3') echo 'checked="checked"'; ?> name="Q44">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q44']) && $_POST['Q44'] == '4') echo 'checked="checked"'; ?> name="Q44">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q44']) && $_POST['Q44'] == '5') echo 'checked="checked"'; ?> name="Q44">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q44']) && $_POST['Q44'] == '6') echo 'checked="checked"'; ?> name="Q44">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q44']) && $_POST['Q44'] == '7') echo 'checked="checked"'; ?> name="Q44">
            </td>
        </tr>
    </table>

        <hr>

    <li><td>To what extent do the following obligations have an important influence on you in practice? </td></li>

    <table>
        <tr>
            <td>
            </td>
            <td>
                Strongly agree
            </td>
            <td>
                Agree
            </td>
            <td>
                Somewhat Agree
            </td>
            <td>
                Neither Agree nor Disagree
            </td>
            <td>
                Somewhat Disagree
            </td>
            <td>
                Disagree
            </td>
            <td>
                Strongly Disagree
            </td>
        </tr>
        <tr>
            <td>
                1. Upholding the rule of law and the proper administration of justice<i><span class="error"> <?php echo $questionErr[45];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q45']) && $_POST['Q45'] == '1') echo 'checked="checked"'; ?> name="Q45">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q45']) && $_POST['Q45'] == '2') echo 'checked="checked"'; ?> name="Q45">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q45']) && $_POST['Q45'] == '3') echo 'checked="checked"'; ?> name="Q45">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q45']) && $_POST['Q45'] == '4') echo 'checked="checked"'; ?> name="Q45">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q45']) && $_POST['Q45'] == '5') echo 'checked="checked"'; ?> name="Q45">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q45']) && $_POST['Q45'] == '6') echo 'checked="checked"'; ?> name="Q45">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q45']) && $_POST['Q45'] == '7') echo 'checked="checked"'; ?> name="Q45">
            </td>
        </tr>
        <tr>
            <td>
                2. Preventing my independence from being compromised<i><span class="error"> <?php echo $questionErr[46];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q46']) && $_POST['Q46'] == '1') echo 'checked="checked"'; ?> name="Q46">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q46']) && $_POST['Q46'] == '2') echo 'checked="checked"'; ?> name="Q46">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q46']) && $_POST['Q46'] == '3') echo 'checked="checked"'; ?> name="Q46">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q46']) && $_POST['Q46'] == '4') echo 'checked="checked"'; ?> name="Q46">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q46']) && $_POST['Q46'] == '5') echo 'checked="checked"'; ?> name="Q46">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q46']) && $_POST['Q46'] == '6') echo 'checked="checked"'; ?> name="Q46">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q46']) && $_POST['Q46'] == '7') echo 'checked="checked"'; ?> name="Q46">
            </td>
        </tr>
        <tr>
            <td>
                3. Complying with your own legal and regulatory obligations as a lawyer<i><span class="error"> <?php echo $questionErr[47];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q47']) && $_POST['Q47'] == '1') echo 'checked="checked"'; ?> name="Q47">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q47']) && $_POST['Q47'] == '2') echo 'checked="checked"'; ?> name="Q47">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q47']) && $_POST['Q47'] == '3') echo 'checked="checked"'; ?> name="Q47">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q47']) && $_POST['Q47'] == '4') echo 'checked="checked"'; ?> name="Q47">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q47']) && $_POST['Q47'] == '5') echo 'checked="checked"'; ?> name="Q47">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q47']) && $_POST['Q47'] == '6') echo 'checked="checked"'; ?> name="Q47">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q47']) && $_POST['Q47'] == '7') echo 'checked="checked"'; ?> name="Q47">
            </td>
        </tr>
        <tr>
            <td>
                4. Acting with integrity<i><span class="error"> <?php echo $questionErr[48];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q48']) && $_POST['Q48'] == '1') echo 'checked="checked"'; ?> name="Q48">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q48']) && $_POST['Q48'] == '2') echo 'checked="checked"'; ?> name="Q48">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q48']) && $_POST['Q48'] == '3') echo 'checked="checked"'; ?> name="Q48">
             </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q48']) && $_POST['Q48'] == '4') echo 'checked="checked"'; ?> name="Q48">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q48']) && $_POST['Q48'] == '5') echo 'checked="checked"'; ?> name="Q48">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q48']) && $_POST['Q48'] == '6') echo 'checked="checked"'; ?> name="Q48">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q48']) && $_POST['Q48'] == '7') echo 'checked="checked"'; ?> name="Q48">
            </td>
        </tr>
        <tr>
            <td>
                5. Acting in the best interests of the organisation<i><span class="error"> <?php echo $questionErr[49];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q49']) && $_POST['Q49'] == '1') echo 'checked="checked"'; ?> name="Q49">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q49']) && $_POST['Q49'] == '2') echo 'checked="checked"'; ?> name="Q49">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q49']) && $_POST['Q49'] == '3') echo 'checked="checked"'; ?> name="Q49">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q49']) && $_POST['Q49'] == '4') echo 'checked="checked"'; ?> name="Q49">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q49']) && $_POST['Q49'] == '5') echo 'checked="checked"'; ?> name="Q49">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q49']) && $_POST['Q49'] == '6') echo 'checked="checked"'; ?> name="Q49">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q49']) && $_POST['Q49'] == '7') echo 'checked="checked"'; ?> name="Q49">
            </td>
        </tr>
        <tr>
            <td>
                6. Dealing with your own regulators in an open, timely and co-operative manner<i><span class="error"> <?php echo $questionErr[50];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q50']) && $_POST['Q50'] == '1') echo 'checked="checked"'; ?> name="Q50">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q50']) && $_POST['Q50'] == '2') echo 'checked="checked"'; ?> name="Q50">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q50']) && $_POST['Q50'] == '3') echo 'checked="checked"'; ?> name="Q50">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q50']) && $_POST['Q50'] == '4') echo 'checked="checked"'; ?> name="Q50">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q50']) && $_POST['Q50'] == '5') echo 'checked="checked"'; ?> name="Q50">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q50']) && $_POST['Q50'] == '6') echo 'checked="checked"'; ?> name="Q50">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q50']) && $_POST['Q50'] == '7') echo 'checked="checked"'; ?> name="Q50">
            </td>
        </tr>
        <tr>
            <td>
                7. Providing a proper standard of service to the business<i><span class="error"> <?php echo $questionErr[51];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q51']) && $_POST['Q51'] == '1') echo 'checked="checked"'; ?> name="Q51">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q51']) && $_POST['Q51'] == '2') echo 'checked="checked"'; ?> name="Q51">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q51']) && $_POST['Q51'] == '3') echo 'checked="checked"'; ?> name="Q51">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q51']) && $_POST['Q51'] == '4') echo 'checked="checked"'; ?> name="Q51">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q51']) && $_POST['Q51'] == '5') echo 'checked="checked"'; ?> name="Q51">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q51']) && $_POST['Q51'] == '6') echo 'checked="checked"'; ?> name="Q51">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q51']) && $_POST['Q51'] == '7') echo 'checked="checked"'; ?> name="Q51">
            </td>
        </tr>
        <tr>
            <td>
                8. Maintaining the trust the public places in you and in the provision of legal services<i><span class="error"> <?php echo $questionErr[52];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q52']) && $_POST['Q52'] == '1') echo 'checked="checked"'; ?> name="Q52">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q52']) && $_POST['Q52'] == '2') echo 'checked="checked"'; ?> name="Q52">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q52']) && $_POST['Q52'] == '3') echo 'checked="checked"'; ?> name="Q52">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q52']) && $_POST['Q52'] == '4') echo 'checked="checked"'; ?> name="Q52">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q52']) && $_POST['Q52'] == '5') echo 'checked="checked"'; ?> name="Q52">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q52']) && $_POST['Q52'] == '6') echo 'checked="checked"'; ?> name="Q52">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q52']) && $_POST['Q52'] == '7') echo 'checked="checked"'; ?> name="Q52">
            </td>
        </tr>
        <tr>
            <td>
                9. Carrying out your role in the organisation effectively and in accordance with proper governance and sound financial and risk management principles<i><span class="error"> <?php echo $questionErr[53];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q53']) && $_POST['Q53'] == '1') echo 'checked="checked"'; ?> name="Q53">
            </td>
            <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q53']) && $_POST['Q53'] == '2') echo 'checked="checked"'; ?> name="Q53">
            </td>
            <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q53']) && $_POST['Q53'] == '3') echo 'checked="checked"'; ?> name="Q53">
            </td>
            <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q53']) && $_POST['Q53'] == '4') echo 'checked="checked"'; ?> name="Q53">
            </td>
            <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q53']) && $_POST['Q53'] == '5') echo 'checked="checked"'; ?> name="Q53">
            </td>
            <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q53']) && $_POST['Q53'] == '6') echo 'checked="checked"'; ?> name="Q53">
            </td>
            <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q53']) && $_POST['Q53'] == '7') echo 'checked="checked"'; ?> name="Q53">
            </td>
        </tr>
    </table>

        <hr>

    <li><td>Consider the following statements: </td></li>

    <table>
        <tr>
            <td>
            </td>
            <td>
                Strongly agree
            </td>
            <td>
                Agree
            </td>
            <td>
                Somewhat Agree
            </td>
            <td>
                Neither Agree nor Disagree
            </td>
            <td>
                Somewhat Disagree
            </td>
            <td>
                Disagree
            </td>
            <td>
                Strongly Disagree
            </td>
        </tr>
        <tr>
            <td>
                1. In a typical day, I face several ethical dilemmas<i><span class="error"> <?php echo $questionErr[54];?></span></i>
             </td>
             <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q54']) && $_POST['Q54'] == '1') echo 'checked="checked"'; ?> name="Q54">
                           </td>
             <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q54']) && $_POST['Q54'] == '2') echo 'checked="checked"'; ?> name="Q54">
                           </td>
             <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q54']) && $_POST['Q54'] == '3') echo 'checked="checked"'; ?> name="Q54">
                           </td>
             <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q54']) && $_POST['Q54'] == '4') echo 'checked="checked"'; ?> name="Q54">
                           </td>
             <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q54']) && $_POST['Q54'] == '5') echo 'checked="checked"'; ?> name="Q54">
                           </td>
             <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q54']) && $_POST['Q54'] == '6') echo 'checked="checked"'; ?> name="Q54">
                           </td>
             <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q54']) && $_POST['Q54'] == '7') echo 'checked="checked"'; ?> name="Q54">
            </td>
        </tr>
        <tr>
            <td>
                2. I regularly face decisions that have significant ethical implications<i><span class="error"> <?php echo $questionErr[55];?></span></i>
             </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q55']) && $_POST['Q55'] == '1') echo 'checked="checked"'; ?> name="Q55">
                           </td>
             <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q55']) && $_POST['Q55'] == '2') echo 'checked="checked"'; ?> name="Q55">
                           </td>
             <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q55']) && $_POST['Q55'] == '3') echo 'checked="checked"'; ?> name="Q55">
                           </td>
             <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q55']) && $_POST['Q55'] == '4') echo 'checked="checked"'; ?> name="Q55">
                           </td>
             <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q55']) && $_POST['Q55'] == '5') echo 'checked="checked"'; ?> name="Q55">
                           </td>
             <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q55']) && $_POST['Q55'] == '6') echo 'checked="checked"'; ?> name="Q55">
                           </td>
             <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q55']) && $_POST['Q55'] == '7') echo 'checked="checked"'; ?> name="Q55">
            </td>
        </tr>
        <tr>
            <td>
                3. I regularly think about the ethical implications of my decisions<i><span class="error"> <?php echo $questionErr[56];?></span></i>
             </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q56']) && $_POST['Q56'] == '1') echo 'checked="checked"'; ?> name="Q56">
                           </td>
             <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q56']) && $_POST['Q56'] == '2') echo 'checked="checked"'; ?> name="Q56">
                           </td>
             <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q56']) && $_POST['Q56'] == '3') echo 'checked="checked"'; ?> name="Q56">
                           </td>
             <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q56']) && $_POST['Q56'] == '4') echo 'checked="checked"'; ?> name="Q56">
                           </td>
             <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q56']) && $_POST['Q56'] == '5') echo 'checked="checked"'; ?> name="Q56">
                           </td>
             <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q56']) && $_POST['Q56'] == '6') echo 'checked="checked"'; ?> name="Q56">
                           </td>
             <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q56']) && $_POST['Q56'] == '7') echo 'checked="checked"'; ?> name="Q56">
            </td>
        </tr>
        <tr>
            <td>
                4. I frequently encounter ethical situations<i><span class="error"> <?php echo $questionErr[57];?></span></i>
              </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q57']) && $_POST['Q57'] == '1') echo 'checked="checked"'; ?> name="Q57">
                           </td>
             <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q57']) && $_POST['Q57'] == '2') echo 'checked="checked"'; ?> name="Q57">
                           </td>
             <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q57']) && $_POST['Q57'] == '3') echo 'checked="checked"'; ?> name="Q57">
                           </td>
             <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q57']) && $_POST['Q57'] == '4') echo 'checked="checked"'; ?> name="Q57">
                           </td>
             <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q57']) && $_POST['Q57'] == '5') echo 'checked="checked"'; ?> name="Q57">
                           </td>
             <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q57']) && $_POST['Q57'] == '6') echo 'checked="checked"'; ?> name="Q57">
                           </td>
             <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q57']) && $_POST['Q57'] == '7') echo 'checked="checked"'; ?> name="Q57">
            </td>
        </tr>
        <tr>
            <td>       
                5. I often reflect on the moral aspects of my decisions<i><span class="error"> <?php echo $questionErr[58];?></span></i>
             </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q58']) && $_POST['Q58'] == '1') echo 'checked="checked"'; ?> name="Q58">
                           </td>
             <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q58']) && $_POST['Q58'] == '2') echo 'checked="checked"'; ?> name="Q58">
                           </td>
             <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q58']) && $_POST['Q58'] == '3') echo 'checked="checked"'; ?> name="Q58">
                           </td>
             <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q58']) && $_POST['Q58'] == '4') echo 'checked="checked"'; ?> name="Q58">
                           </td>
             <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q58']) && $_POST['Q58'] == '5') echo 'checked="checked"'; ?> name="Q58">
                           </td>
             <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q58']) && $_POST['Q58'] == '6') echo 'checked="checked"'; ?> name="Q58">
                           </td>
             <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q58']) && $_POST['Q58'] == '7') echo 'checked="checked"'; ?> name="Q58">
            </td>
        </tr>
        <tr>
            <td>      
                6. I'm sometimes asked to advise or assist on things that make me uncomfortable ethically<i><span class="error"> <?php echo $questionErr[59];?></span></i>
             </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q59']) && $_POST['Q59'] == '1') echo 'checked="checked"'; ?> name="Q59">
                           </td>
             <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q59']) && $_POST['Q59'] == '2') echo 'checked="checked"'; ?> name="Q59">
                           </td>
             <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q59']) && $_POST['Q59'] == '3') echo 'checked="checked"'; ?> name="Q59">
                           </td>
             <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q59']) && $_POST['Q59'] == '4') echo 'checked="checked"'; ?> name="Q59">
                           </td>
             <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q59']) && $_POST['Q59'] == '5') echo 'checked="checked"'; ?> name="Q59">
                           </td>
             <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q59']) && $_POST['Q59'] == '6') echo 'checked="checked"'; ?> name="Q59">
                           </td>
             <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q59']) && $_POST['Q59'] == '7') echo 'checked="checked"'; ?> name="Q59">
            </td>
        </tr>
        <tr>
            <td>      
                7. There are tensions between the way I and the business respects obligations to uphold the law<i><span class="error"> <?php echo $questionErr[60];?></span></i>
            </td>
            <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q60']) && $_POST['Q60'] == '1') echo 'checked="checked"'; ?> name="Q60">
                           </td>
             <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q60']) && $_POST['Q60'] == '2') echo 'checked="checked"'; ?> name="Q60">
                           </td>
             <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q60']) && $_POST['Q60'] == '3') echo 'checked="checked"'; ?> name="Q60">
                           </td>
             <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q60']) && $_POST['Q60'] == '4') echo 'checked="checked"'; ?> name="Q60">
                           </td>
             <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q60']) && $_POST['Q60'] == '5') echo 'checked="checked"'; ?> name="Q60">
                           </td>
             <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q60']) && $_POST['Q60'] == '6') echo 'checked="checked"'; ?> name="Q60">
                           </td>
             <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q60']) && $_POST['Q60'] == '7') echo 'checked="checked"'; ?> name="Q60">
            </td>
        </tr>
    </table>

    <input type="submit" name="submit" value="Next"> 
</form>

    <a href="survey-1.php" class="previous">&laquo; Previous</a>

</div>
</body>
</html>