<?php
if(! isset($_SESSION['cart']) || ! is_array($_SESSION['cart']))
{
$_SESSION['cart']=array();
}
elseif(isset($_REQUEST['prid'])){
	$p = intval($_REQUEST['prid']);
	$a = intval($_REQUEST['qty']);

		if(isset($_SESSION['cart'][$p])){
			$_SESSION['cart'][$p] += $a;
			require "show_cart.php";	
		}
		else{
			$_SESSION['cart'][$p] = $a;	
			print "Προστέθηκαν $a τεμάχια στο καλάθι σας";
			require "show_cart.php";
		}

}


?>
