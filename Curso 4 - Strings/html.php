<?php
$nome = 'Hugo" /> <script>alert("teste");</script>'


?>



<input type="text" name="<?php echo $nome;?>"/>
<input type="text" name="<?php echo addslashes($nome);?>"/> 
<input type="text" name="<?php echo htmlentities($nome);?>"/> <!-- Estou escapando a saída -->
<input type="text" name="<?php echo htmlspecialchars($nome);?>"/> 

<!-- Preciso aprender a limpar a entrada!!!! -->




