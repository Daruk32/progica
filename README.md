# Lancement du projet progica
php -S localhost:8000 -t public

# Création de base de données
bin/console doctrine:database:create

# Migration
php bin/console make:migration
php bin/console doctrine:migration:migrate

# Création d'une série d'entités - CRUD - Lignes & Tableau de données
php bin/console make:fixtures
php bin/console doctrine:fixtures:load
/!\ Attention écrasement de la DB /!\

