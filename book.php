<?php include 'config.php'; ?>

<!-- book section -->
<section class="book_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col">
        <form action="booking.php" method="POST">
          <h4>BOOK <span>APPOINTMENT</span></h4>
          <div class="form-row">
            <div class="form-group col-lg-4">
              <label for="inputPatientName">Patient Name</label>
              <input type="text" class="form-control" id="inputPatientName" name="patient_name" required>
            </div>
            <div class="form-group col-lg-4">
              <label for="inputDoctorName">Doctor's Name</label>
              <select name="doctor_name" class="form-control wide" id="inputDoctorName">
                <?php foreach ($doctorss as $doctor): ?>
                  <option value="<?php echo htmlspecialchars($doctor); ?>"><?php echo htmlspecialchars($doctor); ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group col-lg-4">
              <label for="inputDepartmentName">Department's Name</label>
              <select name="department_name" class="form-control wide" id="inputDepartmentName">
                <?php foreach ($departments as $department): ?>
                  <option value="<?php echo htmlspecialchars($department); ?>"><?php echo htmlspecialchars($department); ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-4">
              <label for="inputPhone">Phone Number</label>
              <input type="number" class="form-control" id="inputPhone" name="phone" required>
            </div>
            <div class="form-group col-lg-4">
              <label for="inputSymptoms">Symptoms</label>
              <input type="text" class="form-control" id="inputSymptoms" name="symptoms">
            </div>
            <div class="form-group col-lg-4">
              <label for="inputDate">Choose Date</label>
              <input type="text" class="form-control" id="inputDate" name="appointment_date" placeholder="dd/mm/yyyy" required>
            </div>
          </div>
          <div class="btn-box">
            <button type="submit" class="btn">Submit Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- end book section -->

