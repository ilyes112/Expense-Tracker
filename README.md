# Expense Tracker

A full-stack expense management application built with **HTML, CSS, JavaScript, PHP, and PostgreSQL**.

## Project Structure

* `frontend/pages/` contains the HTML pages.
* `frontend/css/` contains shared and page-specific stylesheets.
* `frontend/js/` contains browser-side JavaScript.
* `frontend/assets/images/` contains frontend images.
* `backend/config/` contains backend configuration, including the database connection.
* `backend/controllers/` contains application logic.
* `backend/models/` contains data and database logic.
* `backend/api/` contains PHP API endpoints.
* `database/schema.sql` contains the database schema.

## Backend

The backend API endpoints are currently scaffolds and return HTTP `501 Not Implemented`.

The database connection uses the following environment variables:

* `DB_DSN`
* `DB_USERNAME`
* `DB_PASSWORD`

Configure these variables before using the database connection.

## Running the Frontend

Open:

```text
frontend/pages/home.html
```

to view the frontend.

## Project Status

**In development.**

The current focus is implementing the PostgreSQL database and connecting the PHP backend to the frontend.
