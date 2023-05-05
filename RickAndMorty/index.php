<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick and Morty Characters</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script>
        function changeBackgroundColor(color) {
            document.documentElement.style.setProperty('--bg-color', color);
        }
    </script>
</head>
<body>
<div class="color-selector">
    <changeBackgroundColor('#e74c3c')" style="background-color: #e74c3c"><changeBackgroundCollor>
</div>
<div class="container">
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $url = "https://rickandmortyapi.com/api/character/?page=" . $page;
    $response = file_get_contents($url);
    $data = json_decode($response);

    foreach ($data->results as $character) {
        echo '<div class="card">';
        echo '<img src="' . $character->image . '" alt="' . $character->name . '">';
        echo '<h3>' . $character->name . '</h3>';
        echo '<p>Status: ' . $character->status . '</p>';
        echo '<p>Species: ' . $character->species . '</p>';
        echo '<p>Type: ' . $character->type . '</p>';
        echo '<p>Gender: ' . $character->gender . '</p>';
        echo '<p>Origin: ' . $character->origin->name . '</p>';
        echo '<p>Location: ' . $character->location->name . '</p>';
        echo '<p>First seen in: ' . $character->episode[0] . '</p>';
        echo '</div>';
    }
    ?>
</div>
<?php include 'includes/pagination.php'; ?>
</body>
</html>
