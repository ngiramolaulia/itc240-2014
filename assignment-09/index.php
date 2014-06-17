<?php
include("bus.php");

$test_bus = new Tester();

$test_bus->test(3,3);
//$test_bus->test(3,2);//failed

$bus = new Bus();
$test_bus->test($bus->currentSpeed, 20);

$bus->currentSpeed;
?>

<p>Test Passed: <?=$test_bus->passed;?>
<p>Test Failed: <?=$test_bus->failed;?>
<p>Current bus speed: <?=$bus->currentSpeed;?>mph

<?php
if(!$bus->armed) {
?>
<p>The bus is unarmed</p>
<?php
}

if(!$bus->exploded) {
?>
<p>Sadly, the bus has not exploded....yet</p>
<?php
}

$bus->setSpeed(55);
$bus->getSpeed();
?>
<p>The bus is accelerating at: <?=$bus->getSpeed();?> mph
<?php
if ($bus->armed) {
?>
<p>This bus is armed! Y'all better start running!</p>
<?php
}

$bus->setSpeed(80);
$bus->getSpeed();
?>
<p>The bus is accelerating at: <?=$bus->getSpeed();?> mph
<?php
if ($bus->armed && !$bus->exploded) {
?>
<p>The bus is still armed yet, no explotions :(</p>
<?php
}
$bus->setSpeed(30);
$bus->getSpeed();
?>
<p>The bus is slowing down to: <?=$bus->getSpeed();?> mph
<?php
if ($bus->exploded) {
?>
<p>The bus has EXPLODED!
<?php
}
$bus->exploded = false;
if (!$bus->exploded){
?>
<p>WAIT!!! It looks like.....
<?php
}
$bus->trigger();
if($bus->exploded) {
?>
<p>BOOOOM!!!! Just another dramatic explosion that turns the bus into nothing but...a blown up bus!  
<?php
}
?>

