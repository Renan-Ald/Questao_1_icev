<html> 
    <head> 
    <title>.. RNA INPUT ..:</title> 
    <h1>RNA INPUT</h1> 
    <h2>Informe o RNA:</h2> 
    <h6>Informe a fita em maiusculo</h6>
    <form method=post name="formulario" action="Rna2.php">   
        <input type="text" name="rna">   
        <input type="submit" name="botao" value="Enviar"> 
    </form> 

    



    </head> 
    </html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // $a = $_POST['rna'];
        
        $str = $_POST['rna'];
        
       //
        // $str = "OINM";
        $flag = 0;
        $flag1 = 0;
        // $array = array('I', 'I', 'M', 'N', 'O', 'I', 'I', 'I', 'M', 'N', 'O', 'I');
        $array = str_split($str);

        $num_duplas = 0;
        $v1 = array();
        
        $tamanho__inicial = count($array);

        if(count($array) == 0){
            echo "Array vazio.";
            $flag = 1;
        }

        echo "<br>";
        echo "{Fita}";
        echo "<br>";
        foreach($array as $key => $value) {
            echo $value;
        }

        while(count($v1) >= 0){

            $tamanho__inicial = count($array);

            while(count($array) != 0){

                

                if(count($array) == 1 && count($v1) == 1){

                    $array = array_merge($v1, $array);
                    if(count($array) == count($v1)){
                        break;
                    }
                }
        
                if(count($array) == 0){
                    echo "Array vazio.";
                    $flag = 1;
                    break;
                }
                else{
                    switch($array[0]){
                        case 'O':
    
                            if(count($array) > 1 && $array[1] == 'I'){
                                $v = array_slice($array, 2);
                                $array = $v;
                                $num_duplas+=1;
                                //echo "Número de duplas: $num_duplas" . "<br>";
                            }
                            else{
                                array_push($v1, $array[0]);
                                $v = array_slice($array, 1);
                                $array = $v;
                            }
                            break;
                        case 'I':
                            // echo "Posição 0 - \n ", $array[0] . "<br>";
            
                            if(count($array) > 1 && $array[1] == 'O'){
                                $v = array_slice($array, 2);
                                $array = $v;
                                $num_duplas+=1;
                                //echo "Número de duplas: $num_duplas" . "<br>";
                            }
                            else{
                                array_push($v1, $array[0]);
                                $v = array_slice($array, 1);
                                $array = $v;
                            }
                            break;
                        case 'M':
                            if(count($array) > 1 && $array[1] == 'N'){
                                $v = array_slice($array, 2);
                                $array = $v;
                                $num_duplas+=1;
                               // echo "Número de duplas: $num_duplas" . "<br>";
                            }
                            else{
                                array_push($v1, $array[0]);
                                $v = array_slice($array, 1);
                                $array = $v;
                            }
                            break;
                        case 'N':
                            // echo "Posição 0 - \n ", $array[0] . "<br>";
            
                            if(count($array) > 1 && $array[1] == 'M'){
                                $v = array_slice($array, 2);
                                $array = $v;
                                $num_duplas+=1;
                                //echo "Número de duplas: $num_duplas" . "<br>";
                            }
                            else{
                                array_push($v1, $array[0]);
                                $v = array_slice($array, 1);
                                $array = $v;
                            }
                            break;
                    }
                
                }
            }
            foreach($array as $key => $value) {
                echo $value;
            }
            foreach($v1 as $key => $value) {
                echo $value;
            }
            echo "<br>";

            if(count($v1) == 0){
                break;
            }

            $status = true;

            foreach($v1 as $value) {
                if($v1[0] != $value) {
                    $status = false;
                    break;
                }
            }
            if($status == true){
                break;
            }

            if($tamanho__inicial == count($v1)){
                break;
            }

            if(count($array) == 0){
                $array = $v1;
                $v1 = array();
            }

        }

        echo "Número de duplas: $num_duplas" . "<br>";
    }

?>