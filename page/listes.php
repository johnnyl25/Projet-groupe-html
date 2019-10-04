<?php 
$titre='Les balises Listes';
require "../include/header.php";
 ?>

<section>
    <h2>Les balises listes</h2>
        <hr>
        <article>
            <aside class="text">
            <h3>Balise &lt;ul&gt;</h3>
            <p>L'élément HTML &lt;ul&gt; représente une liste d'éléments sans ordre particulier. Il est souvent représenté par une liste à puces.</p>
            </aside>
            <aside class="exemple">
            <img src="../img/baliseul_example.png" alt="code balise ul" >
            <img src="../img/baliseul_result.png" alt="code balise ul result">
            </aside>
        </article>
        <hr>
        <article>
            <aside class="text">
            <h3>Balise &lt;li&gt;</h3>
            <p>L'élément HTML &lt;li&gt; est utilisé pour représenter un élément dans une liste.<br>
            Il doit être contenu dans un élément parent : une liste ordonnée (&lt;ol&gt;), une liste non ordonnée (&lt;ul&gt;) ou un menu (&lt;menu&gt;).<br>
            Dans les menus et les listes non ordonnées, les éléments de liste sont habituellement affichés en utilisant des puces.<br>
            Dans les listes ordonnées, ils sont habituellement affichés avec compteur croissant à gauche, tel qu'un nombre ou une lettre.</p>
            <h4>Attribut</h4>
            <p>value :<br>
            Cette valeur entière indique la valeur ordinale en cours de l'élément de liste tel que défini par l'élément &lt;ol&gt;.<br>
            La seule valeur autorisée pour cet attribut est un nombre, même si la liste est affichée avec des chiffres romains ou des lettres.<br>
            Les éléments de la liste qui suivent celui-ci continueront la numérotation à partir de la valeur indiquée.<br>
            L'attribut value n'a pas de signification pour les listes non ordonnées (&lt;ul&gt;) ou pour les menus (&lt;menu&gt;).
            </p>
            </aside>
            <aside class="exemple">
            <img src="../img/baliseli_example.png" alt="code balise li">
            <img src="../img/baliseli_result.png" alt="code balise li result">
            </aside>
        </article>
</section>

<?php include "../include/footer.php"; ?>