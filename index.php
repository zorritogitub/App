<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Quieres ser mi novia? 💕</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ff6b6b, #ff2d55, #c0392b);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        .hearts-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
            z-index: 0;
        }

        .heart {
            position: absolute;
            font-size: 20px;
            color: rgba(255, 255, 255, 0.6);
            animation: floatHeart 6s infinite ease-in-out;
        }

        @keyframes floatHeart {
            0% {
                transform: translateY(100vh) rotate(0deg) scale(0.5);
                opacity: 0;
            }
            20% {
                opacity: 1;
            }
            100% {
                transform: translateY(-10vh) rotate(720deg) scale(1.2);
                opacity: 0;
            }
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 30px;
            padding: 40px 35px;
            max-width: 450px;
            width: 90%;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
            backdrop-filter: blur(10px);
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.8) rotate(-5deg);
            }
            to {
                opacity: 1;
                transform: scale(1) rotate(0deg);
            }
        }

        .emoji-big {
            font-size: 80px;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0%,
            100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }

        h1 {
            color: #c0392b;
            font-size: 28px;
            margin: 15px 0 10px;
            font-weight: 800;
        }

        .subtitle {
            color: #666;
            font-size: 16px;
            margin-bottom: 25px;
        }

        .buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 15px 40px;
            font-size: 20px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-yes {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            box-shadow: 0 5px 25px rgba(238, 90, 36, 0.4);
        }

        .btn-yes:hover {
            transform: scale(1.08);
            box-shadow: 0 8px 35px rgba(238, 90, 36, 0.6);
        }

        .btn-yes:active {
            transform: scale(0.95);
        }

        .btn-no {
            background: #ddd;
            color: #666;
            transition: all 0.1s ease;
        }

        .btn-no:hover {
            background: #ccc;
        }

        .sure-screen {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .sure-screen.active {
            display: block;
        }

        .main-screen {
            display: block;
        }

        .main-screen.hidden {
            display: none;
        }

        .final-screen {
            display: none;
            animation: fadeIn 0.8s ease;
        }

        .final-screen.active {
            display: block;
        }

        .final-screen .emoji-big {
            font-size: 90px;
        }

        .final-screen h1 {
            font-size: 32px;
            color: #c0392b;
        }

        .final-screen .message {
            font-size: 18px;
            color: #555;
            margin: 15px 0;
            line-height: 1.6;
        }

        .countdown {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 20px;
            border-radius: 20px;
            margin: 20px 0;
            font-size: 18px;
        }

        .countdown .days {
            font-size: 48px;
            font-weight: 800;
            display: block;
        }

        .countdown .label {
            font-size: 14px;
            opacity: 0.9;
        }

        #bgMusic {
            display: none;
        }

        .btn-music {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 8px 16px;
            border-radius: 30px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 15px;
            transition: 0.3s;
            backdrop-filter: blur(5px);
        }

        .btn-music:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        @media (max-width: 480px) {
            .container {
                padding: 25px 20px;
            }
            h1 {
                font-size: 22px;
            }
            .btn {
                padding: 12px 25px;
                font-size: 17px;
            }
            .countdown .days {
                font-size: 36px;
            }
            .emoji-big {
                font-size: 60px;
            }
        }

        .confetti-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 999;
            overflow: hidden;
        }

        .confetti-piece {
            position: absolute;
            width: 10px;
            height: 10px;
            top: -10px;
            animation: confettiFall linear forwards;
        }

        @keyframes confettiFall {
            0% {
                transform: translateY(0) rotate(0deg) scale(0);
                opacity: 1;
            }
            100% {
                transform: translateY(110vh) rotate(720deg) scale(1);
                opacity: 0;
            }
        }
    </style>
</head>
<body>

    <div class="hearts-container" id="heartsContainer"></div>
    <div class="confetti-container" id="confettiContainer"></div>

    <!-- 🎵 AUDIO LOCAL - REPRODUCE "amor.mp3" 🎵 -->
    <audio id="bgMusic" loop preload="auto">
        <source src="amor.mp3" type="audio/mpeg">
        <!-- Si no carga tu archivo, usa este respaldo online -->
        <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
    </audio>

    <div class="container">
        <div class="main-screen" id="mainScreen">
            <div class="emoji-big">🥺</div>
            <h1>¿Quieres ser mi novia? 💕</h1>
            <p class="subtitle">Te prometo hacerte muy feliz 🌹</p>
            <div class="buttons">
                <button class="btn btn-yes" onclick="sayYes()">¡SÍ! 💖</button>
                <button class="btn btn-no" id="noBtn">No 😢</button>
            </div>
            <p style="margin-top:15px; color:#999; font-size:14px;">(No hay respuesta incorrecta)</p>
        </div>

        <div class="sure-screen" id="sureScreen">
            <div class="emoji-big">🤔</div>
            <h1>¿Estás completamente segura?</h1>
            <p class="subtitle">No quiero que te arrepientas... ❤️</p>
            <div class="buttons">
                <button class="btn btn-yes" onclick="finalYes()">Sí, estoy segura 💕</button>
                <button class="btn btn-no" onclick="goBack()">Déjame pensarlo...</button>
            </div>
        </div>

        <div class="final-screen" id="finalScreen">
            <div class="emoji-big">💖</div>
            <h1>¡Dijiste que SÍ! 🎉</h1>
            <div class="message">
                Eres lo mejor que me ha pasado 🌹<br>
                Prometo cuidarte, quererte y hacerte sonreír cada día ❤️
            </div>

            <div class="countdown">
                <span class="label">⏳ Faltan para vernos el 30 de agosto:</span>
                <span class="days" id="countdownDays">--</span>
                <span class="label">días 💕</span>
            </div>

            <div style="margin: 15px 0; font-size: 20px;">
                🌹❤️🌹❤️🌹❤️🌹
            </div>

            <p style="color:#666; font-size:15px; margin-top:10px;">
                Te quiero mucho, <span id="partnerName">amor</span> 💋
            </p>

            <button class="btn-music" onclick="toggleMusic()">🎵 Pausar música</button>
        </div>
    </div>

    <script>
        // ===== CORAZONES FLOTANTES =====
        function createHearts() {
            const container = document.getElementById('heartsContainer');
            const emojis = ['❤️', '💕', '💖', '💗', '💓', '🌸', '🌹', '✨'];
            for (let i = 0; i < 25; i++) {
                const heart = document.createElement('div');
                heart.className = 'heart';
                heart.textContent = emojis[Math.floor(Math.random() * emojis.length)];
                heart.style.left = Math.random() * 100 + '%';
                heart.style.fontSize = (Math.random() * 20 + 15) + 'px';
                heart.style.animationDuration = (Math.random() * 4 + 4) + 's';
                heart.style.animationDelay = (Math.random() * 8) + 's';
                container.appendChild(heart);
            }
        }
        createHearts();

        // ===== BOTÓN "NO" QUE HUYE =====
        const noBtn = document.getElementById('noBtn');
        let noClickCount = 0;

        noBtn.addEventListener('mouseover', function() {
            if (noClickCount < 10) {
                const x = Math.random() * 200 - 100;
                const y = Math.random() * 200 - 100;
                this.style.transform = `translate(${x}px, ${y}px)`;
                const textos = ['¿Segura? 😅', 'Piensa bien 😏', 'No te escapes 🥺', 'Dime que sí ❤️', 'Te quiero 💕', 'No huyas 🥰', 'Solo di que sí 😘', 'Mi amor 💖', 'Por favor 🙏', 'Te lo pido 💗'];
                this.textContent = textos[noClickCount] || 'No 😢';
                noClickCount++;
            }
        });

        noBtn.addEventListener('click', function() {
            if (noClickCount < 10) {
                const x = Math.random() * 300 - 150;
                const y = Math.random() * 300 - 150;
                this.style.transform = `translate(${x}px, ${y}px)`;
                const textos = ['¿Segura? 😅', 'Piensa bien 😏', 'No te escapes 🥺', 'Dime que sí ❤️', 'Te quiero 💕', 'No huyas 🥰', 'Solo di que sí 😘', 'Mi amor 💖', 'Por favor 🙏', 'Te lo pido 💗'];
                this.textContent = textos[noClickCount] || 'No 😢';
                noClickCount++;
            } else {
                this.style.display = 'none';
                alert('💕 No hay opción de decir no... ¡Tienes que decir que sí! 😘');
            }
        });

        // ===== FUNCIONES DE PANTALLAS =====
        function sayYes() {
            document.getElementById('mainScreen').classList.add('hidden');
            document.getElementById('sureScreen').classList.add('active');
            playMusic();
        }

        function goBack() {
            document.getElementById('sureScreen').classList.remove('active');
            document.getElementById('mainScreen').classList.remove('hidden');
        }

        function finalYes() {
            document.getElementById('sureScreen').classList.remove('active');
            document.getElementById('finalScreen').classList.add('active');
            startCountdown();
            launchConfetti();
            playMusic();
        }

        // ===== MÚSICA =====
        let musicPlaying = false;
        const audio = document.getElementById('bgMusic');

        function playMusic() {
            if (!musicPlaying) {
                audio.play()
                    .then(() => {
                        console.log('✅ Música reproduciéndose correctamente');
                        musicPlaying = true;
                    })
                    .catch((error) => {
                        console.log('❌ Error al reproducir: ' + error);
                        alert('⚠️ No se pudo reproducir el audio. Asegúrate de que el archivo "amor.mp3" esté en la misma carpeta.');
                    });
            }
        }

        function toggleMusic() {
            if (musicPlaying) {
                audio.pause();
                musicPlaying = false;
                document.querySelector('.btn-music').textContent = '🎵 Activar música';
            } else {
                audio.play().then(() => {
                    musicPlaying = true;
                    document.querySelector('.btn-music').textContent = '🎵 Pausar música';
                }).catch(() => {});
            }
        }

        // ===== REPRODUCIR AUTOMÁTICAMENTE AL CARGAR =====
        // Usamos una interacción del usuario para activar el audio
        document.addEventListener('click', function autoPlay() {
            playMusic();
            // Removemos el evento después del primer clic para que no se ejecute varias veces
            document.removeEventListener('click', autoPlay);
        });

        // También lo intentamos al cargar (por si el navegador lo permite)
        window.addEventListener('load', function() {
            // Intentar reproducir automáticamente (puede ser bloqueado)
            audio.play().then(() => {
                musicPlaying = true;
                console.log('✅ Reproducción automática exitosa');
            }).catch(() => {
                console.log('⏳ Esperando interacción del usuario para reproducir');
                // Mostrar un mensaje sutil
                const notice = document.createElement('p');
                notice.style.color = '#999';
                notice.style.fontSize = '12px';
                notice.style.marginTop = '10px';
                notice.textContent = '🎵 Haz clic en cualquier parte para activar la música';
                document.querySelector('.main-screen').appendChild(notice);
            });
        });

        // ===== CUENTA REGRESIVA PARA EL 30 DE AGOSTO =====
        function startCountdown() {
            const targetDate = new Date('2026-08-30T00:00:00');
            const now = new Date();
            const diff = targetDate - now;
            const days = Math.ceil(diff / (1000 * 60 * 60 * 24));

            if (days > 0) {
                document.getElementById('countdownDays').textContent = days;
            } else if (days === 0) {
                document.getElementById('countdownDays').textContent = '🎉 ¡HOY!';
            } else {
                document.getElementById('countdownDays').textContent = '❤️ Ya pasó, pero te sigo queriendo';
            }
        }

        // ===== CONFETI =====
        function launchConfetti() {
            const container = document.getElementById('confettiContainer');
            const colors = ['#ff6b6b', '#ff2d55', '#ffd93d', '#6bcb77', '#4d96ff', '#ff9ff3', '#feca57'];
            const shapes = ['■', '●', '▲', '★', '◆', '❤'];

            for (let i = 0; i < 120; i++) {
                const piece = document.createElement('div');
                piece.className = 'confetti-piece';
                piece.textContent = shapes[Math.floor(Math.random() * shapes.length)];
                piece.style.color = colors[Math.floor(Math.random() * colors.length)];
                piece.style.left = Math.random() * 100 + '%';
                piece.style.fontSize = (Math.random() * 20 + 10) + 'px';
                piece.style.animationDuration = (Math.random() * 3 + 2) + 's';
                piece.style.animationDelay = (Math.random() * 3) + 's';
                container.appendChild(piece);

                setTimeout(() => {
                    piece.remove();
                }, 6000);
            }

            setTimeout(() => {
                if (document.getElementById('finalScreen').classList.contains('active')) {
                    launchConfetti();
                }
            }, 5000);
        }

        // ===== NOMBRE PERSONALIZABLE =====
        document.getElementById('partnerName').textContent = 'mi vida ❤️';

        // ===== PREVENIR SALIDA ACCIDENTAL =====
        window.addEventListener('beforeunload', function(e) {
            if (document.getElementById('finalScreen').classList.contains('active')) {
                e.preventDefault();
                e.returnValue = '¿Ya te vas? 😢 Quédate conmigo un poco más 💕';
            }
        });

        console.log('💖 Página lista. La música se reproducirá automáticamente al hacer clic en cualquier parte.');
        console.log('📁 Asegúrate de que el archivo "amor.mp3" esté en la misma carpeta que este index.php');
    </script>
</body>
</html>