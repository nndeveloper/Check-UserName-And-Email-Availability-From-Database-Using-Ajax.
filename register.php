<?php include('process.php'); ?>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
 <form id="register_form">
   <h1>Register</h1>
	   <div id="error_msg"></div>
	  <div>
	 	<input type="text" name="username" placeholder="Username" id="username" >
	    <span></span>
	  </div>
	  <div>
	    <input type="email" name="email" placeholder="Email" id="email">
		<span></span>
	  </div>
	  <div>
	   <input type="password" name="password" placeholder="Password" id="password">
	  </div>
	  <div>
	 	<button type="button" id="reg_btn">Register</button>
	  </div>
	</form>
</body>
</html>
<!-- scripts -->
 
<script src="script.js"></script>
