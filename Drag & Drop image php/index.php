<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Search with range using php & ajex</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/jquery.js"></script>
    <link href="css/dropzone.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
  
   
</head>


<body>

<div id="main">
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="header">
        <h1>Drag & Drop Upload Files using Dropzone with PHP</h1>
      </div>
      <div class="contain">
        <form class="dropzone" id="file_upload"></form><br>
        <button id="upload_btn" class="btn btn-primary">Upload</button>
      </div>
</div>
</div>
</div>

</div>



<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/dropzone.js" type="text/javascript"></script>

  <script type="text/javascript">
    Dropzone.autoDiscover = false;
     var myDropzone = new Dropzone("#file_upload", { 
      url: "upload.php", 
      parallelUploads : 3,
      uploadMultiple : true,
      acceptedFiles : 'png,.jpg,.jpeg',
      autoProcessQueue: false,
        success: function(file, response){
          if(response == 'true') {
            (".contain .message").hide();
            (".contain").append('div class="message success alert alert-success">Images Uploaded Successfuly.</div>');
          }else{
            (".contain").append('div class="message error alert alert-error">Images can\t Uploaded.</div>');
          }
        }
    
    });

    $('#upload_btn').click(function() {
      myDropzone.processQueue();
    });

      
    </script>



</body>
</html>