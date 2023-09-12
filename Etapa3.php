<html>

<title>Desenvolvendo Websites com PHP</title>

<body>



<p align="center"><big><big><strong>Cadastramento - Etapa 3 de 3</strong></big></big></p>



<form method="POST" action="cadastra.php">



    <input type="hidden" name="nome" value="<?php echo isset($_POST["nome"]) ? htmlspecialchars($_POST["nome"], ENT_QUOTES) : ''; ?>">
    <input type="hidden" name="email" value="<?php echo isset($_POST["email"]) ? htmlspecialchars($_POST["email"], ENT_QUOTES) : ''; ?>">
    <input type="hidden" name="datanascimento" value="<?php echo isset($_POST["datanascimento"]) ? htmlspecialchars($_POST["datanascimento"], ENT_QUOTES) : ''; ?>">
    <input type="hidden" name="sexo" value="<?php echo isset($_POST["sexo"]) ? htmlspecialchars($_POST["sexo"], ENT_QUOTES) : ''; ?>">
    <input type="hidden" name="profissao" value="<?php echo isset($_POST["profissao"]) ? htmlspecialchars($_POST["profissao"], ENT_QUOTES) : ''; ?>">



    <input type="hidden" name="telefone" value="<?php echo isset($_POST["telefone"]) ? htmlspecialchars($_POST["telefone"], ENT_QUOTES) : ''; ?>">
    <input type="hidden" name="endereco" value="<?php echo isset($_POST["endereco"]) ? htmlspecialchars($_POST["endereco"], ENT_QUOTES) : ''; ?>">
    <input type="hidden" name="cidade" value="<?php echo isset($_POST["cidade"]) ? htmlspecialchars($_POST["cidade"], ENT_QUOTES) : ''; ?>">
    <input type="hidden" name="estado" value="<?php echo isset($_POST["estado"]) ? htmlspecialchars($_POST["estado"], ENT_QUOTES) : ''; ?>">
    <input type="hidden" name="cep" value="<?php echo isset($_POST["cep"]) ? htmlspecialchars($_POST["cep"], ENT_QUOTES) : ''; ?>">

    <div align="center"><center>
            <p> <strong> Username: </strong> <br> <input type="text" name="username" size="10" style="background: #dcdcdc; ></p>
</center></div><div align="center"><center>

                <p> <strong> Senha: </strong> <br> <input type="text" name="senha" size="10" style="background: #dcdcdc; ></p>
</center></div><div align="center"><center>

                    <p> <strong> Confirme sua Senha: </strong> <br> <input type="text" name="confirma_senha" size="10" style="background: #dcdcdc; ></p>

</center></div><div align="center"><center><p><input style="background: #5dd55d" type="submit" value="Finalizar Cadastro" name="fim"></p>
                    </center></div>

</form>

</body>
</html>