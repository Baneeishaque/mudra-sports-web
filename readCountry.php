<?php
include 'dbconfig.php';
    $con = mysqli_connect($host, $username, $password, $dbname);
if (!empty($_POST["keyword"])) {
    $sql = "SELECT * FROM product WHERE name like '" . $_POST["keyword"] . "%' ORDER BY name LIMIT 0,6";
    $result = mysqli_query($con, $sql);
    if (!empty($result)) {
        ?>
        <ul id="country-list">
            <?php
            foreach ($result as $country) {
                ?>
                <li onClick="selectCountry('<?php echo $country["name"]; ?>');"><?php echo $country["name"]; ?></li>
            <?php } ?>
        </ul>
    <?php }
} 