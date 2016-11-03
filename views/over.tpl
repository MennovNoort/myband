<head>
    <link rel="stylesheet" href="css/main.css">
</head>
<section>
    {foreach from=$result item=oneItem}
    {if $oneItem.onderwerp eq 'over ons'}
    <h3 class="titel">{$oneItem.titel}</h3>
    <p class="tekst">{$oneItem.text}</p>
    <img class="fotos" src="images/{$oneItem.image}" alt="{$oneItem.alt_image}">
    {/if}
    {/foreach}
</section>