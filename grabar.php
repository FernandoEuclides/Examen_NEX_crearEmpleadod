<?php>
//conectar
$conectar= @mysql_connect('localhost','root','admin')
//valida conexion
if (!$conectar){
echo"no conecta con servidor";
    }
else{
    $base=mysql_select_db('prueba');
    if (!base){
        echo "no encuentra la base de datos";
    }
}
// tomar variables de formulario
$nombre=$_post['nombre'];
$email=$_post['email'];
$descripcion=$_post['descripcion'];

//crea sentencia sql
$sql="INSERT INTO tabla values("$nombre","$email","$descripcion")";

//ejecutar orden
$ejecutar=mysql_query($sql);
// validar ejecucion
if(!$ejecutar){
    echo"hubo algun error";

} else{
    echo"datos grabados<br><a href='index.html'>volver</a>";
    
}
?>

