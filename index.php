<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>THE SPARKS FOUNDATION BANK</title>
	<style>
	body
	{
	background-image:url("img/background.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	}
	#navbar
	{
	 background-color: #00001a;
	 height: 75px;
	}
	.button
	{
	background-color: #262626;
	color: gray;
	margin-top:5px;
	}
	.footer
	{
	background-color: #262626;
    color:gray;
	height: 75px;
	}
    .navbar-default {
  background-color:teal;
  background-image: none;
  background-repeat: no-repeat;
 }
	</style>
</head>
<body>
<?php
  include 'navbar.php';
  ?>
  <div class="heading text-center my-5">
                    <h1 style="color: black; font-size: 100px; "><b>Welcome to</b></h1>
                    <h1 style="color: black; font-size: 100px;"><b>THE SPARKS FOUNDATION BANK</b></h1>
                </div>
 <div class="row activity text-center">

            <div class="col-md act">
                <img src="img/user1.png" height="170px" width="200px">
                <br>
                <br>
                <a href="viewcustomer.php"><button class="button">USERS</button></a>
            </div>
            <div class="col-md act">
                <img src="img/trans.png" height="200px" width="200px">
                <br>
                <a href="transfermoney.php"><button class="button">MAKE TRANSACTIONS</button></a>
            </div>
            <div class="col-md act">
                <img src="img/history.png" height="150px" width="200px">
                <br><br><br>
                <center> <a href="transactionhistory.php"><button class="button">TRANSACTION HISTORY</button></a>
                </center>
            </div>
        </div>
		<div class="footer">
        <p>
        <h4 style="text-align:center">THE SPARKS FOUNDATION BANK</h4>
        <h5 style="text-align:center">Created By: Sunidhi Singh, May'21</h5>
        </p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>
</html>