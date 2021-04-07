<?php
    include("./config/db_connect.php");

    $sql = "SELECT * FROM destinations ORDER BY created_at";
    $result = mysqli_query($conn,$sql);
    $destinations = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
    // print_r($destinations);
    // echo count($destinations);
    // $destinations = array(1,2,3,4,5,6,7,8,9);
?>

<!DOCTYPE html>

<html lang="en">

<?php include("./templates/header.php"); ?>
<br>
<?php 
$c = 0;
while($c<count($destinations) ){ $n=0; ?>

<div class="d-flex justify-content-evenly">



<?php 
while($c<count($destinations) && $n<2){ ?>
    <div class="card" style="width: 18rem;">
  <img src="<?php echo htmlspecialchars($destinations[$c]['thumbnail']); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo htmlspecialchars($destinations[$c]["name"]. ", ". $destinations[$c]["country"]); ?></h5>
    <h5 class="card-title"><?php echo htmlspecialchars($destinations[$c]["company"]); ?></h5>
    <h5 class="card-title"><?php echo htmlspecialchars($destinations[$c]["flight_price"]); ?></h5>
    <h5 class="card-title"><?php echo htmlspecialchars($destinations[$c]["hotel_price"]); ?></h5>
    <p class="card-text"><?php echo htmlspecialchars($destinations[$c]["continent"]); ?></p>
    <p class="card-text"><?php echo htmlspecialchars($destinations[$c]["description"]); ?></p>
    <a href="./detail.php?id=<?php echo $destinations[$c]["id"]; ?>" class="btn btn-primary card--btn">Go somewhere</a>
  </div>
</div>


<?php $c=$c+1; $n=$n+1; } ?>
</div>
<br>

<?php } ?>
<br>


<br>
<br>
<?php include("./templates/footer.php"); ?>
</html>
