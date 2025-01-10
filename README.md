
## IFRI ALUMNI CHAT DEMO
Ce projet est destiné aux alumni de l'Institut de Formation et de Recherche en Informatique. Il permet une communication fluide entre l'administration et alumni

![./dashboard.png](/dashboard.png)




## Suivez ces instructions pour tester le projet.

-   Clone or download this repo and place it into your server.
-   `composer install `
-   `cp .env.example .env `
-   `php artisan migrate --seed`
-   `php artisan key:generate`
-   `npm install && npm run dev`
-   `php artisan serve`
  
`php artisan migrate --seed`, cette commande permet de pré-remplir la base de données des users,promotion,filière et autre. Pour se connecter utilisez l'attribut "email" d'un user et par défaut le mot de passe c'est "password"
Si vous souhaitez vous connecter avec le profil Admin, accédez à la base de données et modifiez la valeur de l'attribut "isAdmin" à "true"
