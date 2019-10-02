<?php include "../include/header.php"; ?>

<section>
<h2>Balise Div (&lt;div&gt &lt;/div&gt ) </h2>


<article>

<h3> Définition et usage de la balise Div (&lt;div&gt &lt;/div&gt ) </h3>
La balise &lt;div&gt &lt; définit une division ou une section, appelé aussi calque, dans un document HTML. <br><br>

La balise &lt; div &gt; est utilisée pour regrouper des éléments sous forme de bloc et ainsi pouvoir les formater en CSS.

<h2>Attributs </h2>

<p>Comme tous les autres éléments HTML, cet élément accepte les attributs universels. <br><br>
Note : L'attribut align est désormais obsolète et ne doit plus être appliqué pour un &lt;div&gt;. On privilégiera l'utilisation des propriétés et outils CSS 
(tels que la grille CSS ou les boîtes flexibles (flexbox)) pour aligner et positionner des éléments &lt;div&gt;.
</p>

<h2>Notes d'utilisation</h2>

L'élément &lt;div&gt; doit uniquement être utilisé lorsqu'il n'existe aucun autre élément dont la sémantique permet de représenter le contenu (par exemple &lt;article&gt; ou &lt;nav&gt;).

<h2> Exemples </h2>

<h3> Un exemple simple </h3>

<textarea id="story" name="story"
          rows="7" cols="50">

   <div>

        <h3>Titre ou en-tête</h3>
        <p>Ceci est un paragraphe.</p>

    </div>

</textarea>

<h3>Résultat</h3>

<div style="border:5px solid blue;width: 560px;"  >

<h3>Titre ou en-tête</h3>
<p>Ceci est un paragraphe.</p>

</div>

<aside></aside>
<h3></h3>
<p></p>
<aside></aside>
</article>

</section>

<?php include "../include/footer.php"; ?>