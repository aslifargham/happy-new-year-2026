Happy New Year 2026 Wish Generator 🎆

A modern, serverless, and viral-ready web application designed to create and share personalized New Year greeting cards. Built with performance and scalability in mind, this project uses a unique URL-based state management system, eliminating the need for a backend database.

🚀 Features

Serverless Architecture: Uses Base64 URL encoding to store card data. No database means zero hosting costs and infinite scalability during high-traffic events.

4 Stunning Themes:

✨ Fireworks: Classic celebration mode with particle effects.

👑 Luxury Gold: Premium, elegant aesthetic.

🌙 Islamic Green: Culturally resonant theme with gold accents.

🌿 Minimal Light: Clean and professional.

Multi-Language Support: Full support for English, Urdu (Right-to-Left layout), and Roman Urdu.

Interactive Elements:

Custom HTML5 Canvas Fireworks engine.

Typewriter text animation effects.

Live Countdown timer to Jan 1st, 2026.

Responsive Design: Mobile-first approach, optimized for sharing via WhatsApp and Facebook.

🛠️ Tech Stack

Core: HTML5, Vanilla JavaScript (ES6+)

Styling: Tailwind CSS (via CDN for lightweight deployment)

Graphics: HTML5 Canvas API (Custom Particle System)

Typography: Google Fonts (Poppins, Great Vibes, Noto Nastaliq Urdu, Cinzel)

Icons: FontAwesome 6

⚙️ How It Works (The "Viral" Logic)

Instead of saving user data to a MySQL database (which can crash under heavy load or hit API limits), this app packs the data directly into the URL.

User enters Name, Message, and selects a Theme.

JavaScript creates a lightweight JSON object: {s: "Name", m: "Message", t: "luxury"}.

The object is compressed and encoded into a Base64 string.

The URL is dynamically updated: yoursite.com/?c=eyJzIjoiRmFyZ2hhb...

When the receiver opens the link, the app decodes the URL parameter and renders the personalized card instantly on the client side.

📦 Installation & Usage

Clone the repository:

git clone [https://github.com/aslifargham/new-year-2026.git](https://github.com/aslifargham/new-year-2026.git)


Run:
Simply open index.html in any modern web browser. No npm install, build steps, or server setup required.



👨‍💻 Author

Fargham Saqib

BS Computer Science Graduate (Qarshi University)

Web Developer & Designer

Connect with me:

LinkedIn

Instagram

Facebook

© 2025-2026 Fargham Saqib. All Rights Reserved.
