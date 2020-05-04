<?php

      if(  isset($_POST['nome'])   )
      {
           $nome   =  $_POST['nome'];
           $rg  =  $_POST['rg'];
           $cpf  =  $_POST['cpf'];
           $endereco  =  $_POST['endereco'];
           $numero =  $_POST['numero'];
           $bairro  =  $_POST['bairro'];
           $cidade  =  $_POST['cidade'];
           $cep  =  $_POST['cep'];
           $telefone = $_POST['telefone'];
		   $dt_evento  =  $_POST['dt_evento'];
           $tp_evento  =  $_POST['tp_evento'];
           $inicio  =  $_POST['inicio'];
           $fim  =  $_POST['fim'];
           $valor =  $_POST['valor'];
           $sinal =  $_POST['sinal'];
		   $data_sinal =  $_POST['data_sinal'];
		   




      }
      else
      {
            header('location:envia.php');
            exit;
      }


      

      include('abre.php');
      include('menu.php');

      include('conexao.php');


	  
	  
	$sql ="insert into smiles.clientes (nome,rg,cpf,endereco,numero,bairro,cidade,
		cep,telefone, dt_evento,tp_evento, inicio, fim, valor,sinal, data_sinal) values
		('{$nome}', {$rg}, '{$cpf}','{$endereco}',{$numero},'{$bairro}','{$cidade}',
			'{$cep}','{$telefone}','{$dt_evento}','{$tp_evento}','{$inicio}','{$fim}','{$valor}','{$sinal}','{$data_sinal}'	)";
		$resultado = mysqli_query($conexao, $sql);
		if($resultado)
		echo "<h1>Cadastrado com sucesso</h1></br>";
		else 
		echo "</h1>erro ao inserir</h1></br>";
		mysqli_close($conexao);
		
		
		
		
		
		
             
        
       ?>



