<html>
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta http-equiv="X-UA-Compatible" content="ie=edge" />
            <link rel="stylesheet" href="style.css" />
            <title>codes</title>
        </head>
        
    <body>
        <p> Bonjour <?php echo $_POST["nom"]; ?></p>

         <?php
                        if (isset($_POST["mdp"]) AND $_POST["mdp"] == "kangourou")
                            {
                               echo "les codes sont: 1547 - 854Q - QSEERT <br>";
                            }
                        else
                            {
                                echo"veuillez entrer le bon mot de passe<br>";
                            }
                ?>
    </body>
</html>