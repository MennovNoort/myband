<head>
    <link rel="stylesheet" href="css/main.css">
</head>
<section>
    {foreach from=$result item=oneItem}
    <h3 class="titel">{$oneItem.titel}</h3>
    <img class="fotos" src="images/{$oneItem.foto}">
    <p class="tekst">{$oneItem.text}</p>
    <p>{$oneItem.datum}</p>
    <hr>
    {/foreach}
</section>