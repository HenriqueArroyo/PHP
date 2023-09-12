<html>
<title>Desenvolvimento WebSites com PHP</title>
<body>

<p align="center"><big><big><strong>Cadatramento - Etapa 2 de 3</strong></big></big></p>

<form method="POST" action="Etapa3.php">

    <input type="hidden" name="nome" value="<?php echo isset($_POST["nome"]) ? htmlspecialchars($_POST["nome"], ENT_QUOTES) : ''; ?>">
    <input type="hidden" name="email" value="<?php echo isset($_POST["email"]) ? htmlspecialchars($_POST["email"], ENT_QUOTES) : ''; ?>">
    <input type="hidden" name="datanascimento" value="<?php echo isset($_POST["datanascimento"]) ? htmlspecialchars($_POST["datanascimento"], ENT_QUOTES) : ''; ?>">
    <input type="hidden" name="sexo" value="<?php echo isset($_POST["sexo"]) ? htmlspecialchars($_POST["sexo"], ENT_QUOTES) : ''; ?>">
    <input type="hidden" name="profissao" value="<?php echo isset($_POST["profissao"]) ? htmlspecialchars($_POST["profissao"], ENT_QUOTES) : ''; ?>">

    <div align="center"><center>
            <p> <strong> Telefone: </strong> <br> <input type="text" name="telefone" size="20" style="background: #dcdcdc;></p>
</center></div><div align="center"<center>

                <p> <strong> Endereço: </strong> <br> <input type="text" name="endereco" size="20" style="background: #dcdcdc;></p>
</center></div><div align="center" <br>

                <p> <strong> Cidade: </strong> <br> <input type="text" name="cidade" size="20" style="background: #dcdcdc;>&nbsp;&nbsp;&nbsp;
</div><div align="center"<center>

                    <p> <strong>  Estado: </strong> <br> <input type="text" name="estado" size="2" style="background: #dcdcdc;>
</div><div align="center"<center>

                        <p> <strong>CEP: </strong> <br> <input type="text" name="cep" size="9" style="background: #dcdcdc; ></p>
</center></div>

<div align="center"><center><p><input style="background: #5dd55d" type="submit"
                                      value="Prosseguir &gt;&gt;" name="prosseguir"></p>
                        </center></div>

</form>
</body>
</html>