<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/stile.css">
</head>
<body>
  <div class="rates">
  	   <h1>Rates & Hours</h1>
  	   <h3>Weekly Fee Scale
</h3>
  	   <div class="precing">
  	   	    <div class="box-p">
  	   	    	 <div class="p-p">
  	   	    	 	<span>$</span><?php echo $p1; ?>

  	   	    	 </div>
  	   	    	<p>Infants (6 wks to 15 mo)</p> 
  	   	    </div>
  	   	    <div class="box-p">
  	   	    	 <div class="p-p">
  	   	    	 <span>$</span><?php echo $p2; ?>

  	   	    	 </div>
  	   	    	<p>Toddler (16 mo to 24 mo)</p> 
  	   	    </div>
  	   	    <div class="box-p">
  	   	    	 <div class="p-p">
  	   	    	 	<span>$</span><?php echo $p3; ?>

  	   	    	 </div>
  	   	    	<p>Twos (2 yrs to 3 yrs)	</p> 
  	   	    </div>
  	   	    <div class="box-p">
  	   	    	 <div class="p-p">
  	   	    	 	<span>$</span><?php echo $p4; ?>
  	   	    	 </div>
  	   	    	<p>Preschool (3 yrs to 5 yrs)</p> 
  	   	    </div>
  	   	    <div class="box-p">
  	   	    	 <div class="p-p">
  	   	    	 	<span>$</span><?php echo $p5; ?>

  	   	    	 </div>
  	   	    	<p>School Age full day/full wk</p> 
  	   	    </div>
  	   	    <div class="box-p">
  	   	    	 <div class="p-p">
  	   	    	 	<span>$</span><?php echo $p6; ?>

  	   	    	 </div>
  	   	    	<p>Before School</p> 
  	   	    </div>
  	   	    <div class="box-p">
  	   	    	 <div class="p-p">
  	   	    	 	<span>$</span><?php echo $p7; ?>
  	   	    	 </div>
  	   	    	<p>After School</p> 
  	   	    </div>
  	   	    <div class="box-p">
  	   	    	 <div class="p-p">
  	   	    	 	<span>$</span><?php echo $p8; ?>

  	   	    	 </div>
  	   	    	<p>Both Before and After</p> 
  	   	    </div>
  	   </div>
  	   <div class="box-a">
  	   	    <p><?php echo $adic; ?>
           </p>
  	   </div>
  	   <div class="box-c">
  	   	  <div class="b-c">
  	   	  	 <h1>Drop In Fee Scale</h1>
  	   	  	 <li><span><?php echo $escale; ?></span></li>
  	   	  	 <li><span><?php echo $escale1; ?></span>
</li>
  	   	  </div>
  	   	  <div class="b-c">
  	   	  	 <h1>Registration and Supply Fees</h1>
  	   	  	 <li><span><?php echo $reg; ?>
             </span></li>
             <li><span><?php echo $reg1; ?>

             </span></li>
  	   	  	 <li><span><?php echo $reg2; ?>
            </span>
  	   	  </div>
  	   </div>
  	   <div class="box-c">
  	   	  <div class="b-c">
  	   	  	 <h1>Hours of Operation</h1>
  	   	  	 <p><?php echo $hour; ?>
   </p>
   
    
</li>
    <img src="fotos/puerta.jpg">
  	   	  </div>
  	   	  <div class="b-c">
  	   	  	 <h1>Holiday Closures:</h1>
  	   	  	 <p><?php echo nl2br($holiday) ?></p>
            <br>
            <br>
            <p style="font-style: oblique;">We are open for all other holidays, school improvement days, and school out days.</p>
  	   	  </div>
  	   </div>
  	   <div class="box-a" style="background: #00BCD4;">
        <h2>School Closing Notices</h2>
  	   	    <p style="font-size: 1.2rem;"><?php echo $notice; ?>
           </p>
  	   </div>
  </div>
</body>
</html>