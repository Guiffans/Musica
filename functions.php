
<?php
session_start();

$notas = array(
    "C", "C#", "D", "D#", "E", "F", "F#", "G", "G#", "A", "A#", "B",
    "C", "C#", "D", "D#", "E", "F", "F#", "G", "G#", "A", "A#", "B",
    "C", "C#", "D", "D#", "E", "F", "F#", "G", "G#", "A", "A#", "B"
);
?>

<form action="" method="post">
    <label for="acorde">Digite um acorde</label><br>
    <input type="text" id="acorde" name="acorde" required><br>

    <input type="radio" id="Maior" name="Tom" value="Maior">
    <label for="Maior">Maior</label><br>

    <input type="radio" id="Menor" name="Tom" value="Menor">
    <label for="Menor">Menor</label><br>

    <label for="acorde2">Digite outro acorde</label><br>
    <input type="text" id="acorde2" name="acorde2" required><br>

    <input type="radio" id="Maior2" name="Tom2" value="Maior">
    <label for="Maior2">Maior</label><br>

    <input type="radio" id="Menor2" name="Tom2" value="Menor">
    <label for="Menor2">Menor</label><br>

    <button type="submit" value="Confirmar">Confirmar</button>
</form>

<?php
$acorde = '';
$acorde2 = '';
$tom = '';
$tom2 = '';

if (isset($_POST['acorde']) && isset($_POST['Tom']) && isset($_POST['acorde2']) && isset($_POST['Tom2'])) {
    $acorde = $_POST['acorde'];
    $acorde2 = $_POST['acorde2'];
    $tom = $_POST['Tom'];
    $tom2 = $_POST['Tom2'];

    $indice = array_search($acorde, $notas);
    $indice2 = array_search($acorde2, $notas);

    $triade = [$indice, $indice + 4, $indice + 7, $indice + 11];
    $triadem = [$indice, $indice + 3, $indice + 7, $indice + 10];
    $triade2 = [$indice2, $indice2 + 4, $indice2 + 7, $indice2 + 11];
    $triadem2 = [$indice2, $indice2 + 3, $indice2 + 7, $indice2 + 10];

    if ($tom == "Maior") {
        echo "Acorde Maior: <br>";
        for ($i = 0; $i < count($triade); $i++) {
            echo $notas[$triade[$i]]." ";
        }
    } elseif ($tom == "Menor") {
        echo "Acorde Menor: <br>";
        for ($i = 0; $i < count($triadem); $i++) {
            echo $notas[$triadem[$i]]." ";
        }
    }

    echo "<br>";

    if ($tom2 == "Maior") {
        echo "Segundo Acorde Maior:<br> ";
        for ($i = 0; $i < count($triade2); $i++) {
            echo $notas[$triade2[$i]]." ";
        }
    } elseif ($tom2 == "Menor") {
        echo "Segundo Acorde Menor:<br> ";
        for ($i = 0; $i < count($triadem2); $i++) {
            echo $notas[$triadem2[$i]]." ";
        }
    }
}
    // inversoes primeira, segunda, terceira

?>
