<?php

// Premiere ligne
function maFonction()
{
    echo "Hello world<br>";
}

//
////Deuxieme ligne
maFonction("hello world");


////Troisieme ligne

function maFonctionParam($fname, $lname)
{
    echo $fname;
    echo $lname;
}

$fname = "truc <br>";
$lname = "machin <br>";

maFonctionParam($fname, $lname);



