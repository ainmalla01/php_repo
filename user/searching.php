<?php
session_start();
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/search1.css">
    <link rel="stylesheet" href="../css/rooms.css">


<?php
if (isset($_SESSION['username'])) {
    require "./componets/headerlogin.php";
} else {
    require "./componets/header.php";
}

require "./componets/search.php";
?>

<!-- ------------------------------------------------------------ -->
<?php require "adminconection.php"; ?>

<div class="interface_of">
    <div class="details_rooms">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $location = $_POST['location'] ?? '';
            $max_price = $_POST['max'] ?? '';
            $min_price = $_POST['min'] ?? '';
            $type = $_POST['type'] ?? '';
            $roomnum = $_POST['service'] ?? '';

            $sql="SELECT * FROM product WHERE  location='$location'";
            // Debugging: Print received values
           
           


            if(!empty($location)&&empty($max_price)&&empty($min_price)){
                $sql="SELECT * FROM product WHERE  location='$location'";
            }
            elseif(!empty($location)&&!empty($max_price)&&empty($min_price)){
                $sql="SELECT * FROM product WHERE  location='$location' AND price<$max_price";
            }
            elseif(!empty($location)&&empty($max_price)&&!empty($min_price)){
                $sql="SELECT * FROM product WHERE location='$location' AND PRICE>$min_price";
            }
            elseif(!empty($location)&&empty($max_price)&&!empty($min_price)){
                $sql="SELECT * FROM product WHERE room_type='$type' AND location='$location'";
            }
            elseif(empty($location)&&!empty($max_price)&&empty($min_price)){
                $sql="SELECT * FROM product WHERE location='$location' AND price<$max_price";
            }
            elseif(empty($location)&&!empty($max_price)&&!empty($min_price)){
                $sql="SELECT * FROM product WHERE price<'$max_price'AND price>$min_price";
            }
            elseif(empty($location)&&empty($max_price)&&!empty($min_pric)){
                $sql="SELECT * FROM product WHERE price>'$min_price'";
            }
           else{
            $sql="SELECT * FROM product";
           }
           $result=$conn->query($sql);

        if ($result->num_rows > 0) {
       
            while ($row = $result->fetch_assoc()) {
                include "./rooms.php";
            }
        } 
    }else{
        exit();
    }

        ?>
    </div>
</div>

<?php
if (isset($_SESSION['user_id'])) {
    require "bookedsign.php";
}
?>

</body>
</html>

