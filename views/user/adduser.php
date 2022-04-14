<?php
     $pegawai = "select id_pegawai , nama_pegawai from tabel_pegawai";
     $showpegawai = $db->query($pegawai);
 

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data user</h4>
                        <br>
                        <form action="model/user/prosesadduser.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>nama pegawai</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="id_pegawai" id="id_pegawai">
                                            <?php foreach ($showpegawai as $pg) : ?>
                                                <option  value="<?php echo $pg['id_pegawai']?>"><?php echo $pg['nama_pegawai']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>username</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="username" id="username">
                                    </td>
                                </tr>
                                <tr>
                                    <td>password</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="password" id="password">
                                    </td>
                                </tr>
                                <tr>
                                    <td>level</td>
                                    <td>:</td>
                                    <td><select class="form-control" name="level" id="level">
                                            <option value="admin">Admin</option>
                                            <option value="pegawai">Pegawai</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>dibuat pada</td>
                                    <td>:</td>
                                    <td><input type="date" class="form-control" name="dibuatpada" id="dibuatpada">
                                    </td>
                                </tr>
                               
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-dark" value="Simpan">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>