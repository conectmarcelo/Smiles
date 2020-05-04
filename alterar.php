<?php
      if(  ! isset($_GET['id'])   )
      {
          header('location:listar.php');
          exit;
      }

      $id = $_GET['id'];

      include('abre.php');
      include('menu.php');

      include('conexao.php');


		$sql = "SELECT * FROM clientes WHERE id = $id";

      $resultado = mysqli_query($conexao,$sql)
                         or die("<h3>$sql</h3>" . mysqli_error($conexao) );
           
      $linhas = mysqli_num_rows($resultado);
      
       if($linhas == 0){

          echo "<script>alert('Registro não localizado')</script>";
          echo "<script>self.location='listar.php'</script>";
       }
	   
	  $linhas = mysqli_fetch_array($resultado, MYSQLI_NUM);
		   
		 
		   $nome   =  $linhas[1];
           $rg  =  $linhas[2];
           $cpf  =  $linhas[3];
           $endereco  = $linhas[4];
           $numero =  $linhas[5];
           $bairro  =  $linhas[6];
           $cidade  = $linhas[7];
           $cep  =  $linhas[8];
           $telefone = $linhas[9];
		   $dt_evento  =  $linhas[10];
           $tp_evento  =  $linhas[11];
           $inicio  =  $linhas[12];
           $fim  =  $linhas[13];
           $valor =  $linhas[14];
           $sinal =  $linhas[15];
		   $data_sinal =  $linhas[16];
		   
		
	
       

           
?>

<form action="alterar2.php" method="POST" >
 
<fieldset><legend><h3>DADOS CADASTRAIS:</h3></legend> 

   id:<input type="text"name="id" 
   value="<?php echo $id ?>" size="10">

   NOME:<input type="text" name="nome"
   value="<?php echo $nome ?>" size="40">

   RG:<input type="text" name="rg"
   value="<?php echo $rg ?>"size="15">

   CPF:<input type="text" name="cpf"
   value="<?php echo $cpf ?>"size="15">

</fieldset>

<BR>


<BR>

<fieldset><legend><h3>ENDEREÇO:</h3></legend> 

    ENDEREÇO:<input type="text" name="endereco"
    value="<?php echo $endereco ?>"size="40">
    
    NUMERO:<input type="text" name="numero"
    value="<?php echo $numero ?>"size="4">

    BAIRRO:<input type="text" name="bairro"
    value="<?php echo $bairro ?>" size="20"></BR>
    
    CIDADE:<input type="text" name="cidade"
    value="<?php echo $cidade ?>"size="20">
    
    CEP:<input type="text" name="cep"
    value="<?php echo $cep ?>"size="20">
	
	TELEFONE:<input type="text" name="telefone"
    value="<?php echo $telefone ?>"size="20">

</fieldset>

<BR>
<hr align="tr">
<BR>


<fieldset><legend><h3>EVENTO:</h3></legend> 
    DATA EVENTO:<input type="text" name="dt_evento"
    value="<?php echo date('d/m/Y', strtotime($dt_evento));?>"size="11">

    TIPO EVENTO:<input name="tipoevento" size="20"
	 value="<?php echo $tp_evento?>"size="11">


    INICIO:<input type="time" name="inicio"
    value="<?php echo $inicio ?> "size="5">
    
	
	
    FIM:<input type="time" name="fim" value="
    <?php echo $fim ?>"size="5">

<p></p>
<hr align="tr">

    VALOR:<input type="money_format" name="valor"
    value="<?php echo number_format($valor,2,",",".") ?> " size="10">

    SINAL:<input type="text" name="sinal"
    value="<?php echo number_format($sinal,2,",",".") ?>  "size="10">

	DATA SINAL:<input type="TEXT" name="data_sinal"
    value="<?php echo date('d/m/Y', strtotime($data_sinal)); ?>  "size="10">

   <input type="submit" value="Alterar" style="width: 100px; height: 50px">
   

</fieldset>
</form>


<?php

    include('fecha.php');

?>
