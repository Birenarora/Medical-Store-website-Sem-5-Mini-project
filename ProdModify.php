<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
    @media screen and (max-width: 786px){
        body{
            background-color: #B4D3FA;
        }
    }
    @media screen and (max-width: 600px) {
        input[type=submit] {
          width: 75%;
          margin-top: 10;
      }
  }
</style>        
</head>
<body>
    <h4 align="center"> MODIFY PRODUCTS </h4>
    <form id='f1' action="ConnUpdate.php" method="POST">
        <center>
            <table cellpadding="15px" align="center" id='table_form'>
                <tr>
                    <th>Product ID </th>  <td><input type="text" class="form-control" name="prodid" id="prodid" size="50%" placeholder=" Enter Product ID"> </td>
                </tr>
                <tr>
                    <th>Product Name </th>  <td><input type="text" class="form-control" name="prodname" id="prodname" size="50%" placeholder=" Enter Product Name"> </td>
                </tr>
                <tr>
                    <th>Quantity </th> <td><input type="text" class="form-control" name="quantity" id="quantity" size="50%" placeholder=" Enter Quantity"> </td>
                </tr>
                <tr>
                    <th>Product Type </th> <td><input type="text" class="form-control" name="prodtype" id="prodtype" size="50%" placeholder=" Enter Product Type"> </td>
                </tr>
                <tr>
                    <th>Price </th> <td><input type="text" class="form-control" name="price" id="price" size="50%" placeholder=" Enter Price"> </td>
                </tr>
            </table>
            <input type = "submit" class="btn btn-info button1" name = "update" value = "Update" formaction="ConnUpdate.php">
            <input type = "submit" class="btn btn-info button2" name = "delete" value = "Delete" formaction="ConnDel.php">
        </form>
    </center>

    <?php
    $prodname = $quan = $prodtype = $price = "";
    $received = NULL;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "biren";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * from product";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<center>";
        echo "<table id='table1' style='border: 1px solid black;'>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["prodid"] . "</td>";
            echo "<td>" . $row["prodname"] . "</td>";
            echo "<td>" . $row["quantity"] . "</td>";
            echo "<td>" . $row["prodtype"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</center>";
    } else {
        echo "<center>";
        echo "0 results";
        echo "</center>";
    }
    $conn->close();
    ?>        

    <script type='text/javascript'>
        let table = document.getElementById('table1'), iIndex;
        for(let i = 0; i < table.rows.length; i++){
            table.rows[i].onclick = function() {
                rIndex = this.rowIndex;
                document.getElementById('prodid').value = this.cells[0].innerHTML;
                document.getElementById('prodname').value = this.cells[1].innerHTML;
                document.getElementById('quantity').value = this.cells[2].innerHTML;
                document.getElementById('prodtype').value = this.cells[3].innerHTML;
                document.getElementById('price').value = this.cells[4].innerHTML;
            }
        }
    </script>
</body>
</html>