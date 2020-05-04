
<?php

    include('abre.php');
    include('menu.php');

//$cor=isset($_GET['cor'])?($_GET['cor']):"";
$cor = $_GET['cor']?? "";
?>

<style>

main{
	background-color:<?php echo$cor;?>;
	}

form.color{
	positiom:fixed;top:10%;left:10%;margin-left:650px
	}

.locacao{
		float:left;
		width:280px;
		height:100px;
		positiom:fixed;top:0%;
		left:0%;margin-left:0px;
		margin-top:0px
		}

.evento{
		float:left;
		width:600px;
		height:300px;
		positiom:fixed;
		top:0%;
		left:0%;
		margin-left:0px;
		margin-top:0px
		}

</style>

<script type="text/javascript">
	$(document).ready (function  (){
	$("#cpf").mask("000.000.000-00")
	$("#cep").mask("00000-000")
	$("#telefone").mask("(13)00000-0000")
	$("#valor").mask("9.990,00",{reverse:true})
	$("#sinal").mask("9.990,00",{reverse:true})
	})

</script>



<form class="form-group" method="get" action="envia.php">

	<label for="icor">Cor:</label> 
	<input class="form-control" type="color" name="cor" id="icor" >
	<input type="submit" value="Mudar cor"style="width: 100px; height: 50px">
</form>

<form class="form-group" action="incluir2.php" method="POST"  ENCTYPE="multipart/form-data" >
  
	<fieldset><legend><h3>DADOS CADASTRAIS:</h3></legend> 

		<label for="nome">NOME:</label>
		<input class="form-control" type="text" name="nome" id="nome" maxlength="40" size="40" placeholder="Digite o nome Completo">

		<label for="rg">RG:</label>
		<input class="form-control" type="text" name="rg" size="20" id="rg" maxlength="11">

		<label for="cpf">CPF:</label>
		<input class="form-control" type="text" name="cpf" id="cpf" >
		<BR>
	</fieldset>

	</BR>

	<fieldset><legend><h3>ENDEREÇO:</h3></legend> 

		<label for="endereco">LOGRADOURO:</label>
		<input type="text" name="endereco" size="40" id="endereco" maxlength="40" placeholder="rua, avenida, travessa, etc..">

		<label for="numero">NÚMERO:</label>
		<input type="text" name="numero" size="5"id="numero" maxlength="5">

		<label for="bairro">BAIRRO:</label>
		<input type="text" name="bairro" size="20" id="bairro" maxlength="20">

		<label for="cidade">CIDADE:</label>
		<select name="cidade" size="1" id="cidade">
			<optgroup label="Litoral">
				<option selected>São Vicente</option>
				<option>Santos</option>
				<option>Cubatão</option>
				<option>Praia Grande</option>
				<option>Guarujá</option>
			</optgroup>
			<optgroup label="Capital">
				<option>São Paulo</option>	
			</optgroup>
		</select>
		
		<label for="cep">CEP:</label>	
		<input type="text" name="cep" size="10" id="cep" maxlength="9">

		<label for="telefone">TELEFONE:</label>
		<input type="text" name="telefone" size="11" id="telefone">
	</fieldset>


	</BR>


	<DIV CLASS="EVENTO">
	<fieldset><legend><h3>EVENTO:</h3></legend> 

		<label for="dt_evento">DATA EVENTO:</label>
		<input type="date" name="dt_evento" id="dt_evento">

		<label for="tp_evento">TIPO EVENTO:</label>            
		<select name="tp_evento" size="1" id="tp_evento">
		   <option>FESTA INFANTIL</option>
		   <option>ADULTO</option>
		   <option>CASAMENTO</option>
		   <option>15 ANOS</option>
		   <option>CONFRATERNIZAÇÃO</option>
			<option>CHÁ DE BEBÊ</option>
		 </select>
		</BR>

		<label for="inicio">INICIO:</label>
		<select name="inicio" size="1" id="inicio">
		   <option>SELECIONE INICIO</option>
		   <option>12:00</option>
		   <option>13:00</option>
		   <option>14:00</option>
		   <option>15:00</option>
		   <option>16:00</option>
		   <option>17:00</option>
		   <option>18:00</option>
		   <option>19:00</option>
		   <option>20:00</option>
		   <option>21:00</option>
		   <option>22:00</option>
		   <option>23:00</option>
		   <option>24:00</option>
		</select>

		<label for="fim">FIM:</label>
		<select name="fim" size="1" id="fim">
		   <option>SELECIONE FIM</option>
		   <option>12:00</option>
		   <option>13:00</option>
		   <option>14:00</option>
		   <option>15:00</option>
		   <option>16:00</option>
		   <option>17:00</option>
		   <option>18:00</option>
		   <option>19:00</option>
		   <option>20:00</option>
		   <option>21:00</option>
		   <option>22:00</option>
		   <option>23:00</option>
		   <option>24:00</option>

		</select>

		</BR>

		<label for="valor">VALOR:</label>
		<input type="text" name="valor" size="10"  id="valor" placeholder="9.999,99">

		<label for="sinal">SINAL:</label>
		<input type="text" name="sinal" size="10" placeholder="9.999,99" id="sinal">

		<label for="data_sinal">DATA:</label>
		<input type="date" name="data_sinal" size="10" id="data_sinal">

		<textarea name="obs" id="obs" cols="75" rows="3">OBSERVAÇÃO:</textarea><P>

	</fieldset>
	</DIV>

	<DIV CLASS="locacao">
	<fieldset><legend><h3>LOCAÇÃO:</h3></legend>
		Salão:<input type="checkbox" name="opc" >
		Decoração:<input type="checkbox" name="opc" >
		Toalhas:<input type="checkbox" name="opc" >
		brinquedos:<input type="checkbox" name="opc" >
		Algodão doce:<input type="checkbox" name="opc" >
		Som:<input type="checkbox" name="opc" >
		Telão:<input type="checkbox" name="opc" >

	</fieldset>

	</DIV>

	<input type="submit" value="Incluir"style="width: 100px; height: 50px">
	<input type="Reset" value="Limpar" style="width: 100px; height: 50px">

	</BR>
	</BR>
	</BR>


</form>

</main>


</BODY>
</HTML>


<?php

    include('fecha.php');

?>
