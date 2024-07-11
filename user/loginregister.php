
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .form1 {
            overflow: hidden;
            height: 100vh;
        }

        .foms {
            height: 100%;
        }

        .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%, hsl(218, 41%, 35%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%), radial-gradient(1250px circle at 100% 100%, hsl(218, 41%, 45%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%);
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }

        .logbtn {
            width: 100%;
            height: 7vh;
            display: flex;
            justify-content: center;
        }

        .registerforms {
            display: none;
        }

        .gotores {
            width: 100%;
            height: 5vh;
            display: flex;
            flex-direction: row;
            gap: 1em;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .gotores p {
            min-height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            color:white;
        }
        .form-outline {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column; /* Added */
    height: 100%; /* Added */
    color:white;
    font-size:18px;
    letter-spacing:1px;
}
.form-outline label{
width:60%;
}
/* Minimize input width */
.form-outline input[type="text"],
.form-outline input[type="email"],
.form-outline input[type="number"],
.form-outline input[type="password"] {
    width: calc(100% - 40%); /* Adjust width as needed */
}

    </style>
</head>
<body>

<section class="vh-100 form1">
    <section class="background-radial-gradient overflow-hidden foms">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-1">
            <div>
                <div class="card-body px-3 py-5 px-md-5">
                <form action="./login.php" id="loginForm" class="loginForm "method="post">
              <!-- 2 column grid layout with text inputs for the first and last names -->

              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Email address</label>
                <input type="email" name="email" id="form3Example3" class="form-control" />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Password</label>
                <input type="password" id="form3Example4" name="password" class="form-control" require />
              </div>
              <!-- Checkbox -->
              <!-- Submit button -->
              <div class="logbtn">
              <button type="submit"class="btn btn-primary btn-block" >
               login
              </button>
              </div>
              <div class="gotores m-2">
    <p>don't have an account</p>
    <p onclick="change()"><b>register now!</b></p>
</div>
            </form>
                    <form action="./register.php" class="registerforms"  id="registerForm" method="post" >

<div class="form-outline mb-1">
  <label class="form-label" for="form3Example1cg">Your Name</label>
  <input type="text" name="name"id="form3Example1cg" class="form-control form-control-lg" />
</div>

<div class="form-outline mb-1">
  <label class="form-label" for="form3Example3cg">Your Email</label>
  <input type="email" id="form3Example3cg" name="email"class="form-control form-control-lg" />
</div>
<div class="form-outline mb-1">
  <label class="form-label" for="form3Example3cg">phone number</label>
  <input type="text" id="form3Example3cg" name="phone" class="form-control form-control-lg" />
</div>

<div class="form-outline mb-1">
  <label class="form-label" for="form3Example4cg">Password</label>
  <input type="password" id="form3Example4cg" name="password" class="form-control form-control-lg" />
</div>

<div class="form-outline mb-1">
  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
  <input type="password" id="form3Example4cdg" name="repassword" class="form-control form-control-lg" />
</div>

<div class="d-flex justify-content-center">

  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
 
</div>
<div class="gotores m-2">
<p>already have account</p>
<p onclick="change()"><b>login now!</b></p>
</div>
</form>
                </div>
            </div>
        </div>
    </section>
</section>

<script>
    function change() {
        var loginForm = document.getElementById("loginForm");
        var registerForm = document.getElementById("registerForm");

        if (loginForm.style.display !== "none") {
            // If login form is currently visible, hide it and show register form
            loginForm.style.display = "none";
            registerForm.style.display = "block";
        } else {
            // If register form is currently visible, hide it and show login form
            loginForm.style.display = "block";
            registerForm.style.display = "none";
        }
    }
</script>

</body>
</html>


