if(isset($_POST['upload_data']))
{
  $uploadfile=$_FILES["upload_file"]["tmp_name"];
  $folder="data/";
  move_uploaded_file($_FILES["upload_file"]["tmp_name"], $folder.$_FILES["upload_file"]["name"]);
  <!-- echo '<img src="'.$folder."".$_FILES["upload_file"]["name"].'">'; -->
  exit();
}
