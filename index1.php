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
  <title>Template</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
     .Logoimg{
    width: 50%;
    margin-left: 500px;
    position: absolute;
    margin-bottom: -55px;
    }
    body {
      font-family: 'Poppins', sans-serif;
      background-color:#FEDFE5;
    }

    .sec-1 {
      padding: 50px 0;
    }

    .firstHalf {
      text-align: center;
    }

    .logo-img {
      width: 150px;
      margin-bottom: 20px;
    }

    .firstHalf h2 {
      margin: 10px 0;
      font-size: 62px;
      font-weight: 600;
      color: white;
      margin-left: -70px;
    }

    .nav-text .nav-item .nav-link {
      font-size: 18px;
      font-weight: 500;
    }

    .crystals img {
      margin: 10px;
    }

    .container1 {
      margin-top: 50px;
    }
  </style>
</head>

<body>
  <?php
  ob_start();
  session_start();
  $isLoggedIn = isset($_SESSION['UserId']);
  ?>
  <section class="sec-1 background firstSection show-animate">
  <div class="box-main">
      <div class="firstHalf">
        <img class="Logoimg" src="logo.png" alt="">
        <h2>Love Peace</h2>
        <h2>And Bake</h2>
        <img class="headerE" style="position:absolute" src="images/Caker.png" alt="">
      </div>
    </div>
    </div>
    <div class="container">
      <header class="d-flex selector">
        <img class="secondImg" src="/images/cupcake.png" alt="" />
        <ul class="nav nav-text">
          <li class="nav-item">
            <a href="index1.html" class="nav-link active" aria-current="page">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="cookiesbrownies.php">Cakes and Brownies</a></li>
              <li><a class="dropdown-item" href="cakes.php">Cookies and Cupcakes</a></li>
              <li><a class="dropdown-item" href="#">Desserts and Pastries</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">Customization</a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link active" aria-current="page">About</a>
          </li>
          <?php if ($isLoggedIn): ?>
            <li class="nav-item">
              <span class="nav-link active" aria-current="page">Welcome, <?php echo $_SESSION['FirstName']; ?></span>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="icon.png" alt="">
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="vieworders.php">View Orders</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
          <?php else: ?>
            <li class="nav-item">
              <a href="login.php" class="nav-link active" aria-current="page">Login</a>
            </li>
          <?php endif; ?>
        </ul>
      </header>
    </div>
  </section>
  <section class="sec-2">
    <div class="crystals">
      <img class="redcircle" src="images/cupcake.png" alt="">
      <img class="yellowcircle" src="images/cookie.png" alt="">
      <img class="green" src="images/cake.png" alt="">
      <img class="blueC" src="images/brownie.png" alt="">
    </div>
    <div class="container1" id="All" id="Sessions">
      <div class="card-footer1-2">
        <!-- <img class="imageS2" style="position: absolute" src="/images/bgleft.png" alt="" /> -->
        <!-- <img  class="imageS2" style="position: absolute" src="/images/redHalf.png" alt="" /> -->
        <div class="card card2" style="width: 25rem">
          <img src="images/Cakes.jpeg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Cakes</h5>
            <p class="card-text">
              Order cakes from slected designs or customize them according to your needs.
            </p>
            <p>
              <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                Learn more
              </button>
            </p>
          </div>
        </div>
        <div class="collapse collapse-horizontal" id="collapseWidthExample">
          <div class="card card-body" style="width: 300px">
            this is more about the event held at so and so date.
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sec-3">
    <div class="crystals">
      <img class="yellow" style="position: absolute" src="images/pastry.tiff" alt="" />
    </div>
    <div class="container1">
      <div class="card-footer2">
        <!-- <img
          class="greenBag imageS3"
          style="position: absolute"
          src="/images/greenWave.png"
          alt=""
        /> -->
        <!-- <img
          class="imageS3"
          style="position: absolute"
          src="/images/yellowCurve.png"
          alt=""
        /> -->
        <div class="card card3" style="width: 25rem">
          <img src="images/cupcakes cover.jpeg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Cookies and Cupcakes</h5>
            <p class="card-text">
              Get a box of cookies or cupcakes
            <p>
              <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseWidthExample3" aria-expanded="false" aria-controls="collapseWidthExample3">
                Learn more
              </button>
            </p>
          </div>
        </div>
        <div class="collapse collapse-horizontal righter" id="collapseWidthExample3">
          <div class="card card-body" style="width: 300px">
            Now that Flutter festival is here, How does one get started with Flutter? Funny you ask because we have just the right thing for you. ✨ GDSC DJSCE, in collaboration with GDSC VIT Mumbai, GDSC VJTI, GDSC UMIT, and GDSCMIET presents, Shrihriday Bhagwat, a self-taught Flutter developer and the Founder and CEO of Codeaamy coming in to help you in getting started with Flutter
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sec-4">
    <div class="container1">
      <img class="greenBag imageS4" style="position: absolute" src="images/cookie.png" alt="" />
      <div class="crystals">
        <img class="green" style="position: absolute" src="images/cookie.png" alt="" />
        <img class="yellow" style="position: absolute" src="images/cake.png" alt="" />
        <img class="red" style="position: absolute" src="images/cupcake.png" alt="" />
      </div>
      <div class="card-footer1">
        <img class="postG" src="images/brownie.png" alt="" />
        <div class="card card2" style="width: 25rem">
          <img src="images/pixelhack.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Pixel Hacks</h5>
            <p class="card-text">
              PixelHacks
              Nov 29, 2021
              Speaker Session / Tech Talk - Virtual
            </p>
            <p>
              <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseWidthExample4" aria-expanded="false" aria-controls="collapseWidthExample4">
                Learn more
              </button>
            </p>
          </div>
        </div>
        <div class="collapse collapse-horizontal" id="collapseWidthExample4">
          <div class="card card-body" style="width: 300px">
            this is more about the event held at so and so date.
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sec-5">
    <div class="crystals">
      <img class="green" style="position: absolute" src="images/pastry.tiff" alt="" />
      <img class="yellow" style="position: absolute" src="images/cake.png" alt="" />
      <img class="red" style="position: absolute" src="images/doughnut.png" alt="" />
    </div>
    <div class="container1">
      <div class="card-footer2">
        <img class="alphaD " src="images/cake.png" alt="">
        <div class="card card3" style="width: 25rem">
          <img src="images/kickstartS.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <img class="backG" src="images/cupcake.png" alt="" />
            <h5 class="card-title">A Kickstart To Google Cloud</h5>
            <p class="card-text">
              Sep 27, 2021
Speaker Session / Tech Talk - Virtual
            </p>
            <p>
              <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseWidthExample5" aria-expanded="false" aria-controls="collapseWidthExample5">
                Learn more
              </button>
            </p>
          </div>
        </div>
        <div class="collapse collapse-horizontal righter" id="collapseWidthExample5">
          <div class="card card-body" style="width: 300px">
            this is more about the event held at so and so date.
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sec-6">
    <div class="container1">
      <img class="imageS6" src="/images/Untitled 28.png" alt="">
      <img class="borderstyle" src="/images/Untitled 21.png" alt="">
      <div class="crystals">
        <img class="blueC" src="images/cookie.png" alt="">
      <img class="red" style="position: absolute" src="images/pastry.tiff" alt="" />
    </div>
      <div class="card-footer1">
        <div class="card card2" style="width: 25rem">
          <img src="images/openS.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Open Source 101</h5>
            <p class="card-text">
              Oct 23, 2021
Speaker Session / Tech Talk - Virtual
            </p>
            <p>
              <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseWidthExample6" aria-expanded="false" aria-controls="collapseWidthExample6">
                Learn more
              </button>
            </p>
          </div>
        </div>
        <div class="collapse collapse-horizontal" id="collapseWidthExample6">
          <div class="card card-body" style="width: 300px">
            this is more about the event held at so and so date.
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="footer">
    <img src="/images/logo.png" alt="">
    <h4>
      GDSE
    </h4>
  </section>
  <footer>
    Copyright &copy; 2027 - www.GDSE.com - All rights reserved
  </footer>
  <script src="script1.js"></script>
</body>

</html>