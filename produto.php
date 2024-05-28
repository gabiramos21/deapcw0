<style>
  input:invalid {
    border-color:red;
  }
<style>
  input:invalid {
    border-color: red;
  }
</style>

<?php
$db = new SQLite3('loja.sqlite');
$cols = "Marca, Modelo, Preco";
$query = "SELECT $cols FROM produtos";
$res = $db->querySingle($query, true);
$db->close();
echo "<h1>Comprar Bilhetes Serafim</h1>\n";
echo "<form method='GET' action='confirmar.php'>\n"; // Correção aqui
echo "<table>\n";
foreach( $res as $n => $v ) {
	echo " <tr>\n";
	echo "   <th> $n </th>\n";
	echo "   <td id='v$n'> $v </td>\n";
	echo " </tr>\n";
}
?>
<script>
function calc_total() {
	let quant_ele = document.getElementsByName("quantidade")[0];
	let quant_val = quant_ele.value;
	let quant = parseInt(quant_val);
	
	let preco_ele = document.getElementById("Preco"); // Correção aqui
	let preco_val = preco_ele.innerHTML;
	let preco = parseFloat(preco_val);
	
	let total = preco * quant;
	let total_ele = document.getElementsByName("total")[0]; // Correção aqui
	total_ele.value = total;
}
</script>
<tr>
<th>Nome:</th>
<td> <input name='nome' type='text' size=30 required> </td>
</tr>

<tr>
<th>E-mail:</th>
<td> <input name='morada' type='text' size=30 required> </td>
</tr>

<tr>
<th>Número de Telemóvel:</th>
<td> <input name='morada' type='text' size=30 required> </td>
</tr>

<tr>
<th>Data de Nascimento:</th>
<td> <input name='morada' type='text' size=30 required> </td>
</tr>

<tr>
<th>Morada:</th>
<td> <input name='morada' type='text' size=30 required> </td>
</tr>

<tr>
<th>Código-Postal:</th>
<td> <input name='morada' type='text' size=30 required> </td>
</tr>

<tr>
<th>País:</th>
<td> <input name='morada' type='text' size=30 required> </td>
</tr>

<tr>
<th>Quantidade de bilhetes:</th>
<td> <input name='quantidade' type='number' onchange='calc_total()' size=3 min=0 max=7> <!-- Correção aqui -->
 </td>
</tr>

<tr>
<th>Total:</th>
<td> <input name='total' type='number' size=3 min=0 max=7> </td>
</tr>

