<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $patientName = htmlspecialchars($_POST['patient_name']);
    $doctorName = htmlspecialchars($_POST['doctor_name']);
    $departmentName = htmlspecialchars($_POST['department_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $symptoms = htmlspecialchars($_POST['symptoms']);
    
    $appointmentDate = $_POST['appointment_date'];
    
    
    $date = DateTime::createFromFormat('d/m/Y', $appointmentDate);
    if ($date) {
        $formattedDate = $date->format('d/m/Y');  
    } else {
        
        $formattedDate = "Invalid Date";
    }
} else {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>
</head>
<style>
body {
      background-color: white;
      text-align: center;
      padding: 50px;
    }

</style>
<body>
    <h2>Appointment Summary</h2>
    <p><strong>Patient Name:</strong> <?php echo $patientName; ?></p>
    <p><strong>Doctor's Name:</strong> <?php echo $doctorName; ?></p>
    <p><strong>Department:</strong> <?php echo $departmentName; ?></p>
    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <p><strong>Symptoms:</strong> <?php echo $symptoms; ?></p>
    <p><strong>Appointment Date:</strong> <?php echo $formattedDate; ?></p>
    <p>თქვენი ჯავშანი მიღებულია</p>
    <a href="index.php">Back to Home</a>
</body>
</html>
