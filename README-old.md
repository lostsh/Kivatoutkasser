# Utilisation de la framboise
## Utils & Obligatoire

Nous allons tous utiliser le même utilisateur, c'est pourquoi je vous demanderais d'avoir une utilisation respectueuse
 
|Usage						|ID	|PASSWD|
|-----------------------------------------------|-------|------|
|SH / SFTP / connection classique RDP VNC ...	|pi	|ip    |
|phpmyadmin					|root	|toor  |
|FTP						|pi	|ip    |

      
**Attention** : le dossier pour héberger les sites est *
classiquement* `/var/www/html` MAIS ne supprimez pas le lien dur vers le dossier `phpmyadmin` il permet de directement depuis l'adresse d'acceder au gestionnaire de bdd.


Si vous me maitrisez pas une manipulation ou quoi que ce soit DEMANDER A UN CAMARADE PARCE QUE L'ENTRAIDE C TROP COOL d'autre pars une mauvaise manipulation peut entrainer l'inutilisabilitée du systèmes car j'ai mis a notre utilisateur commun en sudoer *(pour ceux qui ne savent pas en gros vous etes superman et vous pouvez supprimer .. le système d'exploitation (sudo c'est le super user et sudoer c'est les utilisateurs qui ont droit de sudo))* donc on peut **TRÈS** facilement deffoncer le system, c'est pourquoi pour que nous puissions travailler dans de bonnes conditions prenez vos précautions et si vous avez n'importe quelle question posez la moi avant de tester, je me ferais un plaisir de vous repondre tout en ventant les mérites de la jeune framboise !
      
  
## Informations compémentaire pour les test des pages l'habergement et la bdd

## Héberger une page html / PHP

Copiez votre page dans le repertoire <b>/var/www/html/</b> puis votre page sera accessible.<br>
Pour acceder a la page web, vous pouvez entrer dans le navigateur l'url du raspberry pi c'est a dire soit son ip du type 192.168.1.* ou encore si vous ne connaissez pas l'ip de ma pitite framboise vous pouvez aussi entrer son nom c'est a dire <a href="http://zthost/">http://zthost</a>


Une fois la page en place vous pouvez parametrer le SGBD et les bases pour qu'elles répondent a vos attententes, en utilsant l'interface <b>phpmyadmin</b> a laquelle vous pouvez vous connecter tout simplement a l'url <a href="http://zthost/phpmyadmin">http://zthost/phpmyadmin</a> puis nom d'utilisateur et passwd comme dans le tableau en haut de page.

## Utilisation du depot FTP
Le serveur FTP est actif en permanance.


Port 21 host : <a href="ftp://pi:ip@zthost">ftp://zthost</a><br>
Pour l'identifiant et le passwd allez voir dans le tableau

Yohann Verhnes

Le timout est sur environ 2h d'inactivitée
   
