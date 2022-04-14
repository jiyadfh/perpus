<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Buku</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Buku
                <a href="beranda.php?page=buku&aksi=add">
                    <button class="btn btn-dark">Tambah data</button>
                </a> </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>Isbn</th>
                            <th>Judul buku</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Thn Terbit</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                            $sql = "select * from tabel_buku";
                                            $show = $db->query($sql);
                                            foreach ($show as $agt):                                     
                                       ?>



                        <tr>
                            <td><?php echo $agt["isbn"]?></td>
                            <td><?php echo $agt["nama_buku"]?></td>
                            <td><?php echo $agt["penulis"]?></td>
                            <td><?php echo $agt["penerbit"]?></td>
                            <td><?php echo $agt["tahun_terbit"]?></td>
                            <td>
                                <a href="beranda.php?page=buku&aksi=edit&id=<?php echo $agt['id_buku']?>"
                                    class="btn btn-dark btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="model/buku/prosesdeletebuku.php?id=<?php echo $agt['id_buku']?>"
                                    class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                            </tr>

                            <?php endforeach ; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>