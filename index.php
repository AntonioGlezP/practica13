<!DOCTYPE html>
<html>
<head>
<title>Calculadora</title>
<style type="text/css">
.auto-style1{
	margin-left: 116px:
	margin-top;	
}
.auto-style2{
	margin-left: 127px;
	}
.auto-style3{
	margin-left: 127px;
	}
</style>	
</head>
<body>
<div style="background-color:#812B4F; margin-left:500px; width: 400px">
  <form action="resultado.php" method="post">
    <select name="operador" class="auto-style1" style="width: 169px">
	<option value="suma">Suma</option>
	<option value="resta">Resta</option>
	<option value="divicion">Divicion</option>
	<option value="multiplicacion">Multiplicacion</option>
	<select><br/>
	<p style="color:white; text-aling:center"> Valor1:</p>
	<input type="text"  name="valor1" class="auto-style2"><br>
	<p style="color:white; text-aling:center"> Valor2:</p>
	<input type="text"  name="valor2" class="auto-style2"><br>
	<br>
    <input type="submit"  value="Calcular" class="auto-style3"><br>
	</form>
	</div>
	</body>
</html>