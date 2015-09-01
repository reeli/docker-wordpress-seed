#!/bin/bash

sleep 1

alias wp='wp --allow-root'

WP_SITE_URL="127.0.0.1:8080"
WP_SITE_TITLE=Test
WP_ADMIN_USER=admin
WP_ADMIN_USER_PASS=admin
WP_ADMIN_EMAIL="admin@admin.com"

wp core install \
  --url=$WP_SITE_URL \
  --title=$WP_SITE_TITLE \
  --admin_user=$WP_ADMIN_USER \
  --admin_password=$WP_ADMIN_USER_PASS \
  --admin_email=$WP_ADMIN_EMAIL \
  --debug

wp plugin install sample-content-generator --activate
wp plugin install advanced-custom-fields --activate

wp theme activate customtheme
