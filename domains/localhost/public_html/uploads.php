<?php
function makeHEX($st){
     for($i=0; $i<strlen($st); $i++)
         $hex[]=sprintf("%02X", ord($st[$i]));
    return join(" ",$hex);
}
$f = fopen("C:\\Server\\domains\\localhost\\public_html\\book.txt","rb");
echo makeHEX(fgets($f,100)). "<br>\n";

$f = fopen("C:\\Server\\domains\\localhost\\public_html\\book.txt","rt");
echo makeHEX(fgets($f,100)). "<br>\n";
echo "\n\n\n";


$f1 = fopen("C:\\Server\\domains\\localhost\\public_html\\book.txt","r+");
$f2 = fopen("C:\\Server\\domains\\localhost\\public_html\\book2.txt","r+");
$book2 = fread($f2,100000);
echo $book2;
$book_write = fwrite($f1,$book2);

echo "\n\n";


$fname = tempnam("C:\\Server\\domains\\localhost\\public_html", date("Ymd"));
$f12 = fopen($fname, "w");

echo "\n\n";
chmod("book.txt",0755);
$fileuid = fileperms("book.txt");
 echo $fileuid;
chmod("book.txt",0755);
echo "\n\n";
print_r(stat("book.txt"));
echo "\n\n";

$mtime = fileatime(__FILE__);
echo "Остання зміна сторінки: ".date("Y-m-d H:i:s");
echo "\n\n\n";
echo filetype("book.txt");
echo "\n\n";

echo getcwd();
echo "\n\n";

echo fileatime(__FILE__);
echo "\n\n";
