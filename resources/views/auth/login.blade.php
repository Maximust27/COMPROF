<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROTIC - Login</title>

    {{-- Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'Dungeon';
            src: url('{{ asset('fonts/dungeon.ttf') }}') format('truetype');
            font-display: swap;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background: #000;
        }

        .font-dungeon {
            font-family: 'Dungeon', sans-serif;
        }

        /* ================= BACKGROUND LAYERS ================= */
        #pageBg {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
        }

        .bg-layer {
            position: absolute;
            inset: 0;
            transition: opacity .6s ease;
            pointer-events: none;
        }

        /* default bg */
        .bg-default {
            background:
                radial-gradient(223.18% 88.06% at 50% 50%,
                #000000 31.14%,
                #082916 54.82%,
                #2ECC73 96.63%);
            opacity: 1;
            z-index: 0;
        }

        /* active bg */
        .bg-active {
            background:
                radial-gradient(223.18% 88.06% at 50% 50%,
                #161616 31.14%,
                #082916 54.82%,
                #2ECC73 96.63%);
            opacity: 0;
            z-index: 1;
        }

        /* when active */
        #pageBg.active .bg-active {
            opacity: 1;
        }

        #pageBg.active .bg-default {
            opacity: 0;
        }

        /* ================= ELLIPSE ================= */
        .ellipse-left {
            position: absolute;
            width: 1496px;
            height: 1496px;
            top: -208px;
            left: -606px;
            border-radius: 50%;
            background:
                linear-gradient(270deg,
                #000000 -22.9%,
                #06291E 4.55%,
                #3BAE6D 81.04%,
                #6FEBA5 100%);
            box-shadow: 0px 17px 55.3px 0px #55AD7BAD;
            z-index: 0;
        }

        .ellipse-left::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 50%;
            padding: 7px;
            background: linear-gradient(
                0deg,
                #06291E 12.41%,
                #307E52 29.87%,
                #A8FFCE 50.5%,
                #307E52 67.51%,
                #000000 91.01%
            );
            -webkit-mask:
                linear-gradient(#fff 0 0) content-box,
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
        }

        /* ================= INPUT ================= */
        .input-protic {
            width: 100%;
            background: rgba(0,0,0,.6);
            border: 1px solid rgba(59,174,109,.7);
            color: white;
            border-radius: 12px;
            padding: 12px 16px;
            transition: .25s;
        }

        .input-protic:focus {
            outline: none;
            border-color: #6FEBA5;
            box-shadow: 0 0 12px rgba(59,174,109,.8);
        }

        /* ================= BUTTON ================= */
        .btn-login {
            width: 100%;
            padding: 12px;
            border-radius: 12px;
            background: linear-gradient(90deg,#3BAE6D,#2ECC73);
            color: white;
            font-weight: 600;
            transition: .25s;
            box-shadow: 0 0 18px rgba(59,174,109,.6);
        }

        .btn-login:hover {
            transform: translateY(-1px);
            box-shadow: 0 0 28px rgba(59,174,109,.9);
        }
        /* ================= EYE BUTTON ================= */
        .eye-btn {
            opacity: 0;
            transform: scale(0.9);
            transition: all .25s ease;
            pointer-events: none;
        }

        .eye-btn.show {
            opacity: 1;
            transform: scale(1);
            pointer-events: auto;
        }
    </style>
</head>

<body>

<div id="pageBg">

    <!-- ✅ BACKGROUND LAYERS -->
    <div class="bg-layer bg-default"></div>
    <div class="bg-layer bg-active"></div>

    <div class="flex min-h-screen relative z-10">

        {{-- LEFT --}}
        <div class="relative hidden lg:flex w-1/2 items-center justify-center">
            <div class="ellipse-left"></div>

            <div class="relative z-10 text-center px-6">
                <img src="{{ asset('images/Group 70.png') }}"
                     class="mx-auto w-[280px] md:w-[320px] drop-shadow-2xl"
                     alt="logo">

                <h1 class="font-dungeon text-white text-[72px] xl:text-[96px] mt-6"
                    style="text-shadow:0 0 40px rgba(59,174,109,.5)">
                    PROTIC
                </h1>

                <p class="text-white/90 text-lg xl:text-xl">
                    Improve Skill To Innovate
                </p>
            </div>
        </div>

        {{-- RIGHT --}}
        <div class="w-full lg:w-1/2 flex items-center justify-center px-6">

            <div class="w-full max-w-md">

                <h2 class="font-dungeon text-white text-[56px] xl:text-[64px]"
                    style="text-shadow:0 0 20px rgba(59,174,109,.6)">
                    Login
                </h2>

                <div class="w-48 h-[5px] mt-2 mb-8 rounded-2xl"
                     style="background:linear-gradient(90deg,#3BAE6D,#6FEBA5);
                            box-shadow:0 0 20px rgba(59,174,109,.7)">
                </div>

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    @error('username')
                        <div class="text-red-500 text-sm px-1">
                            {{ $message }}
                        </div>
                    @enderror

                    <input id="username" type="text" name="username" value="{{ old('username') }}"
                           class="input-protic"
                           placeholder="masukan username">

                    <div class="relative">
                        <input id="password" type="password" name="password"
                               class="input-protic pr-12"
                               placeholder="masukan password">

                        <!-- toggle button -->
                        <button type="button"
                                id="togglePassword"
                                class="eye-btn absolute right-3 top-1/2 -translate-y-1/2">

                            <!-- eye closed -->
                            <svg id="eyeClosed" viewBox="0 0 15 15" class="w-5 h-5 fill-white">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.7649 6.07595C14.9991 6.22231 15.0703 6.53078 14.9239 6.76495C14.4849 7.46742 13.9632 8.10644 13.3702 8.66304L14.5712 9.86405C14.7664 10.0593 14.7664 10.3759 14.5712 10.5712C14.3759 10.7664 14.0593 10.7664 13.8641 10.5712L12.6011 9.30816C11.8049 9.90282 10.9089 10.3621 9.93374 10.651L10.383 12.3276C10.4544 12.5944 10.2961 12.8685 10.0294 12.94C9.76266 13.0115 9.4885 12.8532 9.41703 12.5864L8.95916 10.8775C8.48742 10.958 8.00035 10.9999 7.5 10.9999C6.99964 10.9999 6.51257 10.958 6.04082 10.8775L5.58299 12.5864C5.51153 12.8532 5.23737 13.0115 4.97063 12.94C4.7039 12.8685 4.5456 12.5944 4.61706 12.3277L5.06624 10.651C4.09111 10.3621 3.19503 9.90281 2.3989 9.30814L1.1359 10.5711C0.940638 10.7664 0.624058 10.7664 0.428797 10.5711C0.233537 10.3759 0.233537 10.0593 0.428797 9.86404L1.62982 8.66302C1.03682 8.10643 0.515113 7.46742 0.0760677 6.76495C-0.0702867 6.53078 0.000898544 6.22231 0.235064 6.07595C0.46923 5.9296 0.777703 6.00078 0.924057 6.23495C1.40354 7.00212 1.989 7.68056 2.66233 8.2427C2.67315 8.25096 2.6837 8.25971 2.69397 8.26897C4.00897 9.35527 5.65536 9.9999 7.5 9.9999C10.3078 9.9999 12.6563 8.50629 14.0759 6.23495C14.2223 6.00078 14.5308 5.9296 14.7649 6.07595Z"/>
                            </svg>

                            <!-- eye open -->
                            <svg id="eyeOpen" viewBox="0 0 16 16" class="w-5 h-5 fill-white hidden">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1 10c0-3.9 3.1-7 7-7s7 3.1 7 7h-1c0-3.3-2.7-6-6-6s-6 2.7-6 6H1zm4 0c0-1.7 1.3-3 3-3s3 1.3 3 3-1.3 3-3 3-3-1.3-3-3zm1 0c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2z"/>
                            </svg>
                        </button>
                    </div>

                    <button type="submit" class="btn-login">
                        Login
                    </button>
                </form>

            </div>
        </div>

    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const bg = document.getElementById("pageBg");
    const username = document.getElementById("username");
    const password = document.getElementById("password");

    const eyeBtn = document.getElementById("togglePassword");
    const eyeOpen = document.getElementById("eyeOpen");
    const eyeClosed = document.getElementById("eyeClosed");

    function updateBg() {
        const filled =
            username.value.trim() !== "" ||
            password.value.trim() !== "";

        bg.classList.toggle("active", filled);

        // show eye when password typed
        if (password.value.length > 0) {
            eyeBtn.classList.add("show");
        } else {
            eyeBtn.classList.remove("show");
        }
    }

    ["input","focus","blur"].forEach(evt => {
        username.addEventListener(evt, updateBg);
        password.addEventListener(evt, updateBg);   
    });

    // toggle password visibility
    eyeBtn.addEventListener("click", () => {
        if (password.type === "password") {
            password.type = "text";
            eyeOpen.classList.remove("hidden");
            eyeClosed.classList.add("hidden");
        } else {
            password.type = "password";
            eyeOpen.classList.add("hidden");
            eyeClosed.classList.remove("hidden");
        }
    });
});
</script>

</body>
</html>