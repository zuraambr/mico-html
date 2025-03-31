<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // მიღებული მონაცემები
    $patientName = htmlspecialchars($_POST['patient_name']);
    $doctorName = htmlspecialchars($_POST['doctor_name']);
    $departmentName = htmlspecialchars($_POST['department_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $symptoms = htmlspecialchars($_POST['symptoms']);
    
    // თარიღი
    $appointmentDate = $_POST['appointment_date'];
    
    // თარიღის ფორმატირება
    $date = DateTime::createFromFormat('d/m/Y', $appointmentDate);
    if ($date) {
        $formattedDate = $date->format('d/m/Y');  // გადაკეთება 'dd/mm/yyyy' ფორმატში
    } else {
        // შეცდომა თარიღის ფორმატში
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
</head>
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
