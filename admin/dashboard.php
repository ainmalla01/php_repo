<link rel="stylesheet" href="../css/dashboard.css">
    
    <?php require "./adminconection.php";
     $num_totaluser=0;
     $num_totaladmin=0;
     $num_totalproperty=0;
     $num_booked=0;
     $username=0;
     
     $sqltotaluser="SELECT * FROM users";
     $sqltotaladmin="SELECT * FROM admin";
     $sqltotalproperty="SELECT * FROM products";
     $sqlbooked="SELECT * FROM booking_tbl";
     if($totaluser=$conn->query($sqltotaluser)){
     if($totaluser->num_rows>0){
        while ($Row_userresult=$totaluser->fetch_assoc()) {
         $num_totaluser++;
        }
     }
 }
 if($totaladmin=$conn->query($sqltotaluser)){
     if($totaluser->num_rows>0){
         while ($Row_userresult=$totaluser->fetch_assoc()) {
             $num_totaluser++;
         }
         
     }
 }
 if($totaladmin=$conn->query($sqltotaladmin)){
     if($totaladmin->num_rows>0){
         while ($Row_adminresult=$totaladmin->fetch_assoc()) {
         $num_totaladmin++;
     }
 } 
        }
         if($totalproperty=$conn->query($sqltotalproperty)){
     if($Row_Propertyresult=$totalproperty->num_rows>0){
         while ($Row_Propertyresult=$totalproperty->fetch_assoc()) {
             $num_totalproperty++;
         }
        
     }
 }            if($totalbooked=$conn->query($sqlbooked)){
     if($totalbooked->num_rows>0){
         while ($Row_bookedresult=$totalbooked->fetch_assoc()) {
             if($num_booked==0){
             $num_booked++;
             }
             else{
                 if($username!=$Row_bookedresult['userid']){
                     $num_booked++;  
                 }else{
                     continue;
                 }
             }
         }
        
     }
 } 
 $num_unboked=$num_totalproperty-$num_booked;?>
    
    

<div class="dashboard">
    <div class="person">
    <div class="totaluserbox">

        <h2>Total user</h2>
        <?php 
        
        ?>
<p><?php echo $num_totaluser?></p>
<?php

?>
    </div>
    <div class="titaladminbox">
        <h2>total admin</h2>
        <?php
        ?>
<p><?php echo $num_totaladmin?></p>
<?php

?>

    </div>
</div>
    <div class="property">
        <div class="totalproperty">
            <h2>total property</h2>
            <?php

            ?>
            <p><?php echo $num_totalproperty?></p>
                        <?php

?>
        </div>
        <div class="bookedproperty">
            <h2>booked property</h2>
            <?php

?>
            <p><?php echo $num_booked?></p>
            <?php

?>
        </div>
        <div class="remainingproperty">
            <h2>unbooked property</h2>
<p><?php echo $num_unboked?></p>
<?php

?>

        </div>
    </div>
</div>

