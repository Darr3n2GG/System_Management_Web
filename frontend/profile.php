<?php
session_start();
if (!isset($_SESSION["loggedin"])) {
    header("Location: login.html");
    exit;
}
require_once("../lib/Core.php");
$core = new Core;

$query = new Query;
$query->table = "accounts";
$query->columns = ["email", "house_number", "phone_number"];
$query->conditions = new Conditions([
    new Condition("id", "=")
]);

$row = $core->read($query, [$_SESSION["id"]]);
$email = $row[0]["email"];
$house_number = $row[0]["house_number"];
$phone_number = $row[0]["phone_number"];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>World Residence Centre</title>
    <link href="../assets/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <a href="home.php" id="left">Island Crest</a>
            <a href="feedback.html"><i class="fa-solid fa-comment"></i>Feedback</a>
            <a href="payment.php"><i class="fa-solid fa-credit-card"></i>Payment</a>
            <a href="../backend/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
    <div class="content">
        <h2>Profile Page</h2>
        <div>
            <p>Your account details are below:</p>
            <table>
                <tr>
                    <td>Username:</td>
                    <td><?= htmlspecialchars($_SESSION["name"], ENT_QUOTES) ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?= htmlspecialchars($email, ENT_QUOTES) ?></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><?= htmlspecialchars($phone_number, ENT_QUOTES) ?></td>
                </tr>
                <tr>
                    <td>House Address:</td>
                    <td><?= htmlspecialchars($house_number, ENT_QUOTES); ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>