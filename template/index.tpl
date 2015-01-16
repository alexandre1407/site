<div class="row">

    <div class="span8">
	{if isset($notif)}
        <div class="alert alert-success" id="notif">
		{$notif}
		</div>
		{/if}
        {foreach from=$montab item=tabform}
             <h2> {$tabform['titre']} </h2>
                <img src="img/{$tabform['id']}.jpg" class="img-rounded"/>
                    <p>{$tabform['texte']}</p>
                    <p>Date : {$tabform['date_fr']}</p>  
				<a href="article.php?id={$tabform['id']}" >Modifier</a> - <a href="suppression.php?id={$tabform['id']}">Supprimer</a>
        {/foreach}
        
        <div class="pagination"><ul>
        {for $i=1 to $tabpag}
            
                {*pagination liens*}<li><a href="index.php?p={$i}">{$i} </a></li> 
        {/for}
		</ul>
        </div>
</div>