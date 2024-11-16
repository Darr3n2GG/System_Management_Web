<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>World Residence Centre</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>World Residence Centre</h1>
                <!-- <a href="test.php"><i class="fas fa-user-circle"></i>Issues</a> -->
                <a href="rentpayment.php"><i class="fa-solid fa-credit-card"></i>Rent Payment</a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                <a href="home.php"><i class="fa-solid fa-house"></i>Home</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Rent Payment Page</h2>
			<div>
				<p>Your payment history are below:</p>
				<table class="table">
					<tr>
						<th>Date</th> <th>Payment</th> <th>Remarks</th>
					</tr>
                    <tr>
                        <td>25 October 2024</td> <td>RM 10.00</td> <td> Electricity Fee</td>
                    </tr>
				</table>
			</div>
		</div>
	</body>
</html>