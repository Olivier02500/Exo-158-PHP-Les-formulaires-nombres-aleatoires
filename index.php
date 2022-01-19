<?php
/*
- Créer un script php qui permet de générer un nombre aléatoire compris entre x et y
- Coté front, créer un formulaire acceptant deux valeurs : x et y
- Envoyer le formulaire au script php et retourner le nombre aleatoire généré


- Pour générer un nombre aléatoire en PHP , vous pouvez utiliser la méthode mt_rand() ou rand()

http://php.net/manual/fr/function.mt-rand.php
*/

?>

<form action="form.php" method="post">
    <div>
        <label for="numberMin">nombre mini</label>
        <input type="number" name="numberMin" id="numberMin" required>
    </div>
    <div>
        <label for="numberMax">nombre max</label>
        <input type="number" name="numberMax" id="numberMax" required>
    </div>
    <div>
        <input type="submit" name="submit">
    </div>
</form>