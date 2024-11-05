# DOCKER -> PHP + Nginx + MySQL Setup

This project is a simple PHP application that displays information about cars using an Nginx server and MySQL database. It has been set up using Docker for easy deployment and configuration.

## Setup Instructions

1. **Build and Start Services**  
   Ensure Docker is running, then build and start the containers:
   ```bash
   docker-compose up -d
   ```

2. **Database Initialization**  
   Execute the `banco.sql` script to create the database structure and insert sample data:
   ```bash
   docker exec -i <db_container_name> mysql -uroot -proot < banco.sql
   ```

3. **Access the Application**  
   Open a browser and go to [http://localhost](http://localhost) to view the application.

## Features

- Displays PHP version information.
- Connects to MySQL and retrieves data from the `carro` table.
- Styled with simple CSS for a clean layout.

## Notes

- Ensure the database container is ready before loading the application.
- `banco.sql` should be executed only once to initialize the database structure.
