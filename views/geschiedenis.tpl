<head>
    <link rel="stylesheet" href="css/main.css">
</head>
    <div id="ajax_amsterdam">
        <div class="ajax_titel">
            Ajax Amsterdam
        </div>
        <div class="ajax_tekst">
            Amsterdamsche Football Club "Ajax", kortweg AFC Ajax of gewoon Ajax, is een Nederlandse profvoetbalclub uit Amsterdam. De club is opgericht op 18 maart 1900 en is een van de drie traditionele topclubs in Nederland. Sinds de oprichting van de Eredivisie speelt Ajax onafgebroken in deze hoogste divisie.
        </div>
        
    </div>
    <div id="geschiedenis_oprichting">
        {foreach from=$result item=oneItem}
        {if $oneItem.titel eq 'Oprichting'}
        
        <h3 class="titel">{$oneItem.titel}</h3>
        
        <p class="tekst">
        <iframe id="iframe" width="560" height="315" src="https://www.youtube.com/embed/laXIwrlxIAE" frameborder="0" allowfullscreen></iframe><br>{$oneItem.text}
            <br><img class="fotos" src="images/{$oneItem.image}" alt="{$oneItem.alt_image}">
        </p>
        {/if}
        {/foreach}
    </div>
    <div id="geschiedenis_successen">
        {foreach from=$result item=oneItem}
         {if $oneItem.titel eq 'Succesen'}
        <h3 class="titel">{$oneItem.titel}</h3>

        <p class="tekst">{$oneItem.text}
            <br><img class="fotos" src="images/{$oneItem.image}" alt="{$oneItem.alt_image}">
        </p>
        {/if}
        {/foreach}
    </div>
    <div>
         {foreach from=$result item=oneItem}
        {if $oneItem.onderwerp eq 'geschiedenis'}
         {if $oneItem.titel neq 'Oprichting'}
         {if $oneItem.titel neq 'Succesen'}
        <h3 class="titel">{$oneItem.titel}</h3>

        <p class="tekst">{$oneItem.text}
            <br><img class="fotos" src="images/{$oneItem.image}" alt="{$oneItem.alt_image}">
        </p>
        <hr>
        {/if}
        {/if}
        {/if}
        {/foreach}
    </div>


