
<?php

function drukuj_form()
{
print("<br />Nazwisko: ".$_GET['nazw']);
print("<br />Imię: ".$_GET['imie']);
print("<br />Adres e-mail:".$_GET['email']);
if ( isset($_GET['tp'] )) print("- Turbo Pascal<br/>"); 
if ( isset($_GET['c'] )) print("- C++<br />"); 
if ( isset($_GET['java'] )) print("- Java<br />");
}

function pokaz()
{  
    $osoby=file("baza.txt");
    $ile =count($osoby);
   
    for($i=0;$i<$ile;$i++)
    {
        echo $osoby[$i];
        echo"</br>";
    }
    
}

function dodaj()
{
    global $_GET;
$nazw=$_GET['nazw'];
$imie=$_GET['imie'];
$email=$_GET['email'];
    
$dane=$nazw." ".$imie." ".$email;

if ( isset($_GET['tp'] ))$dane= $dane.",TP"; 
if ( isset($_GET['c'] )) $dane= $dane.",C"; 
if ( isset($_GET['java'] )) $dane= $dane.",Java\n";

$file="baza.txt";
$fp=fopen($file,"a");
flock($fp, 2);
fwrite($fp, $dane);
flock($fp, 3); 
fclose($fp); 

}

function pokaz_java()
{
    
}
function pokaz_php()
{
    
}
function pokaz_cpp()
{
    
}
//drukuj_form();

if(isset($_REQUEST['Pokaz'])) {
        pokaz();}
else if(isset ($_REQUEST['Java'])) {
        pokaz_java();}
else if(isset ($_REQUEST['PHP'])) {
        pokaz_php();}
else if(isset ($_REQUEST['CPP'])) {
        pokaz_cpp();}
else if(isset ($_REQUEST['dodaj'])) {
        dodaj();}
else{
    
}
?>


