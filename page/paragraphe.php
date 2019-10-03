<?php 
$titre='Les Balises paragraphe';
require "../include/header.php";
 ?>

<section>
    <h2>Les balises paragraphes</h2>
        <article>
            <aside class="text">
            <h3>Balise &lt;pre&gt;</h3>
            <p>L'élément HTML &lt;pre&gt; représente du texte préformaté, généralement écrit avec une police à chasse fixe.<br>
            Le texte est affiché tel quel, les espaces utilisés dans le document HTML seront retranscrits.</p>
            </aside>
            <aside class="exemple">
            <img src="../img/balisepre_example.png" alt="code balise pre" >
            <img src="../img/balisepre_result.png" alt="code balise pre result" >
            </aside>
        </article>
        <hr>
        <article>
            <aside class="text">
            <h3>Balise &lt;p&gt;</h3>
            <p>L'élément HTML &lt;p&gt; représente un paragraphe de texte.<br>
            Les paragraphes sont généralement représentés comme des blocs et séparés par un espace vertical, leur première ligne est également parfois indentée.<br>
            Les paragraphes sont des éléments blocs.</p>
            </aside>
            <aside class="exemple">
            <img src="../img/balisep_example.png" alt="code balise p" >
            <img src="../img/balisep_result.png" alt="code balise p result">
            </aside>
        </article>
</section>

<?php include "../include/footer.php"; ?>