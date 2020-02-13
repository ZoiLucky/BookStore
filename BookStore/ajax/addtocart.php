<?php
session_start();
if(! isset($_SESSION['cart']) || ! is_array($_SESSION['cart'])) {
	$_SESSION['cart']=array();
}

$p = $_POST['a'];
if(!isset($_SESSION['cart'][$p])){
	$_SESSION['cart'][$p]=0;
}
$_SESSION['cart'][$p] +=$_POST['b'];
$a = $_POST['b'];



echo "Προστέθηκαν  $a τεμάχια στο καλάθι σας";

?>