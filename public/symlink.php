<?php
$targetFolder ='/home/hermeshu/p.hermeshub.ir/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage';
symlink($targetFolder,$linkFolder);
echo $linkFolder;
?>
