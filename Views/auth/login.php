<?php

    require "../../Classes/Login.php";
    $login = new Login();
    $login->LoginRole();

?>
<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login — Apex Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Inter, system-ui, -apple-system, sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-zinc-950 flex items-center justify-center p-4 relative overflow-hidden">

    <!-- Background Glow -->
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-emerald-600/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-indigo-600/20 rounded-full blur-3xl"></div>

    <!-- Login Card -->
    <div class="relative w-full max-w-md">
        <div class="bg-zinc-900/90 backdrop-blur-xl border border-zinc-800 rounded-2xl shadow-2xl p-8">

            <!-- Logo / Header -->
            <div class="text-center mb-8">
                <div class="mx-auto mb-4 w-14 h-14 rounded-xl bg-emerald-600/10 flex items-center justify-center border border-emerald-500/30">
                    <span class="text-emerald-400 font-bold text-xl">AM</span>
                </div>
                <h1 class="text-3xl font-bold text-white tracking-tight">
                    Apex Management
                </h1>
                <p class="text-zinc-400 text-sm mt-2">
                    Internal eSport Management Platform
                </p>
            </div>

            <!-- Form -->
            <form class="space-y-6" method="post">

                <!-- Role Select -->
                <div>
                    <label class="block text-sm font-medium text-zinc-300 mb-2">
                        Access role
                    </label>

                    <div class="relative">
                        <!-- Left Icon -->
                        <span class="absolute inset-y-0 left-3 flex items-center text-zinc-400 pointer-events-none">
                            <!-- user / role icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M15 7a3 3 0 11-6 0 3 3 0 016 0zM4 20a8 8 0 0116 0" />
                            </svg>
                        </span>

                        <!-- Select -->
                        <select
                            name="role"
                            class="w-full appearance-none pl-11 pr-10 py-3 rounded-lg
                            bg-zinc-800 border border-zinc-700 text-white
                            focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent
                            hover:border-zinc-600 transition">
                            <option value="admin">Continue as Administrator</option>
                            <option value="journalist">Continue as Journalist</option>
                        </select>

                        <!-- Right Arrow -->
                        <span class="absolute inset-y-0 right-3 flex items-center text-zinc-400 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.94a.75.75 0 111.08 1.04l-4.24 4.5a.75.75 0 01-1.08 0l-4.24-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>

                    <p class="text-xs text-zinc-500 mt-2">
                        Choose your authorized internal role
                    </p>
                </div>


                <!-- Continue Button -->
                <input
                    type="submit"
                    value="Enter Dashboard"
                    name="btn_login"
                    class="w-full py-3 rounded-lg font-semibold text-white
                           bg-emerald-600 hover:bg-emerald-700
                           focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 focus:ring-offset-zinc-900
                           shadow-lg shadow-emerald-900/40 transition">
                    
                
            </form>

            <!-- Divider -->
            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-zinc-800"></div>
                </div>
                <div class="relative flex justify-center text-xs uppercase tracking-widest">
                    <span class="px-3 bg-zinc-900 text-zinc-500">or</span>
                </div>
            </div>

            <!-- Visitor Button -->
            <button
                type="button"
                class="w-full py-3 rounded-lg font-medium
                       border border-zinc-700 text-zinc-300
                       hover:text-white hover:border-zinc-600 hover:bg-zinc-800/40
                       focus:outline-none focus:ring-2 focus:ring-zinc-600 focus:ring-offset-2 focus:ring-offset-zinc-900
                       transition">
                Continue as Visitor
            </button>

            <!-- Info -->
            <p class="text-xs text-zinc-500 text-center mt-6">
                Visitor access is limited to public information only
            </p>
        </div>

        <!-- Footer -->
        <p class="text-center text-zinc-600 text-xs mt-6">
            © 2025 Apex Management — eSport Operations
        </p>
    </div>

</body>

</html>
