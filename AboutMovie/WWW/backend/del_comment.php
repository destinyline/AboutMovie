<html>
<?php

    $objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
    $objDB = mysql_select_db("contactdb148");
    $strSQL = "DELETE FROM topic WHERE Topic_id ='".$_GET["Topic_id"]."' ";
    $objQuery = mysql_query($strSQL); 
    

    if($objQuery)
{

echo "Record Deleted.";

}else{
echo "Error Delete [".$strSQL."]";

}
mysql_close($objConnect);

?>
</html>
