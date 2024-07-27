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
      $_SESSION['cart'] =[];
      
                while($row = $result->fetch_assoc()) {
                $_SESSION['role'] = $row['role'];
                $_SESSION['FirstName'] = $row['FirstName'];
                $_SESSION['LastName'] = $row['LastName'];
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['Address'] = $row['Address'];
                $_SESSION['PhoneNumber'] = $row['PhoneNumber'];             
                $_SESSION['UserId'] = $row['UserId'];
                }   
              header("Location: ./index1.php");
                exit();
        }else{
                $msg = 'Wrong username or password';
        }

       $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <title>Bakery/login</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
 
 .login-form {
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}
    .login-form h2 {
        margin-bottom: 20px;
        text-align: center;
        background-color: #fff;

    }
    .form-group {
        margin-bottom: 20px;
        background-color: #fff;

    }
    .form-group label {
        display: block;
        font-weight: bold;
        background-color: #fff;

    }
    .form-group select, .form-group input[type="text"], .form-group input[type="password"] {
        width: 90%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
    }
    .form-group select {
        cursor: pointer;
        background-color: #fff;

    }
    .form-group input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: 1px solid black;
        border-radius: 4px;
        color: #333;
        cursor: pointer;
        background-color:white;

    }
    .form-group input[type="submit"]:hover {
        background-color: #FEDFE5;
    }
    
    footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    background: white;
    color: #333;
    padding: 0.5rem 0;
    text-align: center;
}
</style>
</head>
<body style="background-color:#FEDFE5">
  <section class="sec-1 background  show-animate">
    <div class="container">
      <header class="d-flex selector">
        <img class="firstImg" src="images/cookie.png" alt="" />
        <img class="secondImg" src="images/cupcake.png" alt="" />
        <ul class="nav nav-text">
          <li class="nav-item">
            <a href="index.html" class="nav-link active" aria-current="page">Home</a>
          </li>
               <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cakes.html">Cakes</a></li>
            <li><a class="dropdown-item" href="cookiesbrownies.html">Cookies and cupcakes</a></li>
            <li><a class="dropdown-item" href="desserts.html">Desserts and Pasteries</a></li>
          </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">Customization</a>
          </li>
          <li class="nav-item">
            <a href="/login.html" class="nav-link active" aria-current="page">About</a>
          </li>
        </ul>
      </header>
    </div>
  </section>

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
            <u><a href="AddUSer.php"><p class="form-group" onclick="redirectToRegistration()" align="center" style="color:blue"> new user register here</p></a></u>
        </div>
    </form>
</div>
<footer>
        <p>&copy; 2024 Love Peace Bake. All rights reserved.</p>
    </footer>

</body>
</html>