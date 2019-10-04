<?php 
$titre='Les balises formulaire';
require "../include/header.php";
 ?>

<section>
    <h2>formulaire</h2>
    <hr>
    <article>
    <aside class="text">
        <h3>formulaire <strong>&lt; from &gt;</strong></h3>

        <p>     Le HTML met à notre disposition une série d’éléments qui vont nous permettre de créer nos formulaires. <br><br>
                Ces différents éléments vont nous permettre de définir le formulaire en soi, de créer des zones de saisie de texte 
                courtes ou longues, de proposer des zones d’options à nos utilisateurs, etc.</p>

        </aside>
        <aside class="exemple">
            <img src="../img/formulaire-html.png" alt="Exemple code html"> 
            <img src="../img/formulaire-result.png" alt="Résultat du code html">
        </aside>
    </article>

   <hr>
   <h2>Les éléments HTML input, textarea et label </h2>
   <hr>

    <article>
        <aside class="text">
            <h3>input &lt; input type="text" &gt;</h3>

            <p>Les éléments &lt;input&gt; dont l'attribut type vaut "text" permettent de créer des champs
             de saisie avec du texte sur une seule ligne.</p>
             
             <h3>textarea &lt; textarea &gt;</h3>

            <p>L'élément HTML &lt;textarea&gt; représente un contrôle qui permet d'éditer du texte sur plusieurs lignes.</p>
            
            <h3>label &lt; label &gt;</h3>

            <p>L'élément HTML &lt;label&gt; représente une légende pour un objet d'une interface utilisateur. Il peut être associé à un contrôle en utilisant l'attribut for ou en plaçant l'élément du contrôle à l'intérieur de l'élément &lt;label&gt;.
             Un tel contrôle est appelé contrôle étiqueté par l'élément &lt;label&gt;.</p>
        </aside>     
        <aside class="exemple">
            <img class="reduir-img" src="../img/input-html.png" alt="Exemple code html">
            <img class="reduir-img" src="../img/input-result.png" alt="Résultat du code html">
            <img class="reduir-img" src="../img/label-html.png" alt="Exemple code html">
            <img class="reduir-img" src="../img/label-result.png" alt="Résultat du code html">
        </aside>
    </article>
    <hr>

    <article>
    <aside class="text">
        <h3>select   <strong>&lt; select &gt;</strong></h3>

        <p>    L'élément HTML &lt;select&gt; représente un contrôle qui fournit une liste d'options parmi lesquelles l'utilisateur pourra choisir..</p>

        </aside>
        <aside class="exemple">
            <img class="grande-img" src="../img/select-html.png" alt="Exemple code html"> 
            <img src="../img/select-result.png" alt="Résultat du code html">
        </aside>
    </article>




</section>



<?php include "../include/footer.php"; ?>
