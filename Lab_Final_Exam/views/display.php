<?php 
require_once '../models/productmodel.php';
session_start();
?>

<html>
<head>
    <title>add</title>
</head> 
<body>
    <table>

<tr>
    <td>
    <fieldset>
    <legend>DISPLAY</legend>
    <table border="1">
    <tr>
        <th>NAME</th>
        <th>PROFIT</th>
    </tr>
<?php

displayproduct();


?>
    </fieldset>
    </td>
    </tr>

    </table>
</body>
</html>