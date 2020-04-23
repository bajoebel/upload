<div class="content">
    <div class="content-header"><?= $header ?></div>
    <div class="content-body">
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
                <video width="320" height="240" controls>
                    <source src="<?= base_url() ."upload/" .$file ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video> 
                
                <?php
                }
            ?>
            <form action="<?= base_url() ."welcome/upload" ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="upload">Dosen</label><br><br>
                <select name="dosen" id="dosen" class="form-control">
                <option value="Pilih">Pilih</option>
                    <?php 
                        foreach ($dosen as $d ) {
                        ?>
                        <option value="<?= $d->idx?>"><?= $d->nama_dosen ?></option>
                        <?php
                        }
                    ?>
                </select>
                </div>

                <div class="form-group">
                <label for="upload">Matakuliah</label><br><br>
                <select name="mtk" id="mtk" class="form-control">
                <option value="Pilih">Pilih</option>
                    <?php 
                        foreach ($mtk as $d ) {
                        ?>
                        <option value="<?= $d->idx?>"><?= $d->nama_mtk ?></option>
                        <?php
                        }
                    ?>
                </select>
                </div>

                <div class="form-group">
                <label for="upload">Keterangan</label><br><br>
                <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                <label for="upload">Upload File</label><br><br>
                <input type="file" name="userfile" class='form-control' id="userfile">
                </div>
                <input type="submit" value="Upload" class='btn'>
                <a href="<?= base_url() ?>" class='btn btn-back'>Kembali</a>
            </form>
    </div>
</div>
