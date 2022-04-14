
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data buku</h4>
                        <br>
                        <form action="model/buku/prosesaddbuku.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>isbn</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="isbn" id="isbn"></td>
                                </tr>
                                <tr>
                                    <td>nama_buku</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nama_buku" id="nama_buku"></td>
                                </tr>
                                <tr>
                                    <td>penulis</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="penulis" id="penulis"></td>
                                </tr>
                                <tr>
                                    <td>penerbit</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="penerbit" id="penerbit"></td>
                                </tr>
                                <tr>
                                    <td>tahun terbit</td>
                                    <td>:</td>
                                    <td><input type="date"  class="form-control" name="tahun_terbit" id="tahun_terbit"></td>
                                </tr>
                                <tr>
                                <td colspan="3">
                                        <input type="submit" class="btn btn-dark" value="simpan">
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
