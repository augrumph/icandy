<!DOCTYPE html>
<html  lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <link rel = "stylesheet" type="text/css" href="./css/sucesso.css">

</head>
<body>
    <div class="header">
            <div class="centro">
                <div class="content">
                    <p class="texto" ><b>Compra realizada com sucesso </b></p>
                </div>
                <div class="content">
                    <img id="confirmacao" src="./imgs/confirmacao.png">
                </div>
            </div>
    </div>
    <script>
        var timer = setTimeout(function() {
            window.location='./menuUsuario.php'
        }, 3000);
        alert("Você sera redirecionado em 3 segundos!");
    </script>
</body>
</html>