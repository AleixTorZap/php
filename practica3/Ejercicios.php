<!DOCTYPE html>
<html>
<head>
    <title>Lista de Canciones</title>
</head>
<body>
    <h1>Lista de Canciones</h1>
    <table border="2">
        <tr>
            <th>Título</th>
            <th>Músico</th> 
        </tr>
        <?php
        $songs = array(
            array("title" => "Buenas", "musician" => "Quevedo"),
            array("title" => "Antidepresivos", "musician" => "Saiko"),
            array("title" => "aPoLLo13", "musician" => "Duki"),
            array("title" => "Normal", "musician" => "Feid"),
            array("title" => "BESO", "musician" => "Rosalia"),
        );

        foreach ($songs as $song) {
            echo "<tr>";
            echo "<td>" . $song['title'] . "</td>";
            echo "<td>" . $song['musician'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <h1>Saludo Musical</h1>
    
    <?php
    function greet($name, $instrument) {
        $message = "¡Hola, $name! Bienvenido. Tu instrumento musical favorito es el/la $instrument.";
        echo "<p>$message</p>";
    }
    
    greet("John", "piano");
    greet("Anna", "guitarra");
    ?>
    <h1>Recomendación de Canciones</h1>

<?php
function recommendSong($genre) {
    $recommendations = array(
        "rock" => "Hatebreeders",
        "jazz" => "So What",
        "pop" => "Respect",
    );
    
    if (array_key_exists($genre, $recommendations)) {
        return $recommendations[$genre];
    } else {
        return "No se encontró una recomendación para este género.";
    }
}

$rockRecommendation = recommendSong("rock");
$jazzRecommendation = recommendSong("jazz");
$popRecommendation = recommendSong("pop");

echo "<p>Canción recomendada para rock: $rockRecommendation</p>";
echo "<p>Canción recomendada para jazz: $jazzRecommendation</p>";
echo "<p>Canción recomendada para pop: $popRecommendation</p>";
?>
  <h1>Ordenar Canciones</h1>

<?php
function sortSongsByTitle($songsArray)
{
    usort($songsArray, function ($a, $b) {
        return strcmp($a["title"], $b["title"]);
    });
    return $songsArray;
}

function sortSongsByMusician($songsArray)
{
    usort($songsArray, function ($a, $b) {
        return strcmp($a["musician"], $b["musician"]);
    });
    return $songsArray;
}

$songs = array(
    array("title" => "Buenas", "musician" => "Quevedo"),
    array("title" => "Antidepresivos", "musician" => "Saiko"),
    array("title" => "aPoLLo13", "musician" => "Duki"),
    array("title" => "Normal", "musician" => "Feid"),
    array("title" => "BESO", "musician" => "Rosalia"),
);

$sortedByTitle = sortSongsByTitle($songs);
$sortedByMusician = sortSongsByMusician($songs);

echo "<h2>Canciones ordenadas por título:</h2>";
echo "<ul>";
foreach ($sortedByTitle as $song) {
    echo "<li>Título: " . $song["title"] . ", Músico: " . $song["musician"] . "</li>";
}
echo "</ul>";

echo "<h2>Canciones ordenadas por músico:</h2>";
echo "<ul>";
foreach ($sortedByMusician as $song) {
    echo "<li>Título: " . $song["title"] . ", Músico: " . $song["musician"] . "</li>";
}
echo "</ul>";
?>
</body>
</html>
