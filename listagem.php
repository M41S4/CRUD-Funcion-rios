<?php
include("conexao.php");

if (isset($_GET['bt_filtrar'])) {
    $pesquisa = $_GET['campo_procurar'];
    $sql = "SELECT * FROM tb_funcionarios 
            WHERE Nome_Funcionario LIKE '%$pesquisa%'";
} else {
    $sql = "SELECT * FROM tb_funcionarios";
}

$result = mysqli_query($conn, $sql);

if (isset($_GET['bt_voltar'])) {
    header("Location: listagem.php"); 
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Demonstrativo de Rendimentos Mensais</title>
</head>
<body>
    <h2>DEMONSTRATIVO DE RENDIMENTOS MENSAIS</h2>

    <form method="GET" action="listagem.php">
    <label>Digite o nome do funcionário:</label> 
    <input type="text" name="campo_procurar" 
    value="
    <?php if(isset($_GET['campo_procurar'])) echo $_GET['campo_procurar']; ?>">
    <input type="submit" name="bt_filtrar" value="FILTRAR">
    <input type="submit" name="bt_voltar" value="VOLTAR">
    </form>

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
