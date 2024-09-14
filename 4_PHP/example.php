<?php
    $name=$_GET['name'];
    $class=$_GET['class'];
    echo"Name = ".htmlspecialchars($name)."<br>";
    echo"Class = ".htmlspecialchars($class)".<br>";

?>

<?php 
    $name=$_POST['name'];
    $age=$_POST['age'];
    echo "Name =".htmlspecailchars($name)."<br>";
    echo "Age=".htmlspecialchars($age)."<br>";
?>