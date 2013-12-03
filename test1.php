<?
$str = "HANDLE_NAME1 = 'Maxim', ACCOUNT_ID = '', PASSWORD = 'bdsjhdasid,dsjadiojasidoja', TEST_STRING = 'You're super cool!', MODEL_CHANGE_CNT = 0";
echo "Current String: " . $str . "<br />";
$testArray = str_getcsv($str, ",", "'");
for($i=0;$i<count($testArray);$i++)
{
$foundSign = strpos($testArray[$i], "=");
if($foundSign == 0){
    $testArray[$i-1] = $testArray[$i-1] .  $testArray[$i];
    $testArray[$i] = null;

}
}
    $testArray = array_filter($testArray);
    foreach($testArray as $t)
    {
    echo $t."<br />";
}

?>
