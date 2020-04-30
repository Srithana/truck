<?php
include_once 'dbconnect.php';

session_start();
    $sql="SELECT * FROM order";
                    $result =$conn->query($sql);

                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){ ?>

                            <tr>
                                <td><?php echo $row['no']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['user_name']; ?></td>
                                <td><?php echo $row['type']; ?></td>
                                <td><?php echo $row['number_n']; ?></td>
                                <td><?php echo $row['date_o']; ?></td>
                                <td><?php echo $row['date_s']; ?></td>
                                <td><?php echo $row['place']; ?></td>
                            </tr>
                    <?php    
                        }
                    }else{
                        echo "0 row";
                    }
                    $conn->close();
                    ?>

?>