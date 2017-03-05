<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="insert_product" action="insert_product_action.php" method="POST" enctype="multipart/form-data">
            Name : <input type="text" name="name" value="" />
            <br>
            Modal : <input type="text" name="modal" value="" />
            <br>
            Desc : <textarea rows="4" cols="50" name="desc" >
            </textarea>
            <br>
            <select name="brand">
                <?php
                include 'dbconfig.php';
            $con = mysqli_connect($host, $username, $password, $dbname);

            $sql = "SELECT * FROM brand";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                }
                ?>
            </select>
            <br><select name="category">
                <?php
                $sql = "SELECT * FROM category";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                }
                ?>
            </select>
            <br><select name="status">
                <option value="">None</option>
                <option value="featured">Featured</option>
                            
                <option value="recommended">Recommended</option>

            </select>
            <br><input type="file" name="picture" />
            
            <input type="submit" value="submit" name="submit" />

        </form>


    </body>
</html>
