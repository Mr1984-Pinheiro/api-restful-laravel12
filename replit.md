# Laravel 12 CRUD Application

## Overview
A basic Task Manager application built with Laravel 12 demonstrating full CRUD (Create, Read, Update, Delete) operations. The application allows users to manage tasks with titles, descriptions, and status tracking.

## Project Architecture

### Backend (Laravel 12)
- **Framework**: Laravel 12.38.1 (PHP 8.4)
- **Database**: SQLite (development)
- **ORM**: Eloquent
- **Templating**: Blade

### Structure
```
app/
├── Http/Controllers/
│   └── TaskController.php      # Handles all CRUD operations
└── Models/
    └── Task.php                 # Task model with fillable fields

database/
├── migrations/
│   └── create_tasks_table.php  # Tasks table schema
└── database.sqlite             # SQLite database file

resources/views/
├── layouts/
│   └── app.blade.php           # Main layout template
└── tasks/
    ├── index.blade.php         # List all tasks
    ├── create.blade.php        # Create new task form
    ├── edit.blade.php          # Edit task form
    └── show.blade.php          # View single task

routes/
└── web.php                     # Application routes
```

## Features Implemented

### CRUD Operations
1. **Create**: Add new tasks with title, description, and status
2. **Read**: View all tasks in a table, or view individual task details
3. **Update**: Edit existing tasks
4. **Delete**: Remove tasks with confirmation

### Additional Features
- Form validation with error messages
- Flash success messages after operations
- Status badges (Pending, In Progress, Completed)
- Responsive design with custom CSS
- Route model binding for cleaner code
- SQLite database for simplicity

## Database Schema

### Tasks Table
- `id` - Primary key (auto-increment)
- `title` - String (required, max 255 characters)
- `description` - Text (nullable)
- `status` - Enum: pending, in_progress, completed (default: pending)
- `created_at` - Timestamp
- `updated_at` - Timestamp

## Routes

```
GET    /                      → Redirect to tasks index
GET    /tasks                 → tasks.index (list all tasks)
GET    /tasks/create          → tasks.create (show create form)
POST   /tasks                 → tasks.store (save new task)
GET    /tasks/{task}          → tasks.show (view single task)
GET    /tasks/{task}/edit     → tasks.edit (show edit form)
PUT    /tasks/{task}          → tasks.update (update task)
DELETE /tasks/{task}          → tasks.destroy (delete task)
```

## Recent Changes
- **November 17, 2025**: Initial project setup
  - Installed Laravel 12.38.1 with PHP 8.4
  - Created Task model and migration
  - Implemented TaskController with all CRUD methods
  - Created Blade views with responsive styling
  - Configured workflow to run on port 5000

## Running the Application

The Laravel development server runs automatically via the configured workflow:
```bash
php artisan serve --host=0.0.0.0 --port=5000
```

Access the application through the Replit webview panel.

## User Preferences
None specified yet.

## Next Steps (Future Enhancements)
1. Add search and filtering functionality
2. Implement pagination for large datasets
3. Add image upload capability
4. Create API endpoints for CRUD operations
5. Implement soft deletes and restore functionality
6. Add user authentication
7. Implement task categories or tags
