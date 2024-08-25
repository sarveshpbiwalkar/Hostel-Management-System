# Hostel-Management-System
A system built for hostel room allocation for our College(SKNCOE Pune) as a part of DBMS Course.

### Steps to Run the Project on XAMPP

1. **Install XAMPP**: [Download XAMPP](https://www.apachefriends.org/index.html) and install it.

2. **Start Services**: Open XAMPP Control Panel and start **Apache** and **MySQL**.

3. **Setup Project**:
   - Place the project folder in `C:/xampp/htdocs/`.
   - Create a MySQL database in [phpMyAdmin](http://localhost/phpmyadmin/).
   - Import the `.sql` file into the newly created database.

4. **Configure Database**:
   - Update the database connection details in your project’s configuration file (`config.php`, `db.php`, etc.):
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "your_database_name";
     ```

5. **Run the Project**: Visit `http://localhost/your_project_folder_name/` in your browser.
