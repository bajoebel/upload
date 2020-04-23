<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style type='text/css'>
      .upload{
        width:320px;
        height:auto;
        border:1px #000 solid;
        border-collapse:collapse;
        padding:10px;
      }
      .form-control{
        border-bottom:1px #000 solid;
        border-collapse:collapse;
        width:100%;
      }
      .btn{
        width:100%;
        height:30px;
        background-color:#3076bf;
        color:#fff;
        border-radius:5px;
      }
      .error{
        color:#c81919;
      }
    </style>
</head>
<body>
<div class="upload">
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
        <label for="upload">Upload File</label><br><br>
        <input type="file" name="userfile" class='form-control' id="userfile">
        <br></br>
        <input type="submit" value="Upload" class='btn'>
      </form>
      
    </div>
</body>
</html>
