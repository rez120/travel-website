<?php 
include("config/db_connect.php");

    if(isset($_POST['delete'])){
        $id_to_delete = mysqli_real_escape_string($conn,$_POST["id_to_delete"]);
        $sql = "DELETE FROM destinations WHERE id = $id_to_delete";
        if(mysqli_query($conn,$sql)){
            header("Location: index.php");
        }{
            echo "query error: " . mysqli_error($conn);
        }

    }
    if(isset($_GET["id"])){

        $id = mysqli_real_escape_string($conn,$_GET["id"]);
        $sql = "SELECT * FROM destinations WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $destination = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($conn);
        print_r($destination);
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php include("templates/header.php"); ?>

<h2 class="detail--title"> details </h2>
<div class="d-flex justify-content-center">
<div class="detail--card" style="">
<?php
if($destination): ?>
<img class="img-fluid" src="<?php echo $destination["thumbnail"]; ?>" alt="">
<p><?php echo $destination["name"]; ?></p>
<p><?php echo $destination["country"]; ?></p>
<p><?php echo $destination["company"]; ?></p>
<p><?php echo $destination["flight_price"]; ?></p>
<p><?php echo $destination["hotel_price"]; ?></p>
<p><?php echo $destination["continent"]; ?></p>
<p><?php echo $destination["description"]; ?></p>
<form action="detail.php" method="POST">
    <input type="hidden" name="id_to_delete" value='<?php echo $destination["id"];?>'>
    <input type="submit" value="Delete" name="delete">
</form>
<?php else:?>
    <p>no such destinaton</p>
<?php endif; ?>


</div>
</div>
<br>
<br>

<?php include("templates/footer.php"); ?>
</html>
