<?php include "../include/header.php"; ?>

<section>
    <h2>Les images</h2>
    <hr>
    <article>
        <aside class="text">
        <h3>La balise &lt; IMG &gt;</h3>
        <p>La balise img permet de représenter une image dans un document ou d'un lien.<br>
            La balise utilises des attributs universels, spécifique et obsolète : <br>
            width et height : <br>
            Indique la dimension de l'image. <br>
            src : <br>
            Est obligatoir car il permet de faire le chemin jusqu'à l'image dans les documents, ou de retrouver l'image via un URL. <br>
            alt : <br>
            Définit un texte alternatif utiliser lorsque l'image ne s'affiche pas.</p>
        </aside>
        <aside>
        <img src="../img/img-html.png" alt="Exemple code html">
        <img src="https://interactive-examples.mdn.mozilla.net/media/examples/grapefruit-slice-332-332.jpg" alt="Résultat du code html">
        </aside>
    </article>
</section>

<?php include "../include/footer.php"; ?>