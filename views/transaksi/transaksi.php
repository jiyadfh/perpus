
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel Transaksi</h1>                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Data Transaksi
                            <a href="beranda.php?page=transaksi&aksi=add">
                                <button class= "btn btn-dark">Tambah data</button>
                                </a>                             
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                          
                                            <th>Tanggal transaksi</th>
                                            <th>nama anggota</th>
                                            <th>nama pegawai</th>
                                            <th>nama buku</th>
                                            <th>Quantity</th>
                                            <th>Jenis transaksi</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $sql = "SELECT trs.*,ag.nama_anggota,pg.nama_pegawai,bk.nama_buku FROM tabel_transaksi trs left join tabel_anggota ag on trs.id_anggota = ag.id_anggota left join tabel_pegawai pg on trs.id_pegawai = pg.id_pegawai left join tabel_buku bk on trs.id_buku=bk.id_buku";
                                            $show = $db->query($sql);
                                            foreach ($show as $tr):                                     
                                       ?>

                                       
                                        
                                        <tr>
                                            <td><?php echo $tr["tanggal_transaksi"]?></td>
                                            <td><?php echo $tr["nama_anggota"]?></td>
                                            <td><?php echo $tr["nama_pegawai"]?></td>
                                            <td><?php echo $tr["nama_buku"]?></td>
                                            <td><?php echo $tr["quantity"]?></td>
                                            <td><?php echo $tr["jenis_transaksi"]?></td>
                                            <td>
                                <a href="beranda.php?page=transaksi&aksi=edit&id=<?php echo $tr['id_transaksi']?>"
                                    class="btn btn-dark btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="model/transaksi/prosesdeletetransaksi.php?id=<?php echo $tr['id_transaksi']?>"
                                    class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                                           
                                        <?php endforeach ; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>