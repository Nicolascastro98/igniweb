<?php

require('controlador/conexionBD/conexionBD.php');


                          // Procesar la respuesta


                            $sql = "SELECT id_registro, dato_uno, dato_dos, estado  FROM datos_api  WHERE estado = '2'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                //"id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>"
                              while($row = $result->fetch_assoc()) {
                               
                                echo "<tr>";
                                echo "<td>".$row['id_registro']."</td>";
                                echo "<td>".$row['dato_uno']."</td>";
                                echo "<td>".$row['dato_dos']."</td>";
                                echo "<td><i style='cursor: pointer;' class='fa fa-edit editar' data-id='". $row['id_registro'] ."' data-uno='". $row['dato_uno'] ."' data-dos='". $row['dato_dos'] ."' data-estado='".$row['estado']."'></i></td>";
                                echo "</tr>";
                                
                              }
                            }


                            
              


//echo json_encode($respuesta);
$conn->close();

?>