<?php
   $book="SELECT * FROM booking_tbl WHERE userid = {$_SESSION['user_id']}";

    if($result_book = $conn->query($book)){
        // Check if there are any rows returned
        if ($result_book->num_rows > 0) {
            // Output data of each row
            while ($row_book= $result_book->fetch_assoc()) {
                echo"<script>console.log('booked');</script>";
?>
<script>
    function booking() {
        var bookBtns =document.querySelectorAll('#book-now-button');
        Array.prototype.forEach.call(bookBtns, function(btn) {
            if (btn.value === '<?php echo $row_book['roomid'];?>') {
                console.log(btn.value);
                btn.style.backgroundColor = 'red';
                btn.textContent = "Booked";
            }
        });
    }

    booking();
</script>
<?php
            }
        }
    }
?>
