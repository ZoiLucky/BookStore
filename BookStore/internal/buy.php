<?php

$user=$_SESSION['username'];
$id=$_REQUEST['id'];

if($_SESSION['username']!='?'){
			//$idd = $_REQUEST['id'];
			$sql = "INSERT INTO orders(`Customer`,`oDate`) VALUES($id,now())";
			
			if($mysqli->query($sql) === TRUE){
				echo "New record";
			}else{
				echo "error";
			}
			
			$result = mysqli_query($mysqli,$sql);		
			$order_id = $mysqli->insert_id;
			foreach($_SESSION['cart'] as $p=>$q){
				$sql2 = "INSERT INTO orderdetails(Orders,Quantity,Product) VALUES($order_id,$q,$p)";
				$res = mysqli_query($mysqli,$sql);	
			}
			
				if($mysqli->query($sql) === TRUE){
					echo "New record";
				}else{
					echo "error";
				}

			unset($_SESSION['cart']);
}
else{
	print "please register";
}


/*
$sql1 ="INSERT INTO `orders`( `Customer`, `oDate`) VALUES (?,now())";
$id1 = "select id from customer where uname = $user";

	$cid = $id;
		if($_SESSION['username']!='?'){	
			if( $stmt = $mysqli->prepare($sql) ) {
				$stmt->bind_param("i", $cid);
				$stmt->execute();
				$result = $stmt->get_result();
				print "Η αγορά καταγράφηκε επιτυχώς";
				$order_id = mysql_insert_id;
		foreach($_SESSION['cart'] as $p=>$q){
			$sql2 = "INSERT INTO orderdetails(Orders,Quantity,Product) VALUES($order_id,$q,$p)";
			$res = mysqli_query($conn,$sql);	
		}
	}
	else{
		echo 'Please Register' ;
	}
	}
	




require_once 'internal/dbconnect.php';
	if($_SESSION['username']!='?'){
		$id = $_REQUEST['id'];
		$sql = "INSERT INTO orders(Customer,oDate) VALUES ($id,now())";
		$result = mysqli_query($mysqli,$sql);		
		$order_id = $mysqli->insert_id;
		foreach($_SESSION['cart'] as $p=>$q){
			$sql2 = "INSERT INTO orderdetails(Orders,Quantity,Product) VALUES($order_id,$q,$p)";
			$res = mysqli_query($mysqli,$sql);	
		}
	}
	else{
		echo 'Please Register' ;
	}
*/

?>
