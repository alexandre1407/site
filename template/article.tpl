<div class="row">

        <div class="span8">
			{if isset($smarty.get.id)}
				<h2>Modification d'un article</h2>
			{else}
				<h2>Ajout d'un article</h2>
			{/if}
            <form action="article.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">

                <div class="clearfix">

                    <input type="hidden" name="id" value="{$tabform['id']}"

                    <label for="titre">Titre :</label>
                    <div class="input">
                        <input type="text" name="titre" id="titre" value="{$tabform['titre']}">  {* echo$tab[''] permet de recuperer si on modifie *}
                    </div>

                    <label for="texte">Texte :</label>
                    <div class="input">
                        <textarea type="textarea" name="texte" id="texte" >{$tabform['texte']}</textarea>
                    </div>

                    <label for="image">Image :</label>
                {if !empty($tabform['id'])}    {*si image different de nul alors afficher sinon ne rien afficher (en cas dajout d'article) *}
                    <img src="img/{$tabform['id']}.jpg" width="200px"/>
                {/if}
                    <div class="input">
                        <input type="file" name="image" id="image" value="" placeholder="inserer titre">
                    </div>

                    <br>

                    <label for="publie">Publié :</label>
                    <div class="input">
                        <input type="checkbox" name="publie" id="publie" value="1"{if ($tabform['publie']==1)} checked {/if} >
                    </div>

                    <br>

                    <div>

                        <input type="submit" name="{$nombouton}" value="{$nombouton}" class="btn btn-large btn-primary"> 

                    </div>

                </div>
            </form>
        </div>