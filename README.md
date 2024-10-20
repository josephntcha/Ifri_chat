
## IFRI ALUMNI CHAT DEMO
Ce projet est destiné aux alumni de l'Institut de Formation et de Recherche en Informatique. Il permet une communication fluide entre l'administration et alumni

![./dashboard.png](/dashboard.png)




## Quick Start

-   Clone or download this repo and place it into your server.
-   `composer install `
-   `cp .env.example .env `
-   `php artisan migrate --seed`
-   `php artisan key:generate`
-   `npm install && npm run dev`
-   `php artisan serve`
  

then choose a user from the database and login.
If you like connect with profil Admin, go to database and change the attribut value "isAdmin" to "true"
