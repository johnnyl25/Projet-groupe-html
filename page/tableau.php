<?php 
$titre='Les balises tableau';
require "../include/header.php";
 ?>

<section>
    <h2>Le tableau</h2>
    <article>
        <aside class="text">
            <h3>La balise &lt; TABLE &gt;</h3>
            <p>La balise table sert à représenter un tableau. <br>
                La balise utilises les attributs universels et des attributs dépréciés: <br>
                align : <br>
                Indique la manière dont la table doit être aligné en regard du document qui la contient. <br>
                bgcolor : <br>
                Définit la couleur de fond. <br>
                border : <br>
                Définit la taille de la bordure du tableau. <br>
                cellpadding : <br>
                Définit la taille de l'espace entre le contenu d'une cellule et sa bordure. <br>
                cellspacing : <br>
                Définit la taille de l'éscpace entre deux cellules. <br>
                frame : <br>
                Définit les côtés du tableau sur lesquels dessiner une bordure. Il peut prendre les valeurs suivantes : above, hsides, lhs, border, void, below, vsides, rhs, box. <br>
                rules : <br>
                Définit la manière dont les traits doivent apparaître au sein du tableau. <br>
                summary : <br>
                Définit un texte alternatif pour décrire le tableau, dans le cas où le tableau ne s'affiche pas. Généralement utilisé pour les personne souffrant de déficience visuelle. <br>
                width : <br>
                Définit la largeur du tableau.
            </p>
        </aside>
        
        <aside class="exemple">
        <img class="grande-img" src="../img/table-html.png" alt="Exemple code html">
        <img src="../img/table-result.png" alt="Résultat du code html">
        </aside>
    </article>
    <hr>
    <article>
        <aside class="text">
            <h3>La balise &lt; TR &gt;</h3>
            <p>La balise tr permet de définir une ligne dans un tableau, pour contenir des cellules. <br>
            La balise utilises les attributs universels et des attribut dépréciés ou obsolètes : <br>
            align : <br>
            Définit l'alignement horizontal pour le contenu des cellules. <br>
            bgcolor : <br>
            Définit la couleur de font de toutes les cellules de la collone. <br></p>
        </aside>
        
        <aside class="exemple">
        <img src="../img/td-html.png" alt="Exemple code html">
        <img src="../img/td-result.png" alt="Résultat du code html">
        </aside>
    </article>
    <hr>
    <article>
        <aside class="text">
            <h3>La balise &lt; TD &gt;</h3>
            <p>La balise td définit la cullule d'un tableau.<br>
            La balise utilises les attributs universels, spécifique et obsolètes : <br>
            colspan : <br>
            Indique le nombre de colonnes sur lesquels s'étend la cellule. <br>
            headers : <br>
            C'est une liste de chaîne de caractères séparées par des espaces. Chaque correspond à l'attribut id de l'élément &lt; TH &gt; qui s'applique à la cellule. <br>
            rowspan : <br>
            Indique le nombre de ligne sur lesquels s'étend la cellule. <br>
            abbr : <br>
            Contient une description courte et abrégée du contenu de la cellule.</p>
        </aside>
        
        <aside class="exemple">
        <img src="../img/td-html.png" alt="Exemple code html">
        <img src="../img/td-result.png" alt="Résultat du code html">
        </aside>
    </article>
</section>

<?php include "../include/footer.php"; ?>