
	


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <?= $content ?>

        <!-- ... -->

	<h2>Commentaires</h2>

	<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
	    <div>
	        <label for="author">Auteur</label><br />
	        <input type="text" id="author" name="author" />
	    </div>
	    <div>
	        <label for="comment">Commentaire</label><br />
	        <textarea id="comment" name="comment"></textarea>
	    </div>
	    <div>
	        <input type="submit" />
	    </div>
	</form>

	<!-- ... -->
        
    </body>
</html>