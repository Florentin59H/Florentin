# COO-Projet

# Etudiants
- Florentin Havart
- Florentin Bugnon

# Introduction

Nous cherchons à représenter des compétitions sportives. La nature des compétitions et des matchs peut changer. Par exemple, une compétition peut être sous la forme d'un tournoi à élimination directe ou un championnat avec un système de points. De plus, les rencontres peuvent être équilibrées ou truquées.

# HowTo

## Récupérer le projet

Ouvrez une invite de commande Placez-vous dans le dossier dans lequel vous voulez récupérer le projet.
Entrez la commande suivante :
> git clone git@gitlab-etu.fil.univ-lille1.fr:bugnon/coo-projet.git MonRépertoireDestination

Veillez à remplacer "MonRépertoireDestination" par le nom de répertoire que vous souhaitez.

## Générer la documentation
Placez-vous à la racine du projet et éxécutez la commande suivante:
> make doc

Si vous n'avez pas make, vous pouvez utiliser la ligne de commande suivante :
>cd ./src

>javadoc ./jeu/*.java -d ../doc

Les fichiers de documentation se trouveront alors dans le dossier "doc" situé à la racine du projet.

## Générer une archive
Placez-vous à la racine du projet et éxécutez la commande suivante:
>make archive

Si vous n'avez pas make, vous pouvez utiliser la ligne de commande suivante :
> cd ./src

> javac ./jeu/*.java -d ../classes

> cd ../classes

> jar cvmf ../jar/MANIFEST.MF ../jar/Competition.jar jeu util

## Executer l'archive
Placez vous dans le répertoire jar et éxécutez la ligne de commande suivante :

> make play

Ou si vous n'avez pas la possibilité d'utiliser make:

>java -jar Competition.jar


# Mise en avant
-Utilisation du principe de MOCK pour vérifier l'appel de la fonction "play()".
-Création d'un fichier 'listSizeException' qui permet de gérer les contraintes numériques en fonction du type de compétition.
-Utilisation d'un itérateur dans la méthode "Ranking()" de Competition.

# Lien du diagramme de classes effectué sur LucidChart
https://lucid.app/lucidchart/1d76c1c3-a3f2-4023-91c8-d48834518732/edit?viewport_loc=-115%2C-85%2C2920%2C1441%2C0_0&invitationId=inv_2ae887ea-0ded-409e-b154-c6037d8ad48f