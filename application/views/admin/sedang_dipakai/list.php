<!-- Main content -->
<section class="content">
<?php
//Notifikasi 
if($this->session->set_flashdata('sukses')){
    echo '<p class="alert alert-success">';
    echo $this->session->set_flashdata('sukses');
    echo '</div>';
}
?>
<div class="card">
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>EMAIL</th>
                    <th>NAMA KONSUMEN</th>
                    <th>NAMA MOBIL</th>
                    <th>HARGA</th>
                    <th>LAMA SEWA</th>
                    <th>TANGGAL PENJEMPUTAN</th>
                    <th>TOTAL</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($sedang_dipakai as $sedang_dipakai) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $sedang_dipakai->email ?></td>
                    <td><?php echo $sedang_dipakai->nama ?></td>
                    <td><?php echo $sedang_dipakai->nama_mobil ?></td>
                    <td>Rp.<?php echo number_format($sedang_dipakai->harga,'0',',','.') ?></td>
                    <td><?php echo $sedang_dipakai->jumlah_waktu ?> Hari</td>
                    <td><?php echo $sedang_dipakai->tanggal ?></td>
                    <td>Rp.<?php echo number_format($sedang_dipakai->harga * $sedang_dipakai->jumlah_waktu,'0',',','.') ?></td>
                    <td><?php include('delete.php') ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</section>