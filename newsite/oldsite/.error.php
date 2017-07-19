<?

$Srv="91";

$url = strtolower($HTTP_HOST);

if($connect=fopen("http://".$Srv.".webmasters.com/404.htm", "r")) {
   while(!feof($connect)) {
        $Body.=fgets($connect, 255); }
   fclose($connect);
   $Body=ereg_replace("\[uri\]", $REQUEST_URI, $Body);
   $Body=ereg_replace("\[url\]", $url, $Body);
   echo $Body; }
else DIE ("<html><script language='JavaScript'>alert('ERROR 404 - File Not Found!')</script></html>");

?>
