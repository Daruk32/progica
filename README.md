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

# Sécurité
Création User - php bin/console make:user
Choisir Défaul (User)) - Défault (Yes) - username

Make Migration
php bin/console make:migration
php bin/console d:m:m

Créer plusieurs Users
php bin/console make:fixture
Choisir UserFixtures
Faires modifications
php bin/console d:f:l --purge-with-truncate, pour tronquer

Créer un formulaire de contact
php bin/console make:auth
[1]
UserAuthentificator
Default
Default
