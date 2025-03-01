<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-table"></i> Jurusan
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <div>
                <a href="?page=add-jurusan" class="btn btn-primary">
                    <i class="fa fa-edit"></i> Tambah Data
                </a>
            </div>
            <br>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
						<th>Nama Jurusan</th>
                        <th>Jumlah Siswa</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 1;
                    $sql = $koneksi->query("SELECT * FROM tbl_jurusan ");
                    while ($data = $sql->fetch_assoc()) {
                    ?>

                        <tr>
                            <td>
                                <?php echo $no++; ?>
                            </td>
                            <td align="center">
                                <img src="foto/<?php echo $data['gambar']; ?>" width="70px" />
                            </td>
                            <td>
                                <?php echo $data['namajurusan']; ?>
                            </td>
                            <td>
                                <?php echo $data['jumlah_siswa']; ?>
                            </td>
                            <td>
                                <?php echo $data['deskripsi']; ?>
                            </td>
                            <td>
                                <?php echo $data['status']; ?>
                            </td>

                            <td>
                                <a href="?page=edit-jurusan&kode=<?php echo $data['id_jurusan']; ?>" title="Ubah" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="?page=del-jurusan&kode=<?php echo $data['id_jurusan']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>