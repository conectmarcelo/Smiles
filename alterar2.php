<?php

      if(  isset($_POST['nome'])   )
      {
           $id   =  $_POST['id'];
           $nome   =  $_POST['nome'];
           $rg  =  $_POST['rg'];
           $cpf  =  $_POST['cpf'];
           $endereco  =  $_POST['endereco'];
           $numero =  $_POST['numero'];
           $bairro  =  $_POST['bairro'];
           $cidade  =  $_POST['cidade'];
           $cep  =  $_POST['cep'];
			$telefone = $_POST['telefone'];
		   $dt_evento =  $_POST['dt_evento'];
           $tp_evento  =  $_POST['tp_evento'];
           $inicio  =  $_POST['inicio'];
           $fim  =  $_POST['fim'];
           $valor =  $_POST['valor'];
           $sinal =  $_POST['sinal'];
			$data_sinal= $POST ['data_sinal'];
      }
      else
      {
            header('location:listar.php');
            exit;
      }
      
      include('abre.php');
      include('menu.php');

      include('conexao.php');

      $sql = "UPDATE clientes SET
	  nome='$nome',rg='$rg', cpf='$cpf', endereco='$endereco', numero='$numero',
	  bairro='$bairro', cidade='$cidade', cep='$cep', telefone='$telefone',
	  dt_evento='$dt_evento', tp_evento='$tp_evento', inicio='$inicio', fim='$fim',
		valor='$valor', sinal='$sinal', data_sinal='$data_sinal' WHERE id = $id";

      mysqli_query($conexao,$sql)
           or die("<h3>$sql</h3>" . mysqli_error($conexao) );

      if(mysqli_affected_rows($conexao) > 0){

         echo "<script>alert('Registro alterado com Sucesso')</script>";

      } else{
      
         echo "<script>alert('Registro SEM alteração')</script>";
      }

      include('fecha.php');

      echo "<script>self.location='listar.php'</script>";

?>
