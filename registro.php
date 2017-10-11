<html>
<head>
<style>
h1 {
    color: green;
    font-family: verdana;
    font-size: 300%;

}

h2 {
    color: green;
    font-family: verdana;
    font-size: 250%;

}
p  {
    color: blue;
    font-family: courier;
    font-size: 160%;
}

input[type=text], select {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 70%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    width: 80%;
    border-radius: 55px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<title>Tesi</title>
<center><h1> Estacionamiento Escolar </h1></center><br>
<center>
<img src="tesi.png" height=""></center><br><br>
</head>
<body bgcolor=#EFFBEF><center>

<form method="post" action="ejecuta4.php">
<table border=0 width="70%">
<tr>
<td><center>
<strong>Seleccione fecha de inicio</strong><br><br>
<strong>Seleccione fecha final</strong><br></center>
</td>
<td>
<input type="date" name="fechai" step="1" min="01-02-2017" max="01-09-2017" value="<?php echo date("Y-m-d");?>"><br><br>
<input type="date" name="fechaf" step="1" min="01-02-2017" max="01-09-2017" value="<?php echo date("Y-m-d");?>"><br>

   </td>
</tr>


</table><br>
<input type="submit" value="Enviar" name="submit">
</form>

</center>
</body>
</html>