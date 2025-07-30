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
            <form method="" action="">
                <div>
                    <label for="pseudo">le nom du champ</label>
                    <input id="pseudo" name="pseudo" type="text" required placeholder="Entrer votre nom">
                </div>
                <div>
                    <label for="subject">sujet</label>
                    <input id="subject" name="subject" type="text" required placeholder="Le sujet de votre message">
                </div>
                <div>
                    <label for="message">message</label>
                    <textarea id="message" name="message" type="text" required placeholder="Entrer votre message"></textarea>
                </div>
                <div>
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </section>
</body>
</html>