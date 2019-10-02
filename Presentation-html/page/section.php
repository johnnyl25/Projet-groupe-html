<?php include "../include/header.php"; ?>

<section>
<h2>Section</h2>
<article>
<h3></h3>
<p></p>





<h2> section </h2>

<p>L'élément HTML &lt;section&gt; représente une section générique d'un document, par exemple un groupe de contenu thématique.
 Une section commence généralement avec un titre.</p>

 <h3> Un exemple simple </h3>

<textarea id="story" name="story"
          rows="20" cols="100">

 <section>

     <h1>Introduction</h1>
    <p>People have been catching fish for food since before recorded history…</p>

</section>

<section>

<h1>Equipment</h1>

    <p>The first thing you’ll need is a fishing rod or pole that you find comfortable and 
    is strong enoughfor the kind of fish you’re expecting to land…</p>

</section>

</textarea>

<h3>Résultat</h3>

<div style="border:5px solid blue;width: 700px;"  >

<section>
    <h1>Introduction</h1>
    <p>People have been catching fish for food since before recorded history…</p>
</section>

<section>
    <h1>Equipment</h1>
    <p>The first thing you’ll need is a fishing rod or pole that you find comfortable and is strong enough for the kind of fish you’re expecting to land…</p>
</section>

</div>


<h2>&lt;article&gt; : l'élément de contenu d'un article</h2>

<p>L'élément HTML &lt;article&gt; représente du contenu autonome dans un document, une page, une application, ou un site. Ceci peut être un message sur un forum, un article de journal ou de magazine, une parution sur un blog, un commentaire d'utilisateur, un widget ou gadget interactif, ou tout autre élément de contenu indépendant. 
Ce contenu est prévu pour être distribué ou réutilisé indépendamment (par exemple dans un flux de syndication).</p>

<ul>
    <li>Chaque &lt;article&gt; autonome, qui n'est pas imbriqué dans un autre élément &lt;article&gt;, 
    devrait être identifié typiquement, en incluant un élément d'en-tête &lt;header&gt;
     qui comprendrait lui-même un élément de titre &lt;h1&gt; à &lt;h6&gt;.</li>

    <li>Quand un élément &lt;article&gt; est imbriqué dans un autre, l'élément contenu représente un article relatif à l'élément contenant. 
    Par exemple, les commentaires d'une parution de blog peuvent être un élément &lt;article&gt;
    inclus dans l'&lt;article&gt; représentant la parution en elle-même.</li>

    <li>Des informations à propos de l'auteur d'un élément &lt;article&gt; peuvent être fournies au travers de l'élément &lt;address&gt;, 
    mais cela ne s'applique pas aux éléments &lt;article&gt; imbriqués.</li>

    <li>La date et l'heure de publication d'un élément &lt;article&gt; peuvent être donnés en utilisant l'attribut datetime d'un élément
     &lt;time&gt;. Notez que l'attribut pubdate de &lt;time&gt; ne fait plus partie de la norme W3C HTML 5.</li>
</ul>

<h2>Exemples</h2>

<h2>HTML</h2>
<img src="../img/article-html.png" alt="image element-form"  height="300px" width="500px" >

<h2>Résultat</h2>
<img src="../img/article-img.png" alt="image element-form"  height="300px" width="500px" >





<aside></aside>
<h3></h3>
<p></p>
<aside></aside>
</article>
</section>

<?php include "../include/footer.php"; ?>