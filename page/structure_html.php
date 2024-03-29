<?php 
$titre='Structure html';
require "../include/header.php";
 ?>
<section>
    <h2>Structure des balises (html, head, meta, title)</h2>
        <hr>
        <article>
            <aside class="text">
            <h3>Balise &lt;html&gt; définition : </h3>
            <p>L'élément HTML &lt;html&gt; représente la racine d'un document HTML ou XHTML. <br> Tout autre élément du document doit être un descendant de cet élément.</p>
            </aside>
            <aside class="exemple">
            <img src="../img/balisehtml.png" alt="code html">
            </aside>
        </article>
        <hr>
        <article>
            <aside class="text">
            <h3>Balise &lt; head &gt; définition :</h3>
            <p>L'élément HTML &lt; head &gt; fournit des informations générales (métadonnées) sur le document, <br> incluant son titre et des liens ou des définitions vers des scripts et feuilles de style.</p>
            </aside>
            <aside class="exemple">
            <img src="../img/balisehead.png" alt="code head">
            </aside>
        </article>
        <hr>
        <article>
            <aside class="text">
            <h3>Balise &lt; meta &gt; définition :</h3>
            <p>L'élément HTML &lt;meta&gt; représente toute information de métadonnées qui ne peut pas être représentée par un des éléments (&lt;base&gt;, &lt;link&gt;, &lt;script&gt;, &lt;style&gt; ou &lt;title&gt;)</p>
            <p>Charset :<br>
            Cet attribut déclare l'encodage utilisé par la page. Il peut être outrepassé de manière locale en utilisant l'attribut <span>lang</span> d'un élément.</p>
            </aside>
            <aside class="exemple">
                    <img class="grande-img" src="../img/balisemeta.png" alt="code meta">
            </aside>
        </article>
</section>

<?php include "../include/footer.php"; ?>