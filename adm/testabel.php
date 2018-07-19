                                    <?php
                                    # FileName="connect.php"
                                    $hostname = "localhost";
                                    $database = "hcis";
                                    $username = "root";
                                    $password = "";

                                    $connect = mysql_connect($hostname, $username, $password)
                                        or die('Could not connect: ' . mysql_error());
                                        //Select The database
                                        $bool = mysql_select_db($database, $connect);
                                        if ($bool === False){
                                           print "can't find $database";
                                        }else{
                                            print "Sukses!";
                                        }

                                    $sql = 'SELECT nama_karyawan, jabatan_terakhir, departemen, no_karyawan, date_in, date_out, q1, q2, q3 FROM exit_inter';
                                            
                                    $query = mysql_query($sql, $connect);

                                    if (!$query) {
                                        die ('SQL Error: ' . mysql_error($connect));
                                    }

                                    echo '<table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                <th>Nama Karyawan</th>
                                                <th>Jabatan Terakhir</th>
                                                <th>Departemen</th>
                                                <th>no_karyawan</th>
                                                <th>date_in</th>
                                                <th>date_out</th>
                                                <th>q1</th>
                                                <th>q2</th>
                                                <th>q3</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                            
                                    while ($row = mysql_fetch_array($query))
                                    {
                                        echo '<tr>
                                                <td>'.$row['nama_karyawan'].'</td>
                                                <td>'.$row['jabatan_terakhir'].'</td>
                                                <td>'.$row['departemen'].'</td>
                                                <td>'.$row['no_karyawan'].'</td>
                                                <td>'.$row['date_in'].'</td>
                                                <td>'.$row['date_out'].'</td>
                                                <td>'.$row['q1'].'</td>
                                                <td>'.$row['q2'].'</td>
                                                <td>'.$row['q3'].'</td>
                                            </tr>';
                                    }
                                    echo '
                                        </tbody>
                                    </table>';

                                    // Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
                                    mysql_free_result($query);

                                    // Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
                                    mysql_close($connect);          
                                    ?>          
                                  