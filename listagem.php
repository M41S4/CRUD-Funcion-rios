<?php
include("conexao.php");

$sql = "SELECT * FROM tb_funcionarios";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Demonstrativo de Rendimentos Mensais</title>
</head>
<body>
    <h2>DEMONSTRATIVO DE RENDIMENTOS MENSAIS</h2>

    <text>Digite o nome do funcionário:</text> 
    <input type="text" name="campo_procurar">
    <INPUT TYPE="submit" name="bt_filtrar" VALUE="FILTRAR">
    <INPUT TYPE="submit" name="bt_voltar" VALUE="VOLTAR">
    </br>

    <table border="1">
        <tr>
            <th>Nº Registro</th>
            <th>Nome Funcionário</th>
            <th>Data Admissão</th>
            <th>Cargo</th>
            <th>Salário Bruto</th>
            <th>INSS</th>
            <th>Salário Líquido</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['N_registro']."</td>";
            echo "<td>".$row['Nome_Funcionario']."</td>";
            echo "<td>".$row['data_admissao']."</td>";
            echo "<td>".$row['cargo']."</td>";
            echo "<td>R$ ".number_format($row['salario_bruto'], 2, ',', '.')."</td>";
            echo "<td>".$row['inss']."</td>";
            echo "<td>R$ ".number_format($row['salario_liquido'], 2, ',', '.')."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
