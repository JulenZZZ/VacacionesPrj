<html>
<head>
    <title>Vacaciones</title>
</head>
<body>
<form method="POST" action="acceso">
    EN ESTE FORMULARIO SE TENDRA QUE ESCRIBIR EL NOMBRE DEL TRABAJADOR Y EL MES EN EL QUE DESEA TENER LAS VACACIONES<br>
    Solo se podra elegir en los meses de Enero, Febrero, Marzo y Abril.<br>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input value="Nombre" name="nombre" id="nombre"><br>
    <input value="Mes" name="mes" id="mes"><br>
    <input value="Enviar" name="Enviar" type="submit"/>
</form>
</body>
</html>