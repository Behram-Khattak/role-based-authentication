# Role-Based Authentication System in Laravel

I have built a role-based authentication system using the **Laravel Framework** with **Tailwind CSS** and **Alpine.js** for the frontend.

## Features
- **Login Page with Modern Design:** Initially, I designed a modern login page but later opted for a more simplistic design since the page was for an educational website.
- **Dark and Light Mode Support:** One of the challenges I encountered was adding a **dark mode toggle**. Previously, I had created websites that automatically adapted to the system's dark or light mode preferences, but this was the first time I added a toggle button for switching between modes. Big thanks to [Flowbite.com](https://flowbite.com/), a Tailwind CSS library that was extremely helpful in building both the login page and the dashboard interface.
- **Design Suggestions:** Throughout the development process, I used **ChatGPT** for design suggestions, and I also took design inspiration from [Dribbble.com](https://dribbble.com/), a place where next-generation designs for web apps can be found.
  
## Technologies Used
- **Laravel Framework:** The backbone of the application.
- **Tailwind CSS & Flowbite:** For creating responsive, modern, and simple frontend designs.
- **Alpine.js:** To add light animations and handle the dark mode toggle functionality.

## Getting Started

To clone this repo and run the application locally, follow these steps:

### Prerequisites
Make sure you have the following installed on your system:
- **PHP** (>= 8.0)
- **Composer**
- **Node.js & NPM**
- **MySQL** (or any other supported database)

### Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/your-username/your-repo-name.git
    cd your-repo-name
    ```

2. **Install PHP dependencies:**
    ```bash
    composer install
    ```

3. **Install JavaScript dependencies:**
    ```bash
    npm install
    ```

4. **Set up your `.env` file:**
    Copy the example environment file and configure the database connection and other settings.
    ```bash
    cp .env.example .env
    ```
    After that, generate an application key:
    ```bash
    php artisan key:generate
    ```

5. **Migrate the database:**
    Make sure your database is running and then run:
    ```bash
    php artisan migrate
    ```

6. **Run the development server:**
    ```bash
    php artisan serve
    ```

7. **Compile assets (Tailwind CSS and Alpine.js):**
    For development:
    ```bash
    npm run dev
    ```
    For production:
    ```bash
    npm run build
    ```

Now you can access the application in your browser at `http://127.0.0.1:8000`.

---

Happy Coding! 😊
