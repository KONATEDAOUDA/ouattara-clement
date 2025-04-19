#!/bin/bash

# Aller dans le répertoire de votre projet Laravel (si ce n'est pas déjà le cas)
# cd /chemin/vers/votre/projet

# Exécuter les commandes pour nettoyer les caches et autoload
echo "Nettoyage des routes..."
php artisan route:clear

echo "Nettoyage du cache..."
php artisan cache:clear

echo "Nettoyage de la configuration..."
php artisan config:clear

echo "Nettoyage de la optimisation..."
php artisan optimize:clear

echo "Nettoyage de cache view..."
php artisan view:clear

echo "Dumper l'autoload..."
composer dumpautoload

echo "Opération terminée!"
