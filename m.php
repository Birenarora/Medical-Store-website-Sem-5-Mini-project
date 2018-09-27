<html>
<head>
    <title>Rudra Medical</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>   
    <style type="text/css" media="screen">
        
        #table_form{
            margin: 5%;
            width: 30%; 
            height: 60%;
            border: 2px solid red;
            border-collapse: collapse;
            background: rgba(0,0,0,0.5);
        }
        #table1{

            border: 1px solid black;
            border-collapse: collapse;
        }
        #tr_hover:hover{
            background-color: #f5f5f5;
        }
        td{
            font-size: 1.3vw;
        }
        body{
            background-image: url(exp.jpg);
            background-size: 100% 100%;
        }
        input{
            font-size: 1vw;
        }

    </style>     
</head>
<body>
    <div class="container">
    <a href="tp.html"><button type="button" class="btn btn-outline-dark btn-lg btn-block">Back</button></a>
    </div>
    <center>
    <form id='form1' method="POST" action="mupdate.php">
        <div style="overflow-x: auto;">
        <table id='table_form'>
            <tr><td><h2 style="color: white;">Medicine Details</h2></td></tr>
            <tr>
                <td style="color: white;"><b>Medicine ID </b></td>  <td><input type="text" name="pid" id="pid"> </td>
            </tr>
            <tr>
                <td style="color: white;"><b>Medicine Name </b></td>  <td><input type="text" name="pname" id="pname"> </td>
            </tr>
            <tr>
                <td style="color: white;"><b>Medicine Type </b></td> <td><input type="text" name="ptype" id="ptype"> </td>
            </tr>
            <tr>
                <td style="color: white;"><b>MFG date </b></td> <td><input type="date" name="mfgdate" id="mfgdate"> </td>
            </tr>
            <tr>
                <td style="color: white;"><b>EXP date </b></td> <td><input type="date" name="expdate" id="expdate"> </td>
            </tr>
            <tr>
                <td style="color: white;"><b>Price </b></td> <td><input type="text" name="price" id="price"> </td>
            </tr>
            <tr>
                <td style="color: white;"><b>Quantity </b></td> <td><input type="number" name="quantity" id="quantity"> </td>
            </tr>
            <tr>
                <td style="color: white;"> </td> <td><input type="submit" value="Update"> <input type="submit" formaction="mdelete.php" value="Delete"></td>
            </tr>
        </table>
        </div>
    </form>

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
        echo "<table id='table1'>";
        while($row = $result->fetch_assoc()) {
            echo "<tr id='tr_hover'>";
            echo "<td>" . $row["pid"] . "</td>";
            echo "<td>" . $row["pname"] . "</td>";
            echo "<td>" . $row["ptype"] . "</td>";
            echo "<td>" . $row["mfgdate"] . "</td>";
            echo "<td>" . $row["expdate"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td>" . $row["quantity"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>        

    <script type='text/javascript'>
        let table = document.getElementById('table1'), iIndex;
        for(let i = 0; i < table.rows.length; i++){
            table.rows[i].onclick = function() {
                rIndex = this.rowIndex;
                document.getElementById('pid').value = this.cells[0].innerHTML;
                document.getElementById('pname').value = this.cells[1].innerHTML;
                document.getElementById('ptype').value = this.cells[2].innerHTML;
                document.getElementById('mfgdate').value = this.cells[3].innerHTML;
                document.getElementById('expdate').value = this.cells[4].innerHTML;
                document.getElementById('price').value = this.cells[5].innerHTML;
                document.getElementById('quantity').value = this.cells[6].innerHTML;
            }
        }
    </script>
    </center>
</body>
</html>