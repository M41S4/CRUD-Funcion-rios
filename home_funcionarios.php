<head>
  <title>Cadastro de funcionários</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form name="form_cadastro_funcionarios" method="POST" action="gravar.php">
        <fieldset>
            <legend>Dados do funcionário</legend>
            <label for="">N° Registro</label>
            <input type="text" name="num_registro" size="30" ><br>
            <label for="">Nome do funcionário</label>
            <input type="text" name="nome_funcionario" size="30"><br>
            <label for="">Data de admissão</label>
            <input type="date" name="data_admissao" size="30"><br>
            <label for="">Cargo</label>
            <input list="lista_cargos" name="cargos" id="id_cargos" />
            <datalist id="lista_cargos">
                <option value="Analista fiscal"></option>
                <option value="Gestor(a) de projetos"></option>
                <option value="Auxiliar administrativo"></option>
                <option value="Operador logistico"></option>
                <option value="SAC"></option>
            </datalist>
            <label for="">Qtde de salários mínimos</label>
            <input type="number" name="qtdade_salarioMin" size="30"><br>
        </fieldset>
        <INPUT TYPE="submit" name="bt_cadastrar" VALUE="CADASTRAR">
        <a href="listagem.php">Visualizar demonstrativos de pagamentos</a>
    </form>
</body>