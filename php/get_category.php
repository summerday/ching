<?php include 'connect.php';
	

//print_r("I am in get_category(). <br>");
	
	$tblname="Product_Category";
	
	// check the user credentials against the DB
	$sql = "SELECT * FROM $tblname ";
//echo $sql . "<br>";
	

	$result= $mysqli->query($sql);
	$rowCount = $result->num_rows;

//echo "rowcount = " . $rowCount;

	   
	echo "<html><body>";
	echo "<h2> Category </h2>";
	echo "<ul>";
	
	while ($obj = $result->fetch_object()) {
	    $name=$obj->categoryName;
	    echo "<li><a href='get_product.php?name=$name' target='content_right'> $name </a></li>";
	    echo "<br>";

	}

	echo "</ul>";
	echo "</body></html>";

        /* free result set */
        $result->close();
	

?>