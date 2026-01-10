<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Football Management UI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="members_displaying.js"></script>
</head>

<body class="bg-slate-950 text-slate-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-slate-900 border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-emerald-400">Football Manager</h1>

            <ul class="flex gap-8 text-slate-300">
                <li class="hover:text-emerald-400 cursor-pointer">Players</li>
                <li class="hover:text-emerald-400 cursor-pointer">Coaches</li>
                <li class="hover:text-emerald-400 cursor-pointer">Transferts</li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <main class="max-w-7xl mx-auto px-6 py-10">

        <h2 class="text-2xl font-semibold mb-6">Members</h2>

        <!-- Filter UI -->
        <div class="mb-10 flex justify-between items-center gap-4 flex-wrap">

            <!-- Search -->
            <div class="relative w-full sm:w-80">
                <input
                    type="text"
                    placeholder="Search player, coach or transfer..."
                    class="w-full bg-slate-900 border border-slate-700 rounded-xl py-3 pl-12 pr-4
                           text-slate-200 placeholder-slate-500
                           focus:outline-none focus:ring-2 focus:ring-emerald-500
                           transition"
                />
                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-500">🔍</span>
            </div>

            <!-- Filter buttons (UI only) -->
            <!-- <div class="flex gap-3">
                <button class="px-4 py-2 rounded-lg bg-slate-900 border border-slate-700 text-slate-300 hover:border-emerald-500 hover:text-emerald-400 transition">
                    Players
                </button>
                <button class="px-4 py-2 rounded-lg bg-slate-900 border border-slate-700 text-slate-300 hover:border-blue-500 hover:text-blue-400 transition">
                    Coaches
                </button>
                <button class="px-4 py-2 rounded-lg bg-slate-900 border border-slate-700 text-slate-300 hover:border-yellow-400 hover:text-yellow-400 transition">
                    Transferts
                </button>
            </div> -->

        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

            <!-- Player Card -->
            <div class="bg-slate-900 rounded-2xl p-6 shadow-lg hover:scale-105 transition text-center">

                <div class="w-24 h-24 mx-auto rounded-full 
                            bg-gradient-to-br from-emerald-400 to-emerald-700
                            flex items-center justify-center
                            text-xl font-bold text-black">
                    PLAYER
                </div>

                <span class="inline-block mt-4 text-xs bg-emerald-500 text-black px-3 py-1 rounded-full">
                    Player
                </span>

                <h3 class="text-lg font-bold mt-3">Achraf Hakimi</h3>
                <p class="text-slate-400 text-sm">Right Back • PSG</p>

                <div class="mt-4 flex justify-between items-center">
                    <span class="text-emerald-400 font-semibold">€65M</span>
                    <button class="text-sm bg-slate-800 px-4 py-2 rounded-lg hover:bg-emerald-500 hover:text-black transition">
                        View
                    </button>
                </div>
            </div>

            <!-- Coach Card -->
            <div class="bg-slate-900 rounded-2xl p-6 shadow-lg hover:scale-105 transition text-center">

                <div class="w-24 h-24 mx-auto rounded-full 
                            bg-gradient-to-br from-blue-400 to-blue-700
                            flex items-center justify-center
                            text-xl font-bold text-black">
                    COACH
                </div>

                <span class="inline-block mt-4 text-xs bg-blue-500 text-black px-3 py-1 rounded-full">
                    Coach
                </span>

                <h3 class="text-lg font-bold mt-3">Pep Guardiola</h3>
                <p class="text-slate-400 text-sm">Head Coach • Man City</p>

                <div class="mt-4 flex justify-center">
                    <button class="text-sm bg-slate-800 px-4 py-2 rounded-lg hover:bg-blue-500 hover:text-black transition">
                        Profile
                    </button>
                </div>
            </div>

            <!-- Transfer Card -->
            <div class="bg-slate-900 rounded-2xl p-6 shadow-lg hover:scale-105 transition text-center">

                <div class="w-24 h-24 mx-auto rounded-full 
                            bg-gradient-to-br from-yellow-300 to-yellow-500
                            flex items-center justify-center
                            text-xl font-bold text-black">
                    TRANSFER
                </div>

                <span class="inline-block mt-4 text-xs bg-yellow-400 text-black px-3 py-1 rounded-full">
                    Transfer
                </span>

                <h3 class="text-lg font-bold mt-3">Victor Osimhen</h3>
                <p class="text-slate-400 text-sm">Napoli ➜ Chelsea</p>

                <div class="mt-4 flex justify-between items-center">
                    <span class="text-yellow-400 font-semibold">€120M</span>
                    <button class="text-sm bg-slate-800 px-4 py-2 rounded-lg hover:bg-yellow-400 hover:text-black transition">
                        Details
                    </button>
                </div>
            </div>

        </div>

    </main>

</body>
</html>
