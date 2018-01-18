<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css2.css">
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
   
    function test_input($data) {
  	    $data = trim($data);
  	    $data = stripslashes($data);
  		  $data = htmlspecialchars($data);
  		  return $data;
	    }
	  $firstname = test_input($_POST['firstname']);
   	$lastname = test_input($_POST['lastname']);
   	$quantity = test_input($_POST['quantity']);
   	$phonenumber = test_input($_POST['phonenumber']);
   	$email = test_input($_POST['email']);
   	$address = test_input($_POST['address']);
    $city = test_input($_POST['city']);
    $state = test_input($_POST['state']);
    $zip = test_input($_POST['zip']);
   	$cardnumber = test_input($_POST['cardnumber']);
    $book =  $_POST['book'];
   	$method = $_POST['method'];
   	$query = "INSERT INTO users (firstname, lastname, quantity, phonenumber,email, address,city,state,zip, cardnumber,method, book) VALUES ('$firstname','$lastname','$quantity','$phonenumber','$email','$address','$city','$state','$zip','$cardnumber','$method','$book')";
   	$insertdata = mysqli_query($data_base_connect, $query);
   	if ($insertdata){
        $sql = "SELECT firstname, lastname, quantity, phonenumber,email, address,city,state,zip,cardnumber,method,book FROM users WHERE firstname ='$firstname'AND lastname ='$lastname' AND phonenumber = '$phonenumber' AND email = '$email' And cardnumber = '$cardnumber'";
        $result = mysqli_query($data_base_connect,$sql);
        $row=mysqli_fetch_array($result); 
   	}	
   	else {
   		echo "submit error";
    	}
?>
<h1>Confirmation Page</h1>
<p>Thanks for your order. This is a confirmation Page. </p>
Your book: <?php echo $row['book'] ?>
<br>
Your first name: <?php echo $row['firstname'] ?>
<br>
Your last name: <?php echo $row['lastname'] ?>
<br>
quantity: <?php echo $row['quantity'] ?>
<br>
Your Phone Number: <?php echo $row['phonenumber'] ?>
<br>
Your email address: <?php echo $row['email'] ?>
<br>
Your shipping address: <?php echo $row['address'] ?>
<br>
Your City: <?php echo $row['city'] ?>
<br>
Your State: <?php echo $row['state'] ?>
<br>
Your zip code: <?php echo $row['zip'] ?>
<br>
Your shipping method: <?php echo $row['method'] ?>
<br>
Your card number: <?php echo $row['cardnumber'] ?>
<?php
	mysqli_close($data_base_connect);
?>
</body>
</html>