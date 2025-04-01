<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $patientName = htmlspecialchars($_POST['patient_name']);
    $doctorName = htmlspecialchars($_POST['doctor_name']);
    $departmentName = htmlspecialchars($_POST['department_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $symptoms = htmlspecialchars($_POST['symptoms']);
    
    $appointmentDate = $_POST['appointment_date'];

    // თუ თარიღი ფორმატია dd.mm.yyyy, უნდა გადავაკეთოთ yyyy-mm-dd ფორმატში
    $date = DateTime::createFromFormat('d.m.Y', $appointmentDate);
    
    if ($date) {
        $formattedDate = $date->format('Y-m-d');  // გადაკეთება yyyy-mm-dd ფორმატში
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
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Mico</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
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
