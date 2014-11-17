<?
$rootkws = $_POST["rootkws"];
$areas = $_POST["areas"];

$rootkws = str_replace("\r","",$rootkws);
$areas = str_replace("\r","",$areas);

$root = explode("\n", $rootkws);
$root = array_filter($root);

$area = explode("\n", $areas);
$area = array_filter($area);

unset($areas);
unset($rootkws);

$root = array_map( 'trim', $root );
$area = array_map( 'trim', $area );
$root = array_unique($root);
$area = array_unique($area);



foreach ($root as $kw){
    foreach ($area as $location){
        if  ($_POST["LF"]) {
            $final[] = "$location $kw";        
        }
        
        if  ($_POST["LL"]) {
            $final[] = "$kw $location";
        }
        
        if  ($_POST["in"]) {
            $final[] = "$kw in $location";        
        }
        
        if  ($_POST["around"]) {
            $final[] = "$kw around $location";
        }
        
        if  ($_POST["near"]) {
            $final[] = "$kw near $location";
        }
        
        if  ($_POST["from"]) {
            $final[] = "$kw from $location";
        }
   
    }   
}

//foreach ($final as $value){
//    $final[] = "Find $value";
//}

foreach ($final as $value){
    echo "$value<br>" ;
}

?>