<!DOCTYPE html>
<html lang="es">
<head>
 <title>Calcular CUM</title>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
    <h1>
        <!-- Guardando los números ingresados en variables de PHP -->
        <?php $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : ""; ?>
        <?php $carnet = isset($_POST['carnet']) ? $_POST['carnet']: ""; ?>
        <?php $num1 = isset($_POST['nota1']) ? $_POST['nota1'] : 0; ?>
        <?php $num2 = isset($_POST['nota2']) ? $_POST['nota2'] : 0; ?> 
        <?php $num3 = isset($_POST['nota3']) ? $_POST['nota3'] : 0; ?>
        <?php $num4 = isset($_POST['nota4']) ? $_POST['nota4'] : 0; ?>
        <?php $num5 = isset($_POST['nota5']) ? $_POST['nota5'] : 0; ?>

    </h1>
    </header>
    <section>
    <article>
    <p class="msg" >
    <?php
        $cum = ($num1 + $num2 + $num3 + $num4 + $num5)/5;
        printf("<p> Alumno: %s", $nombre);
        printf("<p> Carnet: %s", $carnet);
        printf("<p> CUM: %d", $cum);
        
        if($cum>=7.5)
        {
            printf("<p> El maximo de unidades valorativas que puede cursar es 32");
        }
        elseif($cum<7.5 && $cum>=7.0)
        {
            printf("<p> El maximo de unidades valorativas que puede cursar es 24");
        }
        elseif($cum<7.0 && $cum >=6.0)
        {
            printf("<p> El maximo de unidades valorativas que puede cursar es 16");
        }
    ?>
    </p>
    <article>
    </section>
</body>
</html>
