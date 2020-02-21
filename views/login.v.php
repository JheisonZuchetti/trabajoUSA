<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="css/stile.css">
</head>
<body>
  <div style="width: 100%;height: 100vh; display: flex;
  flex-direction: column;margin: auto;justify-content: center;">
  	 <form style="display: flex;margin: auto;width: 30%;flex-direction: column;" method="post" action="login.php">
  	 	 <h1 style="text-align: center;margin-bottom: 20px;">Login</h1>
  	 	 <input style="height: 40px; text-align: center;" type="text" name="user" placeholder="User">
  	 	 <br>
  	 	 
  	 	 <input style="height: 40px; text-align: center;" type="password" name="pass" placeholder="Password">
  	 	 <br>
  	 	 
  	 	 <input style="height: 40px;border: none;cursor: pointer;background: #FF9800;color: white;font-size: 1.2rem;" type="submit" name="" value="Login">
  	 </form>
  </div>
</body>
</html>