<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Pokémon</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- <main>
        <h1>
            Formulaire de contact Pokémon
        </h1>

        <section class="sectionContainer">
            <form method="POST" action="">
                <label for="Pseudo">Pseudo :</label><br>
                <input type="text" id="pseudo" name="pseudo" required><br><br>

                <label for="Age">Age :</label><br>
                <input type="number" id="age" name="age" min="1" max="111"><br><br>

                <label for="Pokémon">Pokémon préféré :</label><br>
                <input type="text" id="pokemon" name="pokemon" required><br><br>

                <label for="Sujet">Sujet :</label><br>
                <input type="text" id="sujet" name="sujet" required><br><br>

                <label for="Message">Message :</label><br>
                <textarea name="message" id="message" rows="5" cols="30" required></textarea>

            </form>
        </section>
    </main>
   

    <!-- correction -->

        <h1>
            formulaire
        </h1>
            <!-- l'attribut action permet de definir la destiination du formulaire -->
            <!-- l'attribut method défini la méthod d'envoi du formulaire -->
        <section class="sectionContainer">
            <form method="POST" action="">
                <div>
                    <label for="pseudo">le nom du champ</label>
                    <input id="pseudo" name="pseudo" type="text" placeholder="Entrer votre nom">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="Entrer votre email">
                </div>
                <div>
                    <label for="téléphone">Téléphone</label>
                    <input id="téléphone" name="téléphone" type="text" placeholder="Entrer votre numéro de téléphone">
                </div>
                <div>
                    <label for="subject">sujet</label>
                    <input id="subject" name="subject" type="text" placeholder="Le sujet de votre message">
                </div>
                <div>
                    <label for="message">message</label>
                    <textarea id="message" name="message" type="text" placeholder="Entrer votre message"></textarea>
                </div>
                <div>
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </section>
<?php
    // 1 vérifier que la request à bien été soumise
    // 2 récupérer les données
    // 3 vérifier les données
    // 4 nettoyer les données
    // 5 renvoyer les données


    // 1 vérifier que la request à bien été soumise
    // c'est une super globale qui va vérifier "SI" on lui envoit une request, si on lui à bien envoyé une request alors on le verra 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // les étapes de traitement seulement si la request a été soumise
        // var_dump("hello");
        // 2 on va récupérer les données

        $pseudo = $_POST["pseudo"] ?? '';
        $email = $_POST["email"] ?? '';
        $téléphone = $_POST["téléphone"] ?? '';
        $sujet = $_POST["subject"] ?? '';
        $message = $_POST["message"] ?? '';
        var_dump($pseudo, $email, $téléphone, $message, $sujet);

        // 3 Vérifier les données
        // vérifier que j'ai bien reçu les données
        // si une donnée est vide je redirige le message
        $erros = [];
        // si le champs est vide est qu'une request est envoyé, ça vérifie et si il n'y a rien dans le champs un message va s'afficher selon le champs manquant
        if(empty($pseudo)){
            $errors[] = "Votre pseudo n'est pas renseigné";
            
        }
        if(empty($email)){
            $errors[] = "Votre email n'est pas renseigné";
            
        }
        if(empty($téléphone)){
            $errors[] = "Votre numéro de téléphone n'est pas renseigné";
            
        }
        if (!preg_match('/^0[67][0-9]{8}$/', $téléphone)) {
            echo " Votre numéro de téléphone invalide.";
            exit;
        }
         if(empty($sujet)){
            $errors[] = "Votre sujet n'est pas renseigné";
            
        }
         if(empty($message)){
            $errors[] = "Votre message n'est pas renseigné";
        }
        // var_dump($errors);
        
        // => message pour $téléphone si le champs est renseigné mais le numéro n'est pas bon
        // ^ => début de la chaîne, 0 => commence par 0,
        // [67] => commente ensuite par 6 ou 7 (Tél en France), [0-9]{8} => 8 chiffres au total 10 chiffres avec 0 suivi du 6 ou 7, $ => fin de la chaîne
        
        // if (!preg_match('/^0[67][0-9]{8}$/', $téléphone)) {
        //     echo " Votre numéro de téléphone invalide.";
        //     exit;
        // }
        // 4 nettoyer les données (les traiter)
        if (empty($errors)) {

            $pseudo = htmlspecialchars(trim($pseudo));
            $email = htmlspecialchars(trim($email));
            $téléphone = htmlspecialchars(trim($téléphone));
            $sujet = htmlspecialchars(trim($sujet));
            $message = htmlspecialchars(trim($message));
            // var_dump("hello world", $pseudo, $email, $sujet, $message);
        }
            // 5 renvoyer les données
        if (empty($errors)){
            // j'affiche le message de reussite
            ?>
                <div>
                    Bonjour <? $pseudo ?>, nous avons pris en compte votre demande avec succès.
                </div>
            <?php
        }else{
            // j'affiche les erreurs
            var_dump($errors);
            foreach($errors as $error) {
                ?>  
                    <div>
                        <span class="error"><? error ?></span>
                    </div>
                <?php
            }
        }
        
    }

    // input mail
    // input phone (regex)
    // mes champs de type string est une taille minimum de 5 charactères et max de 255 charactères
?>
</body>
</html>