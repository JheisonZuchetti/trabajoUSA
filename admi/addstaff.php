<?php session_start();
if (isset($_SESSION['usuario'])) {
     
 
  
} else{
  header('Location:login.php');
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <div style="padding-top: 130px;">
    	 
    	 <form style="display: flex;flex-direction: column;" action="saveadd.php" enctype="multipart/form-data" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
    	 	<input style="margin-bottom: 15px;
" type="text" name="name" >
    	 	<textarea style="margin-bottom: 15px;height: 300px;" name="biblio"></textarea>
    	 	<label style="padding: 20px;">Edit Photo</label>
            <input style="padding: 20px;" type="file" name="foto">

            <input style="padding: 15px; width: 100%;background: #80CD33; margin-top: 20px; border: none;font-size: 1.5rem;color: white;margin-bottom: 20px;cursor: pointer; " type="submit" name="" value="update">
    	 </form>

    </div>
</body>
</html>