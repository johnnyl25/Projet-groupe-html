<?php include "../include/header.php"; ?>

<section>
<h2>Entete</h2>




<article>

<h2> header </h2>

<p>L'élément HTML &lt;header&gt; représente un groupe de contenu introductif ou de contenu aidant à la navigation. Il peut contenir des éléments de titre, mais aussi d'autres éléments tels qu'un logo, un formulaire de recherche, etc.</p>


<h2> section </h2>

<p>L'élément HTML &lt;section&gt; représente une section générique d'un document, par exemple un groupe de contenu thématique.
 Une section commence généralement avec un titre.</p>

 <h3> Un exemple simple </h3>
 <img src="../img/header-code.png" alt="image element-form"  height="400px" width="700px" >

<h3>Résultat</h3>

<img src="../img/header-img.png" alt="image element-form"  height="400px" width="700px" >


<p>L'élément &lt;header&gt; n'a pas de contenu sectionné et ne peut donc pas introduire une nouvelle section dans le plan du document. Toutefois, un élément <header> 
contient généralement  les titres associés (éléments <h1> <h6>) bien que ce ne soit pas obligatoire.</p>

<h2>Notes d'utilisation</h2>

<p>Bien que l'élément &lt;header&gt; ne fasse pas partie de la spécification HTML avant HTML5, il existait de façon implicite depuis les premières versions. En consultant le premier site web, on peut voir un exemple d'un usage analogue à &lt;head&gt;.
 Ce nom (head) fut ensuite attribué via la spécification et a permis d'utiliser &lt;header&gt; pour un autre rôle.</p>

<h2>&lt;nav&gt; : l'élément de section de navigation</h2>

<p>L'élément HTML &lt;nav&gt; représente une section d'une page ayant des liens vers d'autres pages ou des fragments de cette page. Autrement dit, c'est une section destinée à la navigation dans un document (avec des menus, des tables des matières, des index, etc.).</p>

<h2>Notes d'utilisation</h2>

<ul>
   <li>Tous les liens d'un document ne doivent pas faire partie d'un élément &lt;nav&gt;. Ce dernier est fait pour créer des blocs conséquents contenants des liens de navigations au sein du document. L'élément &lt;footer&gt; possède souvent différents liens, il n'a pour autant pas besoin d'être dans un élément &lt;nav&gt;.</li>
   <li>Un document peut avoir plusieurs éléments &lt;nav&gt;, par exemple un pour la navigation sur le site et  un autre pour la navigation au sein de la page. L'attribut aria-labelledby pourra être utilisé afin d'améliorer l'accessibilité.</li>
   <li>Les agents utilisateurs, tels que les lecteurs d'écrans assistant les utilisateurs handicapés, peuvent utiliser cet élément pour déterminer s'il faut omettre ou non le rendu initial du contenu relatif uniquement à la navigation.</li>
</ul>


<h2>Exemples</h2>
<h2>HTML</h2>
<img src="../img/nav-html.png" alt="image element-form"  height="200px" width="700px" >
<h2>Résultat</h2>
<img src="../img/nav-res.png" alt="image element-form"  height="300px" width="500px" >

<aside></aside>
<h3></h3>
<p></p>
<aside></aside>
</article>
</section>

<?php include "../include/footer.php"; ?>