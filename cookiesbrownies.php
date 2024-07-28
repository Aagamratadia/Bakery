<?php
ob_start();
session_start();

// Check if the session variable is set

// You can now use $_SESSION['UserId'] and other session variables
$userId = $_SESSION['UserId'];
$firstName = $_SESSION['FirstName'];
$lastName = $_SESSION['LastName'];
// Other session variables...


?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Template</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css" />
    <script src="cart.js" defer></script>
    <style>
      .card-text1 {
           color: black;
      }
    </style>
</head>
<body>
<div class="container">
      <header class="d-flex selector">
        <img class="firstImg" src="/images/cookie.png" alt="" />
        <img class="secondImg" src="/images/cupcake.png" alt="" />
        <ul class="nav nav-text">
          <li class="nav-item">
            <a href="index.html" class="nav-link active" aria-current="page">Home</a>
          </li>
               <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cookiesbrownies.php">Cakes and Brownies</a></li>
            <li><a class="dropdown-item" href="cakes.php">Cookies and cupcakes</a></li>
            <li><a class="dropdown-item" href="#">Desserts and Pasteries</a></li>
          </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">Customization</a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link active" aria-current="page">Login</a>
          </li>
          <li class="nav-item">
            <a href="/login.html" class="nav-link active" aria-current="page">About</a>
          </li>
        </ul>
      </header>
    </div>
<main>
  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="images/cakes.jpeg" style="height: 500px;">
            <div class="card-body">
              <p class="card-text1"><h3>Belgian chocolate ganache cake</h3>
                <font>Experience pure indulgence with a Belgian chocolate ganache cake, featuring velvety layers of rich, creamy ganache, moist chocolate sponge, and a glossy, smooth finish. Perfect for any special occasion or chocolate lover.</font></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <form method="POST" action="add_to_cart.php" id="form2">
                    <input type="hidden" name="product_name" value="Belgian chocolate ganache cake">
                    <input type="hidden" name="product_price" value="1600">
                    <select name="product_size" class="btn btn-sm btn-outline-secondary">
                      <option value="Small">Small</option>
                      <option value="Large">Large</option>
                    </select>
                    <button type="submit" class="btn btn-sm btn-outline-secondary" onclick="addToCart({name:'Belgian chocolate ganache cake', description: 'Belgian chocolate ganache cake', price: 1600, quantity: 1, image: 'images/cakes.jpeg'})">Buy now</button>
                  </form>
                </div>
                <small class="text-body-secondary">₹1600/₹2500</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="images/red_velvet.jpg" style="height: 500px;">
            <div class="card-body">
              <p class="card-text1"><h3>Red Velvet Cake</h3>
                <font>Indulge in the elegance of a Red Velvet Cake, characterized by its vibrant red layers, smooth cream cheese frosting, and a hint of cocoa. A perfect blend of flavors for a memorable dessert experience.</font></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <form method="POST" action="add_to_cart.php" id="form2">
                    <input type="hidden" name="product_name" value="Red Velvet Cake">
                    <input type="hidden" name="product_price" value="1800">
                    <select name="product_size" class="btn btn-sm btn-outline-secondary">
                      <option value="Small">Small</option>
                      <option value="Large">Large</option>
                    </select>
                    <button type="submit" class="btn btn-sm btn-outline-secondary" onclick="addToCart({name:'Red Velvet Cake', description: 'Red Velvet Cake', price: 1800, quantity: 1, image: 'images/red_velvet.jpg'})">Buy now</button>
                  </form>
                </div>
                <small class="text-body-secondary">₹1800/₹2800</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="images/cheesecake.jpg" style="height: 500px;">
            <div class="card-body">
              <p class="card-text1"><h3>Classic Cheesecake</h3>
                <font>Savor the creamy, smooth texture of a Classic Cheesecake, made with a rich blend of cream cheese and a buttery graham cracker crust. Ideal for those who appreciate a timeless dessert.</font></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <form method="POST" action="add_to_cart.php" id="form2">
                    <input type="hidden" name="product_name" value="Classic Cheesecake">
                    <input type="hidden" name="product_price" value="2000">
                    <select name="product_size" class="btn btn-sm btn-outline-secondary">
                      <option value="Small">Small</option>
                      <option value="Large">Large</option>
                    </select>
                    <button type="submit" class="btn btn-sm btn-outline-secondary" onclick="addToCart({name:'Classic Cheesecake', description: 'Classic Cheesecake', price: 2000, quantity: 1, image: 'images/cheesecake.jpg'})">Buy now</button>
                  </form>
                </div>
                <small class="text-body-secondary">₹2000/₹3000</small>
              </div>
            </div>
          </div>
        </div>
        <!-- Repeat similar blocks for other products -->
      </div>
    </div>
  </div>
</main>
<footer class="text-body-secondary py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is © Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="/docs/5.3/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
<script>
  function addTodb(event, formId) {
  /*  event.preventDefault();
    const form = document.getElementById(formId);
    const formData = new FormData(form);

    fetch('add_to_cart.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      console.log(data);
      alert('Item added to cart successfully!');
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Error adding item to cart.');
    });*/
  }
</script>
</body>
</html>
