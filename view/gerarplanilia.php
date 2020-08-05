<?php
require_once("../Controllers/Conexao_Banco.php");
require_once('Cabecalho.php');
require_once('../Controllers/Protege.php');
$usu=$_SESSION["nome"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar execel</title>
</head>
<body>



    <?php
	

    $arquivo = 'produtos.xls';
    $html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="9"><b>Planilha de Produtos</b></tr>';
        $html .= '</tr>';
        $html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>Preço de Produção</b></td>';
		$html .= '<td><b>quantidade </b></td>';
        $html .= '<td><b>total gasto</b></td>';
        $html .= '<td><b>Preço de Venda</b></td>';
		$html .= '<td><b>quantidade Venda</b></td>';
		$html .= '<td><b>Total da Venda</b></td>';
        $html .= '<td><b>Total final</b></td>';
		$html .= '</tr>';
		//Selecionar todos os itens da tabela 
		$result_msg_contatos = "SELECT * FROM Produtos_omega where produtor = '$usu'";
		$resultado_msg_contatos = mysqli_query($conexao, $result_msg_contatos);
		
		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
			$p =$row_msg_contatos["Preco_producao"];
			$tg=$row_msg_contatos["Total_gasto"];
			$pv=$row_msg_contatos["Preco_venda"];
			$tv=$row_msg_contatos["total_venda"];
			$tf=$row_msg_contatos["Total_Final"];
			$precoprodu =number_format($p,2,",",".");
			$totalgas =number_format($tg,2,",",".");
                    $precovenda =number_format( $pv,2,",",".");
                    $totalven =number_format( $tv,2,",",".");
                    $totalfin =number_format(  $tf,2,",",".");
			$html .= '<tr>';
			$html .= '<td>'.$row_msg_contatos["idproduto"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nome"].'</td>';
			$html .= '<td> R$'.$precoprodu.'</td>';
			$html .= '<td>'.$row_msg_contatos["quantidade"].'</td>';
			$html .= '<td> R$'.$totalgas.'</td>';
			$html .= '<td> R$'.$precovenda.'</td>';
			$html .= '<td>'.$row_msg_contatos["quantida_Venda"].'</td>';
			$html .= '<td> R$'.$totalven.'</td>';
			$html .= '<td> R$'.$totalfin.'</td>';
			
			$html .= '</tr>';
			;
		}
        // Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit;
    ?>
    
</body>
</html>