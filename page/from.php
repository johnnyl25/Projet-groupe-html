<?php include "../include/header.php"; ?>

<section>

<h2>Les formulaires</h2>
<article>
<h3></h3>

<h1> les formulaires </h1>

<p> Le HTML met à notre disposition une série d’éléments qui vont nous permettre de créer nos formulaires. <br><br>

Ces différents éléments vont nous permettre de définir le formulaire en soi, de créer des zones de saisie de texte 
courtes ou longues, de proposer des zones d’options à nos utilisateurs, etc.</p>

<h2> L’élément form </h2>

<p>Pour définir un formulaire en HTML, nous allons utiliser l’élément form qui signifie « formulaire » en anglais.<br><br>

Cet élément form va avoir besoin de deux attributs pour fonctionner normalement : les attributs method et action.<br><br>

L’attribut method va indiquer comment doivent être envoyées les données saisies par l’utilisateur. Cet attribut peut prendre deux valeurs : get et post.<br><br>

Voici donc le squelette d’un formulaire HTML : </p>

<div style="border:5px solid blue;width: 700px; height=300px"   >

    <img src="../img/element-form.png" alt="image element-form"
   
    height="300px" 
    width="700px"
    >

</div>


<h2>Les éléments HTML input, textarea et label </h2>

<p>L’élément input est l’élément le plus utilisé dans les formulaires HTML. Il va nous permettre de créer la majorité des champs de notre formulaire. <br><br>

L’élément input se présente sous la forme d’une balise orpheline et possède un attributtype auquel on va pouvoir donner de nombreuses valeurs. <br><br>

En changeant la valeur de l’attribut type, nous allons changer le type de données qui vont pouvoir être envoyées via notre élément input et allons ainsi par exemple pouvoir créer un champ de saisie de texte mono-ligne, un champ contenant des zones d’options ou encore le bouton permettant l’envoi des données du formulaire rentrées par l’utilisateur.<br><br>

L’élément textarea va nous permettre de créer un champ de texte multi-lignes, pouvant accueillir par exemple un commentaire ou une présentation d’un utilisateur. Cet élément est également communément utilisé au sein des formulaires HTML.<br><br>

Finalement, nous allons utiliser l’élément label pour décrire à l’utilisateur ce qu’il doit rentrer dans chaque champ du formulaire. Nous allons lier un label à un élément de formulaire grâce aux attributs for (pour le label) et id (pour l’élément de formulaire). <br><br>

Il faudra donner strictement la même valeur aux attributs for et id afin de « lier » entre eux un label et un élément de formulaire. Vous pouvez donner la valeur que vous voulez, mais essayez de rester cohérent et logique dans la mesure du possible.</p> 

<h2>L’attribut name</h2>

<p>Nous allons également devoir préciser un attribut name pour chaque élément de notre formulaire demandant des informations à un utilisateur. <br><br>

Cet attribut name va nous permettre, par la suite, de reconnaître le contexte de chaque donnée envoyée par l’utilisateur afin de pouvoir les traiter efficacement.<br><br>

En effet, sans attribut name, nous recevrions des données mais ne saurions pas quoi en faire, ne sachant pas à quel champ elles appartiennent.<br><br>

Cet attribut est donc indispensable. Vous pouvez une nouvelle fois lui attribuer la valeur souhaitée. Seule restriction : cette valeur doit être unique afin de bien pouvoir identifier chaque champ.</p>


<h2>Créer un formulaire HTML simple</h2>

<p>Nous allons créer notre premier formulaire en HTML. Dans ce formulaire, nous allons demander :
<ul>
    <li>Un pseudonyme à l’utilisateur, avec un input de type « text » ;</li>
    <li>Une présentation, avec un élément textarea.</li>
</ul>

Nous penserons également à créer un label pour chaque information demandée ainsi qu’un bouton d’envoi des données du formulaire.

Voici comment on va procéder :
</p>

<img src="../img/formulaire-simple.png" alt="image element-form"  height="400px" width="700px" >

<h3>Résultat</h3>

<div style="border:5px solid blue;width: 700px; height:400"  >

<h1>Les formulaires HTML</h1>
        
        <form method="post" action="traitement.php">
            <label for="pseudo">Entrez un pseudo : </label>
            <input type="text" name="pseudo" id="pseudo"><br><br>
                
            <label for="presentation">Présentation : </label>
            <textarea name="prez" id="presentation"></textarea><br><br>
                
            <input type="submit" value="Envoyer">
        </form>

</div>


<h2> select </h2>

<p>L'élément HTML &lt;select&gt; représente un contrôle qui fournit une liste d'options parmi lesquelles l'utilisateur pourra choisir..</p>

 <h3> Un exemple simple </h3>

<textarea id="story" name="story"
          rows="10" cols="100">

<label for="pet-select">Choose a pet:</label>

<select id="pet-select">
    <option value="">--Please choose an option--</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="hamster">Hamster</option>
    <option value="parrot">Parrot</option>
    <option value="spider">Spider</option>
    <option value="goldfish">Goldfish</option>
</select>

</textarea>

<h3>Résultat</h3>



<label for="pet-select">Choose a pet:</label> <br>

<select id="pet-select">
    <option value="">--Please choose an option--</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="hamster">Hamster</option>
    <option value="parrot">Parrot</option>
    <option value="spider">Spider</option>
    <option value="goldfish">Goldfish</option>
</select>
<br>









<aside> 


</aside>
<h3></h3>
<p></p>
<aside></aside>
</article>
</section>

<?php include "../include/footer.php"; ?>