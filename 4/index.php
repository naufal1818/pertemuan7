<?php
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
?>