<style>
    .form-container {
  position:fixed;
  top:20%;
  left:40%;
  width: 300px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  margin-bottom: 20px;
}

.form-container h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-container label {
  display: block;
  margin-bottom: 5px;
}

.form-container input[type="text"],
.form-container input[type="email"],
.form-container input[type="tel"],
.form-container input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  margin-bottom: 10px;
}

.form-container button[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.form-container button[type="submit"]:hover {
  background-color: #3e8e41;
}

.form-container p {
  text-align: center;
  margin-top: 20px;
}

.form-container a {
  color: #4CAF50;
  text-decoration: none;
  transition: color 0.3s ease;
}

.form-container a:hover {
  color: #3e8e41;
}
.register{
    display: none;
}
</style>

<div class="form-container login">
    <h2>Login</h2>
    <form  action="./login.php" id="loginForm" class="loginForm "method="post">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <b onclick="registerNow()" >Register now!</b></p>
  </div>
  
  <div class="form-container register">
    <h2>Register</h2>
    <form action="./register.php" class="registerforms"  id="registerForm" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required> 
      <label for="phone-number">Phone Number</label>
      <input type="tel" id="phone-number" name="phone" required>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      <label for="confirm-password">Confirm Password</label>
      <input type="password" id="confirm-password" name="repassword" required>
      <button type="submit">Register</button>
    </form>
    <p>Already have an account? <b onclick="loginNow()">Login</b></p>
  </div>
  <script>
      
      function registerNow() {
    document.querySelector(".login").style.display = "none";
    var register=document.querySelector(".register");
    register.style.display = "block";
    register.style.top= 5 + "%";
  }
  function loginNow(){
      document.querySelector(".register").style.display = "none";
    document.querySelector(".login").style.display = "block";
  }
  </script>