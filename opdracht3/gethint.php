<?php
// Array with names
$a[] = "Toon";
$a[] = "Suryani";
$a[] = "Sjors";
$a[] = "Jamiro";
$a[] = "Martijn";
$a[] = "Sem";
$a[] = "Aleks";
$a[] = "tijs";
$a[] = "Noah";
$a[] = "Horsefighter"; //10
$a[] = "Brilliant Bob";
$a[] = "Ed";
$a[] = "THEO";
$a[] = "Milos";
$a[] = "Joey";
$a[] = "Toontje";
$a[] = "Tracer";
$a[] = "Genji";
$a[] = "Fran";
$a[] = "Abby";  //20
$a[] = "Luna";
$a[] = "Fri";
$a[] = "Michael";
$a[] = "Marco";
$a[] = "Brandon";
$a[] = "Uvuvwevwevwe Onyetenyevwe Ugwemuhwem Osas";
$a[] = "Zack";
$a[] = "Cockie";
$a[] = "Dick";
$a[] = "Invidel";
$a[] = "Kado code";
$a[] = "Octo";
$a[] = "Peter";
$a[] = "Query";
$a[] = "Richard";
$a[] = "Wessel";
$a[] = "Xander";
$a[] = "Ysolda";
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>