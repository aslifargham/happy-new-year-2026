<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy New Year 2026 - Create Your Wish</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Noto+Nastaliq+Urdu:wght@400;700&family=Poppins:wght@300;400;600;800&family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                        'script': ['Great Vibes', 'cursive'],
                        'urdu': ['Noto Nastaliq Urdu', 'serif'],
                        'luxury': ['Cinzel', 'serif'],
                    },
                    colors: {
                        'gold-500': '#D4AF37',
                        'gold-600': '#AA8C2C',
                        'islamic-green': '#004225',
                    },
                    animation: {
                        'fade-in': 'fadeIn 1s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        /* Fireworks Canvas */
        #canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #1a1a1a; 
        }
        ::-webkit-scrollbar-thumb {
            background: #D4AF37; 
            border-radius: 4px;
        }

        /* Typewriter Cursor */
        .typewriter::after {
            content: '|';
            animation: blink 1s infinite;
        }
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }

        /* Glassmorphism */
        .glass-panel {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .theme-luxury .glass-panel {
            background: rgba(0, 0, 0, 0.6);
            border: 1px solid #D4AF37;
        }

        .theme-green .glass-panel {
            background: rgba(0, 40, 20, 0.7);
            border: 1px solid #4ade80;
        }
        
        .theme-white .glass-panel {
             background: rgba(255, 255, 255, 0.95);
             border: 1px solid #ccc;
             color: #1a1a1a;
             box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        /* Urdu Text Support */
        .lang-urdu {
            font-family: 'Noto Nastaliq Urdu', serif;
            direction: rtl;
            line-height: 2;
        }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col relative transition-colors duration-700" id="main-body">

    <!-- Canvas for Fireworks -->
    <canvas id="canvas"></canvas>

    <!-- Navigation / Header -->
    <nav class="relative z-20 w-full p-4 flex justify-between items-center glass-panel rounded-b-xl max-w-7xl mx-auto">
        <div class="text-2xl font-bold font-luxury text-gold-500 tracking-wider">
            <i class="fas fa-glass-cheers mr-2"></i>NY 2026
        </div>
        <div>
            <button id="mute-btn" class="p-2 rounded-full bg-white/10 hover:bg-white/20 transition text-gold-500">
                <i class="fas fa-volume-mute" id="mute-icon"></i>
            </button>
        </div>
    </nav>

    <!-- App Content Container -->
    <main class="relative z-10 flex-grow flex items-center justify-center p-4">
        
        <!-- VIEW 1: HOME SCREEN -->
        <section id="home-view" class="text-center max-w-2xl w-full animate-fade-in block">
            <h1 class="text-6xl md:text-8xl font-bold font-luxury text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 via-yellow-500 to-yellow-200 mb-4 animate-float">
                Welcome 2026
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8 font-light">
                Connect hearts across miles. Create and share personalized New Year wishes instantly.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button onclick="navTo('create')" class="px-8 py-4 bg-gradient-to-r from-gold-600 to-yellow-500 text-black font-bold rounded-full transform hover:scale-105 transition shadow-[0_0_20px_rgba(212,175,55,0.5)]">
                    Create Your 2026 Card <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
            
            <!-- Countdown Teaser -->
            <div class="mt-12 p-4 glass-panel rounded-xl inline-block">
                <span class="text-sm uppercase tracking-widest text-gray-400">Countdown to Celebration</span>
                <div id="hero-countdown" class="text-3xl font-mono mt-2 text-gold-500">00:00:00:00</div>
            </div>
        </section>

        <!-- VIEW 2: CREATE CARD SCREEN -->
        <section id="create-view" class="w-full max-w-lg hidden">
            <div class="glass-panel p-6 md:p-8 rounded-2xl shadow-2xl animate-fade-in">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gold-500">Customize Wish</h2>
                    <button onclick="navTo('home')" class="text-gray-400 hover:text-white"><i class="fas fa-times"></i></button>
                </div>

                <form id="card-form" onsubmit="generateCard(event)">
                    <!-- Theme Selection -->
                    <div class="mb-6">
                        <label class="block text-sm text-gray-400 mb-2">Select Theme</label>
                        <div class="grid grid-cols-4 gap-2">
                            <label class="cursor-pointer">
                                <input type="radio" name="theme" value="fireworks" class="hidden peer" checked>
                                <div class="h-12 rounded-lg bg-gray-800 border-2 border-transparent peer-checked:border-gold-500 hover:bg-gray-700 flex items-center justify-center" title="Fireworks">
                                    <i class="fas fa-sparkles text-purple-400"></i>
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="theme" value="luxury" class="hidden peer">
                                <div class="h-12 rounded-lg bg-black border-2 border-transparent peer-checked:border-gold-500 hover:bg-gray-900 flex items-center justify-center" title="Luxury Gold">
                                    <i class="fas fa-crown text-yellow-500"></i>
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="theme" value="green" class="hidden peer">
                                <div class="h-12 rounded-lg bg-islamic-green border-2 border-transparent peer-checked:border-gold-500 hover:opacity-80 flex items-center justify-center" title="Islamic">
                                    <i class="fas fa-moon text-white"></i>
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="theme" value="minimal" class="hidden peer">
                                <div class="h-12 rounded-lg bg-gray-200 border-2 border-transparent peer-checked:border-gold-500 hover:bg-white flex items-center justify-center" title="Minimal Light">
                                    <i class="fas fa-leaf text-gray-800"></i>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Inputs -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-xs uppercase text-gray-500 mb-1">Your Name</label>
                            <input type="text" id="sender" required class="w-full bg-black/20 border border-gray-600 rounded-lg p-3 focus:outline-none focus:border-gold-500 transition text-white" placeholder="e.g. Fargham Saqib">
                        </div>
                        <div>
                            <label class="block text-xs uppercase text-gray-500 mb-1">Receiver Name (Optional)</label>
                            <input type="text" id="receiver" class="w-full bg-black/20 border border-gray-600 rounded-lg p-3 focus:outline-none focus:border-gold-500 transition text-white" placeholder="e.g. Family & Friends">
                        </div>
                        <div>
                            <label class="block text-xs uppercase text-gray-500 mb-1">Language</label>
                            <select id="language" class="w-full bg-black/20 border border-gray-600 rounded-lg p-3 focus:outline-none focus:border-gold-500 transition text-white" onchange="updateMessagePlaceholder()">
                                <option value="en">English</option>
                                <option value="ur">Urdu (اردو)</option>
                                <option value="roman">Roman Urdu</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs uppercase text-gray-500 mb-1">Message</label>
                            <textarea id="message" rows="3" class="w-full bg-black/20 border border-gray-600 rounded-lg p-3 focus:outline-none focus:border-gold-500 transition text-white" placeholder="Wishing you a year full of blessings..."></textarea>
                        </div>
                    </div>

                    <button type="submit" class="w-full mt-6 bg-gold-600 hover:bg-gold-500 text-black font-bold py-3 rounded-lg shadow-lg transform active:scale-95 transition">
                        Generate Magic Link <i class="fas fa-wand-magic-sparkles ml-2"></i>
                    </button>
                </form>
            </div>
        </section>

        <!-- VIEW 3: CARD DISPLAY SCREEN -->
        <section id="card-view" class="w-full max-w-4xl flex flex-col items-center justify-center text-center hidden p-4">
            
            <div id="card-container" class="glass-panel p-8 md:p-12 rounded-3xl shadow-[0_0_50px_rgba(0,0,0,0.5)] w-full max-w-2xl transform transition-all duration-1000 scale-95 opacity-0">
                
                <!-- Dynamic Header -->
                <div class="mb-4">
                    <span id="card-year-badge" class="px-3 py-1 text-xs font-bold rounded-full uppercase tracking-wider">New Year 2026</span>
                </div>

                <h1 id="card-title" class="text-4xl md:text-6xl font-script mb-6 drop-shadow-md">Happy New Year</h1>
                
                <div id="card-to-from" class="text-lg mb-6 font-poppins">
                    <span id="display-receiver-container" class="hidden">Dear <span id="display-receiver" class="font-bold"></span>,<br></span>
                </div>

                <div id="display-message" class="typewriter-container">
                    <!-- Text injected by JS -->
                </div>

                <div class="w-full h-px bg-gradient-to-r from-transparent via-gray-500 to-transparent my-6"></div>

                <div class="flex flex-col items-center gap-2">
                    <span class="text-xs uppercase text-gray-400 tracking-widest">Time Remaining</span>
                    <div id="main-countdown" class="text-2xl md:text-4xl font-mono font-bold tabular-nums">
                        00d 00h 00m 00s
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-gray-700/50">
                    <p class="text-sm text-gray-400 italic">Sent with ❤️ by <span id="display-sender" class="font-bold not-italic text-lg block mt-1"></span></p>
                </div>
            </div>

            <!-- Share Actions -->
            <div id="share-actions" class="mt-8 flex flex-wrap gap-4 justify-center animate-fade-in opacity-0" style="animation-delay: 2s; animation-fill-mode: forwards;">
                <button onclick="shareVia('whatsapp')" class="bg-green-600 hover:bg-green-500 text-white px-6 py-3 rounded-full flex items-center gap-2 transition">
                    <i class="fab fa-whatsapp text-xl"></i> WhatsApp
                </button>
                <button onclick="shareVia('facebook')" class="bg-blue-600 hover:bg-blue-500 text-white px-6 py-3 rounded-full flex items-center gap-2 transition">
                    <i class="fab fa-facebook-f"></i> Share
                </button>
                <button onclick="copyLink()" class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-3 rounded-full flex items-center gap-2 transition">
                    <i class="fas fa-link"></i> Copy Link
                </button>
            </div>

            <div class="mt-8">
                <a href="index.php" class="text-sm text-gray-400 hover:text-white border-b border-gray-600 pb-1">Create your own 2026 card</a>
            </div>
        </section>

    </main>

    <footer class="relative z-10 w-full text-center p-6 text-gray-500 text-xs flex flex-col gap-3 items-center">
        <p>&copy; 2025-2026. Made with <i class="fas fa-code text-gold-500"></i> by Fargham Saqib.</p>
        <div class="flex gap-5 text-xl">
            <a href="https://github.com/aslifargham" target="_blank" class="hover:text-white transition-colors duration-300" title="GitHub">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://instagram.com/iamfargham" target="_blank" class="hover:text-pink-500 transition-colors duration-300" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </footer>

    <!-- Audio (Hidden) -->
    <audio id="bg-music" loop>
        <!-- Using a reliable copyright-free asset link (Auld Lang Syne or Festive Instrumental) -->
        <source src="https://actions.google.com/sounds/v1/holidays/sleigh_bells_and_chimes.ogg" type="audio/ogg">
    </audio>

    <script>
        // --- 1. CONFIGURATION & STATE ---
        const TARGET_DATE = new Date("January 1, 2026 00:00:00").getTime();
        const appState = {
            view: 'home',
            audioPlaying: false,
            fireworksActive: true
        };

        // --- 2. NAVIGATION LOGIC ---
        function navTo(viewId) {
            document.getElementById('home-view').classList.add('hidden');
            document.getElementById('create-view').classList.add('hidden');
            document.getElementById('card-view').classList.add('hidden');
            document.getElementById(viewId + '-view').classList.remove('hidden');
            
            if(viewId === 'home') {
                document.getElementById('home-view').classList.add('flex', 'flex-col');
                document.getElementById('home-view').classList.remove('hidden');
            } else if (viewId === 'card') {
                document.getElementById('card-view').classList.remove('hidden');
                document.getElementById('card-view').classList.add('flex');
            } else {
                 document.getElementById(viewId + '-view').classList.remove('hidden');
            }
        }

        function updateMessagePlaceholder() {
            const lang = document.getElementById('language').value;
            const msgArea = document.getElementById('message');
            
            if (lang === 'ur') {
                msgArea.placeholder = "نئے سال کی ڈھیروں خوشیاں مبارک ہوں...";
                msgArea.dir = "rtl";
            } else if (lang === 'roman') {
                msgArea.placeholder = "Naya Saal Bohat Bohat Mubarak Ho...";
                msgArea.dir = "ltr";
            } else {
                msgArea.placeholder = "Wishing you a year full of blessings...";
                msgArea.dir = "ltr";
            }
        }

        // --- 3. CARD GENERATION (URL PARAMETERS) ---
        function generateCard(e) {
            e.preventDefault();
            
            const sender = document.getElementById('sender').value.trim();
            const receiver = document.getElementById('receiver').value.trim();
            const message = document.getElementById('message').value.trim();
            const theme = document.querySelector('input[name="theme"]:checked').value;
            const lang = document.getElementById('language').value;

            // Optimization: Create minimal object by omitting defaults to keep URL short
            const data = { s: sender };
            
            // Only add optional fields if they exist or differ from defaults
            if (receiver) data.r = receiver;
            if (message) data.m = message;
            if (theme !== 'fireworks') data.t = theme; // 'fireworks' is default, omit if selected
            if (lang !== 'en') data.l = lang;          // 'en' is default, omit if selected
            
            // Encode data safely for URL (JSON -> String -> Component -> Base64)
            // Note: Regular btoa fails on Urdu/Unicode characters, so we encodeURI first
            const encodedData = btoa(encodeURIComponent(JSON.stringify(data)));
            
            // Update URL without reload
            const newUrl = `${window.location.pathname}?c=${encodedData}`;
            window.history.pushState({path: newUrl}, '', newUrl);

            // Render Card
            renderCard(data);
        }

        // --- 4. RENDER LOGIC ---
        function renderCard(data) {
            navTo('card');

            const body = document.getElementById('main-body');
            const cardToFrom = document.getElementById('card-to-from');
            const receiverName = document.getElementById('display-receiver');
            const countdown = document.getElementById('main-countdown');
            const senderName = document.getElementById('display-sender');
            const yearBadge = document.getElementById('card-year-badge');
            const cardTitle = document.getElementById('card-title');
            const displayMessage = document.getElementById('display-message');

            // Reset Base Classes
            body.className = "min-h-screen flex flex-col relative transition-colors duration-700";
            
            // Define Theme Colors
            let textColor = 'text-white';
            let secondaryText = 'text-gray-300';
            let highlight = 'text-gold-500';
            let badgeClass = 'bg-gold-500 text-black';
            let titleColor = 'text-gold-500';
            
            // Apply Logic
            if (data.t === 'luxury') {
                body.classList.add('bg-black', 'theme-luxury');
                textColor = 'text-gold-100';
                secondaryText = 'text-gold-400';
                highlight = 'text-white'; // Sender name in white pop
                titleColor = 'text-gold-500';
            } else if (data.t === 'green') {
                body.classList.add('bg-[#002814]', 'theme-green');
                // Green Defaults: White text, Gold accents
            } else if (data.t === 'minimal') {
                body.classList.add('bg-gray-100', 'theme-white');
                textColor = 'text-gray-900';
                secondaryText = 'text-gray-600';
                highlight = 'text-gold-600'; // Darker gold for light bg
                badgeClass = 'bg-gray-800 text-white';
                titleColor = 'text-gray-900';
            } else {
                // Fireworks / Default
                body.classList.add('bg-gray-900');
            }

            // Apply calculated colors to DOM
            cardTitle.className = `text-4xl md:text-6xl font-script mb-6 drop-shadow-md ${titleColor}`;
            cardToFrom.className = `text-lg mb-6 font-poppins ${secondaryText}`;
            receiverName.className = `font-bold ${textColor}`;
            countdown.className = `text-2xl md:text-4xl font-mono font-bold tabular-nums ${textColor}`;
            senderName.className = `font-bold not-italic text-lg block mt-1 ${highlight}`;
            yearBadge.className = `px-3 py-1 text-xs font-bold rounded-full uppercase tracking-wider ${badgeClass}`;

            // Set Content
            senderName.textContent = data.s;
            
            if (data.r) {
                receiverName.textContent = data.r;
                document.getElementById('display-receiver-container').classList.remove('hidden');
            } else {
                document.getElementById('display-receiver-container').classList.add('hidden');
            }

            // Message Styling
            displayMessage.className = `text-xl md:text-2xl leading-relaxed mb-8 min-h-[80px] typewriter-container ${textColor}`;
            
            // Language Specific Fonts
            if (data.l === 'ur') {
                displayMessage.classList.add('font-urdu', 'text-2xl', 'md:text-4xl');
                cardTitle.textContent = "نیا سال مبارک ٢٠٢٦";
                cardTitle.classList.add('font-urdu');
            } else {
                displayMessage.classList.add('font-poppins');
                cardTitle.textContent = "Happy New Year 2026";
                cardTitle.classList.remove('font-urdu');
            }

            // Default Message if empty
            let finalMsg = data.m;
            if (!finalMsg) {
                if (data.l === 'ur') finalMsg = "اللہ آپ کو اس نئے سال میں خوشیاں اور کامیابیاں عطا فرمائے۔ آمین۔";
                else if (data.l === 'roman') finalMsg = "Allah is naye saal mein apko dheron khushiyan ata farmaye. Ameen.";
                else finalMsg = "May the New Year bring you happiness, peace, and prosperity. Wishing you a joyous 2026!";
            }

            // Typewriter Effect
            displayMessage.innerHTML = "";
            let i = 0;
            const speed = 30; // ms per char
            
            function typeWriter() {
                if (i < finalMsg.length) {
                    displayMessage.innerHTML += finalMsg.charAt(i);
                    i++;
                    setTimeout(typeWriter, speed);
                }
            }
            
            // Trigger Animations
            const cardContainer = document.getElementById('card-container');
            cardContainer.classList.remove('scale-95', 'opacity-0');
            cardContainer.classList.add('scale-100', 'opacity-100');
            
            setTimeout(typeWriter, 500);

            // Auto-play music attempt (browsers might block it without interaction)
            // We show a toast or rely on the user clicking the mute button
        }

        // --- 5. INITIALIZATION ---
        window.onload = function() {
            // Check URL params
            const params = new URLSearchParams(window.location.search);
            const encodedData = params.get('c');

            if (encodedData) {
                try {
                    const jsonString = decodeURIComponent(atob(encodedData));
                    const data = JSON.parse(jsonString);
                    renderCard(data);
                } catch (e) {
                    console.error("Invalid card data", e);
                    navTo('home');
                }
            } else {
                navTo('home');
            }

            // Start Countdown Loops
            setInterval(updateCountdowns, 1000);
            updateCountdowns();
            
            // Start Fireworks
            animateFireworks();
        };

        // --- 6. UTILITIES (Countdown, Audio, Sharing) ---
        function updateCountdowns() {
            const now = new Date().getTime();
            const distance = TARGET_DATE - now;

            if (distance < 0) {
                document.getElementById("main-countdown").innerHTML = "WELCOME 2026!";
                document.getElementById("hero-countdown").innerHTML = "IT'S HERE!";
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Pad with leading zeros
            const str = `${days.toString().padStart(2, '0')}d ${hours.toString().padStart(2, '0')}h ${minutes.toString().padStart(2, '0')}m ${seconds.toString().padStart(2, '0')}s`;
            
            document.getElementById("main-countdown").innerText = str;
            if(document.getElementById("hero-countdown")) {
                document.getElementById("hero-countdown").innerText = str;
            }
        }

        // Audio Toggle
        const audio = document.getElementById('bg-music');
        const muteBtn = document.getElementById('mute-btn');
        const muteIcon = document.getElementById('mute-icon');

        muteBtn.addEventListener('click', () => {
            if (audio.paused) {
                audio.play();
                muteIcon.classList.remove('fa-volume-mute');
                muteIcon.classList.add('fa-music');
                muteBtn.classList.add('animate-pulse');
            } else {
                audio.pause();
                muteIcon.classList.add('fa-volume-mute');
                muteIcon.classList.remove('fa-music');
                muteBtn.classList.remove('animate-pulse');
            }
        });

        // Sharing
        function shareVia(platform) {
            const url = window.location.href;
            const text = "See the New Year 2026 wish I created for you! ✨";
            
            if (platform === 'whatsapp') {
                window.open(`https://api.whatsapp.com/send?text=${encodeURIComponent(text + " " + url)}`, '_blank');
            } else if (platform === 'facebook') {
                window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`, '_blank');
            }
        }

        function copyLink() {
            navigator.clipboard.writeText(window.location.href).then(() => {
                const btn = document.querySelector('button[onclick="copyLink()"]');
                const originalHtml = btn.innerHTML;
                btn.innerHTML = '<i class="fas fa-check"></i> Copied!';
                btn.classList.replace('bg-gray-700', 'bg-green-600');
                setTimeout(() => {
                    btn.innerHTML = originalHtml;
                    btn.classList.replace('bg-green-600', 'bg-gray-700');
                }, 2000);
            });
        }

        // --- 7. FIREWORKS ENGINE (Vanilla JS Canvas) ---
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');
        let particles = [];

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        class Particle {
            constructor(x, y, color) {
                this.x = x;
                this.y = y;
                this.color = color;
                // Random velocity
                const angle = Math.random() * Math.PI * 2;
                const speed = Math.random() * 4 + 1;
                this.vx = Math.cos(angle) * speed;
                this.vy = Math.sin(angle) * speed;
                this.alpha = 1;
                this.decay = Math.random() * 0.015 + 0.005;
            }

            draw() {
                ctx.save();
                ctx.globalAlpha = this.alpha;
                ctx.fillStyle = this.color;
                ctx.beginPath();
                ctx.arc(this.x, this.y, 2, 0, Math.PI * 2);
                ctx.fill();
                ctx.restore();
            }

            update() {
                this.x += this.vx;
                this.y += this.vy;
                this.vy += 0.05; // Gravity
                this.alpha -= this.decay;
                return this.alpha > 0;
            }
        }

        function createFirework() {
            // Only create fireworks occasionally
            if (Math.random() > 0.05) return;

            const x = Math.random() * canvas.width;
            const y = Math.random() * (canvas.height / 2); // Top half
            const colors = ['#D4AF37', '#FF0000', '#00FF00', '#00FFFF', '#FF00FF', '#FFFFFF'];
            const color = colors[Math.floor(Math.random() * colors.length)];

            for (let i = 0; i < 30; i++) {
                particles.push(new Particle(x, y, color));
            }
        }

        function animateFireworks() {
            ctx.fillStyle = 'rgba(0, 0, 0, 0.1)'; // Trail effect
            
            // Check theme for BG clear
            const body = document.getElementById('main-body');
            if (body.classList.contains('theme-white')) {
                ctx.fillStyle = 'rgba(255, 255, 255, 0.2)';
            }
            
            ctx.fillRect(0, 0, canvas.width, canvas.height);

            createFirework();

            particles = particles.filter(p => {
                p.update();
                p.draw();
                return p.alpha > 0;
            });

            requestAnimationFrame(animateFireworks);
        }
    </script>
</body>
</html>
