<?php
// Nezobrazování errorů, stejně tady žádné nejsou :kappa:
// ini_set("display_errors", 0);
// Přidání get.php
require_once('get.php');
// Proměná z URL
$searchednick = $_GET["nick"];
// Přidání classy
$player = new Player($searchednick);
// Zavolání funkce
$player->getPlayer();
echo $_GET["nick"];
?>
<img src="<?php echo $player->getPlayerSkins("full"); ?>">

