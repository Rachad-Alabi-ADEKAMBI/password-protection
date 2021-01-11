<html>
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta http-equiv="X-UA-Compatible" content="ie=edge" />
            <link rel="stylesheet" href="style.css" />
            <title>login</title>
        </head>
        
        <body>
            <form method="post" action="codes.php">
                <?php
                    echo "veuillez entrer le mot de passe <br>";
                ?>

                <input type="text" name="nom" placeholder="Entrez le nom svp !">
                <input type="password" name="mdp" placeholder ="Entrez le mot de passe svp !">
                <input type="submit" value="ok">
               
            </form>
        </body>
    </html>
