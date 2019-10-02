<?php include "../include/header.php"; ?>

<section>
    <h2>Les balises caractères</h2>
        <article>
            <h3>balise &lt;b&gt;</h3>
            <p>L'élément &lt;b&gt; permet d'attirer l'attention du lecteur sur le contenu d'un élément sans que ce contenu revêt une importance particulière.<br>
             Anciennement utilisé pour mettre le texte en gras.<br>
             Cet élément ne doit pas être utilisé pour mettre en forme des éléments, c'est la propriété CSS font-weight qu'il faut utiliser.<br>
             Si l'élément est d'une importance particulière, on utilisera l'élément HTML &lt;strong&gt;.</p>
            <aside>
            <img src="../img/baliseb_example.png" alt="code balise b">
            <img src="../img/baliseb_result.png" alt="code balise b result">
            </aside>
            <h3>balise &lt;i&gt;</h3>
            <p>L'élément HTML &lt;i&gt; représente un morceau de texte qui se différencie du texte principal.<br>
            Cela peut par exemple être le cas pour des termes techniques, des phrases dans une langue étrangère ou encore l'expression des pensées d'un personnage.<br>
            Le contenu de cet élément est généralement affiché en italique.</p>
            <aside>
            <img src="../img/balisei_example.png" alt="code balise i" >
            <img src="../img/balisei_result.png" alt="code balise i result" >
            </aside>
            <h3>balise &lt;u&gt;</h3>
            <p>L'élément HTML &lt;u&gt; permet d'afficher un fragment de texte qui est annoté avec des éléments non textuels.<br>
            Par défaut, le contenu de l'élément est souligné.<br>
            Cela pourra par exemple être le cas pour marquer un texte comme étant un nom propre chinois, ou pour marquer un texte qui a été mal orthographié.</p>
            <aside>
            <img src="../img/baliseu_example.png" alt="code balise u" >
            <img src="../img/baliseu_result.png" alt="code balise u" >
            </aside>
            <h4>Attributs</h4>
            <p>accesskey :<br><br><!--Mettre le texte en gras-->
            Cet attribut fournit une indication permettant de générer un raccourci clavier pour l'élément courant.<br>
            Cet attribut se compose d'une liste de caractères séparés par des espaces.<br>
            Le navigateur doit utiliser le premier caractère qui existe selon la disposition du clavier utilisée.</p>
            <p>class :<br><br><!--Mettre le texte en gras-->
            Une liste de classes, séparées par des espaces, qui permettent de catégoriser l'élément.<br>
            Les classes permettent au CSS et à JavaScript de manipuler des éléments spécifiques grâce à des sélecteurs de classe (pour CSS)<br>
            ou grâce à des fonctions telles que Document.getElementsByClassName() (pour JavaScript).</p>
        </article>
</section>

<?php include "../include/footer.php"; ?>