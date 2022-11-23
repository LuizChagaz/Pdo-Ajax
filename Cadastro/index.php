<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="LuizChagaz">
    <title>Cadastro e Apresentação</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
</head>
<body>
    <?php 
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "cadastro";

        $conn = new PDO("mysql:dbname=$db; host=$host; charset=utf8", $user, $pass);

    ?>
    <form method="POST">
        <div class="container">
            <div class="row">
                <div class="col-sm input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div><div class="col-sm input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Rua</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="row">
                <div class="col-sm input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nome do pai</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div><div class="col-sm input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nome da mãe</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
        </div>
        <button id="entrar">entrar</button>
    </form>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        function pageload(){
            const buttons = document.querySelectorAll("#entrar")
            for (const button of buttons) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                window.alert("foi")
            })
            }
        }
        window.onload = pageload;
    </script>
</body>
</html>