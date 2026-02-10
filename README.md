TASK 2: Detecting Data Leaks Using SQL Injection

📌 Project Overview

This project demonstrates a secure cloud-based system designed to detect and prevent SQL injection attacks, one of the most common causes of data leaks in web applications.
The system uses AES-256 encryption, secure SQL handling, and a double-layer security approach to protect user credentials and sensitive data.

🎯 Objectives

Prevent SQL injection-based data leaks

Secure user credentials using AES-256 encryption

Allow controlled and safe database access

Demonstrate attack prevention through practical testing

Keep the system lightweight and internet-accessible

🛠️ Technologies Used

HTML, CSS (Frontend)

PHP (Server-side scripting)

MySQL (Database)

phpMyAdmin (Database management)

AES-256 Encryption

Prepared SQL Statements

🔐 Security Features Implemented

AES-256 Encryption for storing sensitive user data

Prepared Statements to block SQL injection attempts

Capability Code Mechanism to control server-side access

Double-layer security (encryption + input validation)

🧪 SQL Injection Test

The system was tested using common SQL injection inputs such as:

' OR '1'='1


✔ Result: Attack failed
✔ Unauthorized access was successfully prevented

📂 Project Structure
/project-folder
│── index.html
│── login.php
│── register.php
│── encrypt.php
│── db.php

▶️ How to Run the Project

Install and open XAMPP

Start Apache and MySQL

Import the database using phpMyAdmin

Place project files inside htdocs

Open browser and run:

http://localhost/project-folder

📽️ Demo

A screen-recorded video is included showing:

Database structure

Encrypted data storage

Login and registration

SQL injection attempt and prevention

✅ Conclusion

This project successfully demonstrates how SQL injection attacks can be detected and prevented using secure coding practices and encryption techniques, ensuring data integrity and confidentiality.

👩‍💻 Author

Deepika
