<html>
<body>

<form action="setBrightness.php" method="get">
Brightness: <input type="number" name="brightness"><br>
<input type="submit">
</form>

</body>
</html> 

<?php
include 'getBrightness.php';
include 'Database.php';

if($_GET['brightness'] > 1023){
    echo "brightness too high";
    $value = 0;
}else{
    $value = $_GET['brightness'];
}
$prevValue = getBrightness();

?>
<p>Set Value: <?php echo $value ?></p>
<p>Prev Value: <?php echo $prevValue ?></p>
<?php

$stmt = $pdo->prepare("UPDATE `settings` SET `brightness`=:brightness WHERE `id`=:id");
$stmt->execute([':brightness' => $value, ':id' => 0]);