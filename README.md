# 🚀 Recruitment Management System
                
A complete web-based Recruitment Management System developed as a Final Year Project.
              
This system allows candidates to apply for jobs online and enables administrators to manage applications efficiently.
                      
---            
            
## 📌 Project Overview

The Recruitment Management System is a PHP & MySQL-based web application that:

- Displays available job positions
- Allows candidates to register and upload resumes
- Stores application data in database
- Provides admin login system
- Allows admin to view and delete applications
- Secure session-based authentication

---

## 🛠 Technologies Used

- HTML5
- CSS3
- JavaScript
- PHP
- MySQL
- XAMPP (Apache + MySQL)
- Git & GitHub

---

## 📂 Project Structure

recruitment_system/
│
├── index.php # Home page
├── register.php # Handles form submission
├── admin.php # Admin login page
├── admin_login.php # Login validation
├── dashboard.php # Admin dashboard
├── delete.php # Delete candidate
├── logout.php # Logout system
├── connect.php # Database connection
│
├── css/
│ └── style.css # Styling
│
├── js/
│ └── script.js # JavaScript functions
│
├── uploads/ # Resume storage
└── README.md


---

## ⚙️ How to Run the Project (Step-by-Step)

### 1️⃣ Install XAMPP
Download and install XAMPP.

Start:
- Apache
- MySQL

---

### 2️⃣ Copy Project Folder

Move project folder into:

C:\xampp\htdocs\


---

### 3️⃣ Create Database

Open:

http://localhost/phpmyadmin


Create database:

```sql
CREATE DATABASE recruitment_db;
Then run:

USE recruitment_db;

CREATE TABLE applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(20),
    course VARCHAR(100),
    graduated VARCHAR(100),
    twelfth_percent VARCHAR(10),
    tenth_percent VARCHAR(10),
    position VARCHAR(50),
    resume VARCHAR(255),
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255)
);
```
4️⃣ Insert Admin User
Generate hashed password using:
```
<?php echo password_hash("admin123", PASSWORD_DEFAULT); ?>
```
Insert into database:

```INSERT INTO admin (username, password)
VALUES ('admin', 'PASTE_HASH_HERE');
```
5️⃣ Run the Project
Open browser:
```
http://localhost/recruitment_system/
```
Admin login:
```
http://localhost/recruitment_system/admin.php
```
🔐 Features
✔ Available Jobs Section
✔ Candidate Registration
✔ Resume Upload
✔ MySQL Database Integration
✔ Secure Admin Login (Password Hashing)
✔ Session Management
✔ Admin Dashboard
✔ Delete Application
✔ Logout System
✔ Professional UI Design

📊 Future Improvements
Search & Filter Candidates

Application Status (Selected/Rejected)

Email Notification System

Dashboard Analytics with Charts

Role-based Authentication

🎓 Academic Purpose
This project was developed as a Final Year Academic Project to demonstrate:

Full-stack web development
Database management
Authentication systems
CRUD operations
Real-world recruitment workflow
