<pre>
<?php 
    $inicioHorario = date("m-d-Y", strtotime("-7 days"));
    $horarioFinal =  date("m-d-Y");
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicioHorario . '\'&@dataFinalCotacao=\'' . $horarioFinal . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    $cotacao= $dados["value"][0]["cotacaoCompra"];
    echo "a cotaçao foi de $cotacao";
?>
</pre>
