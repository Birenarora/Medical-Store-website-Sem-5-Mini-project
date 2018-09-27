 <!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rudra Medico</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style type="text/css">
    table{
            text-align:center;
            border-collapse: collapse;
            padding-top: 10px;
            float: center;
        }
        table,th,td{
            border: 1px solid black;
            padding: 10px;
        }
</style>

</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
  <div class="header">
    <h1 style="font-family: georgia"> RUDRA MEDICO </h1>
    <i style="font-size: 30px"><p style="font-family: Book Antiqua">Chemist & Drugist</p></i>
    <b><i style="font-size: 20px"><p style="font-family: times new roman">Medical and General Store </p></i></b>

  </div>

  <div class="header">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="MainPage.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
           <div class="dropdown">
            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
              Categories
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="cart.php">Products</a>
              <a class="dropdown-item" href="medicines.php">Medicines</a>
            </div>
          </div> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="enquiry.html">Enquiry</a>
        </li>
      </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="login123.html"><i class="fa fa-fw fa-user"></i> Login</a>
        </li>
      </ul>
    </div>
    
  </nav>
</div>
    <center>
    <?php
    $pname = $ptype = $mfgdate = $expdate = $price = $quantity = "";
    $received = NULL;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "biren";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * from minsert";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr style='background-color:red; color:white;'>";
        echo "<th>ID</th>";
        echo "<th>Medicine Name</th>";
        echo "<th>Medicine Type</th>";
        echo "<th>Price</th>";
        echo "<th>Details</th>";
        echo "</tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["pid"] . "</td>";
            echo "<td>" . $row["pname"] . "</td>";
            echo "<td>" . $row["ptype"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td><a href='#' style='color:red;'>More</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    </center>
      <footer class="bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


   </body>
   </html>
