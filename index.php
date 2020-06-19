<?php
function printArray() {
    $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
    $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
    $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
    $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg'); ?>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Prénom</th>
        <th scope="col">Nom</th>
        <th scope="col">Illustration</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td><?= $portrait1['name']; ?></td>
            <td><?= $portrait1['firstname']; ?></td>
            <td><img src="<?= $portrait1['portrait']; ?>" alt="portrait de Victor Hugo"></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td><?= $portrait2['name']; ?></td>
            <td><?= $portrait2['firstname']; ?></td>
            <td><img src="<?= $portrait2['portrait']; ?>" alt="portrait de Jean de la fontaine"></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td><?= $portrait3['name']; ?></td>
            <td><?= $portrait3['firstname']; ?></td>
            <td><img src="<?= $portrait3['portrait']; ?>" alt="portrait de Pierre Corneille"></td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td><?= $portrait4['name']; ?></td>
            <td><?= $portrait4['firstname']; ?></td>
            <td><img src="<?= $portrait4['portrait']; ?>" alt="portrait de Jean Racine"></td>
        </tr>
    </tbody>
</table>
<?php } ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Partie 10 TP3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php printArray() ?>
</body>
</html>