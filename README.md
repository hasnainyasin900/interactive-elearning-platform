# Interactive E-Learning & Digital Web Platform

An enterprise-grade, full-stack educational web platform developed as the undergraduate **Final Year Project (FYP)** in the Department of Computer Science at **The Islamia University of Bahawalpur (IUB)**.

## 📌 Project Overview

The **Interactive E-Learning & Digital Web Platform** is an end-to-end Learning Management System (LMS) designed to facilitate remote higher education, structured course delivery, interactive student evaluations, and multimedia academic asset management.

The platform bridges theoretical computing concepts with modern web architecture by implementing a normalized relational database, secure role-based session authentication, dynamic quiz grading algorithms, and responsive cross-device user interfaces.

* **Developer:** [Hasnain Yasin](https://github.com/hasnainyasin900)  
    
* **Academic Supervisor:** Prof. Muhammad Musa  
    
* **Institution:** Department of Computer Science, The Islamia University of Bahawalpur  
    
* **Degree:** Bachelor of Science in Computer Science (Session 2020–2024)

## 🚀 Key Features

### 1\. Multi-Role Authentication & Access Control (RBAC)

* **Administrator**: System governance, user management (instructors/students), system logging, and course catalog approvals.  
    
* **Instructor**: Course curriculum structuring, multimedia lecture uploading (video, slides, PDF), assignment creation, and gradebook management.  
    
* **Student**: Course registration, interactive lecture access, real-time quiz assessment, and personal academic progress tracking.

### 2\. Course & Content Delivery Engine

* Modular curriculum organization categorized by disciplines and difficulty levels.  
    
* Support for rich multimedia formats including streaming video lectures, downloadable slides, and reading materials.  
    
* Search and filtering capabilities across courses and academic subjects.

### 3\. Automated Assessment & Quiz System

* Dynamic quiz generator supporting multiple-choice questions (MCQs) and timed tests.  
    
* Server-side grading pipeline calculating instant scores, percentage breakdowns, and answer validation.  
    
* Performance tracking module logging historical quiz attempts and grade distributions.

### 4\. Security & Robustness

* Parameterized queries and prepared SQL statements to mitigate SQL Injection (SQLi) vulnerabilities.  
    
* Cross-Site Scripting (XSS) input sanitation and CSRF protection mechanisms.  
    
* Secure password hashing utilizing PHP `password_hash()` (Bcrypt).  
    
* Server-side session verification preventing unauthorized privilege escalation.

## 🛠️ System Architecture & Tech Stack

\+--------------------------------------------------------------+

|                    Presentation Layer (UI/UX)                |

|           HTML5, CSS3, JavaScript (ES6+), Responsive CSS     |

\+--------------------------------------------------------------+

                               |  HTTP / REST Requests

                               v

\+--------------------------------------------------------------+

|                    Application & Logic Layer                 |

|            PHP 8.x (Session Handling, Routing, Auth, Logic)  |

\+--------------------------------------------------------------+

                               |  PDO / Prepared Statements

                               v

\+--------------------------------------------------------------+

|                       Database Layer                         |

|                 MySQL (Normalized 3NF Relational Schema)     |

\+--------------------------------------------------------------+

| Layer | Technologies | Description |
| :---- | :---- | :---- |
| **Front-End** | HTML5, CSS3, JavaScript (Vanilla ES6+) | Asynchronous DOM manipulation, client-side validation, mobile-first responsive layout |
| **Back-End** | PHP 7.4 / 8.x | Modular server-side scripting, authentication controller, grade calculations |
| **Database** | MySQL (InnoDB Engine) | 3NF normalized relational schema with foreign key integrity |
| **Web Server** | Apache (XAMPP / LAMP stack) | URL rewriting and local environment hosting |

## 📂 Project Directory Structure

elearning-platform/

│

├── assets/

│   ├── css/

│   │   ├── style.css         \# Main application styles

│   │   └── dashboard.css     \# Admin & student portal layouts

│   ├── js/

│   │   ├── main.js           \# Client-side validation & events

│   │   └── quiz.js           \# Timer & interactive assessment logic

│   └── images/               \# UI graphics and course media assets

│

├── config/

│   └── db\_connect.php        \# MySQL PDO connection & configuration

│

├── controllers/

│   ├── AuthController.php    \# User registration, login, and session validation

│   ├── CourseController.php  \# CRUD operations for courses and lessons

│   └── QuizController.php    \# Question randomization and grade computation

│

├── views/

│   ├── admin/                \# Admin dashboards and user approval views

│   ├── instructor/           \# Course authoring and gradebook views

│   └── student/              \# Student learning portal and quiz interface

│

├── database/

│   └── elearning\_db.sql      \# Schema definitions, relational tables, and seed data

│

├── index.php                 \# Application entry point / router

├── README.md                 \# Project technical documentation

└── LICENSE                   \# MIT License

## ⚙️ Installation & Local Setup

### Prerequisites

* **Web Server**: Apache (via [XAMPP](https://www.apachefriends.org/), WampServer, or LAMP)  
    
* **PHP**: Version 7.4 or higher  
    
* **Database**: MySQL 5.7+ or MariaDB 10.3+

### Step-by-Step Setup

1. **Clone the Repository**  
     
   git clone https\://github.com/hasnainyasin900/elearning-platform.git  
     
   cd elearning-platform  
     
2. **Move to Web Server Root**  
     
   * On Windows (XAMPP): Move the folder to `C:/xampp/htdocs/elearning-platform`  
       
   * On Linux/macOS: Move to `/var/www/html/elearning-platform`

   

3. **Database Configuration**  
     
   * Open your database management tool (e.g., **phpMyAdmin** at `http://localhost/phpmyadmin`).  
       
   * Create a new database named `elearning_db`.  
       
   * Click **Import** and select `database/elearning_db.sql`.

   

4. **Configure Database Credentials**  
     
   * Open `config/db_connect.php` in your code editor.  
       
   * Verify your local database connection parameters:  
       
     \<?php  
       
     \$host \= "localhost";  
       
     \$db\_name \= "elearning\_db";  
       
     \$username \= "root";  
       
     \$password \= "";  
       
     try {  
       
         \$conn \= new PDO("mysql:host=\$host;dbname=\$db\_name;charset=utf8mb4", \$username, \$password);  
       
         \$conn-\>setAttribute(PDO::ATTR\_ERRMODE, PDO::ERRMODE\_EXCEPTION);  
       
     } catch (PDOException \$e) {  
       
         die("Database connection failed: " . \$e-\>getMessage());  
       
     }  
       
     ?\>

     
5. **Run the Application**  
     
   * Start Apache and MySQL modules in your server control panel.  
       
   * Open your web browser and navigate to:  
       
     http\://localhost/elearning-platform/

## 🔮 Future Enhancements & Research Directions

* **AI-Powered Recommendation Engine**: Integrating collaborative filtering to suggest personalized learning trajectories based on student quiz performance.  
    
* **Large Language Model (LLM) Tutoring Agent**: Implementing an automated conversational assistant to answer student questions regarding lecture materials.  
    
* **RESTful Microservices Migration**: Transitioning monolithic endpoints into containerized microservices (Docker \+ FastAPI) for scalable deployment.  
    
* **Proctoring & Fraud Detection**: Developing computer vision modules for anomaly and gaze tracking during examination sessions.

## 📜 Academic Attribution & Citation

If you reference this project or report for academic research, please cite:

@misc{yasin2024elearning,

  author       \= {Hasnain Yasin},

  title        \= {Interactive E-Learning and Digital Media Web Platform},

  howpublished \= {Bachelor's Thesis, Department of Computer Science, The Islamia University of Bahawalpur},

  year         \= {2024},

  note         \= {Supervised by Prof. Muhammad Musa}

}

## 📄 License

This project is licensed under the **MIT License** — see the [LICENSE](http://LICENSE) file for details.