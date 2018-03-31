<!doctype html>
<html lang="en">
<head>
<style>
    .error { color: red;}

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

    <title> Survey | In-house Identities Explorer</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!-- Link to internal stylesheet -->
    <link rel="stylesheet" type="text/css" href="styles/stylesheet-master.css">

    <!-- Links to Google Fonts: -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="survey-1.css" rel="stylesheet">

    <body>
        <?php include('survey-1_processor.php'); ?>
        
</head>

<!-- HEADER -->
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <img class="nav-left">

        <img class="featurette-image img-fluid mx-auto" src="res/icons/u-icon.png" alt="Image"> </img>

        <a class="navbar-brand" href="index.html">ID Explore</a>
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

<main role="main">

    <!-- SURVEY BOX -->
    <div class="survey-box">
    <h2> In-House Identities Explorer</h2>

        <!-- PROGRESS BAR -->
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="70"
             aria-valuemin="0" aria-valuemax="100" style="width:00%">00%
        </div>
    </div>

        <!-- SURVEY SECTION -->
<form id="survey-1" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
<ol>
    <li><td>Are you an in-house lawyer? <i>You can still complete the survey if you are not an in-house lawyer.<span class="error"> <?php echo $questionErr[1];?></span></i></td></li>
<br>
    <td>
    <input type="radio" value="1" <?php if (isset($_POST['Q1']) && $_POST['Q1'] == '1') echo 'checked="checked"'; ?> name="Q1">Yes
    <input type="radio" value="2" <?php if (isset($_POST['Q1']) && $_POST['Q1'] == '2') echo 'checked="checked"'; ?> name="Q1">No
</td>

<hr>

    <li><td>How many years since you first qualified as a practising lawyer? <i>Please estimate if you do not recall exactly<span class="error"> <?php echo $questionErr[2];?></span></i></td></li>
    <br>
    <td>
        <input type="radio" value="1" <?php if (isset($_POST['Q2']) && $_POST['Q2'] == '1') echo 'checked="checked"'; ?> name="Q2">0-5
        <input type="radio" value="2" <?php if (isset($_POST['Q2']) && $_POST['Q2'] == '2') echo 'checked="checked"'; ?> name="Q2">6-10
        <input type="radio" value="3" <?php if (isset($_POST['Q2']) && $_POST['Q2'] == '3') echo 'checked="checked"'; ?> name="Q2">11-15
        <input type="radio" value="4" <?php if (isset($_POST['Q2']) && $_POST['Q2'] == '4') echo 'checked="checked"'; ?> name="Q2">16-20
        <input type="radio" value="5" <?php if (isset($_POST['Q2']) && $_POST['Q2'] == '5') echo 'checked="checked"'; ?> name="Q2">21-25
        <input type="radio" value="6" <?php if (isset($_POST['Q2']) && $_POST['Q2'] == '6') echo 'checked="checked"'; ?> name="Q2">26-30
        <input type="radio" value="7" <?php if (isset($_POST['Q2']) && $_POST['Q2'] == '7') echo 'checked="checked"'; ?> name="Q2">31+
    </td>

<hr>


    <li>Which jurisdictions did you qualify in?<i>Hold Ctrl to select multiple <span class="error"> <?php echo $questionErr[3];?></span></i><td></td></li>
<br>
    <td>
        <select name="Q3[]" multiple="multiple">
            <option value="GB" <?php if(isset($_POST['Q3']) && in_array('GB',$_POST['Q3'],true)) echo"selected"; ?> >United Kingdom</option> 
            <option value="AF" <?php if(isset($_POST['Q3']) && in_array('AF',$_POST['Q3'],true)) echo"selected"; ?> >Afghanistan</option> 
            <option value="AX" <?php if(isset($_POST['Q3']) && in_array('AX',$_POST['Q3'],true)) echo"selected"; ?> >Åland Islands</option>
            <option value="AL" <?php if(isset($_POST['Q3']) && in_array('AL',$_POST['Q3'],true)) echo"selected"; ?> >Albania</option>
            <option value="DZ" <?php if(isset($_POST['Q3']) && in_array('DZ',$_POST['Q3'],true)) echo"selected"; ?> >Algeria</option>
            <option value="AS" <?php if(isset($_POST['Q3']) && in_array('AS',$_POST['Q3'],true)) echo"selected"; ?> >American Samoa</option>
            <option value="AD" <?php if(isset($_POST['Q3']) && in_array('AD',$_POST['Q3'],true)) echo"selected"; ?> >Andorra</option>
            <option value="AO" <?php if(isset($_POST['Q3']) && in_array('AO',$_POST['Q3'],true)) echo"selected"; ?> >Angola</option>
            <option value="AI" <?php if(isset($_POST['Q3']) && in_array('AI',$_POST['Q3'],true)) echo"selected"; ?> >Anguilla</option>
            <option value="AQ" <?php if(isset($_POST['Q3']) && in_array('AQ',$_POST['Q3'],true)) echo"selected"; ?> >Antarctica</option>
            <option value="AG" <?php if(isset($_POST['Q3']) && in_array('AG',$_POST['Q3'],true)) echo"selected"; ?> >Antigua and Barbuda</option>
            <option value="AR" <?php if(isset($_POST['Q3']) && in_array('AR',$_POST['Q3'],true)) echo"selected"; ?> >Argentina</option>
            <option value="AM" <?php if(isset($_POST['Q3']) && in_array('AM',$_POST['Q3'],true)) echo"selected"; ?> >Armenia</option>
            <option value="AW" <?php if(isset($_POST['Q3']) && in_array('AW',$_POST['Q3'],true)) echo"selected"; ?> >Aruba</option>
            <option value="AU" <?php if(isset($_POST['Q3']) && in_array('AU',$_POST['Q3'],true)) echo"selected"; ?> >Australia</option>
            <option value="AT" <?php if(isset($_POST['Q3']) && in_array('AT',$_POST['Q3'],true)) echo"selected"; ?> >Austria</option>
            <option value="AZ" <?php if(isset($_POST['Q3']) && in_array('AZ',$_POST['Q3'],true)) echo"selected"; ?> >Azerbaijan</option>
            <option value="BS" <?php if(isset($_POST['Q3']) && in_array('BS',$_POST['Q3'],true)) echo"selected"; ?> >Bahamas</option>
            <option value="BH" <?php if(isset($_POST['Q3']) && in_array('BH',$_POST['Q3'],true)) echo"selected"; ?> >Bahrain</option>
            <option value="BD" <?php if(isset($_POST['Q3']) && in_array('BD',$_POST['Q3'],true)) echo"selected"; ?> >Bangladesh</option>
            <option value="BB" <?php if(isset($_POST['Q3']) && in_array('BB',$_POST['Q3'],true)) echo"selected"; ?> >Barbados</option>
            <option value="BY" <?php if(isset($_POST['Q3']) && in_array('BY',$_POST['Q3'],true)) echo"selected"; ?> >Belarus</option>
            <option value="BE" <?php if(isset($_POST['Q3']) && in_array('BE',$_POST['Q3'],true)) echo"selected"; ?> >Belgium</option>
            <option value="BZ" <?php if(isset($_POST['Q3']) && in_array('BZ',$_POST['Q3'],true)) echo"selected"; ?> >Belize</option>
            <option value="BJ" <?php if(isset($_POST['Q3']) && in_array('BJ',$_POST['Q3'],true)) echo"selected"; ?> >Benin</option>
            <option value="BM" <?php if(isset($_POST['Q3']) && in_array('BM',$_POST['Q3'],true)) echo"selected"; ?> >Bermuda</option>
            <option value="BT" <?php if(isset($_POST['Q3']) && in_array('BT',$_POST['Q3'],true)) echo"selected"; ?> >Bhutan</option>
            <option value="BO" <?php if(isset($_POST['Q3']) && in_array('BO',$_POST['Q3'],true)) echo"selected"; ?> >Bolivia, Plurinational State of</option>
            <option value="BQ" <?php if(isset($_POST['Q3']) && in_array('BQ',$_POST['Q3'],true)) echo"selected"; ?> >Bonaire, Sint Eustatius and Saba</option>
            <option value="BA" <?php if(isset($_POST['Q3']) && in_array('BA',$_POST['Q3'],true)) echo"selected"; ?> >Bosnia and Herzegovina</option>
            <option value="BW" <?php if(isset($_POST['Q3']) && in_array('BW',$_POST['Q3'],true)) echo"selected"; ?> >Botswana</option>
            <option value="BV" <?php if(isset($_POST['Q3']) && in_array('BV',$_POST['Q3'],true)) echo"selected"; ?> >Bouvet Island</option>
            <option value="BR" <?php if(isset($_POST['Q3']) && in_array('BR',$_POST['Q3'],true)) echo"selected"; ?> >Brazil</option>
            <option value="IO" <?php if(isset($_POST['Q3']) && in_array('IO',$_POST['Q3'],true)) echo"selected"; ?> >British Indian Ocean Territory</option>
            <option value="BN" <?php if(isset($_POST['Q3']) && in_array('BN',$_POST['Q3'],true)) echo"selected"; ?> >Brunei Darussalam</option>
            <option value="BG" <?php if(isset($_POST['Q3']) && in_array('BG',$_POST['Q3'],true)) echo"selected"; ?> >Bulgaria</option>
            <option value="BF" <?php if(isset($_POST['Q3']) && in_array('BF',$_POST['Q3'],true)) echo"selected"; ?> >Burkina Faso</option>
            <option value="BI" <?php if(isset($_POST['Q3']) && in_array('BI',$_POST['Q3'],true)) echo"selected"; ?> >Burundi</option>
            <option value="KH" <?php if(isset($_POST['Q3']) && in_array('KH',$_POST['Q3'],true)) echo"selected"; ?> >Cambodia</option>
            <option value="CM" <?php if(isset($_POST['Q3']) && in_array('CM',$_POST['Q3'],true)) echo"selected"; ?> >Cameroon</option>
            <option value="CA" <?php if(isset($_POST['Q3']) && in_array('CA',$_POST['Q3'],true)) echo"selected"; ?> >Canada</option>
            <option value="CV" <?php if(isset($_POST['Q3']) && in_array('CV',$_POST['Q3'],true)) echo"selected"; ?> >Cape Verde</option>
            <option value="KY" <?php if(isset($_POST['Q3']) && in_array('KY',$_POST['Q3'],true)) echo"selected"; ?> >Cayman Islands</option>
            <option value="CF" <?php if(isset($_POST['Q3']) && in_array('CF',$_POST['Q3'],true)) echo"selected"; ?> >Central African Republic</option>
            <option value="TD" <?php if(isset($_POST['Q3']) && in_array('TD',$_POST['Q3'],true)) echo"selected"; ?> >Chad</option>
            <option value="CL" <?php if(isset($_POST['Q3']) && in_array('CL',$_POST['Q3'],true)) echo"selected"; ?> >Chile</option>
            <option value="CN" <?php if(isset($_POST['Q3']) && in_array('CN',$_POST['Q3'],true)) echo"selected"; ?> >China</option>
            <option value="CX" <?php if(isset($_POST['Q3']) && in_array('CX',$_POST['Q3'],true)) echo"selected"; ?> >Christmas Island</option>
            <option value="CC" <?php if(isset($_POST['Q3']) && in_array('CC',$_POST['Q3'],true)) echo"selected"; ?> >Cocos (Keeling) Islands</option>
            <option value="CO" <?php if(isset($_POST['Q3']) && in_array('CO',$_POST['Q3'],true)) echo"selected"; ?> >Colombia</option>
            <option value="KM" <?php if(isset($_POST['Q3']) && in_array('KM',$_POST['Q3'],true)) echo"selected"; ?> >Comoros</option>
            <option value="CG" <?php if(isset($_POST['Q3']) && in_array('CG',$_POST['Q3'],true)) echo"selected"; ?> >Congo</option>
            <option value="CD" <?php if(isset($_POST['Q3']) && in_array('CD',$_POST['Q3'],true)) echo"selected"; ?> >Congo, the Democratic Republic of the</option>
            <option value="CK" <?php if(isset($_POST['Q3']) && in_array('CK',$_POST['Q3'],true)) echo"selected"; ?> >Cook Islands</option>
            <option value="CR" <?php if(isset($_POST['Q3']) && in_array('CR',$_POST['Q3'],true)) echo"selected"; ?> >Costa Rica</option>
            <option value="CI" <?php if(isset($_POST['Q3']) && in_array('CI',$_POST['Q3'],true)) echo"selected"; ?> >Côte d'Ivoire</option>
            <option value="HR" <?php if(isset($_POST['Q3']) && in_array('HR',$_POST['Q3'],true)) echo"selected"; ?> >Croatia</option>
            <option value="CU" <?php if(isset($_POST['Q3']) && in_array('CU',$_POST['Q3'],true)) echo"selected"; ?> >Cuba</option>
            <option value="CW" <?php if(isset($_POST['Q3']) && in_array('CW',$_POST['Q3'],true)) echo"selected"; ?> >Curaçao</option>
            <option value="CY" <?php if(isset($_POST['Q3']) && in_array('CY',$_POST['Q3'],true)) echo"selected"; ?> >Cyprus</option>
            <option value="CZ" <?php if(isset($_POST['Q3']) && in_array('CZ',$_POST['Q3'],true)) echo"selected"; ?> >Czech Republic</option>
            <option value="DK" <?php if(isset($_POST['Q3']) && in_array('DK',$_POST['Q3'],true)) echo"selected"; ?> >Denmark</option>
            <option value="DJ" <?php if(isset($_POST['Q3']) && in_array('DJ',$_POST['Q3'],true)) echo"selected"; ?> >Djibouti</option>
            <option value="DM" <?php if(isset($_POST['Q3']) && in_array('DM',$_POST['Q3'],true)) echo"selected"; ?> >Dominica</option>
            <option value="DO" <?php if(isset($_POST['Q3']) && in_array('DO',$_POST['Q3'],true)) echo"selected"; ?> >Dominican Republic</option>
            <option value="EC" <?php if(isset($_POST['Q3']) && in_array('EC',$_POST['Q3'],true)) echo"selected"; ?> >Ecuador</option>
            <option value="EG" <?php if(isset($_POST['Q3']) && in_array('EG',$_POST['Q3'],true)) echo"selected"; ?> >Egypt</option>
            <option value="SV" <?php if(isset($_POST['Q3']) && in_array('SV',$_POST['Q3'],true)) echo"selected"; ?> >El Salvador</option>
            <option value="GQ" <?php if(isset($_POST['Q3']) && in_array('GQ',$_POST['Q3'],true)) echo"selected"; ?> >Equatorial Guinea</option>
            <option value="ER" <?php if(isset($_POST['Q3']) && in_array('ER',$_POST['Q3'],true)) echo"selected"; ?> >Eritrea</option>
            <option value="EE" <?php if(isset($_POST['Q3']) && in_array('EE',$_POST['Q3'],true)) echo"selected"; ?> >Estonia</option>
            <option value="ET" <?php if(isset($_POST['Q3']) && in_array('ET',$_POST['Q3'],true)) echo"selected"; ?> >Ethiopia</option>
            <option value="FK" <?php if(isset($_POST['Q3']) && in_array('FK',$_POST['Q3'],true)) echo"selected"; ?> >Falkland Islands (Malvinas)</option>
            <option value="FO" <?php if(isset($_POST['Q3']) && in_array('FO',$_POST['Q3'],true)) echo"selected"; ?> >Faroe Islands</option>
            <option value="FJ" <?php if(isset($_POST['Q3']) && in_array('FJ',$_POST['Q3'],true)) echo"selected"; ?> >Fiji</option>
            <option value="FI" <?php if(isset($_POST['Q3']) && in_array('FI',$_POST['Q3'],true)) echo"selected"; ?> >Finland</option>
            <option value="FR" <?php if(isset($_POST['Q3']) && in_array('FR',$_POST['Q3'],true)) echo"selected"; ?> >France</option>
            <option value="GF" <?php if(isset($_POST['Q3']) && in_array('GF',$_POST['Q3'],true)) echo"selected"; ?> >French Guiana</option>
            <option value="PF" <?php if(isset($_POST['Q3']) && in_array('PF',$_POST['Q3'],true)) echo"selected"; ?> >French Polynesia</option>
            <option value="TF" <?php if(isset($_POST['Q3']) && in_array('TF',$_POST['Q3'],true)) echo"selected"; ?> >French Southern Territories</option>
            <option value="GA" <?php if(isset($_POST['Q3']) && in_array('GA',$_POST['Q3'],true)) echo"selected"; ?> >Gabon</option>
            <option value="GM" <?php if(isset($_POST['Q3']) && in_array('GM',$_POST['Q3'],true)) echo"selected"; ?> >Gambia</option>
            <option value="GE" <?php if(isset($_POST['Q3']) && in_array('GE',$_POST['Q3'],true)) echo"selected"; ?> >Georgia</option>
            <option value="DE" <?php if(isset($_POST['Q3']) && in_array('DE',$_POST['Q3'],true)) echo"selected"; ?> >Germany</option>
            <option value="GH" <?php if(isset($_POST['Q3']) && in_array('GH',$_POST['Q3'],true)) echo"selected"; ?> >Ghana</option>
            <option value="GI" <?php if(isset($_POST['Q3']) && in_array('GI',$_POST['Q3'],true)) echo"selected"; ?> >Gibraltar</option>
            <option value="GR" <?php if(isset($_POST['Q3']) && in_array('GR',$_POST['Q3'],true)) echo"selected"; ?> >Greece</option>
            <option value="GL" <?php if(isset($_POST['Q3']) && in_array('GL',$_POST['Q3'],true)) echo"selected"; ?> >Greenland</option>
            <option value="GD" <?php if(isset($_POST['Q3']) && in_array('GD',$_POST['Q3'],true)) echo"selected"; ?> >Grenada</option>
            <option value="GP" <?php if(isset($_POST['Q3']) && in_array('GP',$_POST['Q3'],true)) echo"selected"; ?> >Guadeloupe</option>
            <option value="GU" <?php if(isset($_POST['Q3']) && in_array('GU',$_POST['Q3'],true)) echo"selected"; ?> >Guam</option>
            <option value="GT" <?php if(isset($_POST['Q3']) && in_array('GT',$_POST['Q3'],true)) echo"selected"; ?> >Guatemala</option>
            <option value="GG" <?php if(isset($_POST['Q3']) && in_array('GG',$_POST['Q3'],true)) echo"selected"; ?> >Guernsey</option>
            <option value="GN" <?php if(isset($_POST['Q3']) && in_array('GN',$_POST['Q3'],true)) echo"selected"; ?> >Guinea</option>
            <option value="GW" <?php if(isset($_POST['Q3']) && in_array('GW',$_POST['Q3'],true)) echo"selected"; ?> >Guinea-Bissau</option>
            <option value="GY" <?php if(isset($_POST['Q3']) && in_array('GY',$_POST['Q3'],true)) echo"selected"; ?> >Guyana</option>
            <option value="HT" <?php if(isset($_POST['Q3']) && in_array('HT',$_POST['Q3'],true)) echo"selected"; ?> >Haiti</option>
            <option value="HM" <?php if(isset($_POST['Q3']) && in_array('HM',$_POST['Q3'],true)) echo"selected"; ?> >Heard Island and McDonald Islands</option>
            <option value="VA" <?php if(isset($_POST['Q3']) && in_array('VA',$_POST['Q3'],true)) echo"selected"; ?> >Holy See (Vatican City State)</option>
            <option value="HN" <?php if(isset($_POST['Q3']) && in_array('HN',$_POST['Q3'],true)) echo"selected"; ?> >Honduras</option>
            <option value="HK" <?php if(isset($_POST['Q3']) && in_array('HK',$_POST['Q3'],true)) echo"selected"; ?> >Hong Kong</option>
            <option value="HU" <?php if(isset($_POST['Q3']) && in_array('HU',$_POST['Q3'],true)) echo"selected"; ?> >Hungary</option>
            <option value="IS" <?php if(isset($_POST['Q3']) && in_array('IS',$_POST['Q3'],true)) echo"selected"; ?> >Iceland</option>
            <option value="IN" <?php if(isset($_POST['Q3']) && in_array('IN',$_POST['Q3'],true)) echo"selected"; ?> >India</option>
            <option value="ID" <?php if(isset($_POST['Q3']) && in_array('ID',$_POST['Q3'],true)) echo"selected"; ?> >Indonesia</option>
            <option value="IR" <?php if(isset($_POST['Q3']) && in_array('IR',$_POST['Q3'],true)) echo"selected"; ?> >Iran, Islamic Republic of</option>
            <option value="IQ" <?php if(isset($_POST['Q3']) && in_array('IQ',$_POST['Q3'],true)) echo"selected"; ?> >Iraq</option>
            <option value="IE" <?php if(isset($_POST['Q3']) && in_array('IE',$_POST['Q3'],true)) echo"selected"; ?> >Ireland</option>
            <option value="IM" <?php if(isset($_POST['Q3']) && in_array('IM',$_POST['Q3'],true)) echo"selected"; ?> >Isle of Man</option>
            <option value="IL" <?php if(isset($_POST['Q3']) && in_array('IL',$_POST['Q3'],true)) echo"selected"; ?> >Israel</option>
            <option value="IT" <?php if(isset($_POST['Q3']) && in_array('IT',$_POST['Q3'],true)) echo"selected"; ?> >Italy</option>
            <option value="JM" <?php if(isset($_POST['Q3']) && in_array('JM',$_POST['Q3'],true)) echo"selected"; ?> >Jamaica</option>
            <option value="JP" <?php if(isset($_POST['Q3']) && in_array('JP',$_POST['Q3'],true)) echo"selected"; ?> >Japan</option>
            <option value="JE" <?php if(isset($_POST['Q3']) && in_array('JE',$_POST['Q3'],true)) echo"selected"; ?> >Jersey</option>
            <option value="JO" <?php if(isset($_POST['Q3']) && in_array('JO',$_POST['Q3'],true)) echo"selected"; ?> >Jordan</option>
            <option value="KZ" <?php if(isset($_POST['Q3']) && in_array('KZ',$_POST['Q3'],true)) echo"selected"; ?> >Kazakhstan</option>
            <option value="KE" <?php if(isset($_POST['Q3']) && in_array('KE',$_POST['Q3'],true)) echo"selected"; ?> >Kenya</option>
            <option value="KI" <?php if(isset($_POST['Q3']) && in_array('KI',$_POST['Q3'],true)) echo"selected"; ?> >Kiribati</option>
            <option value="KP" <?php if(isset($_POST['Q3']) && in_array('KP',$_POST['Q3'],true)) echo"selected"; ?> >Korea, Democratic People's Republic of</option>
            <option value="KR" <?php if(isset($_POST['Q3']) && in_array('KR',$_POST['Q3'],true)) echo"selected"; ?> >Korea, Republic of</option>
            <option value="KW" <?php if(isset($_POST['Q3']) && in_array('KW',$_POST['Q3'],true)) echo"selected"; ?> >Kuwait</option>
            <option value="KG" <?php if(isset($_POST['Q3']) && in_array('KG',$_POST['Q3'],true)) echo"selected"; ?> >Kyrgyzstan</option>
            <option value="LA" <?php if(isset($_POST['Q3']) && in_array('LA',$_POST['Q3'],true)) echo"selected"; ?> >Lao People's Democratic Republic</option>
            <option value="LV" <?php if(isset($_POST['Q3']) && in_array('LV',$_POST['Q3'],true)) echo"selected"; ?> >Latvia</option>
            <option value="LB" <?php if(isset($_POST['Q3']) && in_array('LB',$_POST['Q3'],true)) echo"selected"; ?> >Lebanon</option>
            <option value="LS" <?php if(isset($_POST['Q3']) && in_array('LS',$_POST['Q3'],true)) echo"selected"; ?> >Lesotho</option>
            <option value="LR" <?php if(isset($_POST['Q3']) && in_array('LR',$_POST['Q3'],true)) echo"selected"; ?> >Liberia</option>
            <option value="LY" <?php if(isset($_POST['Q3']) && in_array('LY',$_POST['Q3'],true)) echo"selected"; ?> >Libya</option>
            <option value="LI" <?php if(isset($_POST['Q3']) && in_array('LI',$_POST['Q3'],true)) echo"selected"; ?> >Liechtenstein</option>
            <option value="LT" <?php if(isset($_POST['Q3']) && in_array('LT',$_POST['Q3'],true)) echo"selected"; ?> >Lithuania</option>
            <option value="LU" <?php if(isset($_POST['Q3']) && in_array('LU',$_POST['Q3'],true)) echo"selected"; ?> >Luxembourg</option>
            <option value="MO" <?php if(isset($_POST['Q3']) && in_array('MO',$_POST['Q3'],true)) echo"selected"; ?> >Macao</option>
            <option value="MK" <?php if(isset($_POST['Q3']) && in_array('MK',$_POST['Q3'],true)) echo"selected"; ?> >Macedonia, the former Yugoslav Republic of</option>
            <option value="MG" <?php if(isset($_POST['Q3']) && in_array('MG',$_POST['Q3'],true)) echo"selected"; ?> >Madagascar</option>
            <option value="MW" <?php if(isset($_POST['Q3']) && in_array('MW',$_POST['Q3'],true)) echo"selected"; ?> >Malawi</option>
            <option value="MY" <?php if(isset($_POST['Q3']) && in_array('MY',$_POST['Q3'],true)) echo"selected"; ?> >Malaysia</option>
            <option value="MV" <?php if(isset($_POST['Q3']) && in_array('MV',$_POST['Q3'],true)) echo"selected"; ?> >Maldives</option>
            <option value="ML" <?php if(isset($_POST['Q3']) && in_array('ML',$_POST['Q3'],true)) echo"selected"; ?> >Mali</option>
            <option value="MT" <?php if(isset($_POST['Q3']) && in_array('MT',$_POST['Q3'],true)) echo"selected"; ?> >Malta</option>
            <option value="MH" <?php if(isset($_POST['Q3']) && in_array('MH',$_POST['Q3'],true)) echo"selected"; ?> >Marshall Islands</option>
            <option value="MQ" <?php if(isset($_POST['Q3']) && in_array('MQ',$_POST['Q3'],true)) echo"selected"; ?> >Martinique</option>
            <option value="MR" <?php if(isset($_POST['Q3']) && in_array('MR',$_POST['Q3'],true)) echo"selected"; ?> >Mauritania</option>
            <option value="MU" <?php if(isset($_POST['Q3']) && in_array('MU',$_POST['Q3'],true)) echo"selected"; ?> >Mauritius</option>
            <option value="YT" <?php if(isset($_POST['Q3']) && in_array('YT',$_POST['Q3'],true)) echo"selected"; ?> >Mayotte</option>
            <option value="MX" <?php if(isset($_POST['Q3']) && in_array('MX',$_POST['Q3'],true)) echo"selected"; ?> >Mexico</option>
            <option value="FM" <?php if(isset($_POST['Q3']) && in_array('FM',$_POST['Q3'],true)) echo"selected"; ?> >Micronesia, Federated States of</option>
            <option value="MD" <?php if(isset($_POST['Q3']) && in_array('MD',$_POST['Q3'],true)) echo"selected"; ?> >Moldova, Republic of</option>
            <option value="MC" <?php if(isset($_POST['Q3']) && in_array('MC',$_POST['Q3'],true)) echo"selected"; ?> >Monaco</option>
            <option value="MN" <?php if(isset($_POST['Q3']) && in_array('MN',$_POST['Q3'],true)) echo"selected"; ?> >Mongolia</option>
            <option value="ME" <?php if(isset($_POST['Q3']) && in_array('ME',$_POST['Q3'],true)) echo"selected"; ?> >Montenegro</option>
            <option value="MS" <?php if(isset($_POST['Q3']) && in_array('MS',$_POST['Q3'],true)) echo"selected"; ?> >Montserrat</option>
            <option value="MA" <?php if(isset($_POST['Q3']) && in_array('MA',$_POST['Q3'],true)) echo"selected"; ?> >Morocco</option>
            <option value="MZ" <?php if(isset($_POST['Q3']) && in_array('MZ',$_POST['Q3'],true)) echo"selected"; ?> >Mozambique</option>
            <option value="MM" <?php if(isset($_POST['Q3']) && in_array('MM',$_POST['Q3'],true)) echo"selected"; ?> >Myanmar</option>
            <option value="NA" <?php if(isset($_POST['Q3']) && in_array('NA',$_POST['Q3'],true)) echo"selected"; ?> >Namibia</option>
            <option value="NR" <?php if(isset($_POST['Q3']) && in_array('NR',$_POST['Q3'],true)) echo"selected"; ?> >Nauru</option>
            <option value="NP" <?php if(isset($_POST['Q3']) && in_array('NP',$_POST['Q3'],true)) echo"selected"; ?> >Nepal</option>
            <option value="NL" <?php if(isset($_POST['Q3']) && in_array('NL',$_POST['Q3'],true)) echo"selected"; ?> >Netherlands</option>
            <option value="NC" <?php if(isset($_POST['Q3']) && in_array('NC',$_POST['Q3'],true)) echo"selected"; ?> >New Caledonia</option>
            <option value="NZ" <?php if(isset($_POST['Q3']) && in_array('NZ',$_POST['Q3'],true)) echo"selected"; ?> >New Zealand</option>
            <option value="NI" <?php if(isset($_POST['Q3']) && in_array('NI',$_POST['Q3'],true)) echo"selected"; ?> >Nicaragua</option>
            <option value="NE" <?php if(isset($_POST['Q3']) && in_array('NE',$_POST['Q3'],true)) echo"selected"; ?> >Niger</option>
            <option value="NG" <?php if(isset($_POST['Q3']) && in_array('NG',$_POST['Q3'],true)) echo"selected"; ?> >Nigeria</option>
            <option value="NU" <?php if(isset($_POST['Q3']) && in_array('NU',$_POST['Q3'],true)) echo"selected"; ?> >Niue</option>
            <option value="NF" <?php if(isset($_POST['Q3']) && in_array('NF',$_POST['Q3'],true)) echo"selected"; ?> >Norfolk Island</option>
            <option value="MP" <?php if(isset($_POST['Q3']) && in_array('MP',$_POST['Q3'],true)) echo"selected"; ?> >Northern Mariana Islands</option>
            <option value="NO" <?php if(isset($_POST['Q3']) && in_array('NO',$_POST['Q3'],true)) echo"selected"; ?> >Norway</option>
            <option value="OM" <?php if(isset($_POST['Q3']) && in_array('OM',$_POST['Q3'],true)) echo"selected"; ?> >Oman</option>
            <option value="PK" <?php if(isset($_POST['Q3']) && in_array('PK',$_POST['Q3'],true)) echo"selected"; ?> >Pakistan</option>
            <option value="PW" <?php if(isset($_POST['Q3']) && in_array('PW',$_POST['Q3'],true)) echo"selected"; ?> >Palau</option>
            <option value="PS" <?php if(isset($_POST['Q3']) && in_array('PS',$_POST['Q3'],true)) echo"selected"; ?> >Palestinian Territory, Occupied</option>
            <option value="PA" <?php if(isset($_POST['Q3']) && in_array('PA',$_POST['Q3'],true)) echo"selected"; ?> >Panama</option>
            <option value="PG" <?php if(isset($_POST['Q3']) && in_array('PG',$_POST['Q3'],true)) echo"selected"; ?> >Papua New Guinea</option>
            <option value="PY" <?php if(isset($_POST['Q3']) && in_array('PY',$_POST['Q3'],true)) echo"selected"; ?> >Paraguay</option>
            <option value="PE" <?php if(isset($_POST['Q3']) && in_array('PE',$_POST['Q3'],true)) echo"selected"; ?> >Peru</option>
            <option value="PH" <?php if(isset($_POST['Q3']) && in_array('PH',$_POST['Q3'],true)) echo"selected"; ?> >Philippines</option>
            <option value="PN" <?php if(isset($_POST['Q3']) && in_array('PN',$_POST['Q3'],true)) echo"selected"; ?> >Pitcairn</option>
            <option value="PL" <?php if(isset($_POST['Q3']) && in_array('PL',$_POST['Q3'],true)) echo"selected"; ?> >Poland</option>
            <option value="PT" <?php if(isset($_POST['Q3']) && in_array('PT',$_POST['Q3'],true)) echo"selected"; ?> >Portugal</option>
            <option value="PR" <?php if(isset($_POST['Q3']) && in_array('PR',$_POST['Q3'],true)) echo"selected"; ?> >Puerto Rico</option>
            <option value="QA" <?php if(isset($_POST['Q3']) && in_array('QA',$_POST['Q3'],true)) echo"selected"; ?> >Qatar</option>
            <option value="RE" <?php if(isset($_POST['Q3']) && in_array('RE',$_POST['Q3'],true)) echo"selected"; ?> >Réunion</option>
            <option value="RO" <?php if(isset($_POST['Q3']) && in_array('RO',$_POST['Q3'],true)) echo"selected"; ?> >Romania</option>
            <option value="RU" <?php if(isset($_POST['Q3']) && in_array('RU',$_POST['Q3'],true)) echo"selected"; ?> >Russian Federation</option>
            <option value="RW" <?php if(isset($_POST['Q3']) && in_array('RW',$_POST['Q3'],true)) echo"selected"; ?> >Rwanda</option>
            <option value="BL" <?php if(isset($_POST['Q3']) && in_array('BL',$_POST['Q3'],true)) echo"selected"; ?> >Saint Barthélemy</option>
            <option value="SH" <?php if(isset($_POST['Q3']) && in_array('SH',$_POST['Q3'],true)) echo"selected"; ?> >Saint Helena, Ascension and Tristan da Cunha</option>
            <option value="KN" <?php if(isset($_POST['Q3']) && in_array('KN',$_POST['Q3'],true)) echo"selected"; ?> >Saint Kitts and Nevis</option>
            <option value="LC" <?php if(isset($_POST['Q3']) && in_array('LC',$_POST['Q3'],true)) echo"selected"; ?> >Saint Lucia</option>
            <option value="MF" <?php if(isset($_POST['Q3']) && in_array('MF',$_POST['Q3'],true)) echo"selected"; ?> >Saint Martin (French part)</option>
            <option value="PM" <?php if(isset($_POST['Q3']) && in_array('PM',$_POST['Q3'],true)) echo"selected"; ?> >Saint Pierre and Miquelon</option>
            <option value="VC" <?php if(isset($_POST['Q3']) && in_array('VC',$_POST['Q3'],true)) echo"selected"; ?> >Saint Vincent and the Grenadines</option>
            <option value="WS" <?php if(isset($_POST['Q3']) && in_array('WS',$_POST['Q3'],true)) echo"selected"; ?> >Samoa</option>
            <option value="SM" <?php if(isset($_POST['Q3']) && in_array('SM',$_POST['Q3'],true)) echo"selected"; ?> >San Marino</option>
            <option value="ST" <?php if(isset($_POST['Q3']) && in_array('ST',$_POST['Q3'],true)) echo"selected"; ?> >Sao Tome and Principe</option>
            <option value="SA" <?php if(isset($_POST['Q3']) && in_array('SA',$_POST['Q3'],true)) echo"selected"; ?> >Saudi Arabia</option>
            <option value="SN" <?php if(isset($_POST['Q3']) && in_array('SN',$_POST['Q3'],true)) echo"selected"; ?> >Senegal</option>
            <option value="RS" <?php if(isset($_POST['Q3']) && in_array('RS',$_POST['Q3'],true)) echo"selected"; ?> >Serbia</option>
            <option value="SC" <?php if(isset($_POST['Q3']) && in_array('SC',$_POST['Q3'],true)) echo"selected"; ?> >Seychelles</option>
            <option value="SL" <?php if(isset($_POST['Q3']) && in_array('SL',$_POST['Q3'],true)) echo"selected"; ?> >Sierra Leone</option>
            <option value="SG" <?php if(isset($_POST['Q3']) && in_array('SG',$_POST['Q3'],true)) echo"selected"; ?> >Singapore</option>
            <option value="SX" <?php if(isset($_POST['Q3']) && in_array('SX',$_POST['Q3'],true)) echo"selected"; ?> >Sint Maarten (Dutch part)</option>
            <option value="SK" <?php if(isset($_POST['Q3']) && in_array('SK',$_POST['Q3'],true)) echo"selected"; ?> >Slovakia</option>
            <option value="SI" <?php if(isset($_POST['Q3']) && in_array('SI',$_POST['Q3'],true)) echo"selected"; ?> >Slovenia</option>
            <option value="SB" <?php if(isset($_POST['Q3']) && in_array('SB',$_POST['Q3'],true)) echo"selected"; ?> >Solomon Islands</option>
            <option value="SO" <?php if(isset($_POST['Q3']) && in_array('SO',$_POST['Q3'],true)) echo"selected"; ?> >Somalia</option>
            <option value="ZA" <?php if(isset($_POST['Q3']) && in_array('ZA',$_POST['Q3'],true)) echo"selected"; ?> >South Africa</option>
            <option value="GS" <?php if(isset($_POST['Q3']) && in_array('GS',$_POST['Q3'],true)) echo"selected"; ?> >South Georgia and the South Sandwich Islands</option>
            <option value="SS" <?php if(isset($_POST['Q3']) && in_array('SS',$_POST['Q3'],true)) echo"selected"; ?> >South Sudan</option>
            <option value="ES" <?php if(isset($_POST['Q3']) && in_array('ES',$_POST['Q3'],true)) echo"selected"; ?> >Spain</option>
            <option value="LK" <?php if(isset($_POST['Q3']) && in_array('LK',$_POST['Q3'],true)) echo"selected"; ?> >Sri Lanka</option>
            <option value="SD" <?php if(isset($_POST['Q3']) && in_array('SD',$_POST['Q3'],true)) echo"selected"; ?> >Sudan</option>
            <option value="SR" <?php if(isset($_POST['Q3']) && in_array('SR',$_POST['Q3'],true)) echo"selected"; ?> >Suriname</option>
            <option value="SJ" <?php if(isset($_POST['Q3']) && in_array('SJ',$_POST['Q3'],true)) echo"selected"; ?> >Svalbard and Jan Mayen</option>
            <option value="SZ" <?php if(isset($_POST['Q3']) && in_array('SZ',$_POST['Q3'],true)) echo"selected"; ?> >Swaziland</option>
            <option value="SE" <?php if(isset($_POST['Q3']) && in_array('SE',$_POST['Q3'],true)) echo"selected"; ?> >Sweden</option>
            <option value="CH" <?php if(isset($_POST['Q3']) && in_array('CH',$_POST['Q3'],true)) echo"selected"; ?> >Switzerland</option>
            <option value="SY" <?php if(isset($_POST['Q3']) && in_array('SY',$_POST['Q3'],true)) echo"selected"; ?> >Syrian Arab Republic</option>
            <option value="TW" <?php if(isset($_POST['Q3']) && in_array('TW',$_POST['Q3'],true)) echo"selected"; ?> >Taiwan, Province of China</option>
            <option value="TJ" <?php if(isset($_POST['Q3']) && in_array('TJ',$_POST['Q3'],true)) echo"selected"; ?> >Tajikistan</option>
            <option value="TZ" <?php if(isset($_POST['Q3']) && in_array('TZ',$_POST['Q3'],true)) echo"selected"; ?> >Tanzania, United Republic of</option>
            <option value="TH" <?php if(isset($_POST['Q3']) && in_array('TH',$_POST['Q3'],true)) echo"selected"; ?> >Thailand</option>
            <option value="TL" <?php if(isset($_POST['Q3']) && in_array('TL',$_POST['Q3'],true)) echo"selected"; ?> >Timor-Leste</option>
            <option value="TG" <?php if(isset($_POST['Q3']) && in_array('TG',$_POST['Q3'],true)) echo"selected"; ?> >Togo</option>
            <option value="TK" <?php if(isset($_POST['Q3']) && in_array('TK',$_POST['Q3'],true)) echo"selected"; ?> >Tokelau</option>
            <option value="TO" <?php if(isset($_POST['Q3']) && in_array('TO',$_POST['Q3'],true)) echo"selected"; ?> >Tonga</option>
            <option value="TT" <?php if(isset($_POST['Q3']) && in_array('TT',$_POST['Q3'],true)) echo"selected"; ?> >Trinidad and Tobago</option>
            <option value="TN" <?php if(isset($_POST['Q3']) && in_array('TN',$_POST['Q3'],true)) echo"selected"; ?> >Tunisia</option>
            <option value="TR" <?php if(isset($_POST['Q3']) && in_array('TR',$_POST['Q3'],true)) echo"selected"; ?> >Turkey</option>
            <option value="TM" <?php if(isset($_POST['Q3']) && in_array('TM',$_POST['Q3'],true)) echo"selected"; ?> >Turkmenistan</option>
            <option value="TC" <?php if(isset($_POST['Q3']) && in_array('TC',$_POST['Q3'],true)) echo"selected"; ?> >Turks and Caicos Islands</option>
            <option value="TV" <?php if(isset($_POST['Q3']) && in_array('TV',$_POST['Q3'],true)) echo"selected"; ?> >Tuvalu</option>
            <option value="UG" <?php if(isset($_POST['Q3']) && in_array('UG',$_POST['Q3'],true)) echo"selected"; ?> >Uganda</option>
            <option value="UA" <?php if(isset($_POST['Q3']) && in_array('UA',$_POST['Q3'],true)) echo"selected"; ?> >Ukraine</option>
            <option value="AE" <?php if(isset($_POST['Q3']) && in_array('AE',$_POST['Q3'],true)) echo"selected"; ?> >United Arab Emirates</option>
            <option value="US" <?php if(isset($_POST['Q3']) && in_array('US',$_POST['Q3'],true)) echo"selected"; ?> >United States</option>
            <option value="UM" <?php if(isset($_POST['Q3']) && in_array('UM',$_POST['Q3'],true)) echo"selected"; ?> >United States Minor Outlying Islands</option>
            <option value="UY" <?php if(isset($_POST['Q3']) && in_array('UY',$_POST['Q3'],true)) echo"selected"; ?> >Uruguay</option>
            <option value="UZ" <?php if(isset($_POST['Q3']) && in_array('UZ',$_POST['Q3'],true)) echo"selected"; ?> >Uzbekistan</option>
            <option value="VU" <?php if(isset($_POST['Q3']) && in_array('VU',$_POST['Q3'],true)) echo"selected"; ?> >Vanuatu</option>
            <option value="VE" <?php if(isset($_POST['Q3']) && in_array('VE',$_POST['Q3'],true)) echo"selected"; ?> >Venezuela, Bolivarian Republic of</option>
            <option value="VN" <?php if(isset($_POST['Q3']) && in_array('VN',$_POST['Q3'],true)) echo"selected"; ?> >Viet Nam</option>
            <option value="VG" <?php if(isset($_POST['Q3']) && in_array('VG',$_POST['Q3'],true)) echo"selected"; ?> >Virgin Islands, British</option>
            <option value="VI" <?php if(isset($_POST['Q3']) && in_array('VI',$_POST['Q3'],true)) echo"selected"; ?> >Virgin Islands, U.S.</option>
            <option value="WF" <?php if(isset($_POST['Q3']) && in_array('WF',$_POST['Q3'],true)) echo"selected"; ?> >Wallis and Futuna</option>
            <option value="EH" <?php if(isset($_POST['Q3']) && in_array('EH',$_POST['Q3'],true)) echo"selected"; ?> >Western Sahara</option>
            <option value="YE" <?php if(isset($_POST['Q3']) && in_array('YE',$_POST['Q3'],true)) echo"selected"; ?> >Yemen</option>
            <option value="ZM" <?php if(isset($_POST['Q3']) && in_array('ZM',$_POST['Q3'],true)) echo"selected"; ?> >Zambia</option>
            <option value="ZW" <?php if(isset($_POST['Q3']) && in_array('ZW',$_POST['Q3'],true)) echo"selected"; ?> >Zimbabwe</option>
            <option value="Other" <?php if(isset($_POST['Q3']) && in_array('Other',$_POST['Q3'],true)) echo"selected"; ?> >Other</option>
        </select>
</td>

<hr>

    <li><td>How many years have you been working in­house? <i>Please estimate if you do not recall exactly<span class="error"> <?php echo $questionErr[4];?></span></i></td></li>
    <br>
    <td>
        <input type="radio" value="1" <?php if (isset($_POST['Q4']) && $_POST['Q4'] == '1') echo 'checked="checked"'; ?> name="Q4">0-5
        <input type="radio" value="2" <?php if (isset($_POST['Q4']) && $_POST['Q4'] == '2') echo 'checked="checked"'; ?> name="Q4">6-10
        <input type="radio" value="3" <?php if (isset($_POST['Q4']) && $_POST['Q4'] == '3') echo 'checked="checked"'; ?> name="Q4">11-15
        <input type="radio" value="4" <?php if (isset($_POST['Q4']) && $_POST['Q4'] == '4') echo 'checked="checked"'; ?> name="Q4">16-20
        <input type="radio" value="5" <?php if (isset($_POST['Q4']) && $_POST['Q4'] == '5') echo 'checked="checked"'; ?> name="Q4">21-25
        <input type="radio" value="6" <?php if (isset($_POST['Q4']) && $_POST['Q4'] == '6') echo 'checked="checked"'; ?> name="Q4">26-30
        <input type="radio" value="7" <?php if (isset($_POST['Q4']) && $_POST['Q4'] == '7') echo 'checked="checked"'; ?> name="Q4">31+
    </td>

<hr>

    <li><td>Gender<i><span class="error"> <?php echo $questionErr[5];?></span></i></td></li>
    <br>
    <td>
        <input type="radio" value="1" <?php if (isset($_POST['Q5']) && $_POST['Q5'] == '1') echo 'checked="checked"'; ?> name="Q5">Male
        <input type="radio" value="2" <?php if (isset($_POST['Q5']) && $_POST['Q5'] == '2') echo 'checked="checked"'; ?> name="Q5">Female
    </td>

<hr>

    <li><td>What is the approximate size of the in­house legal team in your organisation (including yourself, paralegals and others who are not lawyers)? <i>Please provide an estimate for the number of colleagues<span class="error"> <?php echo $questionErr[6];?></span></i></td></li>
    <br>
    <td>
        <input type="radio" value="1" <?php if (isset($_POST['Q6']) && $_POST['Q6'] == '1') echo 'checked="checked"'; ?> name="Q6">1
        <input type="radio" value="2" <?php if (isset($_POST['Q6']) && $_POST['Q6'] == '2') echo 'checked="checked"'; ?> name="Q6">2-5
        <input type="radio" value="3" <?php if (isset($_POST['Q6']) && $_POST['Q6'] == '3') echo 'checked="checked"'; ?> name="Q6">6-10
        <input type="radio" value="4" <?php if (isset($_POST['Q6']) && $_POST['Q6'] == '4') echo 'checked="checked"'; ?> name="Q6">11-29
        <input type="radio" value="5" <?php if (isset($_POST['Q6']) && $_POST['Q6'] == '5') echo 'checked="checked"'; ?> name="Q6">30-69
        <input type="radio" value="6" <?php if (isset($_POST['Q6']) && $_POST['Q6'] == '6') echo 'checked="checked"'; ?> name="Q6">70-99
        <input type="radio" value="7" <?php if (isset($_POST['Q6']) && $_POST['Q6'] == '7') echo 'checked="checked"'; ?> name="Q6">100-499
        <input type="radio" value="8" <?php if (isset($_POST['Q6']) && $_POST['Q6'] == '8') echo 'checked="checked"'; ?> name="Q6">500+
    </td>

<hr>

    <li><td>Is your organisation:<i><span class="error"> <?php echo $questionErr[7];?></span></i></td></li>
    <br>
    <td>
        <input type="radio" value="1" <?php if (isset($_POST['Q7']) && $_POST['Q7'] == '1') echo 'checked="checked"'; ?> name="Q7">a business
        <input type="radio" value="2" <?php if (isset($_POST['Q7']) && $_POST['Q7'] == '2') echo 'checked="checked"'; ?> name="Q7">a public sector organisation
        <input type="radio" value="3" <?php if (isset($_POST['Q7']) && $_POST['Q7'] == '3') echo 'checked="checked"'; ?> name="Q7">a charity
        <input type="radio" value="4" <?php if (isset($_POST['Q7']) && $_POST['Q7'] == '4') echo 'checked="checked"'; ?> name="Q7">a social Enterprise
    </td>

<hr>

    <li><td>Would you describe the main business/activity of your organisation as? <i>This is a standard classification which does not fit all organisations well ­ please pick the one that best describes the main purposes of the business or organisation: <span class="error"> <?php echo $questionErr[8];?></span><i></td></li>
    <br>
    <td>
        <select name="Q8">
            <option value="agri" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'agri') echo "selected"; ?> >agriculture</option>
            <option value="fore" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'fore') echo "selected"; ?> >forestry and fishing</option>
            <option value="mini" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'mini') echo "selected"; ?> >mining and quarrying</option>
            <option value="manu" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'manu') echo "selected"; ?> >manufacturing</option>
            <option value="elec" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'elec') echo "selected"; ?> >electricity, gas steam and air conditioning supply</option>
            <option value="wate" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'wate') echo "selected"; ?> >water supply</option>
            <option value="sewe" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'sewe') echo "selected"; ?> >sewerage, waste management and remediation activities</option>
            <option value="cons" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'cons') echo "selected"; ?> >construction</option>
            <option value="whol" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'whol') echo "selected"; ?> >wholesale and retail trade</option>
            <option value="repa" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'repa') echo "selected"; ?> >repair of motor vehicles and motorcycles</option>
            <option value="tran" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'tran') echo "selected"; ?> >transportation and storage</option>
            <option value="acco" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'acco') echo "selected"; ?> >accommodation and food service activities</option>
            <option value="info" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'info') echo "selected"; ?> >information and communication</option>
            <option value="fina" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'fina') echo "selected"; ?> >financial</option>
            <option value="insu" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'insu') echo "selected"; ?> >insurance</option>
            <option value="real" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'real') echo "selected"; ?> >real estate activities</option>
            <option value="prof" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'prof') echo "selected"; ?> >professional, scientific and technical activities</option>
            <option value="admi" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'admi') echo "selected"; ?> >administrative and support service activities</option>
            <option value="publ" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'publ') echo "selected"; ?> >public administration and compulsory social security</option>
            <option value="defe" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'defe') echo "selected"; ?> >defence</option>
            <option value="educ" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'educ') echo "selected"; ?> >education</option>
            <option value="huma" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'huma') echo "selected"; ?> >human health and social work</option>
            <option value="arts" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'arts') echo "selected"; ?> >arts, entertainment and recreation</option>
            <option value="othe" <?php if (isset($_POST['Q8']) && $_POST['Q8'] == 'othe') echo "selected"; ?> >other service activities</option>
        </select>

    </td>

<hr>

    <li><td>Describe the location of your business: </td></li>
    <br>
    <td>
        <table style="width:100%">
            <tr>
                <th></th>
                <td>It's headquarters are in <i>(tick one)<span class="error"> <?php echo $questionErr[9];?></span></i></td>
                <td>It has offices in <i>(tick as many as apply)<span class="error"> <?php echo $questionErr[10];?></span></i></td>
            </tr>
            <tr>
                <td>England and Wales</td>
                <td> <input type="radio" value="1" <?php if (isset($_POST['Q9']) && $_POST['Q9'] == '1') echo 'checked="checked"'; ?> name="Q9"> </td>
                <td> <input type="checkbox" value="1" <?php if(isset($_POST['Q10']) && in_array('1',$_POST['Q10'],true)) echo 'checked="checked"'; ?> name="Q10[]"> </td>
            </tr>
            <tr>
                <td>Scotland</td>
                <td><input type="radio" value="2" <?php if (isset($_POST['Q9']) && $_POST['Q9'] == '2') echo 'checked="checked"'; ?> name="Q9"></td>
                <td><input type="checkbox" value="2" <?php if(isset($_POST['Q10']) && in_array('2',$_POST['Q10'],true)) echo 'checked="checked"'; ?> name="Q10[]"></td>
            </tr>
            <tr>
                <td>Northern Ireland</td>
                <td><input type="radio" value="3" <?php if (isset($_POST['Q9']) && $_POST['Q9'] == '3') echo 'checked="checked"'; ?> name="Q9"></td>
                <td><input type="checkbox" value="3" <?php if(isset($_POST['Q10']) && in_array('3',$_POST['Q10'],true)) echo 'checked="checked"'; ?> name="Q10[]"></td>
            </tr>
            <tr>
                <td>EU</td>
                <td><input type="radio" value="4" <?php if (isset($_POST['Q9']) && $_POST['Q9'] == '4') echo 'checked="checked"'; ?> name="Q9"></td>
                <td><input type="checkbox" value="4" <?php if(isset($_POST['Q10']) && in_array('4',$_POST['Q10'],true)) echo 'checked="checked"'; ?> name="Q10[]"></td>
            </tr>
            <tr>
                <td>Europe (Non EU)</td>
                <td><input type="radio" value="5" <?php if (isset($_POST['Q9']) && $_POST['Q9'] == '5') echo 'checked="checked"'; ?> name="Q9"></td>
                <td><input type="checkbox" value="5" <?php if(isset($_POST['Q10']) && in_array('5',$_POST['Q10'],true)) echo 'checked="checked"'; ?> name="Q10[]"></td>
            </tr>
            <tr>
                <td>the US</td>
                <td><input type="radio" value="6" <?php if (isset($_POST['Q9']) && $_POST['Q9'] == '6') echo 'checked="checked"'; ?> name="Q9"></td>
                <td><input type="checkbox" value="6" <?php if(isset($_POST['Q10']) && in_array('6',$_POST['Q10'],true)) echo 'checked="checked"'; ?> name="Q10[]"></td>
            </tr>
            <tr>
                <td>the rest of the World</td>
                <td><input type="radio" value="7" <?php if (isset($_POST['Q9']) && $_POST['Q9'] == '7') echo 'checked="checked"'; ?> name="Q9"></td>
                <td><input type="checkbox" value="7" <?php if(isset($_POST['Q10']) && in_array('7',$_POST['Q10'],true)) echo 'checked="checked"'; ?> name="Q10[]"></td>
            </tr>
        </table>
    </td>

<hr>

</ol>

    <input type="submit" name="submit" value="Next"> 
</form>

</div> <!-- End of survey box -->

</main>

</body>
</html>

