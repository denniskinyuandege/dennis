<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <h1 class="p"><b>sign up</b></h1>
</head>
<body class="dy">
    <style>
        .dy{
            background-color: burlywood;
        }
        .tx{
          margin-left: 450px;
          padding-top: 80px;
        }
        .p{
          text-align: center;
          padding-top: 60px;
          font-size: 70px;
        }
    </style>
    <form class="needs-validation" novalidate>
    <div class="tx">
        <div class="form-row">
          <div class="col-md-7">
            <label for="validationTooltip01">First name</label>
            <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
          
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>
        
          <div class="col-md-7"><br>
            <label for="validationTooltip02">Last name</label>
            <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>
          <div class="col-md-7"><br>
            <label for="validationTooltipUsername">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
              </div>
              <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
              <div class="invalid-tooltip">
                Please choose a unique and valid username.
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-7"><br>
            <label for="validationTooltip03">City</label>
            <input type="text" class="form-control" id="validationTooltip03" placeholder="ci" required>
            <div class="invalid-tooltip">
              Please provide a valid city.
            </div>
          </div>
          <div class="col-md-7"><br>
            <label for="validationTooltip04">State</label>
            <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
            <div class="invalid-tooltip">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-7"><br>
            <label for="validationTooltip05">Zip</label>
            <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
            <div class="invalid-tooltip">
              Please provide a valid zip.
            </div>
          </div>
        </div><br><br>
        <button class="btn btn-primary" type="submit">Submit</button>   Already registered: <a href="login.html">Log in</a>
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