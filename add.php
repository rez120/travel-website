<?php
    $errors = array("name"=>"","country"=>"","company"=>"","flightprice"=>"","hotelprice"=>"","thumbnail"=>"","continent"=>"","description"=>"");

    $name = $company = $flightprice = $hotelprice = $thumbnail = $continent = $country= $description = "";
    if(isset($_POST["submit"])){
       
   
    if(empty($_POST["name"])){
        $errors["name"] = "Required";
    }else{
        // echo $_POST["name"];   
        $name = $_POST["name"]; 
    }
    if(empty($_POST["country"])){
        $errors["country"] = "Required";
    }else{
        $country = $_POST["country"];
    }
    if(empty($_POST["company"])){
        $errors["company"] = "Required";
    }else{
        $company = $_POST["company"];
    }
    if(empty($_POST["flightprice"])){
        $errors["flightprice"] = "Required";
    }else{
        $flightprice = $_POST["flightprice"];
    }
    if(empty($_POST["hotelprice"])){
        $errors["hotelprice"] = "Required";
    }
    else{
        $hotelprice = $_POST["hotelprice"];
    }
    if(empty($_POST["thumbnail"])){
        $errors["thumbnail"] = "Required";
    }else{
        $thumbnail = $_POST["thumbnail"];
    }
    if(empty($_POST["continent"])){
        $errors["continent"] = "Required";
    }else{
        $continent = $_POST["continent"];
    }
    if(empty($_POST["description"])){
        $errors["description"] = "Required";
    }else{
        $description = $_POST["description"];
        // echo $_POST["description"];
    }


    if(array_filter($errors)){

    }else{
        header("Location: index.php");
    }
}
 
?>


<!DOCTYPE html>
<html lang="en">

<?php include("./templates/header.php"); ?>
<br />
      <div class="row">
        <div class="col justify-content-center">
          <form class="destination-form" id="destination-form" action="add.php" method="POST">
            <h4>Add Destination</h4>
            <label for="">Destination Name</label>
            <br />
            <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"/>
            <?php
                if($errors["name"]){
                    echo "<div class='error'>" . $errors["name"] . "</div> <br /> ";
                }
                else{
                    echo "<br /><br />";
                }
            ?>
            <label for="">Country</label>
            <br />
            <input type="text" name="country" value="<?php echo htmlspecialchars($country); ?>"/>
            <?php
                if($errors["country"]){
                    echo "<div class='error'>" . $errors["country"] . "</div> <br /> ";
                }
                else{
                    echo "<br /><br />";
                }
            ?>
            <label for="">Company Name</label>
            <br />
            <input type="text" name="company" value="<?php echo htmlspecialchars($company); ?>" />
            <?php
                if($errors["company"]){
                    echo "<div class='error'>" . $errors["company"] . "</div> <br /> ";
                }
                else{
                    echo "<br /><br />";
                }
            ?>
            
            <label for="">Flight Price</label>
            <br />
            <input type="text" name="flightprice" value="<?php echo htmlspecialchars($flightprice); ?>" />
            <?php
                if($errors["flightprice"]){
                    echo "<div class='error'>" . $errors["flightprice"] . "</div> <br /> ";
                }
                else{
                    echo "<br /><br />";
                }
            ?>
          
            <label for="">Hotel Price</label>
            <br />
            <input type="text" name="hotelprice" value="<?php echo htmlspecialchars($hotelprice); ?>" />
            <?php
                if($errors["hotelprice"]){
                    echo "<div class='error'>" . $errors["hotelprice"] . "</div> <br /> ";
                }
                else{
                    echo "<br /><br />";
                }
            ?>
           
            <label for="">Thumbnail</label>
            <br />
            <input type="text" name="thumbnail" value="<?php echo  htmlspecialchars($thumbnail); ?>" />
            <?php
                if($errors["thumbnail"]){
                    echo "<div class='error'>" . $errors["thumbnail"] . "</div> <br /> ";
                }
                else{
                    echo "<br /><br />";
                }
            ?>
            <label for="">Continent</label>
            <br />
            <input type="text" name="continent" value="<?php echo htmlspecialchars($continent); ?>" />
            <?php 
                if($errors["continent"]){
                    echo "<div class='error'>" . $errors["continent"] . "</div> <br /> ";
                }
                else{
                    echo "<br /><br />";
                }
            ?>
            <label for="">Description</label>
            <br />
            <textarea form="destination-form" name="description" cols="22" rows="5" > <?php echo htmlspecialchars($description); ?></textarea>
            <!-- <input type="text" name="country" /> -->
            <?php
                if($errors["description"]){
                    echo "<div class='error'>" . $errors["description"] . "</div> <br /> ";
                }
                else{
                    echo "<br /><br />";
                }
            ?>
            <input
              class="btn btn-primary"
              type="submit"
              name="submit"
              value="submit"
            />
            <br />
            <br />
           
          </form>
        </div>
      </div>

<?php include("./templates/footer.php"); ?>
</html>
