<div class="contact-card-grid">
  <h1 class="heading_em">Employer list</h1>

    
    <?php session_start()?>
    <?php
        require 'adminconection.php';
            $sql = "SELECT * FROM subadmin";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
                <div class="contact-card">
        <div class="image"><img src="<?php echo $row['profile']?>"" alt="" srcset=""></div>
      <h4 class="name"><?php echo $row['sad_name']?></h4>
      <p class="email"><?php echo $row['sad_email']?>"</p>
      <p class="phone"><?php echo $row['sad_number']?>"</p>
      <form action="employer.php" method="post">
      <button name="delete" class="delete" value="<?php echo $row['sad_id']?>">delete</button>
      </form>
    </div>
    <?php } ?>
    <button class="addemployer" ><a href="./subadmin_add.php">Add</a></button>
  </div>
   <?php
if (isset($_POST['delete'])) {
    $sad_id = $_POST['delete'];

    // Delete query
    $sql = "DELETE FROM subadmin WHERE sad_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $sad_id);

    if ($stmt->execute()) {
        echo "Employer deleted successfully.";
    } else {
        echo "Error deleting employer: " . $conn->error;
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the main page after deletion
    header("Location: Admin_emplyor.php");
    exit();
}
?>
