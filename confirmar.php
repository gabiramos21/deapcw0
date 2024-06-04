$db=new sqlite3('loja.sqlite');
if ($db){
	echo "erro ...";
	exit;
}$q="Insert into encomendas values (";
$q.="'".$get['nome']."',";
$q.="'".$_get['morada']."',";
$q.=   $_get['cod'].",";
$q.=   $_get['quant'].",";
$res=$db->exec($q);
if(!$res){
	echo"erro:".$db->lastErrorMsg();
	exit;
}
$db->close();
echo "Encomenda Registada";
