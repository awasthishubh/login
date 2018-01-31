


<?php
    $mysqli = new mysqli("localhost", "root", "root", "ci_login");
    $m='';

    $usid=$_POST['usid'];
    $pass=$_POST['pass'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $passcon=$_POST['passcon'];
    if(empty($_POST['usid'])||empty($_POST['pass'])||empty($_POST['name'])||empty($_POST['email']))
    	$m= "Invalid Input";
    else if($pass!=$passcon) $m= "Password does not match";
    else{
    	$f=0;
	    $result = $mysqli->query("SELECT * from details;");
	    while($row=mysqli_fetch_assoc($result))
	    {
	    	if($row['usid']==$usid )
	    		$f=1;
	    }
	    if ($f) {
	    	$m= "Username Already Exists";
	    }
	    else{
	    	$q="INSERT INTO details (usid, pass, name, email) VALUES ('$usid', '$pass', '$name', '$email');";
		    $result=$mysqli->query("$q");
		    $m= "Registered Successfully!";
}
}
    
?>



<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css\materialize.css">
<style type="text/css">
	#message{
		height: 300px;
		text-align: center;
		font-family: verdana;
		font-size: 30px;
		margin: 20px;

	}
</style>
</head>
<body class="deep-purple accent-3">
<div class="row">
		<div class="col s12 m2 l4"></div>
        <div class="col s12 m8 l4">
          <div class="card  deep-purple darken-1 hoverable ">
            <nav>
			    <div class="nav-wrapper blue darken-3">
			      
			    </div>
			</nav>
				
				
	            	<div class="card-content white-text ">
						<div id="message" class="card-content purple-text deep-purple lighten-5 valign-wrapper z-depth-5"><center><?php echo "$m"; ?></center></div>
					</div>
	            	<div class="card-action">
	              		<button class="btn waves-effect waves-light blue darken-3" onclick="location.href='index.html'">Back</button>
	            	</div>
	        	</div>
          </div>
        </div>
      



</body>
</html>
