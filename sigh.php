<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Registration</title>
    <h1 class="p"><b> sign up</b></h1>
</head>
<div>
<body class="dy">
    <style>
        .dy{
            background-color:skyblue;
        }
        .tx{
            margin-left: 450px;
            padding-top: 30px
        }
        .p{
            text-align: center;
            padding-top: 10px;
            font-size: 60px;
        }
    </style>
    <form class="needs-validation" novalidate>
    <div class = "tx";>
    <div class="col-md-7">
      <label for="validationServer01">First name</label>
      <input type="text" name="fname" class="form-control is-valid" id="validationServer01" placeholder="First name" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-7">
      <label for="validationServer02">Last name</label>
      <input type="text" name="lname" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-7">
      <label for="validationServerUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="text" name="uname" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-7">
      <label for="validationServer03">Phone Number</label>
      <input type="number" name="pno" class="form-control is-invalid" id="validationServer03" placeholder="phone number" required>
      <div class="invalid-feedback">
        Please provide a valid number<br> <br>
      </div>
    </div>
    <div class="col-md-7">
      <label for="validationServer03">Address</label>
      <input type="email" name="email" class="form-control is-invalid" id="validationServer03" placeholder="email" required>
      <div class="invalid-feedback">
        Please provide an email Address<br> <br>
      </div>
    </div>
    <div class="col-md-7">
      <label for="validationServer03">Password</label>
      <input type="password" name="password" class="form-control is-invalid" id="validationServer03" placeholder="password" required>
      <div class="invalid-feedback">
        Please provide your password<br> <br>
      </div>
    </div>
  <div class="col-md-7">
  <div class="form-group">
    <div class="form-check">
    <div class="col-md-7">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  
  <div class="col-md-7">
  <button class="btn btn-primary" type="submit">sign up</button>
    </div>
</form>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
</html>
