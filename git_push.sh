#!/bin/sh
release_note=$1

if [ "$release_note" = "" ]; then
    release_note="Minor update"
    echo "[INFO] No command line input provided. Set \$release_note to $release_note"
fi

# override composer description
jq '.description = "PHP client library for gruene api"' composer.json > composer.tmp.json && mv composer.tmp.json composer.json

# add to gitignore this way, otherways the main repository
# would ignore these files as well
echo ".openapi-generator" >> .gitignore
echo ".openapi-generator-ignore" >> .gitignore
echo "git_push.sh" >> .gitignore

if [ ! -d .git ]; then
  git init
  git remote add origin git@github.com:verdigado/gruene-api-php-client.git
fi;

git add .
git commit -m "$release_note"

## rebase from origin and keep all local changes
git pull -X theirs origin master --rebase

git push origin master
