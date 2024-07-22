# XPRT Events LLC Website

Welcome to the XPRT Events LLC website repository. This project is built with Laravel and serves as the official website for XPRT Events LLC, providing information about thier services, events, and contact details.

## Table of Contents

-   [Introduction](#introduction)
-   [Features](#features)
-   [Installation](#installation)
-   [Usage](#usage)
-   [Directory Structure](#directory-structure)
-   [License](#license)

## Introduction

XPRT Events LLC, primarily a photo booth company, is expanding into new event rental products. The website provides detailed information about the services, upcoming events, and includes a contact form for inquiries.

## Features

-   Home page with an overview of our services
-   Contact page with a form to reach out to us
-   Detailed information about our events and rental products
-   Responsive design for optimal viewing on all devices
-   Built with Laravel for robust backend management

## Installation

To set up this project locally, follow these steps:

1. **Clone the repository:**

```bash
    git clone https://github.com/dhart83/xprt-events.git
    cd xprt-events
```

2. **Install dependencies:**

```bash
    composer install
    npm install
```

3. **Create and configure the '.env' file:**

```bash
    cp .env.example .env
```

4. **Generate application key:**

```bash
    php artisan key:generate
```

5. **Run database migration:**

```bash
    php artisan migrate
```

6. **Build the front-end assets:**

```bash
    npm run dev
```

7. **Start the development server:**

```bash
    php artisan serve
```

## Usage

After setting up the project, you can access the development server at http://localhost:8000. Navigate through the website to explore various pages such as the home page, contact page, and events page.

```bash
xprt-events/
├── app/                        # Application logic
├── bootstrap/                  # Laravel bootstrap files
├── config/                     # Configuration files
├── database/                   # Migrations and seeders
├── public/                     # Publicly accessible files
├── resources/                  # Views and assets
├── routes/                     # Route definitions
├── storage/                    # Storage files
├── tests/                      # Automated tests
├── .env                        # Environment configuration
├── .env.example                # Example environment configuration
├── .gitattributes              # Git attributes
├── .gitignore                  # Git ignore rules
├── artisan                     # Artisan CLI script
├── composer.json               # Composer dependencies
├── composer.lock               # Composer lock file
├── package-lock.json           # NPM lock file
├── package.json                # NPM dependencies
├── phpunit.xml                 # PHPUnit configuration
├── postcss.config.js           # PostCSS configuration
├── README.md                   # Project readme file
├── tailwind.config.js          # Tailwind CSS configuration
└── vite.config.js              # Vite configuration
```

# License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
