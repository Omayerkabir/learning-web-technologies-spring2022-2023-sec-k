<?php
    require_once "db.php";


    function addproduct ($products){
        $con = getConnection();
        $sql = "insert into products values('','{$products['name']}','{$products['buyingprice']}','{$products['sellingprice']}', '{$products['profit']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function editproduct ($products){
        $con = getConnection();
        
        $sql = "UPDATE products set name = '{$products['name']}', buyingprice = '{$products['buyingprice']}', sellingprice ='{$products['sellingprice']}'
        WHERE id = '{$_products['id']}';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }
     function displayproduct (){
        $con = getConnection();
        
        $sql = "select * from products";

        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
           
           echo " <tr>
            <td>{$row['name']}</td>
            <td>{$row['profit']}</td>
            <td><a href='../controllers/editValidation.php?id=".$row['id']."'>edit</a></td>
            <td><a href='../controllers/deleteValidation.php?id=".$row['id']."'>Delete</a> </td>
        
        </tr>";
        }
    
        return $result;
    }

   
    function deleteproduct ($id){
        $con = getConnection();
        
        $sql = "DELETE FROM products WHERE id='$id';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }
    function search ($search){
        $con = getConnection();
        
        $sql = "SELECT * FROM products 
        WHERE  name LIKE '%$search%' ;";

        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            //print_r($row); echo "<br>";
            echo " <tr>
            <td>{$row['Name']}</td>
            <td>{$row['profit']}</td>
            <td><a href='../controllers/editProductValidation.php?id=".$row['id']."'>edit</a></td>
            <td><a href='../controllers/deleteValidation.php?id=".$row['id']."'>Delete</a> </td>
        
        </tr>";
        }
       
        return $result;
    }



?>