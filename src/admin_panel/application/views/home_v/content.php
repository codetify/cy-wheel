<?php $user = get_active_user(); ?>

 <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
          Hoşgeldiniz - <b><?php echo $user->full_name; ?></b>
          </li>
        </ol>
		  <!-- Icon Cards-->
        <div class="row col-md-12">
		    
        <?php if(empty($wheel)) {
              
              ?>
             <ol class="breadcrumb text-danger">
          <li class="breadcrumb-item">
         - <b>Üzgünüm Dostum Burada Gösterilecek bir çark yok</b> -
          </li>
        </ol>
              <?php }else {?>
        <div class="col-md-12 text-center">
    <a class="" alt="Oyna" id="spin_button" onClick="startSpin();"  data-toggle="modal" data-target="#exampleModal">ÇEVİR</a>
     </div>   
            <div class="col-md-12 text-center">
                <canvas id="canvas" width="420" height="550">
                    <p style="color: white;" class="text-center">Sorry, your browser doesn't support canvas. Please try another.</p>
                </canvas>
     </div>
  <script>
             
   
    // Create new wheel object specifying the parameters at creation time.
    let theWheel = new Winwheel({
     <?php    $query=$this->db->query('SELECT * FROM wheel Where isActive=1');
	?>
        'numSegments'       : <?php  echo $query->num_rows(); ?>,
        'responsive'   : true,

        'outerRadius'       : 200,             
        'drawText'          : true,            
        'textFontSize'      : 20,
        'textOrientation'   : 'curved',
        'textAlignment'     : 'inner',
        'textMargin'        : 170,
        'textFontFamily'    : 'monospace',
        'textStrokeStyle'   : 'black',
        'textLineWidth'     : 3,
        'textFillStyle'     : 'white',
        'segments'          :                    // aşağıdaki alan veritabanına karar eklerse artacak ve azalacak... renkler random olarak ayarlanacak...
        [// burası arttıkca yukarıdaki alan kısmında ne kadar eklendiyse orasıda artacak... yazılar kısa yazılacak
           <?php foreach($wheel as $wheels){?>
           {'fillStyle' : '<?php echo $wheels->color;?>', 'text' : '<?php echo $wheels->title;?>'},
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
     