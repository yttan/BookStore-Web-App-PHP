
<!DOCTYPE html>
<html>
<head>
	<title>Main page</title>
	<link rel="stylesheet" type="text/css" href="css1.css">
	<style>
		.zoom {
    height: 320px;
    width: 200px;
    display: inline-block;
    margin: 10px;
     -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
	}
		.zoom:hover {
    position: relative;
    -webkit-transform: scale(1.5);
    -ms-transform: scale(1.5);
    -o-transform: scale(1.5);
    transform: scale(1.5);
    z-index: 1000;
	}
	</style>
	<script type="text/javascript">
		function shownum(str) {
  		var xhttp;    
  		if (str == "") {
    		document.getElementById("txtHint").innerHTML = "";
    		return;
  		}
  		xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
      	document.getElementById("txtHint").innerHTML = this.responseText;
    	}
  		};
  		xhttp.open("GET", "getavailable.php?q="+str, true);
  		xhttp.send();
	}
	</script>
</head>
<body>
<?php

    define('DB_HOST', 'sylvester-mccoy-v3.ics.uci.edu');
    define('DB_USER', 'inf124-db-078');
    define('DB_PASS', '~BEJX.PYlict');
	define('DB_NAME', 'inf124-db-078');

	$data_base_connect = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	if (!data_base_connect)
  	{
  		die('Could not connect:' . mysqli_connect_error());
  	}
    
?>

	
	<h1>A book store</h1>
	<p>This is an online book store managed by Yuting Tan. This website recommends 10 excellent books in 10 different categories. They are all best sellers in their own categories. Reading such a book can be very benecifial to you. If you are interested in any one of them, you can click on the picture and purchase it.</p>
	<br>
	select to see the number of books we now have in store.
	<form action=""> 
	<select name="number" onchange="shownum(this.value)">
	<option value=" ">options</option>
	<option value="1">Sapiens: A Brief History of Humankind</option>
	<option value="2">The Three-Body Problem</option>
	<option value="3">Fahrenheit 451: A Novel</option>
	<option value="4">Art and Fear: Observations on the Perils (and Rewards) of Artmaking </option>
	<option value="5">Introduction to Algorithms, 3rd Edition</option>
	<option value="6">The Food Lab: Better Home Cooking Through Science </option>
	<option value="7">It</option>
	<option value="8">Just Mercy: A Story of Justice and Redemption</option>
	<option value="9">Hillbilly Elegy: A Memoir of a Family and Culture in Crisis </option>
	<option value="10">The Life-Changing Magic of Tidying Up: The Japanese Art of Decluttering and Organizing </option>
	</select>
	available: <span id="txtHint"></span>
	</form>
	<br>
	<table>
	<tr>
		<th>Category</th>
		<th>Picture</th>
		<th>Price</th>
		<th>Description</th>
		<th>Category</th>
		<th>Picture</th>
		<th>Price</th>
		<th>Description</th>
	</tr>
	<tr>
		<?php
		$sql = "SELECT category,picture,price,description FROM books";
		$result = mysqli_query($data_base_connect,$sql);
        $row=mysqli_fetch_array($result);
		?>
		<td><?php echo $row['category']; ?></td>
		<td><a href="item1.php"><img class="zoom" src = "<?php echo $row['picture']; ?>" alt="A Picture" ></a></td>
		<td><?php echo $row['price']; ?></td>
		<td>
		<?php echo $row['description']; ?>
		</td>
		<?php
        $row=mysqli_fetch_array($result);
		?>
		<td><?php echo $row['category']; ?></td>
		<td><a href="item2.php"><img class="zoom" src="<?php echo $row['picture']; ?>" alt="A Picture"></a></td>
		<td><?php echo $row['price']; ?></td>
		<td>
		<?php echo $row['description']; ?>
		</td>
	</tr>
	<tr>
    	<?php
        $row=mysqli_fetch_array($result);
		?>
		<td><?php echo $row['category']; ?></td>
		<td><a href="item3.php"><img class="zoom" src="<?php echo $row['picture']; ?>" alt="A Picture"></a></td>
		<td><?php echo $row['price']; ?></td>
		<td>
		<?php echo $row['description']; ?>
		</td>
		<?php
        $row=mysqli_fetch_array($result);
		?>
		<td><?php echo $row['category']; ?></td>
		<td><a href="item4.php"><img class="zoom" src="<?php echo $row['picture']; ?>" alt="A Picture"></a></td>
		<td><?php echo $row['price']; ?></td>
		<td>
		<?php echo $row['description']; ?>
		</td>
	</tr>
	<tr>
		<?php
        $row=mysqli_fetch_array($result);
		?>
		<td><?php echo $row['category']; ?></td>
		<td><a href="item5.php"><img class="zoom" src="<?php echo $row['picture']; ?>" alt="A Picture"></a></td>
		<td><?php echo $row['price']; ?></td>
		<td>
		<?php echo $row['description']; ?>
		</td>
		<?php
        $row=mysqli_fetch_array($result);
		?>
		<td><?php echo $row['category']; ?></td>
		<td><a href="item6.php"><img class="zoom" src="<?php echo $row['picture']; ?>" alt="A Picture"></a></td>
		<td><?php echo $row['price']; ?></td>
		<td>
		<?php echo $row['description']; ?>
		</td>
		</td>
	</tr>
	<tr>
		<?php
        $row=mysqli_fetch_array($result);
		?>
		<td><?php echo $row['category']; ?></td>
		<td><a href="item7.php"><img class="zoom" src="<?php echo $row['picture']; ?>" alt="A Picture"></a></td>
		<td><?php echo $row['price']; ?></td>
		<td>
		<?php echo $row['description']; ?>
		</td>
		<?php
        $row=mysqli_fetch_array($result);
		?>
		<td><?php echo $row['category']; ?></td>
		<td><a href="item8.php"><img class="zoom" src="<?php echo $row['picture']; ?>" alt="A Picture"></a></td>
		<td><?php echo $row['price']; ?></td>
		<td>
		<?php echo $row['description']; ?>
		</td>
	</tr>
	<tr>
		<?php
        $row=mysqli_fetch_array($result);
		?>
		<td><?php echo $row['category']; ?></td>
		<td><a href="item9.php"><img class="zoom" src="<?php echo $row['picture']; ?>" alt="A Picture"></a></td>
		<td><?php echo $row['price']; ?></td>
		<td>
		<?php echo $row['description']; ?>
		</td>
		<?php
        $row=mysqli_fetch_array($result);
		?>
		<td><?php echo $row['category']; ?></td>
		<td><a href="item10.php"><img class="zoom" src="<?php echo $row['picture']; ?>" alt="A Picture"></a></td>
		<td><?php echo $row['price']; ?></td>
		<td>
		<?php echo $row['description']; ?>
		</td>
	</tr>
	</table>

	<?php
		mysqli_close($data_base_connect);
	?>
</body>
</html>