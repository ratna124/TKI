<form method="post" action="TKIFormDaftarProses.php">
                                    <table>
                                        <tr>			
                                            <td>NIK</td>
                                            <td>
                                                <input type="hidden" name="id_dft" value="<?php echo $d['id_dft']; ?>">
                                                <input type="text" name="nik">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td><input type="text" name="nama_lengkap"></td>
                                        </tr>
                                        <tr>
                                            <td>Negara Tujuan</td>
                                            <td><input type="text" name="id_negara"></td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Lahir</td>
                                            <td><input type="text" name="tempat_lahir"></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td><input type="text" name="tanggal_lahir"></td>
                                        </tr>
                                        <tr>
                                            <td>Umur</td>
                                            <td><input type="text" name="umur"></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Lengkap</td>
                                            <td><input type="text" name="alamat_lengkap"></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td><input type="text" name="jenis_kelamin"></td>
                                        </tr>
                                        <tr>
                                            <td>TB</td>
                                            <td><input type="text" name="tb"></td>
                                        </tr>
                                        <tr>
                                            <td>BB</td>
                                            <td><input type="text" name="bb"></td>
                                        </tr>
                                        <tr>
                                            <td>Pendidikan Terakhir</td>
                                            <td><input type="text" name="pendidikan_terakhir"></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td><input type="text" name="status"></td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td><input type="text" name="agama"></td>
                                        </tr>
                                        <tr>
                                            <td>Pengalaman Kerja</td>
                                            <td><input type="text" name="pengalaman_kerja"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="submit" value="SIMPAN"></td>
                                            <td><input type="submit" href="indextki.php" value="Cancel"></td>
                                        </tr>		
                                    </table>
                                </form>