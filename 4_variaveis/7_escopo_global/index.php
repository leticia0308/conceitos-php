<?php

  $teste = "asd";

  echo "$teste global 1 <br>";

  if(5 > 2) {

    $teste = "dsa";

    echo "$teste if <br>";

  }

  echo "$teste global 2 <br>";

  function funcao() {

    $teste = "xsxs";

    echo "$teste local <br>";

  }

  funcao();

  function testandoGlobal() {

    global $teste;

    $teste = 2;

    echo "$teste global função <br>";

  }

  testandoGlobal(); // chamando escopo local para uma função do glocal.

  echo "$teste global 3 <br>"; // Mudo o valor da variavel no escopo global, se eu altero no escopo local,acessando pela instrução global