<?php
	// on every page where you want to use the session (check if user is logged in), have to put session_start().
	session_start();

   // include the files we need
    include("connection.php");	// for use of $conn
    include("functions.php");	// for use of check_login()

    // collect user data in user_data variable
    // check_login() is a function defined in functions.php that takes connection to database in $conn variable
    $user_data = check_login($conn);	
	// if user is not logged in, they will be redirected to login page
	// if they are logged in, this user_data will contain their info. to access an attribute of the user: $user_data['attribute']
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search Property</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post">
		<div id="mydiv">
			<label id="searchLabel">Search many listings from trusted real estate agents</label> 
			<br>
		</div>

		<div>
			<label>Select a property type:</label>
			<select name="property">
				<option value="res">Residential</option>
				<option value="com">Commercial</option>
			</select>
		</div>

		<div>
			<label>Country:</label> 
			<input type="text" name="country" placeholder="Enter country name"/>
		</div>

		<div>
			<label>City:</label> 
			<input type="text" name="city" placeholder="Enter city name"/>
		</div>

		<div>
			<label>Min Price:</label>
			<select name="min_price">
				<option value="0">0</option>
				<option value="25000">$25,000</option>
				<option value="50000">$50,000</option>
				<option value="75000">$75,000</option>
				<option value="125000">$125,000</option>
				<option value="150000">$150,000</option>
				<option value="175000">$175,000</option>
				<option value="200000">$200,000</option>
				<option value="225000">$225,000</option>
				<option value="250000">$250,000</option>
				<option value="275000">$275,000</option>
				<option value="300000">$300,000</option>
				<option value="325000">$325,000</option>
				<option value="350000">$350,000</option>
				<option value="375000">$375,000</option>
				<option value="400000">$400,000</option>
				<option value="425000">$425,000</option>
				<option value="450000">$450,000</option>
				<option value="475000">$475,000</option>
				<option value="500000">$500,000</option>
				<option value="525000">$525,000</option>
				<option value="550000">$550,000</option>
				<option value="575000">$575,000</option>
				<option value="600000">$600,000</option>
				<option value="625000">$625,000</option>
				<option value="650000">$650,000</option>
				<option value="675000">$675,000</option>
				<option value="700000">$700,000</option>
				<option value="725000">$725,000</option>
				<option value="750000">$750,000</option>
				<option value="800000">$800,000</option>
				<option value="825000">$825,000</option>
				<option value="850000">$850,000</option>
				<option value="875000">$875,000</option>
				<option value="900000">$900,000</option>
				<option value="925000">$925,000</option>
				<option value="950000">$950,000</option>
				<option value="975000">$975,000</option>
				<option value="1000000">$1,000,000</option>
				<option value="1000000+">$1,000,000+</option>
			</select>
		</div>

		<div>
			<label>Max Price:</label>
			<select name="max_price">
				<option value="Unlimited">Unlimited</option>
				<option value="25000">$25,000</option>
				<option value="50000">$50,000</option>
				<option value="75000">$75,000</option>
				<option value="125000">$125,000</option>
				<option value="150000">$150,000</option>
				<option value="175000">$175,000</option>
				<option value="200000">$200,000</option>
				<option value="225000">$225,000</option>
				<option value="250000">$250,000</option>
				<option value="275000">$275,000</option>
				<option value="300000">$300,000</option>
				<option value="325000">$325,000</option>
				<option value="350000">$350,000</option>
				<option value="375000">$375,000</option>
				<option value="400000">$400,000</option>
				<option value="425000">$425,000</option>
				<option value="450000">$450,000</option>
				<option value="475000">$475,000</option>
				<option value="500000">$500,000</option>
				<option value="525000">$525,000</option>
				<option value="550000">$550,000</option>
				<option value="575000">$575,000</option>
				<option value="600000">$600,000</option>
				<option value="625000">$625,000</option>
				<option value="650000">$650,000</option>
				<option value="675000">$675,000</option>
				<option value="700000">$700,000</option>
				<option value="725000">$725,000</option>
				<option value="750000">$750,000</option>
				<option value="800000">$800,000</option>
				<option value="825000">$825,000</option>
				<option value="850000">$850,000</option>
				<option value="875000">$875,000</option>
				<option value="900000">$900,000</option>
				<option value="925000">$925,000</option>
				<option value="950000">$950,000</option>
				<option value="975000">$975,000</option>
				<option value="1000000">$1,000,000</option>
				<option value="1000000+">$1,000,000+</option>
			</select>
		</div>
		
		<div>
			<label>Beds:</label>
			<select name="beds">
				<option value="Any">Any</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="5+">5+</option>
			</select>
		</div>
		
		<div>
			<label>Baths:</label>
			<select name="baths">
				<option value="Any">Any</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="5+">5+</option>
			</select>
		</div>
			
		<div>
			<input type="submit" name="submit" value="Search">
		</div>

		</form>
		<br>
	</div>
</body>
</html>

<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $prop_type = $_POST['property'];
		$country = $_POST['country'];
        $city = $_POST['city'];
		$min_price = $_POST['min_price'];
		$max_price = $_POST['max_price'];
		$beds = $_POST['beds'];
		$baths = $_POST['baths'];
	}
	

	$res_Flag = False;
	$com_Flag = False;
	$city_Flag = False;
	$max_price_Flag = False;
	$beds_Flag = False;
	$baths_Flag = False;


	//If user searches for a residential property, then $res_Flag will be True
	if ($prop_type == 'res') {
		$res_Flag = True;
	}
	//If user searches for a commercial property, then $com_Flag will be True
	else if ($prop_type == 'com') {
		$com_Flag = True;
	}

	//If user specifies a city, then $city_Flag wil; be True 
	if ($city != NULL) {
		$city_Flag = True;
	}

	//If user sets a max price, then $max_price_Flag will be True
	if ($max_price != 'Unlimited') {
		$max_price_Flag = True;
	}

	//If user specifies number of bedrooms, then $beds_Flag will be True
	if ($beds != 'Any') {
		$beds_Flag = True;
	}

	//If user specifies number of bathrooms, then $baths_Flag will be True
	if ($baths != 'Any') {
		$baths_Flag = True;
	}


	/*
	Searches to check:
		For residential and commercial:
			1.	User chooses residential/commercial, sets city, sets max price, sets # of bedrooms, sets # of bathrooms										- res & com working
			2.	User chooses residential/commercial, sets city, sets max price, sets # of bedrooms, does not set # of bathrooms								- res & com working
			3.	User chooses residential/commercial, sets city, sets max price, does not set # of bedrooms, sets # of bathrooms								- res & com working
			4.	User chooses residential/commercial, sets city, sets max price, does not set # of bedrooms, does not set # of bathrooms						- res & com working
			5.	User chooses residential/commercial, sets city, does not set max price, sets # of bedrooms, sets # of bathrooms								- res & com working
			6.	User chooses residential/commercial, sets city, does not set max price, sets # of bedrooms, does not set # of bathrooms						- res & com working
			7.	User chooses residential/commercial, sets city, does not set max price, does not set # of bedrooms, sets # of bathrooms						- res & com working
			8.	User chooses residential/commercial, sets city, does not set max price, does not set # of bedrooms, does not set # of bathrooms				- res & com working
			9.	User chooses residential/commercial, does not set city, sets max price, sets # of bedrooms, sets # of bathrooms								- res & com working
			10. User chooses residential/commercial, does not set city, sets max price, sets # of bedrooms, does not set # of bathrooms						- res & com working
			11. User chooses residential/commercial, does not set city, sets max price, does not set # of bedrooms, sets # of bathrooms						- res & com working
			12. User chooses residential/commercial, does not set city, does not set max price, sets # of bedrooms, sets # of bathrooms						- res & com working
			13. User chooses residential/commercial, does not set city, sets max price, does not set $ of bedrooms, does not set # of bathrooms				- res & com working
			14. User chooses residential/commercial, does not set city, does not set max price, does not set $ of bedrooms, sets # of bathrooms				- res & com working
			15. User chooses residential/commercial, does not set city, does not set max price, sets $ of bedrooms, does not set # of bathrooms				- res & com working
			16. User chooses residential/commercial, does not set city, does not set max price,  does not set $ of bedrooms, does not set # of bathrooms	- res & com working
	*/


	/* --------------------------------------------------------------------------------------For residential properties:---------------------------------------------------------------------------*/

	//1. User chooses residential, sets city, sets max price, sets # of bedrooms, sets # of bathrooms
	if ($res_Flag == True && $city_Flag == True && $max_price_Flag == True && $beds_Flag == True && $baths_Flag == True) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price' and h.Price <= '$max_price' and h.Num_Beds = '$beds' and h.Num_Baths = '$baths')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//2. User chooses residential, sets city, sets max price, sets # of bedrooms, does not set # of bathrooms	
	else if ($res_Flag == True && $city_Flag == True && $max_price_Flag == True && $beds_Flag == True && $baths_Flag == False) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price' and h.Price <= '$max_price' and h.Num_Beds = '$beds')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//3. User chooses residential, sets city, sets max price, does not set # of bedrooms, sets # of bathrooms
	else if ($res_Flag == True && $city_Flag == True && $max_price_Flag == True && $beds_Flag == False && $baths_Flag == True) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price' and h.Price <= '$max_price' and h.Num_Baths = '$baths')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//4. User chooses residential, sets city, sets max price, does not set # of bedrooms, does not set # of bathrooms
	else if ($res_Flag == True && $city_Flag == True && $max_price_Flag == True && $beds_Flag == False && $baths_Flag == False) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price' and h.Price <= '$max_price')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//5. User chooses residential, sets city, does not set max price, sets # of bedrooms, sets # of bathrooms
	else if ($res_Flag == True && $city_Flag == True && $max_price_Flag == False && $beds_Flag == True && $baths_Flag == True) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price' and h.Num_Beds = '$beds' and h.Num_Baths = '$baths')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//6. User chooses residential, sets city, does not set max price, sets # of bedrooms, does not set # of bathrooms
	else if ($res_Flag == True && $city_Flag == True && $max_price_Flag == False && $beds_Flag == True && $baths_Flag == False) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price' and h.Num_Beds = '$beds')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//7. User chooses residential, sets city, does not set max price, does not set # of bedrooms, sets # of bathrooms
	else if ($res_Flag == True && $city_Flag == True && $max_price_Flag == False && $beds_Flag == False && $baths_Flag == True) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price' and h.Num_Baths = '$baths')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//8. User chooses residential, sets city, does not set max price, does not set # of bedrooms, does not set # of bathrooms
	else if ($res_Flag == True && $city_Flag == True && $max_price_Flag == False && $beds_Flag == False && $baths_Flag == False) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//9. User chooses residential, does not set city, sets max price, sets # of bedrooms, sets # of bathrooms
	else if ($res_Flag == True && $city_Flag == False && $max_price_Flag == True && $beds_Flag == True && $baths_Flag == True) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price' and h.Price <= '$max_price' and h.Num_Beds = '$beds' and h.Num_Baths = '$baths')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//10. User chooses residential, does not set city, sets max price, sets # of bedrooms, does not set # of bathrooms
	else if ($res_Flag == True && $city_Flag == False && $max_price_Flag == True && $beds_Flag == True && $baths_Flag == False) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price' and h.Price <= '$max_price' and h.Num_Beds = '$beds')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//11. User chooses residential, does not set city, sets max price, does not set # of bedrooms, sets # of bathrooms
	else if ($res_Flag == True && $city_Flag == False && $max_price_Flag == True && $beds_Flag == False && $baths_Flag == True) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price' and h.Price <= '$max_price' and h.Num_Baths = '$baths')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//12. User chooses residential, does not set city, does not set max price, sets # of bedrooms, sets # of bathrooms
	else if ($res_Flag == True && $city_Flag == False && $max_price_Flag == False && $beds_Flag == True && $baths_Flag == True) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price' and h.Num_Beds = '$beds' and h.Num_Baths = '$baths')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//13. User chooses residential, does not set city, sets max price, does not set $ of bedrooms, does not set # of bathrooms
	else if ($res_Flag == True && $city_Flag == False && $max_price_Flag == True && $beds_Flag == False && $baths_Flag == False) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price' and h.Price <= '$max_price')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//14. User chooses residential, does not set city, does not set max price, does not set $ of bedrooms, sets # of bathrooms
	else if ($res_Flag == True && $city_Flag == False && $max_price_Flag == False && $beds_Flag == False && $baths_Flag == True) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price' and h.Num_Baths = '$baths')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//15. User chooses residential, does not set city, does not set max price, sets $ of bedrooms, does not set # of bathrooms
	else if ($res_Flag == True && $city_Flag == False && $max_price_Flag == False && $beds_Flag == True && $baths_Flag == False) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price' and h.Num_Beds = '$beds')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//16. User chooses residential, does not set city, does not set max price,  does not set $ of bedrooms, does not set # of bathrooms 
	else if ($res_Flag == True && $city_Flag == False && $max_price_Flag == False && $beds_Flag == False && $baths_Flag == False) {
		$query = "(SELECT * FROM `residential_property` AS r JOIN `house_listing` AS h ON r.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price')";
		$res_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($res_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($res_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}


	/* --------------------------------------------------------------------------------------For commercial properties:---------------------------------------------------------------------------*/

	//1. User chooses commercial, sets city, sets max price, sets # of bedrooms, sets # of bathrooms
	else if ($com_Flag == True && $city_Flag == True && $max_price_Flag == True && $beds_Flag == True && $baths_Flag == True) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price' and h.Price <= '$max_price' and h.Num_Beds = '$beds' and h.Num_Baths = '$baths')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	
	//2. User chooses commercial, sets city, sets max price, sets # of bedrooms, does not set # of bathrooms	
	else if ($com_Flag == True && $city_Flag == True && $max_price_Flag == True && $beds_Flag == True && $baths_Flag == False) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price' and h.Price <= '$max_price' and h.Num_Beds = '$beds')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	
	//3. User chooses commercial, sets city, sets max price, does not set # of bedrooms, sets # of bathrooms
	else if ($com_Flag == True && $city_Flag == True && $max_price_Flag == True && $beds_Flag == False && $baths_Flag == True) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price' and h.Price <= '$max_price' and h.Num_Baths = '$baths')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}
	
	//4. User chooses commercial, sets city, sets max price, does not set # of bedrooms, does not set # of bathrooms
	else if ($com_Flag == True && $city_Flag == True && $max_price_Flag == True && $beds_Flag == False && $baths_Flag == False) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price' and h.Price <= '$max_price')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}
	
	//5. User chooses commercial, sets city, does not set max price, sets # of bedrooms, sets # of bathrooms
	else if ($com_Flag == True && $city_Flag == True && $max_price_Flag == False && $beds_Flag == True && $baths_Flag == True) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price' and h.Num_Beds = '$beds' and h.Num_Baths = '$baths')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}
	
	//6. User chooses commercial, sets city, does not set max price, sets # of bedrooms, does not set # of bathrooms
	else if ($com_Flag == True && $city_Flag == True && $max_price_Flag == False && $beds_Flag == True && $baths_Flag == False) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price' and h.Num_Beds = '$beds')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}
	
	//7. User chooses commercial, sets city, does not set max price, does not set # of bedrooms, sets # of bathrooms
	else if ($com_Flag == True && $city_Flag == True && $max_price_Flag == False && $beds_Flag == False && $baths_Flag == True) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price' and h.Num_Baths = '$baths')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}
	
	//8. User chooses commercial, sets city, does not set max price, does not set # of bedrooms, does not set # of bathrooms
	else if ($com_Flag == True && $city_Flag == True && $max_price_Flag == False && $beds_Flag == False && $baths_Flag == False) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.City = '$city' and h.Price >= '$min_price')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}
	
	//9. User chooses commercial, does not set city, sets max price, sets # of bedrooms, sets # of bathrooms
	else if ($com_Flag == True && $city_Flag == False && $max_price_Flag == True && $beds_Flag == True && $baths_Flag == True) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price' and h.Price <= '$max_price' and h.Num_Beds = '$beds' and h.Num_Baths = '$baths')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}
	
	//10. User chooses commercial, does not set city, sets max price, sets # of bedrooms, does not set # of bathrooms
	else if ($com_Flag == True && $city_Flag == False && $max_price_Flag == True && $beds_Flag == True && $baths_Flag == False) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price' and h.Price <= '$max_price' and h.Num_Beds = '$beds')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}
	
	//11. User chooses commercial, does not set city, sets max price, does not set # of bedrooms, sets # of bathrooms
	else if ($com_Flag == True && $city_Flag == False && $max_price_Flag == True && $beds_Flag == False && $baths_Flag == True) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price' and h.Price <= '$max_price' and h.Num_Baths = '$baths')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}
	
	//12. User chooses commercial, does not set city, does not set max price, sets # of bedrooms, sets # of bathrooms
	else if ($com_Flag == True && $city_Flag == False && $max_price_Flag == False && $beds_Flag == True && $baths_Flag == True) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price' and h.Num_Beds = '$beds' and h.Num_Baths = '$baths')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}
	
	//13. User chooses commercial, does not set city, sets max price, does not set $ of bedrooms, does not set # of bathrooms
	else if ($com_Flag == True && $city_Flag == False && $max_price_Flag == True && $beds_Flag == False && $baths_Flag == False) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price' and h.Price <= '$max_price')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}
	
	//14. User chooses commercial, does not set city, does not set max price, does not set $ of bedrooms, sets # of bathrooms
	else if ($com_Flag == True && $city_Flag == False && $max_price_Flag == False && $beds_Flag == False && $baths_Flag == True) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price' and h.Num_Baths = '$baths')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}
	
	//15. User chooses commercial, does not set city, does not set max price, sets $ of bedrooms, does not set # of bathrooms
	else if ($com_Flag == True && $city_Flag == False && $max_price_Flag == False && $beds_Flag == True && $baths_Flag == False) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price' and h.Num_Beds = '$beds')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}
	
	//16. User chooses commercial, does not set city, does not set max price,  does not set $ of bedrooms, does not set # of bathrooms 
	else if ($com_Flag == True && $city_Flag == False && $max_price_Flag == False && $beds_Flag == False && $baths_Flag == False) {
		$query = "(SELECT * FROM `commercial_property` AS c JOIN `house_listing` AS h ON c.Property_ID = h.Listing_ID WHERE h.Price >= '$min_price')";
		$com_filtered = mysqli_query($conn, $query);

		if (mysqli_num_rows($com_filtered) > 0) {
			//Print every row from filtered query
			while ($row = mysqli_fetch_assoc($com_filtered)) {
				echo "Property ID: " . $row['Property_ID'] . " Address: " . $row['Address'] . " City: " . $row['City'] . " Price: " . $row['Price'] . " Beds: " . $row['Num_Beds'] . " Baths: " . $row['Num_Baths'] . "<br>";
			}
		}
		else {
			echo 'Unfortunately, we do not have your dream house. :(';
		}
	}

	//If something goes wrong...
	else {
		echo 'Error';
	}

?>