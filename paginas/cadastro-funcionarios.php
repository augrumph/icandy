<html>
<head>
    <link rel = "stylesheet" type="text/css" href="../css/cadastro-funcionario.css">
    <script type="text/javascript" src="./js/index.js"></script>
</head>
<body>
    <!-- COMEÇO DA HEADER -->
    <div class="header">
      <div class="header-right">
        <a class="dropdown" href="#">HOME</a>
          <div class="dropdown">
          <button class="dropbtn">FUNCIONARIO </button>
          <div class="dropdown-content">
            <a href="#">Lista Funcionario</a>
            <a href="./cadastro-funcionarios.html">Cadastrar</a>
          </div>
          </div>
        <a class="dropdown">FINANCEIRO</a>
        <a class="dropdown">SAIR</a>
        </div>
      </div>
    </div>
          <!-- FIM DA HEADER -->
          <div class="cadastro">
            <br>
            <h1 class="titulo-cad">Cadastrar</h1>
            <br>
            <input class="nome" type="text" placeholder="Nome"/>
             <input class="sobrenome" type="text" placeholder="Sobrenome"/>
            <br><br>
            <a class="titulo-datanasc">Data de Contratação</a>
            <br>
            <input class="datanasc" id="bData" type="date"/>
            <br><br>
            <input class="centro" type="radio" name="gender" value="male"> Homem
            <input class="centro" type="radio" name="gender" value="female"> Mulher
            <br><br>
             <input class="input" type="text" placeholder="Salario"/>
             <br><br>
             <input class="input" type="text" placeholder="Cargo"/>
            <br><br><br>
            <a href="./index-login.html"><button class="btn-cad" id="bCad">Cadastre-se</button></a>
          </div>
 </body>
</html>