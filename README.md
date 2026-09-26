# Personal Task Manager — Laravel Project

*Project Code:* WST21-PM-2026-SF
*Student Name:* [CABALQUINTO, ROBERT L.]
*Course & Year:* [BSIT 2 SECTION 5]
*Database Used:* SQLite

## Features
- ✅ Add Task — Create new tasks
- ✅ View Tasks — Display all saved tasks
- ✅ Edit Task — Update task information
- ✅ Delete Task — Remove a task
- ✅ Update Status — Toggle between Pending / Completed

## How to Run
1. Clone the repository
2. Run composer install
3. Copy .env.example to .env
4. Set DB_CONNECTION=sqlite in .env
5. Run php artisan migrate
6. Run php artisan serve
7. Visit http://127.0.0.1:8000

## Project Structure
- *Database:* SQLite file at database/database.sqlite
- *Model:* app/Models/Task.php
- *Controller:* app/Http/Controllers/TaskController.php
- *Routes:* routes/web.php
- *Views:* resources/views/tasks/
