<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar llamado de atención.:. SIGCE</title>
    <link rel=icon href='../../assets/img/logo_SIgCE.png' sizes="32x32" type="image/png">
</head>
<body>
    <h1>Registar Citacion</h1>
    <form action="../../Controllers/RegistrarLlamadoDeAtencionContoller.php" method="post">
        <div>
    <div>
                        <h4>Gravedad<h4>
        <input type="radio" name="Gravedad" value="1">
            <label for="html">1</label><br>
        <input type="radio" name="Gravedad" value="2">
            <label for="html">2</label><br>
        <input type="radio" name="Gravedad" value="3">
            <label for="html">3</label><br>
  </div>
    <div>
        <label for="apellido">Articulo de Citacion</label><br>
	    <input placeholder="Ingrese el articulo que incumplio" name="Articulo" type="text" required>
    </div>
    <div>
        <label for="birthday">Fecha:</label><br>
        <input type="date" name="Fecha">
    </div>
    <div>
        <label for="apellido">Identificación aprendiz</label><br>
	    <input placeholder="Ingrese la identificación aprendiz" name="IdeAPrendiz" type="number" required>
    </div>
    <div>
        <label for="apellido">Identificación Instructor</label><br>
	    <input placeholder="Ingrese la identificación Instructor" name="IdeInstructor" type="number" required>
    </div><br>
    <div>
        <button type="submit">Enviar</button>
    </div>
</div>
    </form>
</body>
</html>