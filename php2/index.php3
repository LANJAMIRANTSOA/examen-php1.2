<!DOCTYPE html>
<html>
<head>
    <title>Variables d'environnement</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Variables d'environnement</h2>

<table>
    <tr>
        <th>Signification</th>
        <th>Valeur</th>
    </tr>
    <?php
    $variables = array(
        'SERVEUR_ADDR' => 'Adresse IP du serveur',
        'HTTP_HOST' => 'Nom du serveur (hôte) demandé dans l'en-tête Host de la requête HTTP',
        'REMOTE_ADDR' => 'Adresse IP du client',
        'REMOTE_ADDR_HOST' => 'Nom d'hôte du client (résolution inverse)',
        'HTTP_USER_AGENT' => 'Chaîne d'agent utilisateur (User-Agent) du client',
    );

    foreach ($variables as $key => $description) {
        $value = '';
        if (isset($_SERVER[$key])) {
            $value = $_SERVER[$key];
        }
        // If variable is REMOTE_ADDR_HOST, perform reverse DNS lookup
        if ($key === 'REMOTE_ADDR_HOST' && isset($_SERVER['REMOTE_ADDR'])) {
            $value = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        }
        echo "<tr><td>$description</td><td>$value</td></tr>";
    }
    ?>
</table>

</body>
</html>