<?php session_start();
if (isset($_SESSION['usuario'])) {
     
 
  
} else{
  header('Location:login.php');
}
require 'navigation.php';
     require 'conexion.php';
     $rates=$conexion->query("SELECT * FROM rates ");

    while ($rowrates=$rates->Fetch(PDO::FETCH_ASSOC)) {
    	
          $p1 = $rowrates['p1'];
          $p2 = $rowrates['p2'];
          $p3 = $rowrates['p3'];
          $p4 = $rowrates['p4'];
          $p5 = $rowrates['p5'];
          $p6 = $rowrates['p6'];
          $p7 = $rowrates['p7'];
          $p8 = $rowrates['p8'];
          $adic = $rowrates['adic'];
          $escale = $rowrates['escale'];
          $escale1 = $rowrates['escale1'];
          $reg = $rowrates['reg'];
          $reg1 = $rowrates['reg1'];
          $reg2 = $rowrates['reg2'];
          $hour = $rowrates['hour'];
          $notice = $rowrates['notice'];
          $holiday = $rowrates['holiday'];
          
          
          

      }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="../css/stile.css">
 </head>
 <body>
  <form action="saverates.php" method="post">
  <div class="rates">
       <h1>Rates & Hours</h1>
       <h3>Weekly Fee Scale
</h3>
       <div class="precing">
            <div class="box-p">
               <div class="p-p">
                <span>$</span><input style="text-align: center;" type="text" name="p1" value="<?php echo $p1; ?>">

               </div>
              <p>Infants (6 wks to 15 mo)</p> 
            </div>
            <div class="box-p">
               <div class="p-p">
               <span>$</span><input style="text-align: center;" type="text" name="p2" value="<?php echo $p2; ?>">

               </div>
              <p>Toddler (16 mo to 24 mo)</p> 
            </div>
            <div class="box-p">
               <div class="p-p">
                <span>$</span><input style="text-align: center;" type="text" name="p3" value="<?php echo $p3; ?>">

               </div>
              <p>Twos (2 yrs to 3 yrs)  </p> 
            </div>
            <div class="box-p">
               <div class="p-p">
                <span>$</span><input style="text-align: center;" type="text" name="p4" value="<?php echo $p4; ?>">
               </div>
              <p>Preschool (3 yrs to 5 yrs)</p> 
            </div>
            <div class="box-p">
               <div class="p-p">
                <span>$</span><input style="text-align: center;" type="text" name="p5" value="<?php echo $p5; ?>">

               </div>
              <p>School Age full day/full wk</p> 
            </div>
            <div class="box-p">
               <div class="p-p">
                <span>$</span><input style="text-align: center;" type="text" name="p6" value="<?php echo $p6; ?>">

               </div>
              <p>Before School</p> 
            </div>
            <div class="box-p">
               <div class="p-p">
                <span>$</span><input style="text-align: center;" type="text" name="p7" value="<?php echo $p7; ?>">
               </div>
              <p>After School</p> 
            </div>
            <div class="box-p">
               <div class="p-p">
                <span>$</span><input style="text-align: center;" type="text" name="p8" value="<?php echo $p8; ?>">

               </div>
              <p>Both Before and After</p> 
            </div>
       </div>
       <div class="box-a">
            <p><textarea name="adic" style="width: 100%; height: 150px;"><?php echo $adic ?></textarea>
           </p>
       </div>
       <div class="box-c">
          <div class="b-c">
             <h1>Drop In Fee Scale</h1>
             <li><span><textarea name="escale" style="width: 100%; height: 80px;"><?php echo $escale ?></textarea></span></li>
             <li><span><textarea name="escale1" style="width: 100%; height: 80px;"><?php echo $escale1 ?></textarea></span>
</li>
          </div>
          <div class="b-c">
             <h1>Registration and Supply Fees</h1>
             <li><span><textarea name="reg" style="width: 100%; height: 80px;"><?php echo $reg ?></textarea> 
             </span></li>
             <li><span><textarea name="reg1" style="width: 100%; height: 80px;"><?php echo $reg1 ?></textarea>

             </span></li>
             <li><span><textarea name="reg2" style="width: 100%; height: 80px;"><?php echo $reg2 ?></textarea>
            </span>
          </div>
       </div>
       <div class="box-c">
          <div class="b-c">
             <h1>Hours of Operation</h1>
             <p><textarea name="hour" style="width: 100%; height: 100px;"><?php echo $hour ?></textarea>
   </p>
   
    
</li>
    <img src="../fotos/puerta.jpg">
          </div>
          <div class="b-c">
             <h1>Holiday Closures:</h1>
             <p><textarea name="holiday" style="width: 100%;height: 350px;"><?php echo $holiday ?></textarea></p>
            <br>
            <br>
            <p style="font-style: oblique;">We are open for all other holidays, school improvement days, and school out days.</p>
          </div>
       </div>
       <div class="box-a" style="background: #00BCD4;">
        <h2>School Closing Notices</h2>
            <p style="font-size: 1.2rem;"><textarea name="notice" style="width: 100%; height: 150px;"><?php echo $notice ?></textarea>
           </p>
       </div>
  </div>
  <input style="padding: 15px; width: 100%;background: #80CD33; margin-top: 20px; border: none;font-size: 1.5rem;color: white;margin-bottom: 20px;cursor: pointer; " type="submit" name="" value="update">
  </form>
 </body>
 </html>