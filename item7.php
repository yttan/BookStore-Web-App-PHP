<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css2.css">
	<script type="text/javascript" >
        function showHint(str)
		{
		var xmlhttp;
		if (str.length==0)
  		{ 
  			document.getElementById("txtHint").innerHTML="";
  			return;
  		}
		if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
		else
  		{// code for IE6, IE5
  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
  		{
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    		{
    		document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    		}
  		}
		xmlhttp.open("GET","gethint.php?q="+str,true);
		xmlhttp.send();
		}
		
		function validform()
		{
			var phonenumber = document.payform.phonenumber.value;
			var quantity = document.payform.quantity.value;
			var cardnumber = document.payform.cardnumber.value;
			var zip = document.payform.zip.value;
			if (!parseInt(phonenumber)>0){
				alert("phone number must be a positive integer");
				return(false);
			}		
			if (!parseInt(quantity)>0){
				alert("quantity must be a positive integer");
				return(false);
			}		
			if (!parseInt(cardnumber)>0){
				alert("credit card number must be a positive integer");
				return(false);
			}	
			if (!parseInt(zip)>0){
				alert("zip code must be a positive integer");
				return(false);
			}
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
    $sql = "SELECT picture,detail FROM books WHERE id = 7";
		$result = mysqli_query($data_base_connect,$sql);
        $row=mysqli_fetch_array($result);
    ?>
	<h1>Buy this book</h1>
	<table>
		<td>	
			<img src="<?php echo $row['picture']; ?>" alt="A picture">
		</td>
		<td>
			<?php echo $row['detail']; ?>
		</td>
        
		<td>
			<form action="insert.php" name="payform" method="post" onsubmit="return validform()">
			<input type="hidden" name="book" value="It">
			<br>
			First name: <input type="text" name="firstname" required="true">
			<br>
			Last name: <input type="text" name="lastname" required="true" >
			<br>
			quantity: <input type="text" name="quantity" required="true" >
			<br>
			phonenumber: <input type="text" name="phonenumber" required="true">
			<br>
			your email:
			<input type="email" name="email" required="true" >
			<br>
			shipping address: <input type="text" name="address" required="true">
			<br>
			City:<input type="text" name="city" required="true">
			<br>
			State:<input type="text" name="state" required="true" onkeyup="showHint(this.value)">
			<br>
			suggestion: <span id="txtHint"></span>
			<br>
			Zip code:<input type="text" name="zip" required="true">
			<br>
			credit card number:<input type="text" name="cardnumber" required="true">
			<br>
			transport:
			<br>
			<input type="radio" name="method" value="overnight" required="true">overnight
			<input type="radio" name="method" value="2-days expedited" required="true">2-days expedied
			<input type="radio" name="method" value="6-days ground" required="true">6-days ground
			<br>
			<input type="submit" name="submit" value="submit">
			
			</form>
		</td>
	</table>

<?php
		mysqli_close($data_base_connect);
?>
</body>
</html>