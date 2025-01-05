<?php include './header.php'; ?>
<br><br><br><br>    <br>
<div class="container ">
  <h2 class="text-center mb-4">Create a New Program</h2>
  <form class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>
    
    <!-- Title -->
    <div class="col-md-6">
      <label for="programTitle" class="form-label">Program Title</label>
      <input type="text" class="form-control" id="programTitle" name="title" placeholder="Enter the program title" required>
      <div class="invalid-feedback">Please provide a title.</div>
    </div>
    
    <!-- Time From -->
    <div class="col-md-3">
      <label for="timeFrom" class="form-label">Time From</label>
      <div class="d-flex align-items-center">
        <select class="form-select me-2" id="timeFromHour" name="time_from_hour" required>
          <option value="" selected disabled>Hour</option>
          <?php for ($i = 1; $i <= 12; $i++): ?>
            <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
          <?php endfor; ?>
        </select>
        <select class="form-select me-2" id="timeFromMinute" name="time_from_minute" required>
          <option value="" selected disabled>Minute</option>
          <?php for ($i = 0; $i < 60; $i += 5): ?>
            <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
          <?php endfor; ?>
        </select>
        <select class="form-select" id="timeFromAmPm" name="time_from_am_pm" required>
          <option value="AM">AM</option>
          <option value="PM">PM</option>
        </select>
      </div>
      <div class="invalid-feedback">Please specify the start time.</div>
    </div>

    <!-- Time To -->
    <div class="col-md-3">
      <label for="timeTo" class="form-label">Time To</label>
      <div class="d-flex align-items-center">
        <select class="form-select me-2" id="timeToHour" name="time_to_hour" required>
          <option value="" selected disabled>Hour</option>
          <?php for ($i = 1; $i <= 12; $i++): ?>
            <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
          <?php endfor; ?>
        </select>
        <select class="form-select me-2" id="timeToMinute" name="time_to_minute" required>
          <option value="" selected disabled>Minute</option>
          <?php for ($i = 0; $i < 60; $i += 5): ?>
            <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
          <?php endfor; ?>
        </select>
        <select class="form-select" id="timeToAmPm" name="time_to_am_pm" required>
          <option value="AM">AM</option>
          <option value="PM">PM</option>
        </select>
      </div>
      <div class="invalid-feedback">Please specify the end time.</div>
    </div>

    <!-- Date -->
    <div class="col-md-6">
      <label for="programDate" class="form-label">Date</label>
      <input type="date" class="form-control" id="programDate" name="date" required>
      <div class="invalid-feedback">Please select a date.</div>
    </div>
    
    <!-- Fees -->
    <div class="col-md-6">
      <label for="programFees" class="form-label">Registration Fees (₹)</label>
      <input type="number" class="form-control" id="programFees" name="fees" min="0" placeholder="Enter fees" required>
      <div class="invalid-feedback">Please enter a valid fee amount.</div>
    </div>
    
    <!-- Limit of Registrations -->
    <div class="col-md-6">
      <label for="regLimit" class="form-label">Limit of Registrations</label>
      <input type="number" class="form-control" id="regLimit" name="limit" min="1" placeholder="Enter limit" required>
      <div class="invalid-feedback">Please specify a registration limit.</div>
    </div>
    
    <!-- Poster Image -->
    <div class="col-md-6">
      <label for="posterImage" class="form-label">Poster Image</label>
      <input type="file" class="form-control" id="posterImage" name="poster_image" accept="image/*" required>
      <div class="invalid-feedback">Please upload a poster image.</div>
    </div>
    
    <!-- Payment QR Code Image -->
    <div class="col-md-6">
      <label for="paymentQRCode" class="form-label">Payment QR Code Image</label>
      <input type="file" class="form-control" id="paymentQRCode" name="qrcode_image" accept="image/*" required>
      <div class="invalid-feedback">Please upload a payment QR code image.</div>
    </div>
    
    <!-- Buttons -->
    <div class="col-md-12 text-center">
        <br>
      <button type="submit" class="btn btn-primary me-3">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form>
</div>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    'use strict';
    var forms = document.querySelectorAll('.needs-validation');
    Array.prototype.slice.call(forms).forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();
</script>

<?php // include './footer.php'; ?>
