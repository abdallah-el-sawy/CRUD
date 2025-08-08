Recipe Management System – ITI Final Project
This project is a full-stack recipe management application developed as the final project for the ITI program.
It allows a chef to easily share and manage unique recipes, with both Laravel Blade for the web dashboard and Laravel API for mobile integration.

Features

Web Dashboard (Laravel Blade)

Add new recipes

View all recipes

Edit existing recipes

Delete recipes

Admin login system

Mobile API (Laravel API)

Retrieve and display all recipes

Add recipes to user favorites

View favorite recipes

Remove recipes from favorites

Entities

Recipe: id, name, ingredients, steps

Favourite: id, device_id, recipe_id (foreign key)

The mobile app identifies users via a device_id without requiring authentication.
