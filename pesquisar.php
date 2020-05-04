<?php

if(   isset($_POST['pesq'])    )
    {
       //foi apertado botão submit

       $pesq = $_POST['pesq'];
       $coluna = $_POST['coluna'];
    }
    else
    {
       //primeira vez

       $pesq = '';
       $coluna = '';

    }

    if($coluna == 'dt_evento')
    {
        $sel_dt_evento = 'selected="selected"';
        $sel_nome = '';
    }
    else
    {
        $sel_dt_evento = '';
        $sel_nome = 'selected="selected"';
    }



    include('abre.php');
    include('menu.php');

?>

<form action="pesquisar.php" method="POST" >

<p>
<span>Escolha a coluna:</span>

<select size="1"  name="coluna" >
   <option value="nome"   <?php echo $sel_nome   ?>   >Por Nome</option>
   <option value="dt_evento" <?php echo $sel_dt_evento   ?>    >Por Data evento</option>
</select>

</p>

<p>
<span>Pesquisar:</span>
<input type="text" name="pesq" value="<?php echo $pesq?>" maxlength="30" size="40"/>
</p>

<p>

<input type="submit" value="pesquisar" style="width: 100px; height: 50px">
<input type="button" value="limpar"style="width: 100px; height: 50px"

       onclick="self.location='pesquisar.php'"  >


</p>

</form>

<?php


    if( $pesq != '')
    {

    $pesq = trim($pesq);

    
       //pesquisar e listar registros encontrados ......

       include('conexao.php');

       $sql= "SELECT id,nome,dt_evento from clientes WHERE $coluna LIKE '%$pesq%'";

        
	
	
      $resultado = mysqli_query($conexao,$sql)
                            or die("<h3>$sql</h3>" . mysqli_error($conexao) );


      $linhas = mysqli_num_rows($resultado);

		
      if($linhas == 0)
      {
          echo '<h3>Nenhum registro foi localizado</h3>';
          include('fecha.php');
          exit;
      }
	
     
if ($resultado->num_rows > 0) {
    // output data of each row
    while($linhas = $resultado->fetch_assoc()) {
      
			$id = $linhas['id'];
			$nome = $linhas['nome'];
			$dt_evento=$linhas['dt_evento'];
          
		
		$excluir='<img src="imagens/delete.jpg"alt="exclusão"/>';
        
		$excluir="<a href='excluir.php?id=$id'>$excluir</a>";

		$nome="<a href='alterar.php?id=$id'>$linhas[nome]</a>";
		
		echo
		"<table>
         <tr>
             <th>codigo</th>
			 <th>Data evento</th>
             <th>Nome do cliente</th>
             <th>Excluir</th>
         </tr>";
		
		echo
         "<tr>
             <td>$id </td>
			 <td>".date('d/m/Y', strtotime($dt_evento))."</td>
             <td>$nome</td>
             <td>$excluir</td>
             
		</tr>";
		
		
		echo "</table >";
	
	
	}
	} else {
    echo "0 results";}
	}
	
	else{echo "Preencha o campo de busca";}

      
?>
