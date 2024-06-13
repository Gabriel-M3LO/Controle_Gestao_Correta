<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<body>
<div>
    <div class="d-flex justify-content-between">
        <div style="background-image: url('img/bg.jpg'); width: 65%; height: 100vh">
            <div class="logintext">
                <h1>Gestão Remota</h1>
                <h2 style="font-size: 20px; margin-top: 2px">Bem-vindo!</h2>
            </div>
        </div>
        <div>
            <div class="lo">
                <div class="full-height-div d-flex justify-content-center align-items-center">
                    <img src="img/logo.png" style="width: 30%; height: auto%; margin-top: 20%" alt="">
                </div>
                <form action="login.php" method="POST" style="margin-top: 5%">
                    <h2 style="text-align: center; color: #b8b0b0">LOGIN</h2>
                    <div style="text-align: center">
                        <input type="text" id="usuario" name="email" placeholder="email" style="margin-top: 10px"
                               required> <br>
                        <input type="password" id="senha" name="senha" placeholder="Senha" style="margin-top: 5px"
                               required>
                        <br>
                    </div>
                    <div style="margin-top: 15px; text-align: center">
                        <button type="submit" class="btn btn-primary" style="width: 350px" ">Login</button>
                    </div>
                </form>
                <div class="d-flex justify-content-left" style="margin-top: 15px"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>