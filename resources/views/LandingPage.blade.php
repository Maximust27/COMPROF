<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROTIC - Improve Skill To Innovate</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* ✅ Dungeon Font dari public/fonts */
        @font-face {
            font-family: 'Dungeon';
            src: url('{{ asset('fonts/dungeon.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #0a1f15;
            overflow-x: hidden;
        }
        
        /* Background gradient */
        .main-bg {
            background: linear-gradient(180deg, #0a1f15 0%, #06291e 100%);
            min-height: 100vh;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 16px;
        }
        
        /* Left Ellipse */
        .ellipse-left {
            position: absolute;
            width: 520px;
            height: 520px;
            top: 100px;
            left: -330px;
            border-radius: 50%;
            background: linear-gradient(270deg, #3BAE6D 2.49%, #06291E 37.36%);
            border: 1px solid transparent;
            background-clip: padding-box;
            box-shadow: 0px 17px 55.3px 0px rgba(85, 173, 123, 0.68);
            opacity: 1;
        }
        
        /* Right Ellipse */
        .ellipse-right {
            position: absolute;
            width: 520px;
            height: 520px;
            top: 100px;
            right: -330px;
            border-radius: 50%;
            background: linear-gradient(90deg, #3BAE6D 2.49%, #06291E 37.36%);
            border: 1px solid transparent;
            background-clip: padding-box;
            box-shadow: 0px 17px 55.3px 0px rgba(85, 173, 123, 0.68);
            opacity: 1;
        }
        
        /* Border gradient effect */
        .ellipse-left::before, .ellipse-right::before {
            content: '';
            position: absolute;
            inset: -1px;
            border-radius: 50%;
            padding: 1px;
            background: linear-gradient(270.54deg, #06291E -2.82%, #307E52 21.96%, #A8FFCE 51.24%, #307E52 75.39%, #000000 108.73%);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
        }
        
        /* Logo image */
        .logo-svg {
            width: 100%;
            height: 100%;
            max-width: 350px;
            max-height: 400px;
            object-fit: contain;
            filter: drop-shadow(0 10px 30px rgba(0, 0, 0, 0.5));
        }
        
        /* Text Container */
        .text-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        /* ✅ Title pakai Dungeon */
        .main-title {
            font-family: 'Dungeon', sans-serif;
            font-weight: 400;
            font-size: clamp(48px, 8vw, 96px);
            line-height: 100%;
            color: #FFFFFF;
            text-shadow: 0 0 40px rgba(59, 174, 109, 0.5);
            margin: 0;
        }
        
        /* Tagline */
        .tagline {
            margin-top: 6px;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: clamp(16px, 2.5vw, 24px);
            color: #FFFFFF;
            opacity: 0.9;
        }
        
        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        
        @keyframes pulse-glow {
            0%, 100% { filter: drop-shadow(0 0 20px rgba(59, 174, 109, 0.6)); }
            50% { filter: drop-shadow(0 0 40px rgba(59, 174, 109, 0.9)); }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
        
        .animate-pulse-glow {
            animation: pulse-glow 3s ease-in-out infinite;
        }
        
        .animate-fade-in {
            animation: fadeInUp 1.2s ease-out forwards;
        }
        
        /* Responsive ellipse */
        @media (max-width: 768px) {
            .ellipse-left {
                width: 500px;
                height: 500px;
                left: -300px;
                top: 50px;
            }
            
            .ellipse-right {
                width: 500px;
                height: 500px;
                right: -300px;
                top: 50px;
            }
        }
    </style>
</head>
<body>
    <div class="main-bg">
        <!-- Background Ellipse -->
        <div class="ellipse-left"></div>
        <div class="ellipse-right"></div>
        
        <!-- ✅ Logo -->
        <div class="animate-float animate-pulse-glow">
            <img 
                src="{{ asset('images/Group 70.png') }}" 
                alt="PROTIC Logo"
                class="logo-svg"
            >
        </div>
        
        <!-- Text -->
        <div class="text-container animate-fade-in">
            <h1 class="main-title">PROTIC</h1>
            <p class="tagline">Improve Skill To Innovate</p>
        </div>
    </div>
</body>
</html>