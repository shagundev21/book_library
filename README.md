# Book API

A simple **Laravel-based API** to manage books. This API provides endpoints to perform CRUD operations on books, including creating, updating, retrieving, and deleting books. The project uses **MySQL** as the database.

## Table of Contents

- [API Endpoints](#api-endpoints)
- [Setup Instructions](#setup-instructions)
- [Running Tests](#running-tests)
- [Clean Code and Git Repository](#clean-code-and-git-repository)
- [Contributing](#contributing)
- [License](#license)

---

## API Endpoints

### 1. **List all books**
- **URL**: `/api/books`
- **Method**: `GET`
- **Response**:
    ```json
    [
        {
            "id": 1,
            "title": "1984",
            "author": "George Orwell",
            "publication_year": 1949,
            "created_at": "2023-05-09T10:00:00.000000Z",
            "updated_at": "2023-05-09T10:00:00.000000Z"
        },
        {
            "id": 2,
            "title": "Brave New World",
            "author": "Aldous Huxley",
            "publication_year": 1932,
            "created_at": "2023-05-09T10:00:00.000000Z",
            "updated_at": "2023-05-09T10:00:00.000000Z"
        }
    ]
    ```

### 2. **Get a single book**
- **URL**: `/api/books/{id}`
- **Method**: `GET`
- **Parameters**:
    - `id` (required): The ID of the book.
- **Response**:
    ```json
    {
        "id": 1,
        "title": "1984",
        "author": "George Orwell",
        "publication_year": 1949,
        "created_at": "2023-05-09T10:00:00.000000Z",
        "updated_at": "2023-05-09T10:00:00.000000Z"
    }
    ```

### 3. **Create a new book**
- **URL**: `/api/books`
- **Method**: `POST`
- **Request Body**:
    ```json
    {
        "title": "New Book",
        "author": "John Doe",
        "publication_year": 2023
    }
    ```
- **Response**:
    ```json
    {
        "id": 3,
        "title": "New Book",
        "author": "John Doe",
        "publication_year": 2023,
        "created_at": "2023-05-09T10:00:00.000000Z",
        "updated_at": "2023-05-09T10:00:00.000000Z"
    }
    ```

### 4. **Update a book**
- **URL**: `/api/books/{id}`
- **Method**: `PUT`
- **Parameters**:
    - `id` (required): The ID of the book.
- **Request Body**:
    ```json
    {
        "title": "Updated Book Title",
        "author": "Jane Doe",
        "publication_year": 2025
    }
    ```
- **Response**:
    ```json
    {
        "id": 1,
        "title": "Updated Book Title",
        "author": "Jane Doe",
        "publication_year": 2025,
        "created_at": "2023-05-09T10:00:00.000000Z",
        "updated_at": "2023-05-09T10:00:00.000000Z"
    }
    ```

### 5. **Delete a book**
- **URL**: `/api/books/{id}`
- **Method**: `DELETE`
- **Parameters**:
    - `id` (required): The ID of the book to be deleted.
- **Response**:
    - **204 No Content** (successful deletion, no content returned)

---

## Setup Instructions

Follow these steps to set up the project on your local machine.

### 1. Clone the Repository

```bash
git clone https://github.com/shagundev21/book_library.git
cd book-api


2. Install Dependencies
Ensure you have Composer installed on your system. If not, you can install it from here.

Run the following command to install all required dependencies:

bash
Copy
Edit
composer install
3. Set Up Environment Variables
Copy the .env.example file to .env:

bash
Copy
Edit
cp .env.example .env
Edit the .env file to configure your database settings. For MySQL, the configuration would look like:

env
Copy
Edit
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=book_api
DB_USERNAME=root
DB_PASSWORD=
4. Generate the Application Key
Run the following command to generate the application key:

bash
Copy
Edit
php artisan key:generate
5. Run Database Migrations
Run the migrations to create the books table:

bash
Copy
Edit
php artisan migrate
6. Start the Development Server
Start the Laravel development server:

bash
Copy
Edit
php artisan serve
The API will now be available at http://127.0.0.1:8000.

Running Tests
To ensure everything is working correctly, you can run the tests included in the project.

1. Run the Database Migrations for Testing
Before running tests, ensure that the database is set up for testing:

bash
Copy
Edit
php artisan migrate --env=testing
2. Run PHPUnit Tests
Run the PHPUnit tests to check the functionality:

bash
Copy
Edit
php artisan test
The tests are located in the tests/Feature directory, and you can add more tests for any specific features or edge cases.

Clean Code and Git Repository
Folder Structure:
bash
Copy
Edit
/app
    /Http
        /Controllers
            - BookController.php
        /Requests
            - StoreBookRequest.php
            - UpdateBookRequest.php
    /Models
        - Book.php
/database
    /factories
        - BookFactory.php
    /migrations
        - create_books_table.php
/tests
    /Feature
        - BookApiTest.php
/routes
    - api.php
Git Repository:
The repository is structured with clear commits, following best practices.

Sensitive files like .env are excluded from version control using .gitignore.

No unnecessary files are included in the repository (e.g., node_modules, vendor, etc.).

Contributing
Fork the repository

Create a new branch (git checkout -b feature-name)

Commit your changes (git commit -am 'Add feature')

Push to the branch (git push origin feature-name)

Open a pull request

License
This project is licensed under the MIT License - see the LICENSE file for details.

Notes
Replace your-username with your actual GitHub username or project name.

If you make updates or deploy the project, update the API documentation accordingly.

API Response Format
All responses from the API are in JSON format.

For successful operations (like Create, Update, and Delete), a success message is returned.

For error handling (e.g., validation errors), appropriate error messages are returned with a relevant HTTP status code.

End
