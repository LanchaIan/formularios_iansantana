<html>
    <body>
    <?php include "manejando_formularios.php";
        echo "Tu materia preferida es ";
        echo $_POST["materia"];
        echo ", tu deporte preferido es el ";
        echo $_POST["deporte"];
        $lugares = (implode(", ", $_POST["lugares"]));
        foreach ($_POST["lugares"] as $lugar) {
            echo " y te gusta la $lugar";
            };
    ?>
    </body>
</html>
