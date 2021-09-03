<form method="post" action="index.php?uc=controleur&action=ajouter">
    <div>
        <label for="untitre">Veuillez choisir le titre du billet:</label>
        <input type="text" name="untitre" id="untitre">
    </div>
    <div>
        <label for="uncontenu">Veuillez saisir le contenu du billet :</label><br/>
        <textarea name="uncontenu" id="uncontenu"
                  rows="10" cols="50" placeholder="Vous pouvez écrire ici."></textarea>
    </div>
    <div>
        <button>Envoyer</button>
    </div>
</form>