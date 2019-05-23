
<?php
function test($in)
{
if(isset($in) &&  ( (strlen(strip_tags($in)) > 3) && ( strlen(strip_tags($in)) <= 15) ))
{
    if ( strlen($in) != strlen(strip_tags($in)) ) {
         return "HTML taggar";
    }
    if (preg_match("/[\s \\ \/]/",$in)) {
        return "Förbjudna tecken";
    }
}
else {
      return "Antal tecken ".strlen($in). " vilket inte är tillåtet";
}
return "ok";
}
?>
