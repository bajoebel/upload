<div class="content">
    <div class="content-header"><?= $header ?></div>
    <div class="content-body">

        <table class="table">
            <tr>
                <td colspan=2>
                <video width="573" height="380" controls>
                    <source src="<?= base_url() ."upload/" .$row->namafile ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video> 
                </td>
            </tr>
            <tr>
            <td style="text-align:center" colspan="2"><marquee><b>
            <?= $row->keterangan ?></b></marquee></td>
            </tr>
            <tr>
            <td width="150px">Diupload Oleh </td>
            <td>: <?= $row->nama_dosen ?></td>
            </tr>
            <tr>
            <td>Untuk Matakuliah</td>
            <td>: <?= $row->nama_mtk ?></td>
            </tr>
            <tr>
            
            <td colspan=2><a href="<?= base_url() ?>" class='btn btn-back'>Kembali</a></td>
            </tr>
        </table>
            <?php 
                $error=$this->session->flashdata('error');
                if (!empty($error)) {
                if(is_array($error)){
                    foreach ($error as $key => $value) {
                    $err=$error[$key];
                    if(is_array($err)){
                        foreach ($err as $e) {
                        echo "<span class='error'>".$e ."</span>";
                        }
                    }else{
                        echo "<span class='error>".$error[$key]  ."</span>";
                    }
                    }
                }else{
                    echo "<span class='error'>".$error  ."</span>";
                }
                }

                $file=$this->session->flashdata('file');
                if (!empty($file)) {
                ?>
                
                
                <?php
                }
            ?>
            
    </div>
</div>
