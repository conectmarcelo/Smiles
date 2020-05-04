<?php

      include('abre.php');
      include('menu.php');

      include('conexao.php');

      $sql = "SELECT nome,rg,cpf,endereco,numero,bairro,cidade,cep,dtevento,tipoevento,inicio,fim,valor,sinal FROM cadastro";

      $resultado = mysql_query($sql,$conexao)
                            or die("<h3>$sql</h3>" . mysql_error($conexao) );


      $linhas = mysql_num_rows($resultado);
      
      
      if($linhas == 0)
      {
          echo '<h3>Nenhum registro foi localizado</h3>';
          include('fecha.php');
          exit;
      }

      for($x=0 ; $x < $linhas; $x++)
      {
           $contrato = mysql_result($resultado,$x,'contrato');
           $nome = mysql_result($resultado,$x,'nome');
           $rg = mysql_result($resultado,$x,'rg');
           $cpf = mysql_result($resultado,$x,'cpf');
           $endereco = mysql_result($resultado,$x,'endereco');
           $numero = mysql_result($resultado,$x,'numero');
           $bairro= mysql_result($resultado,$x,'bairro');
           $cidade = mysql_result($resultado,$x,'cidade');
           $cep = mysql_result($resultado,$x,'cep');
           $dtevento = mysql_result($resultado,$x,'dtevento');
           $tipoevento = mysql_result($resultado,$x,'tipoevento');
           $inicio = mysql_result($resultado,$x,'inicio');
           $fim = mysql_result($resultado,$x,'fim');
           $valor= mysql_result($resultado,$x,'valor');
           $sinal = mysql_result($resultado,$x,'sinal');

           echo "<p>Código.: $contrato</p>";
           echo "<p>Nome.: $nome</p>";
           echo "<p>Email.:$rg</p>";
           echo "<hr/>";

      }

      include('fecha.php');

?>









