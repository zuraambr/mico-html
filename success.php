
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Your Form is Submitted</title>
  <style>
    body {
      background-color: white;
      text-align: center;
      padding: 50px;
    }
  </style>
</head>
<body>
  <h1>Your form is submitted!</h1>
  <p>Thank you for reaching out to us, <?php echo $name; ?>.</p>
  <p>We will get back to you shortly.</p>
  <p>Email: <?php echo $email; ?></p>
  <p>Phone: <?php echo $phone; ?></p>
  <p>Message: <?php echo $message; ?></p>
  <a href="index.php"><button>Home</button></a>
</body>
</html>