<?php

require('controlador/conexionBD/conexionBD.php');


                      $url = 'https://jsonplaceholder.typicode.com/posts/';
                      
                      $curl = curl_init($url);

                      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                      $response = curl_exec($curl);

                      if ($response === false) {
                          $error = curl_error($curl);
                          echo "Error en la solicitud: $error";
                      } else {
                          // Procesar la respuesta
                          $decoded_response = json_decode($response, true);
                          foreach ($decoded_response as $key => $value) {
                            
                            $idregistro = $value['id'];

                            $sql = "SELECT id_registro, dato_uno, dato_dos, estado  FROM datos_api WHERE id_registro = '$idregistro'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                //"id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>"
                              while($row = $result->fetch_assoc()) {
                                if($row['estado'] == '1'){
                                echo "<tr>";
                                echo "<td>".$row['id_registro']."</td>";
                                echo "<td>".$row['dato_uno']."</td>";
                                echo "<td>".$row['dato_dos']."</td>";
                                echo "<td><i style='cursor: pointer;' class='fa fa-edit editar' data-id='". $row['id_registro'] ."' data-uno='". $row['dato_uno'] ."' data-dos='". $row['dato_dos'] ."' data-estado='".$row['estado']."'></i></td>";
                                echo "</tr>";
                                }
                              }
                            } else {
                                echo "<tr>";
                                echo "<td>".$value['id']."</td>";
                                echo "<td>".$value['title']."</td>";
                                echo "<td>".$value['body']."</td>";
                                echo "<td><i style='cursor: pointer;' class='fa fa-edit editar' data-id='". $value['id'] ."' data-uno='". $value['title'] ."' data-dos='". $value['body'] ."' data-estado='1'></i></td>";
                                echo "</tr>";
                            }


                            
                    
                          }
                          //var_dump($decoded_response);
                      }

                      // Cerrar la sesión cURL
                      curl_close($curl);


//echo json_encode($respuesta);
$conn->close();

?>