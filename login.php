<?php
    $mysqli = new mysqli("localhost", "root", "root", "ci_login");
    $f=0;

    $result = $mysqli->query("SELECT * from details;");
    while($row=mysqli_fetch_assoc($result))
    {   
    	if($row['usid']==$_POST['usid'] && $row['pass']==$_POST['pass'] )
    	{   $f=1;
            break;
        }
    }

    if($f==0)
    {
    	$m= "Incorrect Username/Password";
    }
    else
    {
        $a=$row['email'];
    	$m= "Hello   ". $row['name']."!<br><br> Email:".$row['email']."<br> UserID:".$row['usid']."<br>Successfully Logged In!!";
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css\materialize.css">
<style type="text/css">
    #message{
        height: 300px;
        text-align: center;
        font-family: verdana;
        font-size: 20px;
        margin: 10px;

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
