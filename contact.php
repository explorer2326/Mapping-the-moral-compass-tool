<?php
use PHPMailer\PHPMailer\PHPMailer;

session_start();

require_once 'phpmailer/vendor/autoload.php';
//require_once('phpmailer/src/SMTP.php');

$errors = [];

if(isset($_POST['email'])) {

    $fields = [
        'email'=> $_POST['email']
    ];

    foreach($fields as $field => $data) {
        if(empty($data)) {
            $errors[] = 'The ' . $field . ' field is required';
        }
    }

    if(empty($errors)) {


        require_once 'phpmailer/vendor/autoload.php';


        $m = new PHPMailer(true);

        $m->isSMTP();
        $m->SMTPAuth= true;
        $m->SMTPDebug = 2;

        $m->Host = 'smtp.gmail.com';
        $m->Username = 'ucllawsdep@gmail.com';
        $m->Password = 'emailtest12';
        $m->SMTPSecure = 'ssl';
        $m->Port = 465;

        $m->From = 'ucllawsdep@gmail.com';
        $m->FromName = 'UCL Law';
        $m->addReplyTo('ucllawsdep@gmail.com', 'Reply Address');
        $m->addAddress($fields['email'], 'Survey Respondent');
        //$m->addAttachment('/Users/BerkeK/phpmailer/test.pdf', 'test.pdf');
        $m->isHTML(true);

        $m->Subject = 'In-House Identities Explorer: Your report';
        $m->Body = '<div class="followMeBar">Role Orientations</div>
    <div class="container">
        <p class="lead">Role orientations help us understand a, b, and c. See your scores
            and how they differentiate from the average in the table below. To learn more
            just click on any of the sub-categories. </p>

        <!-- TABLE: COMMERCIAL ORIENTATION -->
        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="width: 30%;"><h5>Commercial Orientation</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-com-or">Show more &#8964;</button> </td>
            </tr>
            </tbody>
        </table>
        <div id="exp-com-or" class="collapse">
            <br>
            <h6>What is commercial orientation?</h6>
            This is a sample description of the meaning of a commercial orientation. This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
            <br>
            <div class="show-less-button"> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-com-or">Less</button> </div>
        </div>

        <!-- TABLE: ETHICAL ORIENTATION -->
        <table class="table">
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            <tr>
                <td style="width: 30%;"><h5>Ethical Orientation</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-eth-or">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-eth-or" class="collapse">
            <br>
            <h6>What is ethical orientation?</h6>
            This is a sample description of the meaning of a commercial orientation. This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>

        <!-- TABLE: EXPLOITATION -->
        <table class="table">
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            <tr>
                <td style="width: 30%;"><h5>Exploitation</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-exploit">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-exploit" class="collapse">
            <br>
            <h6>What is exploitation?</h6>
            This is a sample description of the meaning of a commercial orientation. This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>

        <!-- TABLE: INDEPENDENCE -->
        <table class="table">
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            <tr>
                <td style="width: 30%;"><h5>Independence</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-ind">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-ind" class="collapse">
            <br>
            <h6>What is independence?</h6>
            This is a sample description of the meaning of a commercial orientation. This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>


        <!-- TABLE: ADVISORY -->
        <table class="table">
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            <tr>
                <td style="width: 30%;"><h5>Advisory</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-adv">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-adv" class="collapse">
            <br>
            <h6>What is advisory?</h6>
            This is a sample description of the meaning of a commercial orientation. This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>


        <!-- TABLE: COMMERCIAL DOMINANCE -->
        <table class="table">
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            <tr>
                <td style="width: 30%;"><h5>Commercial Dominance</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-com-dom">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-com-dom" class="collapse">
            <br>
            <h6>What is commercial dominance?</h6>
            This is a sample description of the meaning of a commercial orientation. This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>
    </div>

    <!-- 2nd RESULTS: ORGANISATIONAL RELATIONSHIPS -->
    <div class="followMeBar">Organisational Relationships</div>
    <div class="container">
        <p class="lead">Organisational relationships help us understand a, b, and c. See your scores
            and how they differentiate from the average in the table below. To learn more
            just click on any of the sub-categories. </p>

        <!-- TABLE: RESISTANT / NEGATIVE -->
        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="width: 30%;"><h5>Resistant/Negative</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-res-neg">Show more</button> </td>
            </tr>
            </tbody>
        </table>
        <div id="exp-res-neg" class="collapse">
            <br>
            <h6>What is resistant/negative?</h6>
            This is a sample description of the meaning of a resistant/negative. This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>

        <!-- TABLE: POSITIVE AND SUPPORTIVE -->
        <table class="table">
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            <tr>
                <td style="width: 30%;"><h5>Positive and supportive</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-pos-sup">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-pos-sup" class="collapse">
            <br>
            <h6>What is positive and supportive?</h6>
            This is a sample description of the . This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>

        <!-- TABLE: EVENESS -->
        <table class="table">
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            <tr>
                <td style="width: 30%;"><h5>Eveness</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-eve">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-eve" class="collapse">
            <br>
            <h6>What is eveness?</h6>
            This is a sample description of the meaning of a commercial orientation. This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>
    </div>


    <!-- 3rd RESULTS: TEAM ORIENTATION -->
    <div class="followMeBar">Team Orientation</div>
    <div class="container">
        <p class="lead">Organisational relationships help us understand a, b, and c. See your scores
            and how they differentiate from the average in the table below. To learn more
            just click on any of the sub-categories. </p>

        <!-- TABLE: ETHICAL -->
        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="width: 30%;"><h5>Ethical</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-eth">Show more</button> </td>
            </tr>
            </tbody>
        </table>
        <div id="exp-eth" class="collapse">
            <br>
            <h6>What is ethical?</h6>
            This is a sample description of the meaning of a resistant/negative. This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>

        <!-- TABLE: FINANCIAL -->
        <table class="table">
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            <tr>
                <td style="width: 30%;"><h5>Financial</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-fin">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-fin" class="collapse">
            <br>
            <h6>What is financial?</h6>
            This is a sample description of the . This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>

        <!-- TABLE: SOCIETAL -->
        <table class="table">
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            <tr>
                <td style="width: 30%;"><h5>Societal</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-soc">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-soc" class="collapse">
            <br>
            <h6>What is societal?</h6>
            This is a sample description of the meaning of a commercial orientation. This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>

        <!-- TABLE: PRODUCTIVITY AND STRATEGY -->
        <table class="table">
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            <tr>
                <td style="width: 30%;"><h5>Productivity and strategy</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-pro-str">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-pro-str" class="collapse">
            <br>
            <h6>What is productivity and strategy?</h6>
            This is a sample description of the meaning of a commercial orientation. This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>
    </div>

    <!-- 4th RESULTS: PROFESSIONAL EMPHASIS -->
    <div class="followMeBar">Professional Emphasis</div>
    <div class="container">
        <p class="lead">Professional emphasis help us understand a, b, and c. See your scores
            and how they differentiate from the average in the table below. To learn more
            just click on any of the sub-categories. </p>

        <!-- TABLE: INDEPENDENCE AND LEGALITY -->
        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="width: 30%;"><h5>Independence and Legality</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-ind-leg">Show more</button> </td>
            </tr>
            </tbody>
        </table>
        <div id="exp-ind-leg" class="collapse">
            <br>
            <h6>What is independence and legality?</h6>
            This is a sample description of the meaning of a resistant/negative. This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>

        <!-- TABLE: EFFECTIVENESS AND INTEGRITY -->
        <table class="table">
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            <tr>
                <td style="width: 30%;"><h5>Effectiveness and Integrity</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-eff-int">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-eff-int" class="collapse">
            <br>
            <h6>What is effectiveness and integrity?</h6>
            This is a sample description of the . This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>

        <!-- TABLE: CLIENT INTERESTS -->
        <table class="table">
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            <tr>
                <td style="width: 30%;"><h5>Client Interests</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-cli-int">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-cli-int" class="collapse">
            <br>
            <h6>What are client interests?</h6>
            This is a sample description of the meaning of a commercial orientation. This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>
    </div>


    <!-- 5th RESULTS: ETHICAL PRESSURE -->
    <div class="followMeBar">Ethical Pressure</div>
    <div class="container">
        <p class="lead">Ethical pressure helps us understand a, b, and c. See your scores
            and how they differentiate from the average in the table below. To learn more
            just click on any of the sub-categories. </p>

        <!-- TABLE: ENVIRONMENTAL -->
        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="width: 30%;"><h5>Environmental</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-env">Show more</button> </td>
            </tr>
            </tbody>
        </table>
        <div id="exp-env" class="collapse">
            <br>
            <h6>What is environmental?</h6>
            This is a sample description of the meaning of a resistant/negative. This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>

        <!-- TABLE: ETHICAL -->
        <table class="table">
            <tr>
                <th></th>
                <th>Your score</th>
                <th>Benchmark average</th>
                <th></th>
            </tr>
            <tr>
                <td style="width: 30%;"><h5>Ethical</h5></td>
                <td>X</td>
                <td>5.6</td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-ethical">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-ethical" class="collapse">
            <br>
            <h6>What is ethical?</h6>
            This is a sample description of the . This is a sample description of the meaning of
            a commercial orientation. This is a sample description of the meaning of a commercial orientation. This is a sample
            description of the meaning of a commercial orientation. This is a sample description of the meaning of a commercial
            orientation. This is a sample description of the meaning of a commercial orientation.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <img src="res/img/visual-sample.png" />
        </div>
    </div>';
        //$m->Body = '<p>Thanks for taking part in the In-House Identities Explorer survey. Attached is your personal report.</p> <p>Thank you very much!</p> <p>Regards,</p> <p>UCL Laws Department</p>';
        $m->AltBody = 'Thanks for taking part in the In-House Identities Explorer survey. Attached is your personal report. Thank you very much!Regards, UCL Laws Department';

        if($m->send()) {
            echo '<script> window.location.replace("thank-you.html"); </script>';
        //header('Location: ../thank-you.html');
        } else {
            echo 'An error occurred';
        }
    }

    else {

        echo '<pre>', print_r($errors), '</pre>';
        die();

    }
}
else {
    $errors[] = 'Something went wrong';
}

$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;

header('Location: results.php');