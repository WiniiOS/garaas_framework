# garaas_framework
Mise en place d'une architecture MVC de gestion de projets web PHP/NPM/Composer/Javascript/Nodejs Sans aucun framework

Creation process:

Écrire le modèle (et créer au besoin des tables en base).

Écrire le contrôleur, pour récupérer les informations et les envoyer à la vue.

Écrire la vue, pour afficher les informations.

Mettre à jour le routeur, pour envoyer vers le bon contrôleur.


model.php : le modèle, qui contient différentes fonctions pour récupérer des informations dans la base.

index.php : le contrôleur de la page d'accueil. Il fait le lien entre le modèle et la vue.

indexView.php : la vue de la page d'accueil. Elle affiche la page.

post.php : le contrôleur d'un billet et ses commentaires. Il fait le lien entre le modèle et la vue.

postView.php : la vue d'un billet et ses commentaires. Elle affiche la page.
