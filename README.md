
# Neroworks Job Listing Website  

A feature-rich platform built with Laravel to connect employers and job seekers efficiently. This project provides tools for posting, managing, and applying for jobs with an intuitive user experience.  

## Features  
### For Job Seekers:  
- Browse and search job listings by category, location, salary, and experience level.  
- Save jobs to your personal "Bookmarked Jobs" list for later review.  
- Apply for jobs directly with an uploaded CV and supporting documents.  

### For Employers:  
- Post job listings with detailed descriptions, requirements, and benefits.  
- Manage job postings through a simple dashboard.  
- Review applications and manage recruitment directly from the platform.   

### General Features:  
- Responsive design for seamless usage across devices.  
- Advanced search and filtering options.  
---

## Installation  

### Prerequisites:  
- PHP 8.0 or higher  
- Composer  
- Postgres or any other compatible database  
- Node.js & npm (for front-end assets)  

### Setup Steps:  

1. **Clone the Repository**:  
   ```bash  
   git clone https://github.com/vladyslav-crunch/neroworks.git  
   cd neroworks-job-listing  
   ```  

2. **Install Dependencies**:  
   Run Composer and npm to install required dependencies:  
   ```bash  
   composer install  
   npm install && npm run dev  
   ```  

3. **Configure Environment**:  
   Create a `.env` file and configure your database and application settings:  
   ```bash  
   cp .env.example .env  
   ```  

4. **Database Setup**:  
   Run the migrations and seed the database:  
   ```bash  
   php artisan migrate --seed  
   ```  

5. **Run the Application**:  
   Start the Laravel development server:  
   ```bash  
   php artisan serve  
   ```  
   Open your browser and navigate to `http://localhost:8000`.  

---

## Folder Structure  
- `app/` – Application logic  
- `resources/views/` – Blade templates for the UI  
- `routes/web.php` – Routes for the application  
- `public/` – Public assets like CSS, JS, and images  

---

## Contribution  
Contributions are welcome! If you’d like to improve this project, feel free to fork the repository and submit a pull request.  

---

## License  
This project is licensed under the [MIT License](LICENSE).  

---

## Contact  
For any questions or suggestions, please contact:  
- **GitHub**: [Vladyslav Crunch](https://github.com/vladyslav-crunch)  
---  
