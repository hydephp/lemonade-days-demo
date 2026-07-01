# 🍋 Lemonade Days: A HydePHP Demo

Welcome to **Lemonade Days**—a hazy, sun-drenched, retro-modern LA summer recipe blog built entirely as a showcase for [HydePHP](https://hydephp.com). 

This project demonstrates how HydePHP handles rich Markdown content, media, and bespoke Tailwind CSS styling. It also serves as a proof-of-concept for how seamlessly AI agents (like Claude and Gemini) can build, style, and compile HydePHP static sites in record time.

Live Demo: [lemonade-days.hydephp.site](https://lemonade-days.hydephp.site)

---

## ☀️ Features

* **Static Site Generation:** Lightning-fast page loads powered by HydePHP.
* **Markdown-Driven:** All recipe posts and core pages are written in simple Markdown with YAML Front Matter.
* **Custom Tailwind CSS Theme:** A completely bespoke "Lemonadecore" art direction featuring warm sands, pastel blues, and punchy yellows.
* **Custom Blade Views:** Overridden vendor views to create a unique homepage grid and custom typography (using DM Sans and Fraunces).

---

## 🛠️ How It Was Built (The AI Workflow)

This entire site was planned, written, designed, and coded in under an hour using a combination of AI tools:
1. **Google Gemini:** Served as the architect. It planned the directory structure, generated the "Emily" persona, crafted the Front Matter specs, and wrote all the Midjourney/DALL-E image prompts.
2. **ChatGPT:** Acted as the copywriter. Utilizing the persona and page abstracts, it generated all the Markdown content in parallel.
3. **Claude Code (Sonnet):** Acted as the frontend developer. Running directly in the terminal, Claude published the Hyde vendor views, updated the Tailwind config, and applied the custom CSS to bring the art direction to life.

Because HydePHP relies on predictable conventions and compile-time testing (meaning no runtime errors!), the AI agents were able to generate the site with almost zero friction.

---

## 🚀 Running the Project Locally

Want to squeeze the day and run this demo on your own machine? It's as easy as a breezy Sunday morning.

### Prerequisites
* PHP 8.1+
* Composer
* Node.js & NPM

### Setup Instructions

1. **Clone the repository:**
   ```bash
   git clone [https://github.com/your-username/lemonade-days.git](https://github.com/your-username/lemonade-days.git)
   cd lemonade-days

```

2. **Install PHP dependencies:**
```bash
composer install

```


3. **Install and compile frontend assets:**
```bash
npm install
npm run build

```


4. **Build the static site:**
```bash
php hyde build

```


5. **Start the local development server:**
```bash
php hyde serve

```


*Your site will now be accessible at `http://localhost:8080`.*

---

## 📂 Project Structure Highlights

* `_posts/`: Contains all 9 of the Markdown recipe blog posts.
* `_pages/`: Contains the Markdown files for the Home (`index.blade.php`), About, and Contact pages.
* `_media/`: Houses all the generated 35mm film-style photography.
* `tailwind.config.js`: Contains the custom color palette and font pairings for the theme.

---

*Built with sunshine, fresh citrus, and [HydePHP](https://hydephp.com).*
