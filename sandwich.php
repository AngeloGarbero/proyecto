<html>

<head>
    <title> Calorias de un sandwich</title>

</head>
<!-- doy formato al titulo -->

<body>
    <font color="black" face="arial">
        <h1 align="center"><i>Calorias de un sandwich</i></h1>

    </font>

    <?php echo 'Seleccione  los ingredientes del sandwich'; ?>
    <!-- creo un formulario con checkbox -->
    <form name="form1" method="post" action="">
        <p>
            <input type="checkbox" name="checkbox[]" value="126">
            Jamon cocido
            <br>
            <input type="checkbox" name="checkbox[]" value="136">
            Jamon crudo
            <br>
            <input type="checkbox" name="checkbox[]" value="264">
            Queso
            <br>
            <input type="checkbox" name="checkbox[]" value="15">
            Lechuga
            <br>
            <input type="checkbox" name="checkbox[]" value="23">
            Tomate
        </p>
        <p>
            <!-- creo el boton de calcular -->
            <input type="submit" name="submit" value="Calcular">
        </p>
    </form>


    <?php

    if (isset($_POST['submit'])) {
        // creo un array con los valores seleccionados 
        @$checkbox = $_POST['checkbox'];
        $suma = 0;


        //valido que se pulso alguna opcion
        if ($checkbox > 0) {
            //creo un array para sumar los valores
            foreach ($checkbox as $valor) {
                $suma += $valor;
            }
        } else {
            $checkbox = "";
        }


        //imprimo el valor
        echo "Este sandwich tiene " . $suma . " calorias.";
    } else {
        $submit = "";
    }

    ?>
</body>

</html>