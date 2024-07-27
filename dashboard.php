<?php
session_start();
if (!isset($_SESSION['UserId'])) {
    header("Location: login.php");
    exit();
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bakery";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT product_name, COUNT(*) AS total_sold FROM order_item GROUP BY product_name ORDER BY total_sold DESC LIMIT 10";
$result = mysqli_query($conn, $query);

$products = [];
$sales = [];

while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row['product_name'];
    $sales[] = $row['total_sold'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 10 Selling Products</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <nav>
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
    </nav>
    <h2>Dashboard</h2>
    <canvas id="topSellingProductsChart" width="400" height="200"></canvas>
    <script>
        const ctx = document.getElementById('topSellingProductsChart').getContext('2d');
        const topSellingProductsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($products); ?>,
                datasets: [{
                    label: 'Total Sold',
                    data: <?php echo json_encode($sales); ?>,
                    backgroundColor: '#FEDFE5',
                    borderColor: '#FEDFE5',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
