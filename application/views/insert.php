<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<?php
$this->load->view('header');
?>
<form action="./insertdata" method="post">
<div class="container">
<form class="needs-validation" novalidate>
    <center><h1>สถานีรถ<h1> </center>
  <div class="form-row">
    <div class="col-md-4 mb-1">
      <label for="validationCustom01">ขบวน</label>
      <input type="text" class="form-control" id="validationCustom01" name="Bus_id" placeholder="" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>

    </div>
     </div>
     <h1>ต้นทาง</h1>
    <div class="form-row">
    <div class="col-md-6 mb-8">
      <label for="validationCustom02">สถานี</label>
      <input type="text" class="form-control" id="validationCustom02" name="Departurestation" placeholder="" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom04">เวลาออก</label>
      <input type="time" class="form-control" id="validationCustom04" name="Timeout" placeholder="" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
</div>
<h1>ห้วยราช</h1>
    <div class="form-row">
    <div class="col-md-6 mb-8">
      <label for="validationCustom02">ถึง</label>
      <input type="time" class="form-control" id="validationCustom02" name="Toaddress" placeholder="" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom04">ออก</label>
      <input type="time" class="form-control" id="validationCustom04" name="Busexit" placeholder="" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
</div>
<h1>ปลายทาง</h1>
    <div class="form-row">
    <div class="col-md-6 mb-8">
      <label for="validationCustom02">สถานี</label>
      <input type="text" class="form-control" id="validationCustom02" name="Terminal" placeholder="" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom04">ถึงเวลา</label>
      <input type="time" class="form-control" id="validationCustom04" name="Totime" placeholder="" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
</div>
    <div class="form-row">
    <div class="col-md-6 mb-8">
    <label for="sel1">หมายเหตุ</label>
      <select class="form-control" id="sel1" name="Notebus">
        <option>รถธรรมดา</option>
        <option>รถดีเซลราง</option>
        <option>รถด่วนดีเซลราง</option>
      </select>
</div>
      </div>

<br>
     <div class="form-row">
  <button class="btn btn-primary" type="submit">ตกลง</button> 
    <button class="btn btn-secondary" type="submit">ยกเลิก</button>

</div>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>