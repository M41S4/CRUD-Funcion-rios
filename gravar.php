<?php
    include("conexao.php");
    if(isset($_POST['bt_cadastrar'])){

        $num_registro = $_POST['num_registro'];
        $nome = $_POST['nome_funcionario'];
        $data_admissao = $_POST['data_admissao'];
        $cargo = $_POST['cargos'];
        $qtd_salarios = $_POST['qtdade_salarioMin'];

        $salario_minimo = 1412.00;

        $salario_bruto = $qtd_salarios * $salario_minimo;

        if($salario_bruto > 1550){
            $inss = $salario_bruto * 0.11;
            $inss_texto = "R$ " . number_format($inss, 2, ',', '.');
        } else {
            $inss = 0;
            $inss_texto = "Isento";
        }

        $salario_liquido = $salario_bruto - $inss;

        
        $sql = "INSERT INTO tb_funcionarios  (N_registro, Nome_Funcionario, data_admissao, cargo, qtde_salarios, salario_bruto, inss, salario_liquido) 
            VALUES 
            ('$num_registro', '$nome', '$data_admissao', '$cargo', '$qtd_salarios', '$salario_bruto', '$inss_texto', '$salario_liquido')";
          if(mysqli_query($conn, $sql)){
        echo "Funcionário cadastrado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
}

?>