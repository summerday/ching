<?php include 'connect.php';
	
	
//echo "I am in get_product(). <br>";

	$cat_name = $_GET['name'];
	
	$tbl_1_name="Product";
	$tbl_2_name="Product_Category";

	
	// Compose a query string
	$sql = "SELECT productName FROM $tbl_1_name a, $tbl_2_name b";
	$sql = $sql . " WHERE a.product_category_id = b.category_id";
	$sql = $sql . " AND categoryName='" . $cat_name . "'";
//echo $sql . "<br>";
	

	$result= $mysqli->query($sql);
	$rowCount = $result->num_rows;

//echo "rowcount = " . $rowCount;

	echo "<html><body>";
	echo "<h3> Products under category **" . $cat_name . "**</h3>";

   	while ($obj = $result->fetch_object()) {
			$name=$obj->productName;
	        	echo "<p>$name </p>";
	}
	echo "</ul>";
	echo "</body></html>";

    	/* free result set */
    	$result->close();
	
	
	// close the connection
	//$mysqli->close();
?>
