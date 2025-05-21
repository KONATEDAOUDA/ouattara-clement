#!/bin/bash

# Couleurs
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Fonction pour afficher l'aide
show_help() {
    echo -e "${YELLOW}Utilisation:${NC}"
    echo "  ./git-push-interactive.sh [options]"
    echo -e "${YELLOW}Options:${NC}"
    echo "  -h, --help     Affiche cette aide"
    echo "  -a, --all      Ajoute automatiquement tous les fichiers modifiés"
    echo ""
    echo -e "${YELLOW}Description:${NC}"
    echo "  Script interactif pour faciliter les commits et push Git"
}

# Vérifier si on est dans un dépôt Git
if ! git rev-parse --is-inside-work-tree > /dev/null 2>&1; then
    echo -e "${RED}Erreur: Vous n'êtes pas dans un dépôt Git${NC}"
    exit 1
fi

# Variables
AUTO_ADD=false

# Traitement des arguments
while [[ $# -gt 0 ]]; do
    case "$1" in
        -h|--help)
            show_help
            exit 0
            ;;
        -a|--all)
            AUTO_ADD=true
            shift
            ;;
        *)
            echo -e "${RED}Option inconnue: $1${NC}"
            show_help
            exit 1
            ;;
    esac
done

# Afficher les modifications
echo -e "${GREEN}=== Modifications détectées ===${NC}"
git status -s
echo ""

# Ajout des fichiers
if [ "$AUTO_ADD" = false ]; then
    echo -e "${YELLOW}Voulez-vous ajouter tous les fichiers? (o/n)${NC}"
    read -r response
    if [[ "$response" =~ ^[oO](ui)?$ ]]; then
        git add .
        echo -e "${GREEN}Tous les fichiers ajoutés.${NC}"
    else
        echo -e "${YELLOW}Entrez les fichiers à ajouter (séparés par des espaces):${NC}"
        read -r files
        if [ -n "$files" ]; then
            git add $files
            echo -e "${GREEN}Fichiers ajoutés.${NC}"
        else
            echo -e "${YELLOW}Aucun fichier ajouté.${NC}"
        fi
    fi
else
    git add .
    echo -e "${GREEN}Tous les fichiers ajoutés automatiquement.${NC}"
fi

# Message de commit
echo ""
echo -e "${YELLOW}Entrez votre message de commit:${NC}"
echo -e "${YELLOW}(Laissez vide pour annuler)${NC}"
read -r commit_message

if [ -z "$commit_message" ]; then
    echo -e "${RED}Commit annulé.${NC}"
    exit 0
fi

# Confirmation
echo ""
echo -e "${YELLOW}Résumé:${NC}"
echo "Message de commit: $commit_message"
echo -e "${YELLOW}Confirmez-vous le commit? (o/n)${NC}"
read -r confirm

if [[ "$confirm" =~ ^[oO](ui)?$ ]]; then
    # Exécution du commit
    git commit -m "$commit_message"

    # Push
    echo ""
    echo -e "${YELLOW}Voulez-vous pousser les modifications? (o/n)${NC}"
    read -r push_confirm

    if [[ "$push_confirm" =~ ^[oO](ui)?$ ]]; then
        current_branch=$(git branch --show-current)
        echo -e "${GREEN}Pushing to $current_branch...${NC}"
        git push origin "$current_branch"
        echo -e "${GREEN}Push effectué avec succès!${NC}"
    else
        echo -e "${YELLOW}Push annulé. Vous pouvez le faire manuellement plus tard.${NC}"
    fi
else
    echo -e "${RED}Commit annulé.${NC}"
    git reset
fi
