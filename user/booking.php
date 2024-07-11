<?php session_start() ?>
<?php
require "connecting.php";

if(isset($_SESSION['username'])){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $bookid = $_POST['booked_id'];
        $userid = $_SESSION['user_id'];
        $check = "SELECT roomid FROM booking_tbl WHERE userid = {$_SESSION['user_id']}";
        $result = $conn->query($check);

        // Initialize $enter
        $enter = true;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['roomid'] == $bookid) {
                    $enter = false;
                    break;
                }
            }
        }

        if ($enter) {
            $sql = "INSERT INTO `booking_tbl` (`roomid`, `userid`) values($bookid, $userid)";
            if ($conn->query($sql)) {
                header("location:./searching.php");
                exit();
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            header("location:./searching.php");
            exit();
        }
    } else {
        header("location:./searching.php");
            exit();
    }
} else {
    header("location:./loginnow.php");
    exit();
}
?>
