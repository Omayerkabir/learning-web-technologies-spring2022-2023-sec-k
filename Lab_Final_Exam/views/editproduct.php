<?php
session_start();
?>
<html>
<head>
    <title>edit</title>
</head> 
<body>
    <table>

<tr>
    <td>
    <fieldset>
    <legend>EDIT PRODUCT</legend>
    <table>
    
       <form action="../controllers/editProductValidation.php" method="POST">
        
      
        <tr>
            <td>Name:</td>
        </tr>
        <tr>
            <td><input type="text" name="name" value=""></td>
        </tr>
        <tr>
            <td>Buying Price:</td>
        </tr>
        <tr>
            <td><input type="number" name="buyingprice" value=""></td>
        </tr>
        </tr>
        <tr>
            <td>selling Price:</td>
        </tr>
        <tr>
            <td><input type="number" name="sellingprice" value=""></td>
        </tr>
        </tr>
        <tr>
            <td>
            <hr>
            <input type="checkbox" name="checkbox" value="male"/> Display<hr>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="SAVE">
            </td>
        </tr>
        </form>
    </table>
    </fieldset>
    </td>
</tr>

    </table>
</body>
</html>