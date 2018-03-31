
<!-- Initiate email script -->
<?php
//session_start();
require_once 'res/security/security.php';
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
?>

<!-- Initiate Doc -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Report | In-House Identities Explorer </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Link to internal stylesheet -->
    <link rel="stylesheet" type="text/css" href="styles/stylesheet-master.css">

    <!-- Links to Google Fonts: -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script type="text/javascript"src="scripts/main-script.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    
    <?php include('results_processor.php'); ?>
</head>
<body>

<!-- CHANGE HEADER LATER -->
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
                    <a class="nav-link" href="index.html">Back Home <span class="sr-only">(current)</span></a>
            </ul>
        </div>
    </nav>
</header>

<main>
    <!-- TOP-SECTION -->
    <div class="top-section">
        <h1 class="featurette-heading">Individual Report</h1>
    </div>

    <br>

    <!-- OVERALL -->
    <div class="followMeBar"> <h4> Your Moral Compass </h4></div>
    <div class="container">
        <p class="lead">Here are your results. Your scores are indicative only, they will vary from time to time, depending on when you completed the survey, and what was happening in your professional life at the time. They are designed as an aide to comparison and conversation. If you would To learn more just click on any of the sub-categories. </p>
            <div class="container">
    <canvas id="myChart1" height="300" width="1200"></canvas>
  </div>
  <script>
        var options = {
           layout:{
           padding:{
           left:200,
           right:300,
           bottom:0,
           top:0
          }
        },
          legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
    responsive: false,
    maintainAspectRatio: true,
    scale: {
        pointLabels: {
          fontSize: 15
        },     
        ticks: {
            min: 1,
            max: 7,
            fontSize: 12            
        }
           
    }
};

var dataLiteracy = {
    labels: [
        "Role Orientation", "Organisational Relationships", "Team Orientation", "Professional Emphasis", "Ethical Pressure"
    ],
    datasets: [{
        label: "Score",
        backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(155,150,255,0.5)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],
        borderColor: "rgba(179,181,198,1)",
        pointBackgroundColor: "rgba(179,181,198,1)",
         pointDot: false,
    pointLabelFontSize: 20,
        pointBorderColor: "#fff",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "rgba(179,181,198,1)",
        data: [
            <?php echo $roleave;?>, <?php echo $organizationalave;?>, <?php echo $teamave;?>, <?php echo $professionalave;?>, 
            <?php echo $ethave;?>
        ]
    }]
};

var ctx = document.getElementById("myChart1");
var myRadarChart = new Chart(ctx, {
    type: 'radar',
    data: dataLiteracy,
    options: options
});

  </script>
    <br>

    </div>
    <!-- 1st RESULTS: ROLE ORIENTATIONS -->
    <div class="followMeBar"> <h4> I. Role Orientations </h4></div>
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
                <td><?php echo $commercial;?></td>
                <td><?php echo $commercialave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-com-or">Show more &#8964;</button> </td>
            </tr>
            </tbody>
        </table>
        <div id="exp-com-or" class="collapse">
            <br>
            <h6>What is commercial orientation?</h6>
              A high score on this orientation suggests you see the commercial success of your organisation, commercial awareness, and adding value to your organisation as important parts of your role. You may also see your advice as often going beyond legal matters to consider business considerations . <br>

              This is typically the strongest orientation for in-house lawyers working in business. The orientation can also be strong in non-commercial contexts where it may act as an analogue for being focused on delivering results for the client
            <br>
            <br>
            <h6>Visualisation of results</h6>
        <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart"></canvas>
        </div>

        <script>
    let myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one;?>,
            <?php echo $two;?>,
            <?php echo $three;?>,
            <?php echo $four;?>,
            <?php echo $five;?>,
            <?php echo $six;?>,
            <?php echo $seven;?>,
            <?php echo $eight;?>,
            <?php echo $nine;?>,
            <?php echo $ten;?>,
            <?php echo $eleven;?>,
            <?php echo $twelve;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]

       
      },
      
      options:{

        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Commercial Orientation',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
           
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
                <td><?php echo $ethical;?></td>
                <td><?php echo $ethicalave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-eth-or">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-eth-or" class="collapse">
            <br>
            <h6>What is ethical orientation?</h6>
        A high score on this orientation is common. It suggests your advice goes beyond legal considerations to assess whether something is the right thing ethically to do; and where a proposed action is lawful, but you think it is nevertheless unethical, you will not hesitate to voice your concerns; and you may, where the law is uncertain, take a lead on what the right thing to do is.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart2"></canvas>
        </div>

        <script>
    let myChart2 = document.getElementById('myChart2').getContext('2d');

    let massPopChart2 = new Chart(myChart2, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one2;?>,
            <?php echo $two2;?>,
            <?php echo $three2;?>,
            <?php echo $four2;?>,
            <?php echo $five2;?>,
            <?php echo $six2;?>,
            <?php echo $seven2;?>,
            <?php echo $eight2;?>,
            <?php echo $nine2;?>,
            <?php echo $ten2;?>,
            <?php echo $eleven2;?>,
            <?php echo $twelve2;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Ethical Orientation',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
                
            
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
                <td><?php echo $exploitation;?></td>
                <td><?php echo $exploitationave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-exploit">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-exploit" class="collapse">
            <br>
            <h6>What is exploitation?</h6>
            This orientation divides in-house lawyers. Some see taking advantage of uncertainty as part of their role, others definitely do not, and some are uncertain. This orientation measures your attitude to identifying loopholes in the law that benefit your organisation; helping the business benefit from legal uncertainty; and exploiting the law for commercial ends. In our research, in general, seeing the taking advantage of uncertainty as part of one’s role was associated with a weaker ethical inclination.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart3"></canvas>
        </div>

        <script>
    let myChart3 = document.getElementById('myChart3').getContext('2d');

    let massPopChart3 = new Chart(myChart3, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one3;?>,
            <?php echo $two3;?>,
            <?php echo $three3;?>,
            <?php echo $four3;?>,
            <?php echo $five3;?>,
            <?php echo $six3;?>,
            <?php echo $seven3;?>,
            <?php echo $eight3;?>,
            <?php echo $nine3;?>,
            <?php echo $ten3;?>,
            <?php echo $eleven3;?>,
            <?php echo $twelve3;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Exploitation',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
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
                <td><?php echo $independence;?></td>
                <td><?php echo $independenceave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-ind">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-ind" class="collapse">
            <br>
            <h6>What is independence?</h6>
            This orientation is strongly supported by most in-house lawyers. This measures the extent to which you think the organisation needs to understand that your view is independent; and that it is important to you that you can offer an independent opinion on the legality of business action.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart4"></canvas>
        </div>

        <script>
    let myChart4 = document.getElementById('myChart4').getContext('2d');

    let massPopChart4 = new Chart(myChart4, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one4;?>,
            <?php echo $two4;?>,
            <?php echo $three4;?>,
            <?php echo $four4;?>,
            <?php echo $five4;?>,
            <?php echo $six4;?>,
            <?php echo $seven4;?>,
            <?php echo $eight4;?>,
            <?php echo $nine4;?>,
            <?php echo $ten4;?>,
            <?php echo $eleven4;?>,
            <?php echo $twelve4;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Independence',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
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
                <td><?php echo $advisory;?></td>
                <td><?php echo $advisoryave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-adv">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-adv" class="collapse">
            <br>
            <h6>What is advisory?</h6>
            This is an interesting orientation. It is quite strongly supported by in-house lawyers but less so than the commercial, independence and ethical orientations. It essentially looks at the extent to which one sees one’s role as a, “I advise, and the client decides.” It is an interesting contrast to the ethical orientation – as in situations of uncertainty an ethical orientation suggests the lawyers takes a lead on what the right thing to do is, whereas an advisory orientation suggests the lawyer leaves the decision to their host organisation. Many lawyers believe both these attitudes fit their role – but our research suggests a stronger advisory orientation can sometimes be ethically problematic.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart5"></canvas>
        </div>

        <script>
    let myChart5 = document.getElementById('myChart5').getContext('2d');

    let massPopChart5 = new Chart(myChart5, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one5;?>,
            <?php echo $two5;?>,
            <?php echo $three5;?>,
            <?php echo $four5;?>,
            <?php echo $five5;?>,
            <?php echo $six5;?>,
            <?php echo $seven5;?>,
            <?php echo $eight5;?>,
            <?php echo $nine5;?>,
            <?php echo $ten5;?>,
            <?php echo $eleven5;?>,
            <?php echo $twelve5;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Advisory',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
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
                <td><?php echo $subservient;?></td>
                <td><?php echo $subservientave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-com-dom">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-com-dom" class="collapse">
            <br>
            <h6>What is commercial dominance?</h6>
            A high score on this orientation suggests you see the commercial success of your organisation, commercial awareness, and adding value to your organisation as important parts of your role. You may also see your advice as often going beyond legal matters to consider business considerations . <br>

            This is typically the strongest orientation for in-house lawyers working in business. The orientation can also be strong in non-commercial contexts where it may act as an analogue for being focused on delivering results for the client
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart6"></canvas>
        </div>

        <script>
    let myChart6 = document.getElementById('myChart6').getContext('2d');

    let massPopChart6 = new Chart(myChart6, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one6;?>,
            <?php echo $two6;?>,
            <?php echo $three6;?>,
            <?php echo $four6;?>,
            <?php echo $five6;?>,
            <?php echo $six6;?>,
            <?php echo $seven6;?>,
            <?php echo $eight6;?>,
            <?php echo $nine6;?>,
            <?php echo $ten6;?>,
            <?php echo $eleven6;?>,
            <?php echo $twelve6;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Commercial Dominance',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
        </div>
    </div>

    <!-- 2nd RESULTS: ORGANISATIONAL RELATIONSHIPS -->
    <div class="followMeBar"><h4>II. Organisational Relationships</h4></div>
    <div class="container">
        <p class="lead"> Organisational relationships help us understand a, b, and c. See your scores
            and how they differentiate from the average in the table below. To learn more
        just click on any of the sub-categories.</p>

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
                <td><?php echo $resistant;?></td>
                <td><?php echo $resistantave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-res-neg">Show more</button> </td>
            </tr>
            </tbody>
        </table>
        <div id="exp-res-neg" class="collapse">
            <br>
            <h6>What is resistant/negative orientation?</h6>
            This metric should be looked at alongside the ‘positive and supportive relationships’ and ‘uneven relationships’ metrics. This is a metric looking at negative relations with your host organisation. It is quite common for in-house lawyers to be criticised for inhibiting or slowing decisions. And in-house lawyers often agree that colleagues are sometimes reluctant to raise issues with them. It is also quite common for actions to taken against an in-house lawyer’s advice on legally important matters. This metric gives you a rough measure of how good or bad your organisation is on this metric compared to the views of other in-house lawyers elsewhere.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart7"></canvas>
        </div>

        <script>
    let myChart7 = document.getElementById('myChart7').getContext('2d');

    let massPopChart7 = new Chart(myChart7, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one7;?>,
            <?php echo $two7;?>,
            <?php echo $three7;?>,
            <?php echo $four7;?>,
            <?php echo $five7;?>,
            <?php echo $six7;?>,
            <?php echo $seven7;?>,
            <?php echo $eight7;?>,
            <?php echo $nine7;?>,
            <?php echo $ten7;?>,
            <?php echo $eleven7;?>,
            <?php echo $twelve7;?>,
          ],
          
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Resistant/Negative',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
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
                <td><?php echo $positive;?></td>
                <td><?php echo $positiveave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-pos-sup">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-pos-sup" class="collapse">
            <br>
            <h6>What is positive and supportive?</h6>
            This metric looks at whether in-housers feel there is a clear and common understanding within their organisation of what that the role of the legal function is and that independence of the legal function is strongly supported. This metric gives you a rough measure of how good or bad your organisation is on this metric compared to the views of other in-house lawyers elsewhere.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart8"></canvas>
        </div>

        <script>
    let myChart8 = document.getElementById('myChart8').getContext('2d');

    let massPopChart8 = new Chart(myChart8, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one8;?>,
            <?php echo $two8;?>,
            <?php echo $three8;?>,
            <?php echo $four8;?>,
            <?php echo $five8;?>,
            <?php echo $six8;?>,
            <?php echo $seven8;?>,
            <?php echo $eight8;?>,
            <?php echo $nine8;?>,
            <?php echo $ten8;?>,
            <?php echo $eleven8;?>,
            <?php echo $twelve8;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Positive and supportive',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
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
                <td><?php echo $uneven;?></td>
                <td><?php echo $unevenave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-eve">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-eve" class="collapse">
            <br>
            <h6>What is eveness?</h6>
            It is common for in-housers to find parts of the organisation more challenging to in-house lawyers than others and similarly that parts of the organisation are more supportive of legal than others. This metric looks at how you compare on that.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart9"></canvas>
        </div>

        <script>
    let myChart9 = document.getElementById('myChart9').getContext('2d');

    let massPopChart9 = new Chart(myChart9, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one9;?>,
            <?php echo $two9;?>,
            <?php echo $three9;?>,
            <?php echo $four9;?>,
            <?php echo $five9;?>,
            <?php echo $six9;?>,
            <?php echo $seven9;?>,
            <?php echo $eight9;?>,
            <?php echo $nine9;?>,
            <?php echo $ten9;?>,
            <?php echo $eleven9;?>,
            <?php echo $twelve9;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Eveness',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
        </div>
    </div>


    <!-- 3rd RESULTS: TEAM ORIENTATION -->
    <div class="followMeBar"><h4>III. Team Orientation</h4></div>
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
                <td><?php echo $eo;?></td>
                <td><?php echo $eoave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-eth">Show more</button> </td>
            </tr>
            </tbody>
        </table>
        <div id="exp-eth" class="collapse">
            <br>
            <h6>What is ethical?</h6>
              An ethical team orientation measures whether teams regularly discuss: (i) ‘doing the right thing’; (ii) ‘treating people fairly’; and (iii) ‘valuing integrity as much as profits’. Few in-housers are willing to say they rarely or never discuss such matters in their teams.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart10"></canvas>
        </div>

        <script>
    let myChart10 = document.getElementById('myChart10').getContext('2d');

    let massPopChart10 = new Chart(myChart10, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one10;?>,
            <?php echo $two10;?>,
            <?php echo $three10;?>,
            <?php echo $four10;?>,
            <?php echo $five10;?>,
            <?php echo $six10;?>,
            <?php echo $seven10;?>,
            <?php echo $eight10;?>,
            <?php echo $nine10;?>,
            <?php echo $ten10;?>,
            <?php echo $eleven10;?>,
            <?php echo $twelve10;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Ethical',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
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
                <td><?php echo $financial;?></td>
                <td><?php echo $financialave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-fin">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-fin" class="collapse">
            <br>
            <h6>What is financial performance?</h6>
            A financial performance team orientation considers how regular are discussions in legal teams based on financial performance and shareholder/investor interests. This orientation tends to vary quite a bit, depending on the type of organisation an in-house lawyer is working for.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart11"></canvas>
        </div>

        <script>
    let myChart11 = document.getElementById('myChart11').getContext('2d');

    let massPopChart11 = new Chart(myChart11, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one11;?>,
            <?php echo $two11;?>,
            <?php echo $three11;?>,
            <?php echo $four11;?>,
            <?php echo $five11;?>,
            <?php echo $six11;?>,
            <?php echo $seven11;?>,
            <?php echo $eight11;?>,
            <?php echo $nine11;?>,
            <?php echo $ten11;?>,
            <?php echo $eleven11;?>,
            <?php echo $twelve11;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Financial',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
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
                <td><?php echo $society;?></td>
                <td><?php echo $societyave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-soc">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-soc" class="collapse">
            <br>
            <h6>What is societal orientation?</h6>
            A societal team orientation examines how often teams are felt to discuss seeking the good of society and their organisation’s role in society’. This measure tends to vary quite a bit between teams.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart12"></canvas>
        </div>

        <script>
    let myChart12 = document.getElementById('myChart12').getContext('2d');

    let massPopChart12 = new Chart(myChart12, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one12;?>,
            <?php echo $two12;?>,
            <?php echo $three12;?>,
            <?php echo $four12;?>,
            <?php echo $five12;?>,
            <?php echo $six12;?>,
            <?php echo $seven12;?>,
            <?php echo $eight12;?>,
            <?php echo $nine12;?>,
            <?php echo $ten12;?>,
            <?php echo $eleven12;?>,
            <?php echo $twelve12;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Societal',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
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
                <td><?php echo $product;?></td>
                <td><?php echo $productave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-pro-str">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-pro-str" class="collapse">
            <br>
            <h6>What is productivity and strategy?</h6>
              This team orientation looks at how frequently strategy, planning, productivity and efficiency are a focus for team discussions. Generally in-house lawyers report these being frequent.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart13"></canvas>
        </div>

        <script>
    let myChart13 = document.getElementById('myChart13').getContext('2d');

    let massPopChart13 = new Chart(myChart13, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one13;?>,
            <?php echo $two13;?>,
            <?php echo $three13;?>,
            <?php echo $four13;?>,
            <?php echo $five13;?>,
            <?php echo $six13;?>,
            <?php echo $seven13;?>,
            <?php echo $eight13;?>,
            <?php echo $nine13;?>,
            <?php echo $ten13;?>,
            <?php echo $eleven13;?>,
            <?php echo $twelve13;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Productivity and Strategy',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
        </div>
    </div>

    <!-- 4th RESULTS: PROFESSIONAL EMPHASIS -->
    <div class="followMeBar"><h4> IV. Professional Emphasis</h4></div>
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
                <td><?php echo $II;?></td>
                <td><?php echo $IIave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-ind-leg">Show more</button> </td>
            </tr>
            </tbody>
        </table>
        <div id="exp-ind-leg" class="collapse">
            <br>
            <h6>What is independence and legality?</h6>
            Our measure of professional orientation looks at how important the different sets of professional principles are to your decisions. You should compare the relative strength of ‘independence and legality’, ‘effectiveness and integrity’ and ‘client interest’ measure. <br>
            All are important, but it is usually somewhat rarer to emphasise independence and legality as strongly as effectiveness and integrity; and most commonly client interests are emphasised most consistently. Interestingly, the professional codes tend not to place the same emphasis, with a somewhat stronger priority given to ‘independence and legality’ as the ultimate arbiter of professional judgement.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart14"></canvas>
        </div>

        <script>
    let myChart14 = document.getElementById('myChart14').getContext('2d');

    let massPopChart14 = new Chart(myChart14, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one14;?>,
            <?php echo $two14;?>,
            <?php echo $three14;?>,
            <?php echo $four14;?>,
            <?php echo $five14;?>,
            <?php echo $six14;?>,
            <?php echo $seven14;?>,
            <?php echo $eight14;?>,
            <?php echo $nine14;?>,
            <?php echo $ten14;?>,
            <?php echo $eleven14;?>,
            <?php echo $twelve14;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Independence and Legality',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
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
                <td><?php echo $EI;?></td>
                <td><?php echo $EIave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-eff-int">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-eff-int" class="collapse">
            <br>
            <h6>What is effectiveness and integrity?</h6>
            Our measure of professional orientation looks at how important the different sets of professional principles are to your decisions. You should compare the relative strength of ‘independence and legality’, ‘effectiveness and integrity’ and ‘client interest’ measure. <br>
            All are important, but it is usually somewhat rarer to emphasise independence and legality as strongly as effectiveness and integrity; and most commonly client interests are emphasised most consistently. Interestingly, the professional codes tend not to place the same emphasis, with a somewhat stronger priority given to ‘independence and legality’ as the ultimate arbiter of professional judgement.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart15"></canvas>
        </div>

        <script>
    let myChart15 = document.getElementById('myChart15').getContext('2d');

    let massPopChart15 = new Chart(myChart15, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one15;?>,
            <?php echo $two15;?>,
            <?php echo $three15;?>,
            <?php echo $four15;?>,
            <?php echo $five15;?>,
            <?php echo $six15;?>,
            <?php echo $seven15;?>,
            <?php echo $eight15;?>,
            <?php echo $nine15;?>,
            <?php echo $ten15;?>,
            <?php echo $eleven15;?>,
            <?php echo $twelve15;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Effectiveness and Integrity',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
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
                <td><?php echo $CI;?></td>
                <td><?php echo $CIave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-cli-int">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-cli-int" class="collapse">
            <br>
            <h6>What are client interests?</h6>
            Our measure of professional orientation looks at how important the different sets of professional principles are to your decisions. You should compare the relative strength of ‘independence and legality’, ‘effectiveness and integrity’ and ‘client interest’ measure.
            <br>
            All are important, but it is usually somewhat rarer to emphasise independence and legality as strongly as effectiveness and integrity; and most commonly client interests are emphasised most consistently. Interestingly, the professional codes tend not to place the same emphasis, with a somewhat stronger priority given to ‘independence and legality’ as the ultimate arbiter of professional judgement.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart16"></canvas>
        </div>

        <script>
    let myChart16 = document.getElementById('myChart16').getContext('2d');

    let massPopChart16 = new Chart(myChart16, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one16;?>,
            <?php echo $two16;?>,
            <?php echo $three16;?>,
            <?php echo $four16;?>,
            <?php echo $five16;?>,
            <?php echo $six16;?>,
            <?php echo $seven16;?>,
            <?php echo $eight16;?>,
            <?php echo $nine16;?>,
            <?php echo $ten16;?>,
            <?php echo $eleven16;?>,
            <?php echo $twelve16;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Client Interests',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
        </div>
    </div>


    <!-- 5th RESULTS: ETHICAL PRESSURE -->
    <div class="followMeBar"><h4>V. Ethical Pressure</h4></div>
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
                <td style="width: 30%;"><h5>Environmental Pressure</h5></td>
                <td><?php echo $environment;?></td>
                <td><?php echo $environmentave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-env">Show more</button> </td>
            </tr>
            </tbody>
        </table>
        <div id="exp-env" class="collapse">
            <br>
            <h6>What is environmental?</h6>
            Environmental and ethical pressure look at whether you are sometimes asked to advise or assist on things that make you uncomfortable; or whether there are tensions between the way you and your organisation respect obligations to uphold the law; as well as how often you are asked to advise on legally debatable actions, or actions which, whilst legal are ethically debatable.
            <br>
            <br>
            <h6>Visualisation of results</h6>
            <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart17"></canvas>
        </div>

        <script>
    let myChart17 = document.getElementById('myChart17').getContext('2d');

    let massPopChart17 = new Chart(myChart17, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one17;?>,
            <?php echo $two17;?>,
            <?php echo $three17;?>,
            <?php echo $four17;?>,
            <?php echo $five17;?>,
            <?php echo $six17;?>,
            <?php echo $seven17;?>,
            <?php echo $eight17;?>,
            <?php echo $nine17;?>,
            <?php echo $ten17;?>,
            <?php echo $eleven17;?>,
            <?php echo $twelve17;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Environmental Pressure',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
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
                <td style="width: 30%;"><h5>Ethical Pressure</h5></td>
                <td><?php echo $EP;?></td>
                <td><?php echo $EPave;?></td>
                <td> <button type="button" class="expandable-button" data-toggle="collapse" data-target="#exp-ethical">Show more</button> </td>
            </tr>
        </table>
        <div id="exp-ethical" class="collapse">
            <br>
            <h6>What is ethical?</h6>
            Environmental and ethical pressure look at whether you are sometimes asked to advise or assist on things that make you uncomfortable; or whether there are tensions between the way you and your organisation respect obligations to uphold the law; as well as how often you are asked to advise on legally debatable actions, or actions which, whilst legal are ethically debatable.
            <br>
            <br>
            <h6>Visualisation of results</h6>
             <div class="container" style="width: 800px; height: 400px;">
            <canvas id="myChart18"></canvas>
        </div>

        <script>
    let myChart18 = document.getElementById('myChart18').getContext('2d');

    let massPopChart18 = new Chart(myChart18, {
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1~1.5','1.5~2', '2~2.5', '2.5~3', '3~3.5', '3.5~4', '4~4.5', '4.5~5', '5~5.5', '5.5~6', '6~6.5', '6.5~7'],
        datasets:[{
          label:'Percentage',
          data:[
            <?php echo $one18;?>,
            <?php echo $two18;?>,
            <?php echo $three18;?>,
            <?php echo $four18;?>,
            <?php echo $five18;?>,
            <?php echo $six18;?>,
            <?php echo $seven18;?>,
            <?php echo $eight18;?>,
            <?php echo $nine18;?>,
            <?php echo $ten18;?>,
            <?php echo $eleven18;?>,
            <?php echo $twelve18;?>,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(0,150,255,0.5)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(0,150,255,0.5)',
            'rgba(255, 99, 132, 0.6)'
          ],

          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]       
      },
      
      options:{
        yAxisID:{
          display:true,
          text:'y',
          fontSize:25
        },
        title:{
          display:true,
          text:'Ethical Pressure',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
        </div>
    </div>

    <!-- SECTION: EMAIL REPORT -->
    <div>
      <h2 class="report-heading">Email report </h2>
        <?php if(!empty($errors)): ?>

                        <div class="panel">
        <ul>
            <li>
                <?php echo implode(' </li><li> ' ,$errors) ?>

            </li>
        </ul>
                        </div>
        <?php endif; ?>

                        <form action="contact.php" method="post">
                            <label>Your e-mail address *
                            <input type="text" name ="email" id="email" autocomplete="off" <?php echo isset($fields['email']) ? 'value = "' . e($fields['email']) . ' "' : '' ?> />
                            </label>

                            <button type="submit" value="Send">Send report</button>

                            <p class="muted">* means a required field</p>

                </form>
    </div>


</main>


<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>

<!-- End conncetion  for email -->
<?php
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>
