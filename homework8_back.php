<?php
if($_GET["City"]!=null&& $_GET["State"]!=null && $_GET["StreetAddress"]!=null)
{
$zillowurl="http://www.zillow.com/webservice/GetDeepSearchResults.htm?zws-id=X1-ZWz1dx849f6f4b_8qndf&address=";
$steet = urlencode(preg_replace('/\s+/', '+',$_GET["StreetAddress"]));
$zillowurl=$zillowurl.$steet;
$zillowurl=$zillowurl."&citystatezip=";
$cit=preg_replace('/\s+/',"+",$_GET["City"]);
$zillowurl=$zillowurl.$cit;
$zillowurl=$zillowurl."%2C+";
$stat=preg_replace('/\s+/',"+",$_GET["State"]);
$zillowurl=$zillowurl.$stat;
$zillowurl=$zillowurl."&rentzestimate=true";
//echo("$zillowurl");
$xmlload=new SimpleXmlElement(file_get_contents($zillowurl));
//$xmlload = simplexml_load_file("response.xml");

echo json_encode($xmlload);
}
//print_r($xmlload);

?>


