<!DOCTYPE html>
<html>
<head>
  <title>Products</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script>
   function check() {
    if (document.f1.prodid.value == ""){
      alert("ID should not be empty")
      return false;
    }
    if (document.f1.prodname.value == ""){
      alert("Name should not be empty")
      return false;
    }
    if (document.f1.quantity.value == ""){
      alert("Quantity should not be empty")
      return false;
    }
    if (document.f1.prodtype.value == ""){
      alert("Type should not be empty")
      return false;
    }
    if (document.f1.price.value == ""){
      alert("Price should not be empty")
      return false;
    }
    return true;
  }
</script>
<style>
 @media screen and (max-width: 786px){
    body{
        background-color: #B4D3FA;
    }
}
 @media screen and (max-width: 600px) {
    input[type=submit] {
      width: 75%;
      margin-top: 0;
    }
  }
</style>
</head>
<body>
  <h4 align="center">ADD A PRODUCT</h4>
  <form name="f1" action="ConnInsert.php" onsubmit="return check()" method="POST">
   <table cellpadding="15px" align="center">
    <tr>
     <th>Product ID</th>
     <td><input type = "text" class="form-control" name = "prodid" size="50%" placeholder=" Enter Product ID">
     </td>
   </tr>

   <tr>
     <th>Prod Name</th>
     <td><input type = "text" class="form-control" name = "prodname" size="50%" placeholder=" Enter Product Name">
     </td>
   </tr>

   <tr>
     <th>Quantity</th>
     <td><input type = "text" class="form-control" name = "quantity" size="50%" placeholder=" Enter Quantity">
     </td>
   </tr>

   <tr>
     <th>Product Type</th>
     <td><input type = "text" class="form-control" name = "prodtype" size="50%" placeholder=" Enter type of Product">
     </td>
   </tr>

   <tr>
     <th>Price</th>
     <td><input type = "text" class="form-control" name = "price" size="50%" placeholder=" Enter the Price">
     </td>
   </tr>

 </table>
 <br>
 <center><input type = "submit" class="btn btn-info" name = "submit" value = "Submit"></center>
</br>
</form>
</center>
</body>
</html>
