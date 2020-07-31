<?php 
require_once "animal.php";
require_once "Ape.php";
require_once "Frog.php";
$sheep= new Animal( 'shaun', 2, 'false');
$sungokong = new Ape;
$kodok = new Frog('buduk','','');

$sheep->set_name('shaun');
echo 'nama hewannya '. $sheep->get_name();
$sheep->set_legs(2);
echo '<br>jumlah kakinya ada '. $sheep->get_legs();
$sheep->set_cold_blooded('false');
echo '<br>apakah termasuk hewan berdarah dingin? ' . $sheep->get_cold_blooded();
$sungokong->set_name('kera sakti');
echo '<br>nama hewannya ' . $sungokong->get_name();
$sungokong->set_yell('Auooo');
echo '<br>yellnya ' . $sungokong->get_yell();
$kodok->set_name('buduk');
echo '<br>nama hewannya ' . $kodok->get_name();
$kodok->set_jump('hop hop');
echo '<br>jumpnya ' . $kodok->get_jump();
 ?>