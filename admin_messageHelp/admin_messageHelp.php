<div class="admin1_help">

</div>
<?php require 'connecting.php' ?>
<?php
$sql='SELECT * FROM AdimMessage ';
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        ?>


        <?php
    }
}
$conn->close();
?>