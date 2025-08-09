<h1 align="center">Laravel Blade Template Conversion</h1>

<p align="center">
  <b>Convert a static HTML page into a fully dynamic, maintainable Laravel Blade template</b><br>
  Using layouts, components, directives, and asset management.
</p>

---

## 📌 Objective
This project converts a **static HTML page** into a **Laravel Blade template** structure.  
It demonstrates **Laravel Blade layouts**, **components/partials**, **directives**, and **form handling** with clean code.

---

## 🚀 Features
✅ Base layout using `@extends`, `@section`, and `@yield`  
✅ Reusable partials for **header**, **navigation**, and **footer**  
✅ Registration page with Blade form and **CSRF protection**  
✅ **Tailwind CSS** and **FontAwesome** integration  
✅ Custom CSS & JS stored in `public/Assets`  
✅ Clean routing in `routes/web.php`  

---

## 📂 Project Structure
public/
└── Assets/
├── css/
│ └── style.css
└── js/
└── script.js

resources/
├── views/
│ ├── layouts/
│ │ └── app.blade.php
│ ├── partials/
│ │ ├── header.blade.php
│ │ ├── nav.blade.php
│ │ └── footer.blade.php
│ └── pages/
│ └── contact.register.blade.php
| └── about.profile.blade.php
| └── auth.login.blade.php

routes/
└── web.php

## 🛠️ Blade Features Used
- **`@extends`** → Inherit the base layout
- **`@section` & `@yield`** → Define and display content
- **`@include`** → Include reusable partials
- **`asset()`** → Load CSS & JS from `public/`
- **`@csrf`** → Secure forms against CSRF attacks

## 🔧 Installation & Setup

### 1️⃣ Clone the Repository
    Then -> install Dependencies
            composer install
            &
    Run the application with php artisan serve

Here, This is Sabbir Ahmed