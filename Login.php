<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Login.css">
<script type="text/javascript">

</script>
<title> Login </title>
</head>
<body>
  <body>

    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">

            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        <form class="login-form" action="authentication.php" onsubmit = "return validation()" method = "POST">
          <input type="text" name="user"placeholder="username"/>

          <input type="password" name="pass"placeholder="password"/>

          <button type="submit" name="btn" value="Login" >Login </button>
          <p class="message"><a href="#">Forget password</a></p>
        </form>
      </div>
    </div>

    <script>
            function validation()
            {
                var id=document.login-form.user.value;
                var ps=document.login-form.pass.value;
                if(id.length=="" && ps.length=="") {
                    alert("User Name and Password fields are empty");
                    return false;
                }
                else
                {
                    if(id.length=="") {
                        alert("User Name is empty");
                        return false;
                    }
                    if (ps.length=="") {
                    alert("Password field is empty");
                    return false;
                    }
                }
            }
            </script>

</body>
</html>
