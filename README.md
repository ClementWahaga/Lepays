# Lepays


**contexte** : Le journal local “Le Pays” souhaite se moderniser et créer un site internet pour relayer les informations de sa version papier. Monsieur Do le directeur du journal, est très attaché au papier et au confort de lecture que peut fournir ce support. Il souhaite donc que le site soit simple d’utilisation et aussi agréable à la lecture que sa version papier.

**Nature de la demande** : *dematerialisation du journal format papier* 

**Besoins fonctionnelles**:
* les utilisateur pourront accedez au differents rubrique (sport ,politique,actu ...)
* les utilisateurs pourront naviguez intuitivement sur le site grace aux catégorie ou à l'aide de tags
* le site premettra de accedez aux differents articel du journal papiers
* le site sera au norme responsive design pour pouvoir le consultez sur n 'importe quel support numerique 
* le site sera mis a jour dans le 24H , comprendra une "UNE" et une chronologie d'article (récent au plus ancien )
    


**installation de wordpress en local**
 *technologie* : 
*  xampp 
*  wordpress

apres avoir telechager xmapp installé le sur votre pc ,il vous permettra emulé un serveur php et ainsi affiché votre site ecrit en php(cms/cmf : drupal ,wordpress,joomla)
ouvrer le panel  d'administration activé le serveur apache et la phpmydamin pour sgbd ,xampp  par defaut est installé sur le disque C: de votre ordinateur vous devrais trouvé un fichier du meme nom sur le disque local 
ouvrer le , on le parcourant vous trouverez un fichier nommé *htdocs* ouvré le , cree un nouveau fichier et renomme le ,il sera le nom de votre site gardez bien ça en tete 
recupere wordpress qui par defaut et dans un fichier compresse ,decompressé le ouvré le dossier nommé wordpress ,copié tous le contenu du fichier et collé le dans le fichier que vous avez cree dans C:xmapp/htdocx/monpremiersite .le contenu copié dans le dans le fichier attribué vous devrez parametré un fichier nommé *wp-config-sample*:
* -renseigné le nom de votre base de donné que vous auriez au prealable cree depuis phpmyadmin.
* -renseigné le nom de utilisateur :root par defaut que vous pourrais changez plus tard.
* -renseigné un mot de passe que vous devrais laissé vide .

apres avoir renseigné les trois champ sauvergardé ,
ouvrer votre navigateur tapez localhost/monpremiersite
vous arriverez sur la page authentification et installation de wordpress ,renseigné correctement les formulaire (n'oubliez pas l etape precendente elle est primordiale a l installation de votre worpress  ),les formulaire correctement remplis vous redigera vers une page contenant un message de succes et un bouton installé worpress
cliquez ,installation faite  vous serai redigé vers le dashboard de worpress (localhost/monpremiersite/wp-admin/)  

**installation du theme**

cree un dossier nommé le "Le_pays",telechargé les fichier depuis ce depots github ,ajoutez les au dossier precedement cree 
allez dans le fichier *monpremiersite* ce trouvant dans htdocs dans le dossier xampp dans le disque local ,vous trouverez un fichier nommé *wp-content* ouvré le allez dans le fichier ce nommant *theme* puis ajouté le dossier "Le_pays" puis sauvegardé
allez sur le dashboard worpress>apparences>theme ,vous trouverais le theme nommé "le_pays" il ne vous restera plus qu'a l activé et le tour est joué
il ne vous restera qu'a ecrire vous article et ajouté votre contenu (supporte les extension jpeg,png,mp3,mp4,avi,pdf) 


        
