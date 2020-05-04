
<?php

include ('conexao.php');

?>


<?php

     	  
	  $sql = "Select *FROM smiles.clientes";
;

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
		$contrato='<img src="imagens/lupa.jpg"alt="contrato"/>';

        
		$excluir="<a href='confirmar_exclusao.php?id=$id'>$excluir</a>";
		$contrato="<a href='recebe.php?id=$id'>$contrato</a>";
		
		$nome="<a href='alterar.php?id=$id'>$linhas[nome]</a>";
		
	
		
		
		echo
		"<table>
         <tr>
             <th>codigo</th>
			 <th>Data evento</th>
             <th>Nome do cliente</th>
			 <th>Contrato</th>
             <th>Excluir</th>
         </tr>";
		
		echo
         "<tr>
             <td>$id </td>
			 <td>".date('d/m/Y', strtotime($dt_evento))."</td>
             <td>$nome</td>
			 <td>$contrato</td>
			 <td>$excluir</td>
             
		</tr>";
		
		
		echo "</table >";
	
	
	}
	} else {
    echo "0 results";}


      
?>




