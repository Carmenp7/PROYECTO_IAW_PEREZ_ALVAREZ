<?php 


            if (!isset($_POST["nuevapassword"])): ?>
            <?php
            $connection2 = new mysqli("localhost", "root", "2asirtriana", "proyecto");
            $connection2->set_charset("utf8");
            
            if ($connection2->connect_errno) {
                printf("Connection failed: %s\n", $connection2->connect_error);
                exit();
            }
            
            $query2="select *  from clientes where id ='$user'";

              
                                    $result2->close();
                                    unset($obj2);
                                    unset($connection2);
                                    unset($query2);
                                //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

                              ?>


                            <?php else: ?>

                                <?php
                                //CREATING THE CONNECTION
                                $connection1 = new mysqli($db_host, $db_user, $db_password, $db_name);
                                $connection1->set_charset("utf8");

                                //TESTING IF THE CONNECTION WAS RIGHT
                                if ($connection1->connect_errno) {
                                    printf("Connection failed: %s\n", $connection->connect_error);
                                    exit();
                                }
                      
                                if ($pass == $_POST['password']) {

                                //Si no introduces una nueva contraseña entonces , te quedas con la antigua
                                    $query1 = "UPDATE usuarios set nombre = '$_POST[name]',apellido = '$_POST[lastname]',edad = $_POST[edad],correo_electronico = '$_POST[correo]'where id = '$user'";
                                    if ($result1 = $connection1->query($query1)) {
                                        echo "<script>location.href='./my_perfil.php';</script>";
                                        die();
                                    }
                                } else {
                                    
                                // Si introduces una nueva contraseña se te cambia
                                $_SESSION['password']= $_POST['password'];

                                    $query1 = "UPDATE usuarios set nombre = '$_POST[name]',apellido = '$_POST[lastname]',edad = $_POST[edad],correo_electronico = '$_POST[correo]',password = md5('$_POST[password]') where id = '$user'";

                                    if ($result1 = $connection1->query($query1)) {
                                        echo "<script>location.href='./my_perfil.php';</script>";
                                        die();
                                    }
                                }

                                
                                $result1->close();
                                unset($obj1);
                                unset($connection1);
                                unset($query1)
                                ?>

                            <?php endif?>
