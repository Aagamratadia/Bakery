<?php
include 'allconstants.php';
 $msg = '';
            
 if (isset($_POST['login']) && !empty($_POST['username']) 
             && !empty($_POST['password'])) 
{
		$servername = SERVERNAME;
		$username = USERNAME;
		$password = PASSWORD;
		$dbname = DBNAME;

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}else{
			echo "connection successful";
		}

		$username = $_POST["username"];
		//echo "<br>" .$username;
		$password = $_POST["password"];
		$password = md5($password);
		//echo "<br>" .$password;



		$sql = "select UserId,FirstName,LastName,Username,Address,role,PhoneNumber from user where Username='$username' and password='$password'";
		//echo $sql;
        $result = $conn->query($sql);
		if ($result->num_rows > 0) {
      ob_start();
      session_start();
				while($row = $result->fetch_assoc()) {
				$_SESSION['role'] = $row['role'];
				$_SESSION['FirstName'] = $row['FirstName'];
				$_SESSION['LastName'] = $row['LastName'];
				$_SESSION['Username'] = $row['Username'];
				$_SESSION['Address'] = $row['Address'];
				$_SESSION['PhoneNumber'] = $row['PhoneNumber'];				
				$_SESSION['UserId'] = $row['UserId'];
				}	
			  if ($username == 'admin') {
          header("Location: ./admin.php");
      } else {
          header("Location: ./index1.php"); 
      }
      exit();
  } else {
      $msg = 'Wrong username or password';
  }

  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bakery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.slim.min.js"></script>
  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/bootstrap.bundle.min.js"></script>
  <style>
 
    .login-form {
		margin-left:600px;
		margin-top:20px;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width:300px;
    }
    .login-form h2 {
        margin-bottom: 20px;
        text-align: center;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        font-weight: bold;
    }
    .form-group select, .form-group input[type="text"], .form-group input[type="password"] {
        width: 90%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .form-group select {
        cursor: pointer;
    }
    .form-group input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }
    .form-group input[type="submit"]:hover {
        background-color: #0056b3;
    }
	
footer {
    background: #333;
    color: #fff;
    padding: 1rem 0;
    text-align: center;
    margin-top:110px;
}
</style>
</head>
<body style="background-color:#fff">

<div class="container">
  <h2>Bakery - Login </h2>  
  </div>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="logo.png" alt="logo" style="width:40px;">
  </a>
  
 <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>  
       <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Products
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="syrups.php">Syrups</a>
        <a class="dropdown-item" href="ointments.php">Ointments</a>
        <a class="dropdown-item" href="tablets.php">Tablets</a>
		<a class="dropdown-item" href="capsules.php">Capsules</a>
		<a class="dropdown-item" href="mouthwash.php">Mouthwash</a>
      </div>
    </li>	

     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Orders
      </a>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="create.php">Create</a>
        <a class="dropdown-item" href="view.php">View</a>
      </div>
    </li>	
 <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>	
    </ul>
  </div>  
</nav>


<div class="login-form">
    <h2>Login</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-group">
            <label for="username">User Name:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <input type="submit" name="login" value="Login">
            <u><p class="form-group" onclick="otp()" align="center" style="color:blue">Forgot Password</p></u>
            <u><a href="AddUSer.php"><p class="form-group" onclick="redirectToRegistration()" align="center" style="color:blue"> new user register here</p></a></u>
        </div>
    </form>
</div>
<footer>
        <p>&copy; 2024 Love Peace Bake. All rights reserved.</p>
    </footer>

</body>
</html>