<?php
 class Matrix
{
public $rowsandcols;


public function getRowsandcols(){
    return $this->rowsandcols;
}

public function setRowsandcols($rowsandcols){
    $this->rowsandcols = $rowsandcols;
}

public function crearMatrix()
{
    $e = $this->rowsandcols;
    $s = 1;
    $t = 0;
    $suma=0;
    
foreach (range($s, $e) as $ejeY)
{
    foreach (range($s, $e) as $ejeX) 
    {
      $ejesXY[$ejeY][$ejeX] = $t++; /*rand(1, 100);*/
    }    
    
}
//Muestra la matriz en forma de tabla
//print_r($ejesXY);
echo "<table border align = 'center'>";
    for($i=1;$i<=$e;$i++)
        {
        echo "<tr>";
        for ($j=1; $j <= $e; $j++) 
           { 
            echo "<td>";  
           echo $ejesXY[$i][$j];
           $suma += $ejesXY[$i][$j];
            //print implode(', ',$ejesXY[$i][$j]);
            echo "</td>";
            }
            echo "</tr>";
        }
        echo $suma;
        echo "</table>";  

    /* Imprime diagonal principal
        for ($z=1; $z <= $e; $z++)
    {
        echo $ejesXY[$z][$z];
    } */
    //////////////////////
       /*Imprime la diagonal Secundaria
    for ($z=$e; $z>=1; $z--)
    {
        echo $ejesXY[$z][$z];
    }*/
}

}





if(isset($_POST['rowsandacols']))
{
    $cantidad = $_POST['rowsandacols'];
    
    $matrizUno = new Matrix();
    $matrizUno->setrowsandcols($cantidad);
  
    $matrizUno->crearMatrix();
  
    
   /* $mamtriz = $matrizUno->crearMatrix();
    print_r ($mamtriz);*/
}










?>