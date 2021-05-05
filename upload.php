<?php 

if(isset($_FILES["image"])){
    var_dump($_FILES["image"]);


}else{
    echo "file does not exist or is corrupted";
}