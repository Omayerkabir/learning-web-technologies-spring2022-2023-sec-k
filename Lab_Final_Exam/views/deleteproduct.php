<?php
session_start();
?>
<html>
<head>
    <title>delete</title>
</head> 
<body>
    <table>

<tr>
    <td>
    <fieldset>
    <legend>DELETE PRODUCT</legend>
    <table>
    
       <form action="../controllers/deleteValidation.php" method="POST">
        
      
        <tr>
            <td>Name:</td>
        </tr>
        <tr>
            <td>Buying Price:</td>
        </tr>
        <tr>
            <td>selling Price:</td>
        </tr>
        <tr>
            <td>
             Displayable:   <hr>
             
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Delete">
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