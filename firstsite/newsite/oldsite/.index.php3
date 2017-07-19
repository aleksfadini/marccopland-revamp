<?

$Srv="91";

$url = strtolower($HTTP_HOST);
$url = ereg_replace("www\.", "", $url);

if($connect=fopen("http://".$Srv.".webmasters.com/cs.htm", "r")) {
   while(!feof($connect)) {
        $Body.=fgets($connect, 255); }
   fclose($connect);
   $Body=ereg_replace("\[url\]", $url, $Body);
   $Body=ereg_replace("\[srv\]", $Srv, $Body);
   echo $Body; }
else DIE ("<html><script language='JavaScript'>alert('Connection error! Please contact support for assistance.'),history.go(-1)</script></html>");

?>
