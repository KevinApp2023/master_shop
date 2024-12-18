<?php 
include("../../../config/conex.php"); 
$buscar_producto = $_POST['buscar_producto'];

$where = "WHERE 1=1";

if (!empty($buscar_producto)) {
    $buscar_producto = $conex->real_escape_string($buscar_producto); // Para prevenir inyecciones SQL
    $where .= " AND (ref LIKE '%$buscar_producto%' OR producto LIKE '%$buscar_producto%')";
}



$sql = "SELECT * FROM products $where";
$resultado = $conex->query($sql);
if ($resultado->num_rows > 0) {
  while ($fila = $resultado->fetch_assoc()) { 
    
    if($fila['estado'] != 1) {
        $estado = '<i class="bi bi-circle-fill text-secondary"></i> ';
    } else {
        $estado = [];
        
        $estado[] .= '<i class="bi bi-circle-fill text-success"></i> '; 
        if($fila['popular'] == 1) {
            $estado[] .= '<i class="bi bi-circle-fill text-primary"></i> '; 
        } else {
            $estado[] .= '<i class="bi bi-circle-fill text-secondary"></i> ';
        }
    
        if($fila['oferta'] == 1) {
            $valor_producto = '<span class="card-val fst-italic text-decoration-line-through m-0 text-danger" > $' . $fila['valor_producto'] . '</span><br> $' .  $fila['valor_producto_oferta']; 
            $estado[] .= '<i class="bi bi-circle-fill text-danger"></i> '; 
        } else {
            $valor_producto = '$' . $fila['valor_producto'];
        }
    
        if($fila['oferta_dia'] == 1) {
            $valor_producto = '<span class="card-val fst-italic text-decoration-line-through m-0 text-danger" > $' . $fila['valor_producto'] . '</span><br> $' .  $fila['valor_producto_oferta']; 
            $estado[] .= '<i class="bi bi-circle-fill text-warning"></i> '; 
        } else {
            $valor_producto = '$' . $fila['valor_producto'];
        }
    
    
    
        if (!empty($fila['fecha_creacion'])) {
            $estado[] .= '<span class="text-muted">Creado el: ' . date("d/m/Y", strtotime($fila['fecha_creacion'])) . '</span>';
        }
    }
    

   
    
    ?>
    <tr>
  <td style="margin:0px;" class="text-center">
      <section class=" rounded-circle" style="   justify-content: center;
            align-items: center;
            width: 30px;
            height:30px;
      overflow: hidden; 
      position: relative;
      margin-bottom:0px;
      margin-top:0px;
      margin-right: 0px;">
                            <img class="" src="<?php echo $fila['img_producto']?>" alt="" style="  max-width: 100%;
        max-height: auto%;
      object-fit: contain;
     
 ">
 </section>
 </td>
    <td style="margin:0px; padding:3px;"><?php echo $fila['ref']; ?></td>
    <td style="margin:0px; padding:3px;"><?php echo $fila['producto']; ?></td>
    <td style="margin:0px; padding:3px;"><?php echo $valor_producto; ?></td>


    <td style="margin:0px; padding:3px;" class="text-center">
        <p>
        <?php 
if (is_array($estado) && count($estado) > 0) {
    echo implode(' ', $estado);  
} else {
    echo $estado; 
}
 ?></p></td>

<th class="text-center"><a  style="margin:0px; padding:1px; font-size: 25px;" onclick="editar('<?php echo $fila['id']; ?>')" ><i class="bi bi-pencil-square"></i></a>
      <a  style="margin:0px; padding:1px; font-size: 25px;" onclick="eliminar_producto('<?php echo $fila['id']; ?>')"><i class="bi bi-trash"></i></a></th>
      
      
      




    
    </tr>
    <?php
  }
}
?>

