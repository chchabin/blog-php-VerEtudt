<form method="post" action="index.php?uc=controleur&action=supprimer">
    <?php foreach ($billets as $billet):?>""
        <article>
            <header>
                <input type="hidden" value="0"><!--Permet de passer le chekbox en post car sinon il passe en get-->
                <input type="checkbox" name="mon_billet[]" value="<?= $billet['id']; ?>" <?= (isset($billet['id']) ? '' : 'checked'); ?>> <?= $billet['titre']; ?>  </br>
                <time><?= $billet['date'] ?></time>
            </header>
            <p><?= $billet['contenu'] ?></p>
        </article>
        <hr />
    <?php endforeach; ?>
    <div>
        <button>Envoyer</button>
    </div>
</form>
