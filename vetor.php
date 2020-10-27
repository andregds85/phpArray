<?php 

include("conecta.php");
$cmd = "select * from garagem"."";


$produtos = mysqli_query($con,$cmd);
     /* criando o Vetor Vazio */
/* -> */  
        $vertorid[] = array(); 
        $vetormodelo[] = array();
        $vetorano[] = array();

while ($produto = mysqli_fetch_array($produtos)) { 
    
       $produto['id_garagem']." - ";
       $produto['modelo']." - "; 
       $produto['ano']." - "; 

       $vertorid[]=$produto['id_garagem'];
       $vetormodelo[]=$produto['modelo'];
       $vetorano[]=$produto['ano'];     
}
       /* apresentado igual a echo */
       var_dump($vertorid);     
       var_dump($vetormodelo);
       var_dump($vetorano);
  

?>