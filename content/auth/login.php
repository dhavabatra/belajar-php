<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../../assets/css/login.css">
</head>
<body>
    <div class="bg">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()"><b>Login</b></button>
                <button type="button" class="toggle-btn" onclick="daftar()"><b>Sign Up</b></button>
            </div>
            <form id="login" class="input-group" action="">
                <input type="email" class="input-field" placeholder="email" required>
                <input type="password" class="input-field" placeholder="password" required>
                <input type="checkbox" class="check-box"><span>Ingat Saya</span>
                <a type="submit" class="submit-btn" href="../../index.php"><b>Login</b></a>
                <br><br><br><br>
                <p class="veriv">Belum punya akun?<a href=""> Register</a></p>
            </form>
            <form id="daftar" class="input-group" action="">
                <input type="email" class="input-field" placeholder="Email" required>
                <input type="password" class="input-field" placeholder="Password" required>
                <input type="text" class="input-field" placeholder="Konfirmasi Password" required>
                <input type="checkbox" class="check-box"><span>Saya setuju</span>
                <a type="submit" class="submit-btn" href="../../index.php"><b>Sign Up</b></a>
                <br><br>
                <p class="veriv">Sudah punya akun?<a href="../../index.php"> Login</a></p>
            </form>
        </div>    

    </div>

    <script>
        let x = document.getElementById("login")
        let y = document.getElementById("daftar")
        let z = document.getElementById("btn")

        function daftar(){
            x.style.left = "-400px"
            y.style.left = "50px"
            z.style.left = "110px"
        }
        function login(){
            x.style.left = "50px"
            y.style.left = "450px"
            z.style.left = "0"
        }

    </script>
</body>
</html>