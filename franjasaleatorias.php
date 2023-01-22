<!DOCTYPE html>
<html>
<head>
<style>
    div { position:fixed; width: 100%;height: 1%;}
    body { margin: 0; font-size=1px;}
</style>
<meta charset="UTF-8">
<title>ejercicio 9</title>
</head>
<body>
    <?php 
        // Calcular las 10 primeras franjas aleatorias
        
        for ($i=0; $i<10; $i++){
            $rojo=rand(0,255);
            $verde=rand(0,255);
            $azul=rand(0,255);
            
            $arraycolor[$i]="background-color:rgb($rojo,$verde,$azul)";
        }
        
        // Variable para llevar la posición vértical
        
        $top=0;
        
        for($i=1; $i<=10; $i++){ // Recorrer la pantalla
            
            for ($j=0; $j<10; $j++){ // Recorrer array de estilos
                echo "<div style=$arraycolor[$j];top:$top%;></div>";
                $top++; // Va incrementando la coordenada vértical
            }
        }
    
    ?>
</body>
</html>