<?php include "init.php";


            try{
                $result = $pdo->query("SELECT nome FROM tumulos_falecidos");                                
                foreach($result as $row){
                    echo "Nome:";
                    echo $row['nome'];   
                    echo "<br>";
                }

                //echo $result;
            }catch(PDOExcpetion $e){

                echo "ERROR ".$e->getMessage();
            }


?>