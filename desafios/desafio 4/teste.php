<pre>
<?php 
    $url = '{"@odata.context":"https://was-p.bcnet.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata$metadata#_CotacaoDolarPeriodo(cotacaoCompra,dataHoraCotacao)","value":[{"cotacaoCompra":5.03770,"dataHoraCotacao":"2026-10-22 13:12:09.300403"}]}' ;


    $dados = json_decode(file_get_contents($url), true);

    //var_dump($dados);

    $cotaçao = $dados['value'][0]["cotacaocompra"];
    echo "a cotação foi $cotaçao";

    //nao foi possivel rodar por motivos tecnicos...
?>
</pre>