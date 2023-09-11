## return view()
C'est une fonction permettant de retourner un élément de view. Ce view se trouve dans le dossier ressource.
En laravel il n'est pas conseillé de retourner des éléments de cette manière archaique dans un 

$arr = ["MANGO", 2, 6];
% die and dump s'affiche et s'arrête
dd($user, $arr);
ddd($user, $arr, "");
<!-- les 3d affiches toutes les informations possibles concernant le tableau et son contenu -->

## 
On ne peut afficher deux vues sur une meme page.
le dossier views situé dans le dossier ressources se charge de l'affichage.
View peut prendre un deuxieme argument qui n'est rien d'autre qu'un tableau

## Commentaire

le clone en blade se fait avec {{----}}

pour avoir if else ecrire 'b-' qui donne  
        @if ()
            
        @else
            
        @endif



        L'utilisation de la directive 
        @empty($articles)
           <p>Ceci est strictement interdit</p>
       @endempty

## Creation d'un tableau

php artisan make:migration create_(nom_de_l'articles)_table
en entrant cette commande la table est automatique enregistrée dans le dossier migration dans database. 