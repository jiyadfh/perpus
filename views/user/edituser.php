<?php 
    @$id = $_GET['id'];

    $sql    = "select * from tabel_user where id_user=$id";
    $show   = $db->query($sql);
    $hasil  = mysqli_fetch_assoc($show);

  
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data pegawai</h4>
                        <br>
                        <form action="model/user/prosesupdateuser.php" method="POST">
                            <input type="hidden" name="id_user" id="id_user"
                                value="<?php echo $hasil['id_user']?>">
                            <table class="table">
                                <tr>
                                    <td>id pegawai</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="id_pegawai" id="id_pegawai"
                                            value="<?php echo $hasil['id_pegawai']?>"></td>
                                </tr>
                                <tr>
                                    <td>username</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="username" id="username"
                                            value="<?php echo $hasil['username']?>"></td>
                                </tr>
                                <tr>
                                    <td>password</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="password" id="password"
                                            value="<?php echo $hasil['password']?>"></td>
                                </tr>
                                <tr>
                                    <td>level</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="level" id="level">
                                            <option value="admin">Admin</option>
                                            <option value="pegawai">Pegawai</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>dibuat pada</td>
                                    <td>:</td>
                                    <td><input type="date" class="form-control" name="dibuatpada" id="dibuatpada"
                                            value="<?php echo $hasil['dibuatpada']?>"></td>
                                </tr>
                               
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-dark" value="Update">
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