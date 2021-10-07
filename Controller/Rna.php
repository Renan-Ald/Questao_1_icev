
<?php
/*
NÃO FUNCIONA**************************************************************************************
**************************************************************************************
**************************************************************************************
**************************************************************************************

$num_duplas = 0;
$vetor = array('O', 'O', 'I', 'I');
$v = array();
$a = 1;
while($a == 1){
    for ($i = 0; $i < count($vetor); $i++) {
        switch ($vetor[$i]) {
            case 'O':
                echo "Lido do vetor: ", $vetor[$i] . "<br>";
                // echo $vetor[$i + 1] . "<br>";
                if($i+1 == count($vetor)){

                    break;
                }
                else{
                    if($vetor[$i + 1] == 'I') {
                        $matriz[$j] = array_slice($vetor, $i+2);
                        $num_duplas+=1;
                        echo "----------" . "<br>";
                        // foreach ($matriz[$j] as $value) {
                        //     echo $value . "<br>" . "<br>";
                        // } 
                        $vetor[$i] = $matriz[$j];
                        echo "----------" . "<br>";
                        // foreach ($vetor[$i] as $value) {
                        //     echo $value . "<br>" . "<br>";
                        // } 
                        $j++;
                        $i++;
                        break;
                    }
                    else{
                        // $v1 = array_slice($vetor, $i);
                        // foreach ($v1 as $value) {
                        //     echo "Vetor vetor - ";
                        //     echo $value;
                        //     echo "<br>";
                        // }
                            
                        $v = array_slice($vetor, $i+1);
                        // foreach ($vetor as $value) {
                        //     echo "Vetor vetor - ";
                        //     echo $value;
                        //     echo "<br>";
                        // }
                        // $venom = array_slice($vetor, $i+1);
                        foreach ($v as $value) {
                            // echo "Iteração $i" . "<br>" , "Vetor Venom - ";
                            echo $value;
                            echo "<br>";
                            echo "<br>";
                        }
                        
                        // $venom = array_merge($vetor, $v);
                        // foreach ($venom as $value) {
                        //     echo "Vetor Venom - ";
                        //     echo $value;
                        //     echo "<br>";
                        // }
                        
                        break;
                    }
                }
            case 'I':
                echo $vetor[$i] . "<br>";
                // echo $vetor[$i + 1] . "<br>";
                if($i+1 == count($vetor)){
                    $v_novo = array_merge($vetor, $v);
                    $vetor = $v_novo;
                    echo "entrou aqui";
                    foreach ($v_novo as $value) {
                        // echo "Iteração $i" . "<br>" , "Vetor Venom - ";
                        // echo $value;
                        echo "<br>";
                        echo "<br>";
                    }
                    $i = 0;
                    break;
                }
                else{
                    if($vetor[$i + 1] == 'O') {
                        $matriz[$j] = array_slice($vetor, $i+2);
                        $num_duplas+=1;
                        echo "----------" . "<br>";
                        // foreach ($matriz[$j] as $value) {
                        //     echo $value . "<br>" . "<br>";
                        // } 
                        $vetor[$i] = $matriz[$j];
                        echo "----------" . "<br>";
                        // foreach ($vetor[$i] as $value) {
                        //     echo $value . "<br>" . "<br>";
                        // } 
                        $j++;
                        $i++;
                        break;
                    }
                    else{
                        $v = array_slice($vetor, $i+1);
                        foreach ($v as $value) {
                            // echo "Iteração $i" . "<br>" , "Vetor Venom - ";
                            echo $value;
                            echo "<br>";
                            echo "<br>";
                        }
                        break;
                    }
                }
            case 'M':
                echo $vetor[$i] . "<br>";
                // echo $vetor[$i + 1] . "<br>";
                if($i+1 == count($vetor)){
                    echo "ZAP" . "<br>" . "<br>";
                    break;
                }
                else{
                    if($vetor[$i + 1] == 'N') {
                        $matriz[$j] = array_slice($vetor, $i+2);
                        $num_duplas+=1;
                        echo "----------" . "<br>";
                        // foreach ($matriz[$j] as $value) {
                        //     echo $value . "<br>" . "<br>";
                        // } 
                        $vetor[$i] = $matriz[$j];
                        echo "----------" . "<br>";
                        // foreach ($vetor[$i] as $value) {
                        //     echo $value . "<br>" . "<br>";
                        // } 
                        $j++;
                        break;
                    }
                    else{
                        $venom = $vetor;
                        // if($i == count($vetor))
                        break;
                    }
                }
            case 'N':
                echo $vetor[$i] . "<br>";
                // echo $vetor[$i + 1] . "<br>";
                if($i+1 == count($vetor)){
                    break;
                }
                else{
                    if($vetor[$i + 1] == 'M') {
                        $matriz[$j] = array_slice($vetor, $i+2);
                        $num_duplas+=1;
                        echo "----------" . "<br>";
                        // foreach ($matriz[$j] as $value) {
                        //     echo $value . "<br>" . "<br>";
                        // } 
                        $vetor[$i] = $matriz[$j];
                        echo "----------" . "<br>";
                        // foreach ($vetor[$i] as $value) {
                        //     echo $value . "<br>" . "<br>";
                        // } 
                        $j++;
                        break;
                    }
                    else{
                        $venom = $vetor;
                        // if($i == count($vetor))
                        break;
                    }
                }
            default: 
                echo "ZAP" . "<br>" . "<br>";
                break;
        }

        if(count($v) != 0 && count($vetor) == 0){
            $vetor = $v;
        }
        else{
            $a = 0;
        }
    }
    
    echo $num_duplas . "<br>";
}
*/
// for ($k = 0; $k < $j; $k++) {
//     $vetor = array_merge($matriz[$k], $matriz[$k + 1]);
// }
// $j = 0;
// function verificacao()
// {
//     $str_fdc = implode($vetor);
//     if (count($vetor) == 0) {
//         return true;
//     } else {
//         return false;
//     }

    //    if (str_contains('OI', $str_fdc)); {
    //    }
    //    if(str_contains('IO',$str_fdc));{
    //    }
    //         if (str_contains('MN', $str_fdc)); {
    //         }

    //         if (str_contains('NM', $str_fdc));{
    //         }

    //     return (true);
// }
