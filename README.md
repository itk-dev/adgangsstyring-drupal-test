# Adgangsstyring Drupal Test

```sh
docker compose up -d
docker compose exec phpfpm composer install
docker compose exec phpfpm vendor/bin/drush --yes site:install minimal --existing-config
```

```sh
composer install
vendor/bin/drush --yes site:install minimal --existing-config
vendor/bin/drush user:login
```
