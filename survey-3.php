<!doctype html>
<html lang="en">
<head>
<style>
    .error {color: #FF0000;}
    /* "Next button style */
    input[type="submit"]{
    /* change these properties to whatever you want */
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
    <?php include('survey-3_processor.php'); ?>

</head>

<body>

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
             aria-valuemin="0" aria-valuemax="100" style="width:70%">
            70%
        </div>
    </div>

    <form id="survey-3" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <ol start="15">
        <li><td>How often are you asked to advise on something where the legality of a proposed action by the organisation is debatable?</td><span class="error"> <?php echo $questionErr[61];?></span></li>
        <td>
            <input type="radio" value="1" <?php if (isset($_POST['Q61']) && $_POST['Q61'] == '1') echo 'checked="checked"'; ?> name="Q61">Very frequently
            <input type="radio" value="2" <?php if (isset($_POST['Q61']) && $_POST['Q61'] == '2') echo 'checked="checked"'; ?> name="Q61">Regularly
            <input type="radio" value="3" <?php if (isset($_POST['Q61']) && $_POST['Q61'] == '3') echo 'checked="checked"'; ?> name="Q61">Sometimes
            <input type="radio" value="4" <?php if (isset($_POST['Q61']) && $_POST['Q61'] == '4') echo 'checked="checked"'; ?> name="Q61">Rarely
            <input type="radio" value="5" <?php if (isset($_POST['Q61']) && $_POST['Q61'] == '5') echo 'checked="checked"'; ?> name="Q61">Never
        </td>

        <hr>
        <li><td>How often are you asked to advise on something where the ethicality (as opposed to the legality) of a proposed action by the organisation is debatable? </td><span class="error"> <?php echo $questionErr[62];?></span></li>
        <td>
            <input type="radio" value="1" <?php if (isset($_POST['Q62']) && $_POST['Q62'] == '1') echo 'checked="checked"'; ?> name="Q62">Very frequently
            <input type="radio" value="2" <?php if (isset($_POST['Q62']) && $_POST['Q62'] == '2') echo 'checked="checked"'; ?> name="Q62">Regularly
            <input type="radio" value="3" <?php if (isset($_POST['Q62']) && $_POST['Q62'] == '3') echo 'checked="checked"'; ?> name="Q62">Sometimes
            <input type="radio" value="4" <?php if (isset($_POST['Q62']) && $_POST['Q62'] == '4') echo 'checked="checked"'; ?> name="Q62">Rarely
            <input type="radio" value="5" <?php if (isset($_POST['Q62']) && $_POST['Q62'] == '5') echo 'checked="checked"'; ?> name="Q62">Never
        </td>

 <!-- TABLE WITH SURVEY QUESTIONS AND ANSWERS -->
        <hr>
        <li><td>How much do you agree or disagree with the following statements </td></li>
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
                    Somewhat agree
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
                    1. It is okay to spread rumors to defend those you care about.<span class="error"> <?php echo $questionErr[63];?></span>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q63']) && $_POST['Q63'] == '1') echo 'checked="checked"'; ?> name="Q63">
                </td>
                <td>
                    <input type="radio" value="2" <?php if (isset($_POST['Q63']) && $_POST['Q63'] == '2') echo 'checked="checked"'; ?> name="Q63">
                </td>
                <td>
                    <input type="radio" value="3" <?php if (isset($_POST['Q63']) && $_POST['Q63'] == '3') echo 'checked="checked"'; ?> name="Q63">
                </td>
                <td>
                    <input type="radio" value="4" <?php if (isset($_POST['Q63']) && $_POST['Q63'] == '4') echo 'checked="checked"'; ?> name="Q63">
                </td>
                <td>
                    <input type="radio" value="5" <?php if (isset($_POST['Q63']) && $_POST['Q63'] == '5') echo 'checked="checked"'; ?> name="Q63">
                </td>
                <td>
                    <input type="radio" value="6" <?php if (isset($_POST['Q63']) && $_POST['Q63'] == '6') echo 'checked="checked"'; ?> name="Q63">
                </td>
                <td>
                    <input type="radio" value="7" <?php if (isset($_POST['Q63']) && $_POST['Q63'] == '7') echo 'checked="checked"'; ?> name="Q63">
                </td>
            </tr>
            <tr>
                <td>
                    2. Taking something without the owner's permission is okay as long as you're just borrowing it.<span class="error"> <?php echo $questionErr[64];?></span>
                </td>
                <td>
                    <input type="radio" value="1" <?php if (isset($_POST['Q64']) && $_POST['Q64'] == '1') echo 'checked="checked"'; ?> name="Q64">
                                </td>
                <td>
                    <input type="radio" value="2" <?php if (isset($_POST['Q64']) && $_POST['Q64'] == '2') echo 'checked="checked"'; ?> name="Q64">
                                </td>
                <td>
                    <input type="radio" value="3" <?php if (isset($_POST['Q64']) && $_POST['Q64'] == '3') echo 'checked="checked"'; ?> name="Q64">
                                </td>
                <td>
                    <input type="radio" value="4" <?php if (isset($_POST['Q64']) && $_POST['Q64'] == '4') echo 'checked="checked"'; ?> name="Q64">
                                </td>
                <td>
                    <input type="radio" value="5" <?php if (isset($_POST['Q64']) && $_POST['Q64'] == '5') echo 'checked="checked"'; ?> name="Q64">
                                </td>
                <td>
                    <input type="radio" value="6" <?php if (isset($_POST['Q64']) && $_POST['Q64'] == '6') echo 'checked="checked"'; ?> name="Q64">
                                </td>
                <td>
                    <input type="radio" value="7" <?php if (isset($_POST['Q64']) && $_POST['Q64'] == '7') echo 'checked="checked"'; ?> name="Q64">
                </td>
            </tr>
            <tr>
                <td>
                    3. Considering the ways people grossly misrepresent themselves, it's hardly a sin to inflate your own accomplishments a bit.<span class="error"> <?php echo $questionErr[65];?></span>
                </td>
                <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q65']) && $_POST['Q65'] == '1') echo 'checked="checked"'; ?> name="Q65">
                                </td>
                <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q65']) && $_POST['Q65'] == '2') echo 'checked="checked"'; ?> name="Q65">
                                </td>
                <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q65']) && $_POST['Q65'] == '3') echo 'checked="checked"'; ?> name="Q65">
                                </td>
                <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q65']) && $_POST['Q65'] == '4') echo 'checked="checked"'; ?> name="Q65">
                                </td>
                <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q65']) && $_POST['Q65'] == '5') echo 'checked="checked"'; ?> name="Q65">
                                </td>
                <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q65']) && $_POST['Q65'] == '6') echo 'checked="checked"'; ?> name="Q65">
                                </td>
                <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q65']) && $_POST['Q65'] == '7') echo 'checked="checked"'; ?> name="Q65">
                </td>
            </tr>
            <tr>
                <td>
                    4. People shouldn't be held accountable for doing questionable things when they were just doing what an authority figure told them to do.<span class="error"> <?php echo $questionErr[66];?></span>
                </td>
                <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q66']) && $_POST['Q66'] == '1') echo 'checked="checked"'; ?> name="Q66">
                                                </td>
                <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q66']) && $_POST['Q66'] == '2') echo 'checked="checked"'; ?> name="Q66">
                                                </td>
                <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q66']) && $_POST['Q66'] == '3') echo 'checked="checked"'; ?> name="Q66">
                                                </td>
                <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q66']) && $_POST['Q66'] == '4') echo 'checked="checked"'; ?> name="Q66">
                                                </td>
                <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q66']) && $_POST['Q66'] == '5') echo 'checked="checked"'; ?> name="Q66">
                                                </td>
                <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q66']) && $_POST['Q66'] == '6') echo 'checked="checked"'; ?> name="Q66">
                                                </td>
                <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q66']) && $_POST['Q66'] == '7') echo 'checked="checked"'; ?> name="Q66">
                </td>
            </tr>
            <tr>
                <td>
                    5. People can't be blamed for doing things that are technically wrong when all their friends are doing it too.<span class="error"> <?php echo $questionErr[67];?></span>
                </td>
                <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q67']) && $_POST['Q67'] == '1') echo 'checked="checked"'; ?> name="Q67">
                                                                </td>
                <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q67']) && $_POST['Q67'] == '2') echo 'checked="checked"'; ?> name="Q67">
                                                                </td>
                <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q67']) && $_POST['Q67'] == '3') echo 'checked="checked"'; ?> name="Q67">
                                                                </td>
                <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q67']) && $_POST['Q67'] == '4') echo 'checked="checked"'; ?> name="Q67">
                                                                </td>
                <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q67']) && $_POST['Q67'] == '5') echo 'checked="checked"'; ?> name="Q67">
                                                                </td>
                <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q67']) && $_POST['Q67'] == '6') echo 'checked="checked"'; ?> name="Q67">
                                                                </td>
                <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q67']) && $_POST['Q67'] == '7') echo 'checked="checked"'; ?> name="Q67">
                </td>
            </tr>
            <tr>
                <td>
                    6. Taking personal credit for ideas that were not your own is no big deal.<span class="error"> <?php echo $questionErr[68];?></span>
                </td>
                <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q68']) && $_POST['Q68'] == '1') echo 'checked="checked"'; ?> name="Q68">
                                                                                </td>
                <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q68']) && $_POST['Q68'] == '2') echo 'checked="checked"'; ?> name="Q68">
                                                                                </td>
                <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q68']) && $_POST['Q68'] == '3') echo 'checked="checked"'; ?> name="Q68">
                                                                                </td>
                <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q68']) && $_POST['Q68'] == '4') echo 'checked="checked"'; ?> name="Q68">
                                                                                </td>
                <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q68']) && $_POST['Q68'] == '5') echo 'checked="checked"'; ?> name="Q68">
                                                                                </td>
                <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q68']) && $_POST['Q68'] == '6') echo 'checked="checked"'; ?> name="Q68">
                                                                                </td>
                <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q68']) && $_POST['Q68'] == '7') echo 'checked="checked"'; ?> name="Q68">
                </td>
            </tr>
            <tr>
                <td>
                    7. Some people have to be treated roughly because they lack feelings that can be hurt.<span class="error"> <?php echo $questionErr[69];?></span>
                </td>
                <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q69']) && $_POST['Q69'] == '1') echo 'checked="checked"'; ?> name="Q69">
                                                                                                </td>
                <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q69']) && $_POST['Q69'] == '2') echo 'checked="checked"'; ?> name="Q69">
                                                                                                </td>
                <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q69']) && $_POST['Q69'] == '3') echo 'checked="checked"'; ?> name="Q69">
                                                                                                </td>
                <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q69']) && $_POST['Q69'] == '4') echo 'checked="checked"'; ?> name="Q69">
                                                                                                </td>
                <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q69']) && $_POST['Q69'] == '5') echo 'checked="checked"'; ?> name="Q69">
                                                                                                </td>
                <td>
                <input type="radio" value="6" <?php if (isset($_POST['Q69']) && $_POST['Q69'] == '6') echo 'checked="checked"'; ?> name="Q69">
                                                                                                </td>
                <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q69']) && $_POST['Q69'] == '7') echo 'checked="checked"'; ?> name="Q69">
                </td>
            </tr>
            <tr>
                <td>
                    8. People who get mistreated have usually done something to bring it on themselves.<span class="error"> <?php echo $questionErr[70];?></span>
                </td>
                <td>
                <input type="radio" value="1" <?php if (isset($_POST['Q70']) && $_POST['Q70'] == '1') echo 'checked="checked"'; ?> name="Q70">
                                                                                                                </td>
                <td>
                <input type="radio" value="2" <?php if (isset($_POST['Q70']) && $_POST['Q70'] == '2') echo 'checked="checked"'; ?> name="Q70">
                                                                                                                </td>
                <td>
                <input type="radio" value="3" <?php if (isset($_POST['Q70']) && $_POST['Q70'] == '3') echo 'checked="checked"'; ?> name="Q70">
                                                                                                                </td>
                <td>
                <input type="radio" value="4" <?php if (isset($_POST['Q70']) && $_POST['Q70'] == '4') echo 'checked="checked"'; ?> name="Q70">
                                                                                                                </td>
                <td>
                <input type="radio" value="5" <?php if (isset($_POST['Q70']) && $_POST['Q70'] == '5') echo 'checked="checked"'; ?> name="Q70">
                                                                                                                </td>
           
                <input type="radio" value="6" <?php if (isset($_POST['Q70']) && $_POST['Q70'] == '6') echo 'checked="checked"'; ?> name="Q70">
                                                                                                                </td>
                <td>
                <input type="radio" value="7" <?php if (isset($_POST['Q70']) && $_POST['Q70'] == '7') echo 'checked="checked"'; ?> name="Q70">
                </td>
            </tr>
        </table>


    <p>You have completed the questions. Click next to see your results.</p>
    <p>Richard Moorhead, Centre for Ethics and Law</p>


    <input type="submit" name="submit" value="Finish"> 
    <a href="survey-2.php" class="previous">&laquo; Previous</a>
    </form>

</div>

</body>
</html>