<?php 
require_once '../models/productmodel.php';
session_start();

?>
<html>
<head>
    <title>search</title>
</head> 
<body>
    <table>

<tr>
<td>
    <fieldset>
    <legend>SEARCH</legend>
    <table border="1">
    <form action="search.php" method="POST">
    <input type="text" name="searchproduct" value="">
    <input type="submit" name="submit" value="Search By Name"><hr>
    
    <tr>
        <th>NAME</th>
        <th>PROFIT</th>
    </tr>
    
    <tr>
        <td></td>
        <td></td>
        <td> <a href="">edit</td>
        <td> <a href="">delete</td>
    </tr>

    </fieldset>
    </td>
    </form>
   
<?php
if(isset($_REQUEST['submit'])){
$search=$_REQUEST['searchproduct'];
search($search);
}

?>

    </fieldset>
    </td>
</tr>

    </table>
</body>
</html>