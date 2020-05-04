<?php
   $id = $_GET['id'];


?>

<html>
<head>
<script language="Javascript">
function confirmacao(id) {
     var resposta = confirm("Deseja remover esse registro?");
 
     if (resposta == true) {
          window.location.href = "excluir.php?id=<?php echo $id ?>";
     }
}
</script>
</head>
 
<body>

<a href="javascript:func()"
onclick="confirmacao('<?php echo $id ?>')">Remover registro<?php echo $id?></a>
 
 
</body>
</html>