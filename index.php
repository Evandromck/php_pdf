<?php

//Carregar o Composer
require './vendor/autoload.php';

//Referenciar o namespace Dompdf
use Dompdf\Dompdf;

//Instanciar e usar a classe dompdf
$dompdf = new Dompdf();

//Instanciar o metodo loadHtml e enviar o conteudo do PDF
$dompdf->loadHtml('Teste com o Novo PDF');

//Configurar o tamanho e a orientacao do papel 
//Imprimir no formato retrato
$dompdf->setPaper('A4', 'landscape');

//Renderizar o HTML como pdf
$dompdf->render();


$dompdf->stream();

?>