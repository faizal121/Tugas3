<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SIM COBA</title>
        <link rel="icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" href="assets/CSS/bootstrap.css">
        <link rel="stylesheet" href="assets/CSS/floating-labels.css">
        <script>
            function hellocoba(){
                //var email = document.getElementById("email").value;
                //alert("Email Anda : "+email);
                document.getElementById("email").addEventListener("keyup", function(event){
                    event.preventDefault();
                    if(event === 13){
                        document.getElementById("password").focus();
                    }
                });
            }
            
            function hellocoba2(){
                alert("Password Lupa Ya..");
            }
        </script>
    </head>
    <body>
        <form class="form-signin">
            <div class="text-center mb-4">
                <img class="mb-4" src="assets/images/bootstrap-solid.svg" 
                     style="width: 72px; height: auto;">
                <h1>Login Form</h1>
                <p>Login Sekarang Juga Yukkk....</p>
            </div>
            <div class="form-label-group">
                <input onkeyup="hellocoba();" class="form-control" type="email" name="email" id="email" 
                       placeholder="email" required="yes" autofocus="yes"
                       autocomplete="no" maxlength="30">
                <label for="email">Email Address</label>
            </div>
            <div class="form-label-group">
                <input class="form-control" type="password" name="password" id="password" 
                       placeholder="password" required="yes" maxlength="8">
                <label for="password">Password</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox"> Remember Me
                </label>
            </div>
            <button class="btn btn-lg btn-success btn-block" type="button">Sign In</button>
            <button onclick="hellocoba2();"class="btn btn-lg btn-primary btn-block" type="button">Forget Password</button>
        </form>
    </body>
</html>
