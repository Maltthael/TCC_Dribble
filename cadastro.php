<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/cadastro.css">
</head>
<body>
    
</body>
</html>

    <div id="fundo">
        <div id="container-cadastro">

            <div id="cadastro">
                <h2 style="text-align: center;">Cadastro</h2>
                
                <form>
                    <div id="nome">
                        <input type="text" name="Primeiro nome" placeholder="Primeiro nome">
                        <input type="text" name="Sobrenome" placeholder="Sobrenome">
                    </div>
                    <input type="text" name="login" class="form-control" placeholder="E-mail" aria-label="Username">
                    <br>
                    <input type="password" name="senha" class="form-control" placeholder="Senha" aria-label="Server">
                    <br>
                    <input type="password" name="senha" class="form-control" placeholder="Digite sua senha novamente"
                        aria-label="Server">

                    <span style="float: right;">Esqueceu a senha? <a href="">Clique aqui</a><br></span>
                    <div id="genero">
                        <input type="checkbox" name="sexo" value="M"> Masculino
                        <input type="checkbox" name="sexo" value="F"> Feminino
                        <input type="checkbox" name="sexo" value="F"> Prefiro nao informar
                    </div>


                    <input type="date" name="Nascimento" style="margin-top: 10px;">

                    <div id="Botao-cadastro">
                        <button type="submit" class="btn btn-primary">Cadastrar-se</button>
                    </div>
                </form>
            </div>


            <div id="imagem-lateral"></div>





        </div>

    </div>

    </body>
</html>