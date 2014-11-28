<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Homework6</title>
<style type="text/css">
#SangDiv1{
position:absolute;
left:300px;
top:60px;
border-style:solid;
border-width:2px;
Width:400px;
height:200px;
}
th {
font-size: 12px;
border: 1px solid black;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #EBE996;
    border-radius: 5px;
}
.footer{
position:absolute;
text-align:center;
font-size:12px;
left :200px;
top:150px;
}
table,td{
font-size:9px;
font-family:
padding: 15px;
 text-align: left;
}
#SangDiv2{
position:absolute;
left:10px;
top:10px;
}
#SangDiv3{
position:absolute;
left:10px;
top:40px;
}
#SangDiv4{
position:absolute;
left:10px;
top:70px;
}
#SangDiv5{
position:absolute;
left:115px;
top:90px;
}
#SangDiv6{
position:absolute;
top:250px;
}
#head{
position:absolute;
left:400px;
top:10px;
}

</style>
<script type="text/javascript">
function Checkform(yo)     
          {
	     var alertstring="Please enter value for";
             var blank="";
             var street_fill=false;
             var city_fill=false;
             var state_fill=false;

             if(yo.StreetAddress.value!= blank) street_fill=true;
             if(yo.City.value!= blank) city_fill=true;
             if(yo.State.selectedIndex != 0) state_fill=true;
               
              if(!street_fill) alertstring = alertstring +" Street Address";
             
             if(!city_fill)  { 
               if(street_fill) {
                  alertstring = alertstring +" City";
               }
		else {
                  alertstring = alertstring +" and City";
               }
             }

             if(!state_fill) {  
               if(street_fill && city_fill) {
              alertstring = alertstring +" State"; 
               }
                else {
              alertstring = alertstring +" and State"; 
              }  
             }
     
              if(!street_fill || !city_fill || !state_fill) {
               // yo.submit.value="notsearch";
                alert(alertstring); 
                return false;
             }
		              if(street_fill || city_fill || state_fill) {
                             return true;
             }
          }

</script>
<body>
<h2 id="head">Real Estate Search</h2>
<div id="SangDiv1">
<form name="sang" method="GET" action="">
<div id="SangDiv2">
Street Address*:<input type="text" name="StreetAddress" id="StreetAddress" maxlength="255" size="30" value="<?php echo isset($_GET["StreetAddress"])?$_GET["StreetAddress"]:"";?>">
</div>
<div id="SangDiv3">
City*:<input type="text" name="City" id="City" maxlength="255" size="30" value="<?php echo isset($_GET["City"])?$_GET["City"]:"";?>" style="position:absolute;left:105px;">
</div>
<div id="SangDiv4">
<?php (isset($_GET["State"])) ? $state1 = $_GET["State"] : $state1= ""; ?>
State*:<select name="State"style="position:absolute;left:105px;">
                        <option <?php if ($state1=="  ") echo 'selected' ?> value="  ">  </option>
      			<option <?php if ($state1=="AL") echo 'selected' ?> value="AL">AL</option>
			<option <?php if ($state1=="AK") echo 'selected' ?> value="AK">AK</option>
			<option <?php if ($state1=="AZ") echo 'selected' ?> value="AZ">AZ</option>
			<option <?php if ($state1=="AR") echo 'selected' ?> value="AR">AR</option>
			<option <?php if ($state1=="CA") echo 'selected' ?> value="CA">CA</option>
			<option <?php if ($state1=="CO") echo 'selected' ?> value="CO">CO</option>
			<option <?php if ($state1=="CT") echo 'selected' ?> value="CT">CT</option>
			<option <?php if ($state1=="DE") echo 'selected' ?> value="DE">DE</option>
			<option <?php if ($state1=="DC") echo 'selected' ?> value="DC">DC</option>
			<option <?php if ($state1=="FL") echo 'selected' ?> value="FL">FL</option>
			<option <?php if ($state1=="GA") echo 'selected' ?> value="GA">GA</option>
			<option <?php if ($state1=="HI") echo 'selected' ?> value="HI">HI</option>
			<option <?php if ($state1=="ID") echo 'selected' ?> value="ID">ID</option>
			<option <?php if ($state1=="IL") echo 'selected' ?> value="IL">IL</option>
			<option <?php if ($state1=="IN") echo 'selected' ?> value="IN">IN</option>
			<option <?php if ($state1=="IA") echo 'selected' ?> value="IA">IA</option>
			<option <?php if ($state1=="KS") echo 'selected' ?> value="KS">KS</option>
			<option <?php if ($state1=="KY") echo 'selected' ?> value="KY">KY</option>
			<option <?php if ($state1=="LA") echo 'selected' ?> value="LA">LA</option>
			<option <?php if ($state1=="ME") echo 'selected' ?> value="ME">ME</option>
			<option <?php if ($state1=="MD") echo 'selected' ?> value="MD">MD</option>
			<option <?php if ($state1=="MA") echo 'selected' ?> value="MA">MA</option>
			<option <?php if ($state1=="MI") echo 'selected' ?> value="MI">MI</option>
			<option <?php if ($state1=="MN") echo 'selected' ?> value="MN">MN</option>
			<option <?php if ($state1=="MS") echo 'selected' ?> value="MS">MS</option>
			<option <?php if ($state1=="MO") echo 'selected' ?> value="MO">MO</option>
			<option <?php if ($state1=="MT") echo 'selected' ?> value="MT">MT</option>
			<option <?php if ($state1=="NE") echo 'selected' ?> value="NE">NE</option>
			<option <?php if ($state1=="NV") echo 'selected' ?> value="NV">NV</option>
			<option <?php if ($state1=="NH") echo 'selected' ?> value="NH">NH</option>
			<option <?php if ($state1=="NJ") echo 'selected' ?> value="NJ">NJ</option>
			<option <?php if ($state1=="NM") echo 'selected' ?> value="NM">NM</option>
			<option <?php if ($state1=="NY") echo 'selected' ?> value="NY">NY</option>
			<option <?php if ($state1=="NC") echo 'selected' ?> value="NC">NC</option>
			<option <?php if ($state1=="ND") echo 'selected' ?> value="ND">ND</option>
			<option <?php if ($state1=="OH") echo 'selected' ?> value="OH">OH</option>
			<option <?php if ($state1=="OK") echo 'selected' ?> value="OK">OK</option>
			<option <?php if ($state1=="OR") echo 'selected' ?> value="OR">OR</option>
			<option <?php if ($state1=="PA") echo 'selected' ?> value="PA">PA</option>
			<option <?php if ($state1=="RI") echo 'selected' ?> value="RI">RI</option>
			<option <?php if ($state1=="SC") echo 'selected' ?> value="SC">SC</option>
			<option <?php if ($state1=="SD") echo 'selected' ?> value="SD">SD</option>
			<option <?php if ($state1=="TN") echo 'selected' ?> value="TN">TN</option>
			<option <?php if ($state1=="TX") echo 'selected' ?> value="TX">TX</option>
			<option <?php if ($state1=="UT") echo 'selected' ?> value="UT">UT</option>
			<option <?php if ($state1=="VT") echo 'selected' ?> value="VT">VT</option>
			<option <?php if ($state1=="VA") echo 'selected' ?> value="VA">VA</option>
			<option <?php if ($state1=="WA") echo 'selected' ?> value="WA">WA</option>
			<option <?php if ($state1=="WV") echo 'selected' ?> value="WV">WV</option>
			<option <?php if ($state1=="WI") echo 'selected' ?> value="WI">WI</option>
			<option <?php if ($state1=="WY") echo 'selected' ?> value="WY">WY</option>
</select>
</div>
<p id="pid" style="position:absolute;left:10px;top:150px;font-style:italic;font-size:12px;">
*-Mandatory Fields.</p>
<img src="http://www.zillow.com/widgets/GetVersionedResource.htm?path=/static/logos/Zillo
wlogo_150x40_rounded.gif" width="150" height="40" alt="Zillow Real Estate Search" style="position:absolute;left:200px;top:80px;"/>
<div id="SangDiv5">
<input type= "submit" name= "submit" id="submit" value= "Search" onClick= "Checkform(this.form)"/>
</div>
</form>
</div>
<div id="SangDiv6">
<?php if($_GET["submit"]): ?>
<pre>
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
if($xmlload->message->code!=0)
{
echo("<p style=\"position:absolute;left:300px;top:10px;font-weight=\"bold\"\">Exact address not found ..please verify the address</p>");
}
else 
{
echo("<h2 style=\"position:absolute;left:400px;top:10px;\">Search Results</h2>");
if(!empty($xmlload->response->results->result))
{
$field=$xmlload->response->results->result;
}
else
{
$field=NULL;
}
if(!empty($xmlload->request))
{
$details=$xmlload->request;
}
else
{
$details=NULL;
}
if(!empty($field->zestimate))
{
$estimate=$field->zestimate;
}
else
{
$estimate=NULL;
}
if(!empty($estimate->valuationRange->low))
{
$valuationlow=number_format((float)$estimate->valuationRange->low,'2','.',',');
}
else
{
$valuaitionlow=NULL;
}
if(!empty($estimate->valuationRange->high))
{
$valuationhigh=number_format((float)$estimate->valuationRange->high,'2','.',',');
}
else
{
$valuationhigh=NULL;
}
if(!empty($field->rentzestimate))
{
$rentestimate=$field->rentzestimate;
}
else
{
$rentestimate=NULL;
}
if(!empty($rentestimate->valuationRange->low))
{
$rentvaluationlow=number_format((float)$rentestimate->valuationRange->low,'2','.',',');
}
else
{
$rentvaluationlow=NULL;
}
if(!empty($rentestimate->valuationRange->high))
{
$rentvaluationhigh=number_format((float)$rentestimate->valuationRange->high,'2','.',',');
}
else
{
$rentvaluationhigh=NULL;
}
if(!empty($field->links->homedetails))
{
$links=$field->links->homedetails;
}
else
{
$links=NULL;
}
date_default_timezone_set('America/Los_Angeles');
if(!empty($field->lastSoldDate))
{
$solddate=strtotime($field->lastSoldDate);
}
else
{
$solddate=NULL;
}
if(!empty($estimate->valueChange))
{
if((float)$estimate->valueChange<0){
$dayschange=str_replace("-","",$estimate->valueChange);
$print12="30 Days Overall Change <img src=\"http://www-scf.usc.edu/~csci571/2014Spring/hw6/down_r.gif\"></img>:";
}
else{
$dayschange=str_replace("-","",$estimate->valueChange);
$print12="30 Days Overall Change <img src=\"http://www-scf.usc.edu/~csci571/2014Spring/hw6/up_g.gif\"></img>:";
}
}
else
{
$print12="30 Days Overall Change:";
}
if(!empty($solddate))
{
$date = date('d-M-Y',$solddate);
}
else
{
$date=NULL;
}
if(!empty($estimate->{'last-updated'}))
{
$estimatedate=strtotime($estimate->{'last-updated'});
$dateest=date('d-M-Y',$estimatedate);

}
else
{
$dateest=NULL;
}

if(!empty($estimate->{'last-updated'}))
{
$rentupdate=strtotime($rentestimate->{'last-updated'});
}
else
{
$rentupdate=NULL;
}
if(!empty($rentupdate))
{
$rentdate= date('d-M-Y',$rentupdate);
}
else
{
$rentdate=NULL;
}
if(!empty($estimate->amount))
{
$rentest=number_format((float)$estimate->amount,'2','.',',');
}
else
{
$rentest=NULL;
}
if(!empty($field->lastSoldPrice))
{
$soldprice=number_format((float)$field->lastSoldPrice,'2','.',',');
}
else
{
$soldprice=NULL;
}
if(!empty($dayschange))
{
$change30=number_format((float)$dayschange,'2','.',',');
}
else
{
$change30=NULL;
}
if(!empty($rentestimate->valueChange))
{
if((float)$rentestimate->valueChange<0){
$rent30=number_format((float)$rentestimate->valueChange,'2','.',',');
$print23="30 Days Overall Change <img src=\"http://www-scf.usc.edu/~csci571/2014Spring/hw6/down_r.gif\"></img>:";
}
else{
$rent30=number_format((float)$rentestimate->valueChange,'2','.',',');
$print23="30 Days Overall Change <img src=\"http://www-scf.usc.edu/~csci571/2014Spring/hw6/up_g.gif\"></img>:";
}

}
else
{
$print23="30 Days Overall Change:";
}
if(!empty($rentestimate->amount))
{
$zestrent=number_format((float)$rentestimate->amount,'2','.',',');
}
else
{
$zestrent=NULL;
}
if(!empty($field->taxAssessment))
{
$taxass=number_format((float)$field->taxAssessment,'2','.',',');
}
else
{
$taxass=NULL;
}
if(!empty($soldprice))
{
$print01="\$$soldprice";
}
else
{
$print01="";
}
if(!empty($rentest))
{
$print02="\$$rentest";
}
else
{
$print02="";
}
if(!empty($change30))
{
$print03="\$$change30";
}
else
{
$print03="";
}
if(!empty($zestrent))
{
$print04="\$$zestrent";
}
else
{
$print04="";
}
if(!empty($valuationlow)&&!empty($valuationhigh))
{
$print05="\$$valuationlow-\$$valuationhigh";
}
else
{
$print05="";
}
if(!empty($taxass))
{
$print06="\$$taxass";
}
else
{
$print06="";
}
if(!empty($rentvaluationlow)&&!empty($rentvaluationhigh))
{
$print07="\$$rentvaluationlow-\$$rentvaluationhigh";
}
else
{
$print07="";
}
if(!empty($rent30))
{
$print08="\$$rent30";
}
else
{
$print08="";
}
if(!empty($field->lotSizeSqFt))
{
$print09="$field->lotSizeSqFt sq.ft";
}
else
{
$print09="";
}
if(!empty($field->finishedSqFt))
{
$print10="$field->finishedSqFt sq.ft";
}

$print11=$field->address->street;
$print14=$field->address->city;
$print15=$field->address->state;
$print13=$field->address->zipcode;
echo("<div style=\"position:absolute;left:100px;top:80px;\">");
echo("<table width=\"800\"  ><tr><th Colspan=\"4\">see more details for <a  style=\"text-decoration: none !important;\" href=\"$links\">$print11,$print14,$print15-$print13 </a> on Zillow </th></tr> ");
echo("<tr>
<td>Property Type:</td>
<td>$field->useCode</td>
<td>Last Sold Price:</td>
<td>$print01</td>
</tr>
<tr>
<td>Year Built:</td>
<td>$field->yearBuilt</td>
<td>Last Sold Date:</td>
<td>$date</td>
</tr>
<tr>
<td>Lot Size:</td>
<td>$print09</td>
<td>Zestimate<sup>&reg</sup> Property as of $dateest:</td>
<td>$print02</td>
</tr>
<tr>
<td>Finished Area:</td>
<td>$print10</td>
<td>$print12</td>
<td>$print03</td>
</tr>
<tr>
<td>Bathrooms:</td>
<td>$field->bathrooms</td>
<td>All time Property Range:</td>
<td>$print05</td>
</tr>
<tr>
<td>Bedrooms:</td>
<td>$field->bedrooms</td>
<td>Rent Zestimate<sup>&reg</sup> Valuation as of $rentdate:</td>
<td>$print04</td>
</tr>
<tr>
<td>Tax Assessment year:</td>
<td>$field->taxAssessmentYear</td>
<td>$print23</td>
<td>$print08</td>
</tr>
<tr>
<td>Tax Assessment:</td>
<td>$print06</td>
<td>All Time Rent Range:</td>
<td>$print07</td>
</tr>
");

echo("</table>");
echo("<br><br><p class=\"footer\"><sup>&copy;</sup> Zillow, Inc., 2006-2014. Use is subject to <a href=\"http://www.zillow.com/corp/Terms.htm\" >Terms of Use</a>
<a href=\"http://www.zillow.com/wikipages/What-is-a-Zestimate/\">What's a Zestimate?</a></p>");
echo("</div>");
}
}
//print_r($xmlload);

?>
</pre>
<?php endif; ?> 
</div>
<noscript>
</body>
</html>
