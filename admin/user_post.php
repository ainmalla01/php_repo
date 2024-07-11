<?php require 'adminconection.php';?>

<div class="heading">
    <h1>User Post Property</h1>

</div>
<div class="property_box">
<?php
$sql = "SELECT u.*, r.*
FROM post_request r
JOIN users u ON r.user_id = u.user_id
WHERE 1=1";

$results=$conn->query($sql);
if ($results->num_rows > 0) {
    while($row=$results->fetch_assoc()){
        ?>

<div class="property-request">
	<div class="person">
	<div class="imagediv"><img src="<?php echo $row['profile_picture']?>" alt="" srcset=""></div>
	<ul>
		
	  <li>
		<?php echo $row['username']?>
	  </li>
	  <li>
	<?php echo $row['useremail']?>
	  </li>
	  <li>
      <?php echo $row['userphone']?>
	  </li>
	</ul>
	</div>
<div class="btnofproperty">
	<button class="view-details"><a href="./propertyview.php?id=<?php echo $row['request_id'];?>">View property details</a></button>
	<div class="actions">
		<form action="./userpost_Accept.php" method="post">
	  <button class="accept" name="accept_post" value="<?php echo $row['request_id'];?>">Accept</button>
	  </form>
	  <form action="./userpost_Reject.php" method="post">
	  <button class="reject" name="delete_post" value="<?php echo $row['request_id'];?>">Reject</button>
	  </form>
	</div>
	</div>
  </div>

  <?php
  }
}
else
echo"<p>none property are request yet!!";?>
  </div>