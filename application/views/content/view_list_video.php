<div class="content">
    <div class="content-header"><?= $header ?></div>
    <div class="content-body">
        <div class="control">
            <a href="<?= base_url() ."welcome/tambah" ?>" class='btn'>Tambah</a>
        </div>
        <table class="table">
            <thead class="bg-blue">
                <tr>
                    <td>NO</td>
                    <td>Nama Dosen</td>
                    <td>Nama Matakuliah</td>
                    <td>Keterangan</td>
                    <td>#</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no=0;
                    if(!empty($video)){
                        foreach ($video as $v ) {
                            $no++;
                            ?>
                            <td><?= $no ?></td>
                            <td><?= $v->nama_dosen ?></td>
                            <td><?= $v->nama_mtk ?></td>
                            <td><?= $v->keterangan ?></td>
                            <td><a href="<?= base_url() ."welcome/detail/".$v->idx ?>" class='btn'>Lihat</a></td>
                            <?php
                        }
                    }else{
                        ?>
                        <tr>
                        <td colspan="4">Data Tidak Ada</td>
                        </tr>
                        <?php
                    }
                    
                ?>
            </tbody>
        </table>
    </div>
</div>
