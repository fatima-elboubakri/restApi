<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST'); 
$target_dir = "fichiers/";
$url = $_SERVER['REQUEST_URI']; //returns the current URL
$parts = explode('/',$url);
$dir = "http://".$_SERVER['SERVER_NAME'];
for ($i = 0; $i < count($parts) - 1; $i++) {
 $dir .= $parts[$i] . "/";
}
//echo $dir;
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$target_file = $target_dir .md5(uniqid()).pathinfo(basename($_FILES["cv"]["name"]), PATHINFO_EXTENSION);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
/*
if ($_FILES["selectFile"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}*/
// Allow certain file formats
/*
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["selectFile"]["name"]). " has been uploaded.";
		echo $dir. $target_file;

// traitement de modification de l'immage
    try
{
  $bdd = new PDO('mysql:host=localhost;dbname=recrute;charset=utf8', 'root', '');
  
  
  $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('
  SELECT id
  FROM candidat
  ORDER BY id DESC LIMIT 0, 1');

// Afficher le dernier enregistrement
while ($donnees = $reponse->fetch())
{
  $id = $donnees['id'];
  
 $req = $bdd->prepare('UPDATE
    `candidat`
SET

    `cv_can` =  :cv_can
WHERE
    `id` = :id');
 
    $req->execute(Array(
        ':cv_can' => $target_file,
        ':id' => $id
        )); 


}
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>