<html>
<head>
    <link rel = "stylesheet" type="text/css" href="../css/cadastro.css">
    <script type="text/javascript" src="./js/index.js"></script>
</head>
<body>
    <!-- COMEÇO DA HEADER -->
        <div class="header">
           <!-- <a href="#" class="logo"><img id="logo" src="./img/logo.png" height="71px"></a> --> 
            <div class="header-right">
              <a class="menu" href="../index.html">HOME</a>
              <a class="menu">PRODUTOS</a>
              <a class="menu">CARRINHO</a>
              <div class="form-popup" id="myForm">
                <form action="/action_page.php" class="form-container">
              
                  <label for="email"><b>Email</b></label>
                  <input type="text" placeholder="Enter Email" name="email" required>
              
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>

                  <button type="submit" class="btn">Login</button>
                  
                  <br>
                    <a class="esqueci">Esqueceu sua senha?</a>
                  <br>
                  <a class="esqueci">Cadastre-se</a>
                  <br>
                  <a type="submit" class="btn_fechar" onclick="closeForm()">Close</a>

                </form>
              </div>
              <a class="menu" onclick="openForm()">ENTRAR</a>
              
              <!--<input type="text" id="buscar" placeholder="Buscar"> <button id="botao_buscar" type="submit"><img src="./img/search.png" height="23px"></button> -->
            </div>
          </div>
          <!-- FIM DA HEADER -->
          <div class="cadastro">
            <br>
            <h1 class="titulo-cad">Cadastro de usuário</h1>
            <br>
            <input class="nome" type="text" placeholder="Nome"/>
             <input class="sobrenome" type="text" placeholder="Sobrenome"/>
             <br><br>
            <input type="email" placeholder="Email" class="input"/>
            <br><br>
            <input type="email" placeholder="Repetir email" class="input"/>
            <br><br>
            <input type="password" placeholder="Senha" class="input"/>
            <br><br>
            <input type="password" placeholder="Repetir senha" class="input"/>
			      <br><br>
            <a class="titulo-datanasc">Data de Nascimento</a>
            <br>
            <input class="datanasc" id="bData" type="date"/>
            <br>
            <input class="nome" type="text" placeholder="Cidade"/>
             <input class="sobrenome" type="text" placeholder="Estado"/>
             <br><br>
             <input type="tel" maxlength="11" placeholder="Telefone" class="input"/>
            <br><br><br>
            <a href="./index-login.html"><button class="btn-cad" id="bCad">Cadastre-se</button></a>
          </div>
 </body>
</html>