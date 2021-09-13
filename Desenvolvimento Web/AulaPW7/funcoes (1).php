<?php
/**
 * função que separa os elementos de uma string usando um separador
 * $separador - caractere ou string
 * $elementos - string
 * return array (vetor)
 */
function separarElementos($separador='', $elementos='') {
    $vetor = explode($separador, $elementos);
    return $vetor;
}

/**
 * função que imprime um vetor
 * $vetor - vetor/matriz/obj
 */
function imprimirVetor($vetor) {
  /* for ($i = 0; $i < count($vetor); $i++) {
        echo $vetor[$i] . '<br>';
    } */
    
    foreach ($vetor as $idx => $v) {
        echo "$idx => $v<br>";
    }
    
  /*  $conte = 0;
    while ($conte < count($vetor)) {
        echo $vetor[$conte] . '<br>';
        $conte++;
    }
  */  
}

/** 
 * função que imprime o conteúdo de uma variável
 * $var - variável ou vetor
 * */ 
function vardump($var) {
    echo '<pre>';
    //print_r($vetor); // exibição simples
    var_dump($var); // exibição complexa
    echo '</pre>';
}

/**
 * função para juntar/concatenar elementos
 * $separador - char ou string
 * $vetor - array ou objeto
 * return array ou objeto
 */
function juntarElementos($separador, $vetor) {
    $elementos = implode($separador, $vetor);
    return $elementos;
}

/**
 * função que conta caracteres ou elementos do vetor
 * $string - string
 * $acao - string - cc: contar caracteres / ce: contar elementos
 * return int
 */
function contarCaracteres($string, $acao = 'cc') {
    if ($acao == 'cc')
        return strlen($string);
    else if ($acao == 'ce')
        return count($string);
}

/**
 * function formataNumero
 */
function formataNumero($numero='', $padrao='bd', $simbolo='R$', $decimais=2) {
    if ($padrao=='bd') {
        return $simbolo . number_format($numero, $decimais, ',', '.');       
    } else {
        $retorno = str_replace('R$', '', $numero);
        $retorno = str_replace('.', '', $retorno);
        $retorno = str_replace(',', '.', $retorno);
        return $retorno;
    }
}

function maiusculaMinuscula($string='', $conv='min') {
    if ($conv == 'min') {
        return strtolower($string);
    } else {
        return strtoupper($string);
    }
}

function dataAtual() {
    date_default_timezone_set('America/Sao_Paulo');
    $meses = ['', 'Janeiro', 'Fevereiro', 'Março', 'Abril',
                  'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro',
                  'Novembro', 'Dezembro'];
    $mes = $meses[(int)date('m')];
    $dia = date('d');
    $ano = date('Y');
    $hora = date('H:i:s');
    return "$dia de $mes de $ano - $hora<br>";
}
