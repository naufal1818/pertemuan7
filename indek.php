<?php

// for
for($i = 0; $i < 10; $i++){
    echo "<h2>Ini perulangan ke-$i</h2>\n";
}

//while
  echo "\n";
   $ulangi = 0;
   
   while($ulangi <10){
   echo "<p>Ini Perulangan ke-$ulangi</p>\n";
       $ulangi++;
   }


// do or while

echo "\n";
   $ulangi = 10;
   
   do 
   {
   echo "<p>Ini Perulangan ke-$ulangi</p>\n";
       $ulangi--;
   }
   while  ( $ulangi > 0);


// foreach
echo "\n";
    $books =
    [
        "Panduan Belajar PHP untuk pemula",
        "Membangun Aplikas web dengan PHP",
        "Tutorial PHP and mySQL",
        "Membuat Chat Bot dengan PHP"
        ];
        
echo "<h5>Judul Buku PHP:</h5>";
echo "<ul>";
foreach($books as $buku)
{
    echo "<li>$buku</li>";
}
echo "</ul>";


// bersarang1

echo "\n";
   for ($i =0; $i < 5; $i++)
   {     for ($j =0; $j < 10; $j++)
   {echo "Ini Perulangan ke ($i ,$j)\n";}
   }


// bersarang2

echo "\n";
   $i = 0;
   while($i <10)
   {   for ($j =0; $j < 10; $j++) 
    {   echo "Ini Perulangan ke ($i ,$j)\n";
    }
       $i++;
   }
?>