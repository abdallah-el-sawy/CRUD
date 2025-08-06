
# ITI Final Project – Recipe App (Laravel Blade & API)

This project was developed as part of the final assessment for the ITI program.
It is a complete recipe management system designed for a chef to manage and share his unique recipes with users through both a web dashboard and a public API.

---

## Project Overview

The system is divided into two main parts:

### 1. Admin Dashboard (Laravel Blade)

A web-based control panel that allows the chef or admin to:

* Add new recipes
* View all recipes
* Edit existing recipes
* Delete recipes
* Login securely to the dashboard

### 2. Public API (Laravel API)

A RESTful API designed to support mobile application integration. The API allows mobile users to:

* View all available recipes
* Add recipes to their favorites
* View their list of favorite recipes
* Remove recipes from favorites

Users are identified using a `device_id`, which removes the need for account creation or login in the mobile app.

---

## Database Structure

### Recipe Table

| Column      | Type    | Description         |
| ----------- | ------- | ------------------- |
| id          | integer | Primary key         |
| name        | string  | Recipe name         |
| ingredients | text    | List of ingredients |
| steps       | text    | Preparation steps   |

### Favourite Table

| Column     | Type    | Description                           |
| ---------- | ------- | ------------------------------------- |
| id         | integer | Primary key                           |
| device\_id | string  | Unique identifier for the device/user |
| recipe\_id | integer | Foreign key referencing the recipe    |

---

## Technologies Used

* Laravel Framework (Blade & API)
* MySQL
* Postman (for testing APIs)

---

## How to Run the Project

1. Clone the repository
2. Run `composer install`
3. Set up your `.env` file
4. Run `php artisan migrate`
5. Start the development server: `php artisan serve`

---

## Deadline

**Submission Date:** 15 August 2025
**Time:** 12:00 AM

---

