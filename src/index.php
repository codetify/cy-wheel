<?php include ("include/baglanti.php"); ?>
<html>
<head>
<script type="text/javascript" src="include/Winwheel.js"></script>

<script src="include/TweenMax.min.js"></script>

<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/all.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" sizes="196x196" href="img/icon.png">

<title>CODETİFY - Wheel</title>
  <script type="text/javascript" src="js/jquery.slim.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Çark Çevir</h5>
            <hr class="my-4">
            <?php
            	$listele = $db->query('SELECT * FROM wheel Where isActive=1')->fetch();

            if(empty($listele['0'])) {
              
              ?>
             <ol class="breadcrumb text-danger">
          <li class="breadcrumb-item">
         <b>Üzgünüm Dostum Burada Gösterilecek bir çark yok</b>
          </li>
        </ol>
              <?php }else {?>
        <div class="col-md-12 text-center">
    <a class="" alt="Oyna" id="spin_button" onClick="startSpin();"  data-toggle="modal" data-target="#exampleModal">ÇEVİR</a>
     </div>   
            <div class="row">
                <canvas id="canvas" width="385" height="500">
                    <p style="color: white;" class="text-center">Sorry, your browser doesn't support canvas. Please try another.</p>
                </canvas>
     </div>
  <script>
             
   
    // Create new wheel object specifying the parameters at creation time.
    let theWheel = new Winwheel({
     <?php    
     $say =  $db->query('select count(*) from wheel')->fetchColumn();
   
	?>
        'numSegments'       : <?php  echo $say; ?>,
        'responsive'   : true,

        'outerRadius'       : 170,             
        'drawText'          : true,            
        'textFontSize'      : 20,
        'textOrientation'   : 'curved',
        'textAlignment'     : 'inner',
        'textMargin'        : 140,
        'textFontFamily'    : 'monospace',
        'textStrokeStyle'   : 'black',
        'textLineWidth'     : 3,
        'textFillStyle'     : 'white',
        'segments'          :                    // aşağıdaki alan veritabanına karar eklerse artacak ve azalacak... renkler random olarak ayarlanacak...
        [// burası arttıkca yukarıdaki alan kısmında ne kadar eklendiyse orasıda artacak... yazılar kısa yazılacak
           <?php foreach($db->query('SELECT * FROM wheel') as $listele) {
?>
           {'fillStyle' : '<?php echo $listele['2'];?>', 'text' : '<?php echo $listele['1'];?>'},
    <?php } ?>
        ],
        'pins' :
                {
                    'outerRadius': 0,
                    'responsive' : true, // This must be set to true if pin size is to be responsive, if not just location is.
                },
        'animation' :           // Specify the animation to use.
        {
            'type'     : 'spinToStop',
            'duration' : 1,     // Duration in seconds.
            'spins'    : 5,     // Number of complete spins.
            'callbackFinished' : alertPrize
        }
    });

    let wheelPower    = 3;
    let wheelSpinning = false;
     document.getElementById('spin_button').className = "btn btn-lg btn-success text-white";
      
    // -------------------------------------------------------
    // Click handler for spin button.
    // -------------------------------------------------------
    function startSpin()
    {
        // Ensure that spinning can't be clicked again while already running.
        if (wheelSpinning == false) {
            // Based on the power level selected adjust the number of spins for the wheel, the more times is has
            // to rotate with the duration of the animation the quicker the wheel spins.
           
                theWheel.animation.spins = 15;

            // Disable the spin button so can't click again while wheel is spinning.
            document.getElementById('spin_button').className = "btn btn-lg btn-dark text-white";

            // Begin the spin animation by calling startAnimation on the wheel object.
            theWheel.startAnimation();

            // Set to true so that power can't be changed and spin button re-enabled during
            // the current animation. The user will have to reset before spinning again.
            wheelSpinning = true;
        }
    }

    // -------------------------------------------------------
    // Function for reset button.
    // -------------------------------------------------------
    function resetWheel()
    {
        theWheel.stopAnimation(false);  // Stop the animation, false as param so does not call callback function.
        theWheel.rotationAngle = 0;     // Re-set the wheel angle to 0 degrees.
        theWheel.draw();                // Call draw to render changes to the wheel.
        document.getElementById('spin_button').className = "btn btn-lg btn-success text-white";
        wheelSpinning = false;         
       

    }

    // -------------------------------------------------------
    // Called when the spin animation has finished by the callback feature of the wheel because I specified callback in the parameters.
    // note the indicated segment is passed in as a parmeter as 99% of the time you will want to know this to inform the user of their prize.
    // -------------------------------------------------------
        function alertPrize(indicatedSegment)
        {
            $('.alert_wheel').text(indicatedSegment.text);

            }
  </script>
<?php } ?>
          </div>


<?php include ("include/alert.php"); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/iziToast.min.js"></script>
<script src="js/sweetalert2.all.js"></script>
</body>
</html>