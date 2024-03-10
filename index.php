<?php require_once "main.php";

$vuoto = 'Non disponibile';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
</head>
<body>
    <table class="table">
        <thead>
            <th>Titolo</th>
            <th>Lingua</th>
            <th>Voto</th>
            <th>Profitti</th>
            <th>Durata</th>
            <th>Numero Stagioni</th>
        </thead>
        <tbody>
            <?php foreach($productions as $production): ?>
            <tr>
                <td><?=$production->titolo?></td>
                <td><?=$production->lingua?></td>
                <td><?=$production->voto?></td>
                <?php if ($production instanceof Movie): ?>
                <td><?=$production->profitti?></td>
                <td><?=$production->durata?></td>
                <td><?=$vuoto?></td>
                <?php elseif ($production instanceof TVSerie): ?>
                <td><?=$vuoto?></td>
                <td><?=$vuoto?></td>
                <td><?=$production->numero_stagioni?></td>
                <?php endif; ?>
            </tr>
            
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
