
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Registraytion page</title>
    <link href="http://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/docs/3.3/examples/signin/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form method="post" class="form-signin">
        <h2 class="form-signin-heading">New to MyStore</h2>
        <div class="form-group">
            <label>User Name</label>
            <input type="text" id="User" name="User" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" id="Name" name="Name" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label>Phone No</label>
            <input type="text" id="Phone" name="Phone" class="form-control" placeholder="Enter Phone">
        </div>
        <div class="form-group">
            <label>Email Id</label>
            <input type="text" id="Email" name="Email" class="form-control" placeholder="Enter E-mail ID">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" id="pwd1" name="pwd1" class="form-control" >
        </div>
        
        <div class="form-group">
            <label>Type</label></br>
            <input type="checkbox" name="usertype" value="Seller"> Seller </br> <input type="checkbox" name="usertype" value="Customer"> Customer<br>
 
  
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="submit">Sign in</button>
      </form>

    </div> 

    <?php
				if(isset($_POST["submit"])){
					if(!empty($_POST['User']) && !empty($_POST['pwd']) && !empty($_POST['pwd1'])) {
            $user=$_POST['User'];
            $name=$_POST['Name'];
            $phone=$_POST['Phone'];
            $email=$_POST['Email'];
            $pass=$_POST['pwd'];
            $type=$_POST['usertype'];
            $cpass=$_POST['pwd1'];
            //confirming password
            if($pass!=$cpass)
            {
              echo "<script type='text/javascript'>alert('Password Does not match!')</script>";
            }
            else
            {
						$count=0;
							$con=mysqli_connect('localhost','root','');
              mysqli_select_db($con,'hotspot') or die("cannot select DB");
             
                $query=mysqli_query($con,"SELECT * FROM user WHERE username='$user'");
							  $numrows=mysqli_num_rows($query);
							  if($numrows==0)
							  {
                  if($type=='Seller'){
                  $val=1;
                  }
                  else{
                    $val=0;
                  }
                  $sql="INSERT INTO user(username,name,phone,email,password,is_seller) VALUES('$user','$name','$phone','$email','$pass','$val')";
								  $result=mysqli_query($con,$sql);
								  if($result){
									 // header("Location: index.php");
                    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
                  }
                  else {
									echo "<script type='text/javascript'>alert('HiFailure!')</script>";
								  }
                } 
                else {
								  echo "<script type='text/javascript'>alert('username already exists! Please try again with another!')</script>";
                  }
           }           
        }        
				else {
          echo "<script type='text/javascript'>alert('All fields are required!')</script>";
				}
		}
			?>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
