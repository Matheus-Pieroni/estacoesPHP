<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Estações em PHP! </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <h1> Verificação de estação do ano em PHP </h1>
    <form method="GET" action="/estacoesPHP">
        <legend> Manual </legend>
        <br>
        <p> Para utilizar o metodo manual </p>
        <p> Utilize este campo </p>              
        <p> Insira a data </p>
        <input type="number" name="day" placeholder="Dia"></input>
        <input type="number" name="month" placeholder="Mês"></input>
        <br>
        <br>
        <input type="submit" value="submit">
        <br>
    </form>

    <?php

    // Lógica do código: O PHP fara uma verificação em cima do mês e do dia, e então retornará o valor de SEASON (da estação do ano) em uma variavel, a qual será escrita em um swtich.
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_GET['day']) and isset($_GET['month'])) {
                //Variaveis
                $day = $_GET['day'];
                $month = $_GET['month'];
                $season = null;

            

                function checkSeason() {
                    if ($GLOBALS['day'] > 31 or $GLOBALS['month'] > 12 or $GLOBALS['day'] <= 0 or $GLOBALS['month'] <= 0) {
                        echo "<h1> O dia ou mês informado é invalido </h1>";
                    }
                    else {
                        switch ($_GET['day'] and $_GET['month']) {
                            case ($GLOBALS['day'] >= 22 and $GLOBALS['month'] > 12 or $GLOBALS['day'] <= 20 and $GLOBALS['month'] < 3):
                                return $GLOBALS['season'] = "verão";
                                //break;
                            case ($GLOBALS['day'] > 20 and $GLOBALS['month'] > 3 or $GLOBALS['day'] < 21 and $GLOBALS['month'] < 6):
                                return $GLOBALS['season'] = "outono";
                                //break;
                            case ($GLOBALS['day'] > 21 and $GLOBALS['month'] > 6 or $GLOBALS['day'] < 23 and $GLOBALS['month'] < 9):
                                return $GLOBALS['season'] = "inverno";
                                //break;
                            case ($GLOBALS['day'] >= 22 and $GLOBALS['month'] > 9 or $GLOBALS['day'] < 22 and $GLOBALS['month'] < 12):
                                return $GLOBALS['season'] = "primavera";
                                //break;
                        }
                    }
                } // Aqui acaba a função checkSeason()

            function writeResult() {
                echo "<h1> A estação atual é" .checkSeason(). "</h1>";
            }


            }
        }
/* Código antigo
if ($GLOBALS['day'] >= 22 and $GLOBALS['month'] > 12 or $GLOBALS['day'] <= 20 and $GLOBALS['month'] < 3) {
    return $GLOBALS['season'] = "verão";
}
elseif ($GLOBALS['day'] > 20 and $GLOBALS['month'] > 3 or $GLOBALS['day'] < 21 and $GLOBALS['month'] < 6) {
    return $GLOBALS['season'] = "outono";
}
elseif ($GLOBALS['day'] > 21 and $GLOBALS['month'] > 6 or $GLOBALS['day'] < 23 and $GLOBALS['month'] < 9) {
    return $GLOBALS['season'] = "inverno";
}
else {
    return $GLOBALS['season'] = "primavera";
}*/
    ?>
</body>
</html>