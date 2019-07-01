<?php

include_once("conexao.php");

/*SQL para selecionar Registros da tabela*/
$stmt = $conn->prepare('SELECT * FROM tb_usuarios ORDER BY idusuario');

$stmt->execute();

/*SQL para selecionar Somar os valores  da tabela*/
$sql_soma = "SELECT sum(desvalor) FROM tb_usuarios";

$stmt_count = $conn->prepare($sql_soma);
$stmt_count->execute();
$total= $stmt_count->fetchColumn();

?>

<!--Inicio do HTML da Tabela-->

<?php include_once("header.php");?>




    <body>
        <div class="container">
        <div class="card  mb-3" style="max-width: 50rem;">


    <table class="table ">

        <thead class="">
            <tr>            
                <th >Numero</th>
                <th >Nome</th>
                <th class="text-center" >Quantidade</th>
            </tr>
        </thead>
    <tbody>

<?php

    while($results = $stmt->fetch(PDO:: FETCH_ASSOC)){
?>
  
         <tr>
             
             <td > <a href="Pagamento.php?nome=<?php echo "{$results['desnome']}"; ?>"><?php echo "{$results['idusuario']}"; ?></td>
             <td> <?php echo "{$results['desnome']}"; ?></td>
             <td class="text-center"> <?php echo "{$results['desvalor']}"; ?></td>

         </tr>

<?php
   
    }

?>

            <td> Total</td>
            <td> -</td>
            <td class="text-center"> <?php echo $total?></td>
    </tbody>
    
    </table>
 
    </div><!--fechamento da class=card-->

    

    </div><!--fechamento da class=container-->
    

 



    </div>

</body>
</html>
