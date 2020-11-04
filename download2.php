<?php
$realname = './file.zip';
if (file_exists($realname)) 
{
    $encryptedfilename = $_GET['file'];
    $userfilename = base64_decode($encryptedfilename) . '-full.zip';
    header('Content-type: application/zip'); 
    header('Content-Disposition: attachment; filename='.$userfilename);
    header('Content-Length: '. filesize($realname));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    ob_clean();
    flush();
    echo filesize($realname);
    readfile($realname);
}
exit();
?>