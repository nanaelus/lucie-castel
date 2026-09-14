<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link href="./assets/css/main.css" rel="stylesheet" />
</head>

<body>
    <nav class="menu">
        <div id="logo"><a href="index.php">Logo</a></div>
        <ul>
            <li><a href="?action=tous-mes-livres">Livres</a></li>
            <li><a href="?toutes-mes-illustrations">Illustrations</a></li>
            <li><a href="?tous-mes-ateliers">Ateliers</a></li>
            <li>Contact</li>
        </ul>
    </nav>
    <div class="content">
        <?= $content ?>
    </div>
</body>
</html>