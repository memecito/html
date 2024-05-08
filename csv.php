<?php
echo "Esto empieza <br>";
//Manejo de Archivos CSV
$archivo_csv ='provincias.csv';
$i=0;
$provincias=array();

if (($gestor = fopen($archivo_csv, 'r'))!= false){
//leer el contenido del CSV
    while (($datos=fgetcsv($gestor, 1000, ','))!= false){

        //imprimir cada fila del CSV
        //echo implode(' ', $datos). "<br>";
        $provincias[]=array($datos[1],$datos[2]);
    }
    fclose($gestor);//cerrar el CSv
} else{
    //manejo error por si no se puede abrir
    echo "No se pudo abrir el archivo CSV";

}
echo $provincias[0][0]." ";
echo $provincias[0][1]."<br>";
?>
<!DOCTYPE html>
<html>
<body>


<form action="/action_page.php">
  <label for="provincia">Choose a car:</label>
  <select id="provincias" name="provincias">
    <?php for ($a=1;$a<=count($provincias);$a++){
        echo '<option value="'.$provincias[a][0].'">"'.$provincias[a][1].'</option>';
    }?>
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
  </select>
  <input type="submit">
</form>

</body>
</html>



