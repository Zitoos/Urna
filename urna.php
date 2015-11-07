<!DOCTYPE html>

<?php
$digito = filter_input(INPUT_GET,'digito');
if(($digito === '10')||($digito === '24')||($digito === '45')){
$arquivo = "contador.txt";
$handle = fopen ($arquivo, 'r+');
$data = fread($handle, filesize($arquivo));
$total = $digito + 1;

$salva = fwrite($handle, $contador);
fclose($handle);
} 

?>


<head>
	<title>Jance</title>
	</head>
	
	<body style="border: 1px solid black; height:700px; width:1600px">
	
	<form action="urna.php" name="o" method="get">
	<div style="height:155px; width:300px; position:relative; top:150px; margin-left:35px"/>
	<input type="text" name="Input" readonly="readonly" style="height:100px; width:299px; border: solid black 2px; font-size:42px; text-align:center">
		
	 <div id="buttons" style="border: 1px solid; height:300px; width:600px; position:relative; top:-50px; margin-left:700px">
		<table>
		
		

		 <input type="button" name="button1" value="1" onclick="o.Input.value += '1'" style="width:33.3%; height:20.0%" />
		 <input type="button" name="button2" value="2" onclick="o.Input.value += '2'" style="width:33.3%; height:20.0%">
		 <input type="button" name="button3" value="3" onclick="o.Input.value += '3'" style="width:33.3%; height:20.0%">
		 <input type="button" name="button4" value="4" onclick="o.Input.value += '4'" style="width:33.3%; height:20.0%">
		 <input type="button" name="button5" value="5" onclick="o.Input.value += '5'" style="width:33.3%; height:20.0%">
		 <input type="button" name="button6" value="6" onclick="o.Input.value += '6'" style="width:33.3%; height:20.0%">
		 <input type="button" name="button7" value="7" onclick="o.Input.value += '7'" style="width:33.3%; height:20.0%">
		 <input type="button" name="button8" value="8" onclick="o.Input.value += '8'" style="width:33.3%; height:20.0%">
		 <input type="button" name="button9" value="9" onclick="o.Input.value += '9'" style="width:33.3%; height:20.0%">
		 <input type="button" name="button0" value="0" onclick="o.Input.value += '0'" style="width:33.3%; height:20.0%; position:relative; left:33.3%;top">
		 <input type="submit" name="branco"  value="BRANCO" onClick="o.Input.value += 'Voto Branco'" style="width:33.3%; height:20%; position:relative; left:-200px; top:59px; background-color:white">
		 <input type="reset" name="corrige"  value="CORRIGE" style="width:33.3%; height:20%; position:relative; left:-200px; top:59px; background-color:#FF3300">
		 <input type="submit" name="confirmar"  value="CONFIRMA" style="width:33.3%; height:20%; position:relative; left:399.1px; top:-1px ; background-color:green" >
		 
		 
		 
		 </table>
		 </div>
		   <table border="2">
                    <tr>
                        <th>Branco - Branco</th>
                        <th>10 - Manolo</th>
                        <th>24 - Leandro</th>
                        <th>666 - Dilma</th>
                    </tr>
                    <tr>
				</div>
					</html>
					
				
