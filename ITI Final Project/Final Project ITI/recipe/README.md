
---

# Recipe Management System – ITI Final Project

This is a **full-stack recipe management application** developed as the final project for the **ITI program**.
It enables chefs to share and manage their unique recipes efficiently, with a **Laravel Blade** web dashboard and a **Laravel API** for mobile integration.

---

## Features

### **Web Dashboard** (Laravel Blade)

* ➕ Add new recipes
* 📜 View all recipes
* ✏️ Edit existing recipes
* ❌ Delete recipes
* 🔐 Admin login system

### **Mobile API** (Laravel API)

* 📥 Retrieve and display all recipes
* ❤️ Add recipes to user favorites
* 📂 View favorite recipes
* 🗑 Remove recipes from favorites

---

## Entities

* **Recipe**: `id`, `name`, `ingredients`, `steps`
* **Favourite**: `id`, `device_id`, `recipe_id` *(foreign key)*

---

## Preview
https://abdallah-el-sawy.github.io/CRUD/ITI%20Final%20Project/Final%20Project%20ITI/recipe



**Note:**
The mobile application identifies users via `device_id` without requiring authentication.

---

