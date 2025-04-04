<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>real conversão</title>
</head>

<body>
    <header>
        <h1>conversão de real para dolar</h1>
    </header>

    <main>
        <?php
        //forma simples

        // $realnumber = $_GET["numero"];
        // $dolar = 5.48;
        // $valorConvertido = $realnumber / $dolar;
        // echo "o seus R$". $realnumber . " equivale a exatamente US$" . number_format($valorConvertido,2, ',','.') . " segundo a contação atual do dolar que está  á US$". number_format($dolar, 2,",",".");

        $realnumber = $_GET["numero"] ?? 0;
        //valor vindo do banco central
        $inicioHorario = date("m-d-Y", strtotime("-7 days"));
        $horarioFinal =  date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicioHorario . '\'&@dataFinalCotacao=\'' . $horarioFinal . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        //forma mais robusta de se fazer cm uso de uma biblioteca contida no php  mas que precisamos ativar uma funcionalidade  no php.ini  e ativameos o extension=intl 
        $valorConvertido = $realnumber / $cotacao;

        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "O seus " . numfmt_format_currency($padrão, $realnumber, "BRL") . " Vão equivaler à " . numfmt_format_currency($padrão, $valorConvertido, "USD");
        ?>


        <p><a href="javascript:history.go(-1)"><button>voltar</button></a></p>
    </main>

</body>

</html>