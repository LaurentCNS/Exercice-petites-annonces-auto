## Installation

Cloner le dépôt sur votre machine :  


Creer un fichier `.env.local` à la racine et configurez vos propres informations de connexion de votre base de données.  
Vous pouvez consulter le fichier `.env` pour consulter les informations par défaut.  

La ligne à copier et à modifier sur votre fichier `.env.local` est :  

```DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7&charset=utf8mb4"```

Installer les dépandances symfony  :  

```symfony composer install```

```yarn install```

Verifier la version de php installée sur votre machine (8.0 ou +) :  

```php -v```

Creer la base de données :  

```symfony console doctrine:database:create```

Lancer les migrations :  

```symfony console doctrine:migrations:migrate```

## Lancer le projet

Lancer le serveur symfony :  

```yarn watch```

```symfony serve```

Utiliser l'url indiqué par le serveur pour vous rendre sur la page d'accueil.  

Pour vous rendre sur api-platform, rajouter ceci après l'url:  

```/api/docs```
