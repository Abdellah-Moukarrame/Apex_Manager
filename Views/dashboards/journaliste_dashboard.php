<?php

// session_start();
// $_SESSION["is_journaliste"] == true;


?>
<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Management - Journalist Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-zinc-950 text-slate-100 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar - Journalist Role -->
        <aside class="w-64 bg-zinc-900 border-r border-zinc-800 flex flex-col">
            <div class="p-6 border-b border-zinc-800">
                <h1 class="text-2xl font-bold text-emerald-400">Apex Management</h1>
                <p class="text-xs text-zinc-500 mt-1">Journalist Portal</p>
            </div>
            <nav class="flex-1 p-4 space-y-1">
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-emerald-500/10 text-emerald-400 border-l-4 border-emerald-500 font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    Dashboard
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-zinc-400 hover:bg-zinc-800 hover:text-zinc-100 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                    </svg>
                    Mercato Advanced
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-zinc-400 hover:bg-zinc-800 hover:text-zinc-100 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    Comparisons
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-zinc-400 hover:bg-zinc-800 hover:text-zinc-100 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    Private News
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-zinc-400 hover:bg-zinc-800 hover:text-zinc-100 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                    </svg>
                    Exports
                </a>
            </nav>
            <div class="p-4 border-t border-zinc-800">
                <div class="px-4 py-2 bg-zinc-800/50 rounded-lg">
                    <p class="text-xs text-zinc-500">Read-Only Access</p>
                    <p class="text-xs text-zinc-400 mt-0.5">Analyst Mode</p>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Topbar -->
            <header class="h-16 bg-zinc-900 border-b border-zinc-800 flex items-center justify-between px-6">
                <div class="flex items-center gap-4 flex-1">
                    <div class="relative flex-1 max-w-xl">
                        <input
                            type="text"
                            placeholder="Search players, coaches, transfers..."
                            class="w-full bg-zinc-800 border border-zinc-700 rounded-lg px-4 py-2 pl-10 text-sm text-zinc-100 placeholder-zinc-500 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                        <svg class="w-5 h-5 absolute left-3 top-2.5 text-zinc-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <button class="p-2 text-zinc-400 hover:text-zinc-100 hover:bg-zinc-800 rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center gap-3 pl-6 border-l border-zinc-800">
                    <div class="text-right">
                        <p class="text-sm font-medium text-zinc-100">Sarah Chen</p>
                        <p class="text-xs text-zinc-500">Journalist</p>

                    </div>
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center font-bold text-sm">
                        SC
                    </div>
                    <a href="../auth/logout.php" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg text-sm font-medium transition-colors">
                        Logout
                    </a>
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="flex-1 overflow-y-auto bg-zinc-950 p-6">
                <div class="max-w-[1600px] mx-auto space-y-6">
                    <!-- Page Title -->
                    <div>
                        <h2 class="text-3xl font-bold text-zinc-100">Advanced Mercato Analytics</h2>
                        <p class="text-zinc-400 mt-1">Comprehensive transfer market data and player comparisons</p>
                    </div>

                    <!-- Filters Panel -->
                    <div class="bg-zinc-900 rounded-xl shadow-lg p-6 border border-zinc-800">
                        <div class="flex items-center gap-6 flex-wrap">
                            <div class="flex-1 min-w-[200px]">
                                <label class="block text-xs font-semibold text-zinc-400 uppercase tracking-wide mb-2">Market Value Range</label>
                                <div class="space-y-2">
                                    <input type="range" min="0" max="500000" value="250000" class="w-full h-2 bg-zinc-700 rounded-lg appearance-none cursor-pointer accent-emerald-500">
                                    <div class="flex justify-between text-xs text-zinc-500">
                                        <span>$0</span>
                                        <span class="text-emerald-400 font-semibold">$250K</span>
                                        <span>$500K</span>
                                    </div>
                                </div>
                            </div>
                            <div class="min-w-[180px]">
                                <label class="block text-xs font-semibold text-zinc-400 uppercase tracking-wide mb-2">Team</label>
                                <select class="w-full bg-zinc-800 border border-zinc-700 rounded-lg px-4 py-2.5 text-sm text-zinc-100 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                                    <option>All Teams</option>
                                    <option>Team Phoenix</option>
                                    <option>Team Vortex</option>
                                    <option>Team Apex</option>
                                    <option>Team Nexus</option>
                                    <option>Team Shadow</option>
                                </select>
                            </div>
                            <div class="min-w-[180px]">
                                <label class="block text-xs font-semibold text-zinc-400 uppercase tracking-wide mb-2">Status</label>
                                <select class="w-full bg-zinc-800 border border-zinc-700 rounded-lg px-4 py-2.5 text-sm text-zinc-100 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                                    <option>All Statuses</option>
                                    <option>Completed</option>
                                    <option>Pending</option>
                                    <option>Failed</option>
                                </select>
                            </div>
                            <button class="px-6 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg font-medium transition-colors text-sm mt-6">
                                Apply Filters
                            </button>
                        </div>
                    </div>

                    <!-- Advanced Mercato Table -->
                    <div class="bg-zinc-900 rounded-xl shadow-lg overflow-hidden border border-zinc-800">
                        <div class="p-6 border-b border-zinc-800">
                            <h3 class="text-xl font-bold text-zinc-100">Advanced Mercato Data</h3>
                            <p class="text-zinc-400 text-sm mt-1">Detailed transfer market information with financial insights</p>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-zinc-800/70">
                                    <tr>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-zinc-400 uppercase tracking-wider">Player / Coach</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-zinc-400 uppercase tracking-wider">Role</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-zinc-400 uppercase tracking-wider">Team</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-zinc-400 uppercase tracking-wider">Salary</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-zinc-400 uppercase tracking-wider">Buyout Clause</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-zinc-400 uppercase tracking-wider">Annual Cost</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-zinc-400 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-zinc-800">
                                    <tr class="hover:bg-zinc-800/50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-full flex items-center justify-center font-bold text-sm">
                                                    JD
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-zinc-100">Jake "Shadow" Daniels</p>
                                                    <p class="text-xs text-zinc-500">Player ID: P-2891</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                                Mid Laner
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-300">Team Phoenix</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-emerald-400">$85,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-zinc-100">$320,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-amber-400">$108,500</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                                Completed
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-zinc-800/50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center font-bold text-sm">
                                                    ML
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-zinc-100">Maria Lopez</p>
                                                    <p class="text-xs text-zinc-500">Coach ID: C-1042</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-purple-500/10 text-purple-400 border border-purple-500/20">
                                                Head Coach
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-300">Team Vortex</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-emerald-400">$125,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-zinc-100">$450,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-amber-400">$162,500</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                                Completed
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-zinc-800/50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center font-bold text-sm">
                                                    TK
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-zinc-100">Tyler "Blaze" Kim</p>
                                                    <p class="text-xs text-zinc-500">Player ID: P-3154</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                                ADC
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-300">Team Apex</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-emerald-400">$92,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-zinc-100">$380,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-amber-400">$119,600</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-amber-500/10 text-amber-400 border border-amber-500/20">
                                                Pending
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-zinc-800/50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-teal-600 rounded-full flex items-center justify-center font-bold text-sm">
                                                    AR
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-zinc-100">Alex "Frost" Rivera</p>
                                                    <p class="text-xs text-zinc-500">Player ID: P-2765</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                                Support
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-300">Team Nexus</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-emerald-400">$68,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-zinc-100">$250,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-amber-400">$88,400</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-500/10 text-red-400 border border-red-500/20">
                                                Failed
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-zinc-800/50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center font-bold text-sm">
                                                    DM
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-zinc-100">David "Phantom" Miller</p>
                                                    <p class="text-xs text-zinc-500">Player ID: P-3421</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                                Jungler
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-300">Team Shadow</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-emerald-400">$105,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-zinc-100">$420,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-amber-400">$136,500</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-amber-500/10 text-amber-400 border border-amber-500/20">
                                                Pending
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-zinc-800/50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-full flex items-center justify-center font-bold text-sm">
                                                    SW
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold text-zinc-100">Sarah Wong</p>
                                                    <p class="text-xs text-zinc-500">Coach ID: C-987</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-purple-500/10 text-purple-400 border border-purple-500/20">
                                                Analyst
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-300">Team Inferno</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-emerald-400">$72,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-zinc-100">$180,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-amber-400">$93,600</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                                Completed
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="p-4 bg-zinc-800/30 border-t border-zinc-800">
                            <p class="text-xs text-zinc-500">Showing 6 of 142 records. Annual cost calculated using polymorphic methods based on role type.</p>
                        </div>
                    </div>

                    <!-- Comparison Section -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div class="bg-zinc-900 rounded-xl shadow-lg overflow-hidden border border-zinc-800">
                            <div class="p-6 border-b border-zinc-800 bg-gradient-to-r from-blue-900/20 to-zinc-900">
                                <h3 class="text-lg font-bold text-zinc-100">Player Comparison</h3>
                                <p class="text-zinc-400 text-sm mt-1">Cost analysis using polymorphic calculations</p>
                            </div>
                            <div class="p-6 space-y-6">
                                <!-- Player A -->
                                <div>
                                    <div class="flex items-center gap-3 mb-3">
                                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-full flex items-center justify-center font-bold">
                                            JD
                                        </div>
                                        <div>
                                            <p class="text-sm font-semibold text-zinc-100">Jake "Shadow" Daniels</p>
                                            <p class="text-xs text-zinc-500">Mid Laner</p>
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <div class="flex justify-between text-sm">
                                            <span class="text-zinc-400">Annual Cost</span>
                                            <span class="font-semibold text-emerald-400">$108,500</span>
                                        </div>
                                        <div class="h-3 bg-zinc-800 rounded-full overflow-hidden">
                                            <div class="h-full bg-gradient-to-r from-blue-500 to-cyan-500" style="width: 67%"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-t border-zinc-800 pt-6">
                                    <div class="flex items-center justify-center gap-2 text-zinc-500 text-xs font-semibold uppercase tracking-wider">
                                        <span>VS</span>
                                    </div>
                                </div>

                                <!-- Player B -->
                                <div>
                                    <div class="flex items-center gap-3 mb-3">
                                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center font-bold">
                                            ML
                                        </div>
                                        <div>
                                            <p class="text-sm font-semibold text-zinc-100">Maria Lopez</p>
                                            <p class="text-xs text-zinc-500">Head Coach</p>
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <div class="flex justify-between text-sm">
                                            <span class="text-zinc-400">Annual Cost</span>
                                            <span class="font-semibold text-amber-400">$162,500</span>
                                        </div>
                                        <div class="h-3 bg-zinc-800 rounded-full overflow-hidden">
                                            <div class="h-full bg-gradient-to-r from-purple-500 to-pink-500" style="width: 100%"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-4 border-t border-zinc-800">
                                    <p class="text-xs text-zinc-500 italic">
                                        <span class="text-emerald-400 font-semibold">Polymorphism Note:</span> Annual costs calculated using role-specific methods. Player costs include bonuses; Coach costs include management overhead.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Private Transfers Timeline -->
                        <div class="bg-zinc-900 rounded-xl shadow-lg overflow-hidden border border-zinc-800">
                            <div class="p-6 border-b border-zinc-800 bg-gradient-to-r from-emerald-900/20 to-zinc-900">
                                <h3 class="text-lg font-bold text-zinc-100">Private Transfers Timeline</h3>
                                <p class="text-zinc-400 text-sm mt-1">Recent confidential transfer activity</p>
                            </div>
                            <div class="p-6">
                                <div class="space-y-6">
                                    <!-- Timeline Item -->
                                    <div class="relative pl-8 pb-6 border-l-2 border-zinc-800 last:border-l-0 last:pb-0">
                                        <div class="absolute left-0 top-0 w-4 h-4 -ml-[9px] bg-emerald-500 rounded-full border-4 border-zinc-900"></div>
                                        <div class="space-y-2">
                                            <div class="flex items-start justify-between gap-2">
                                                <p class="text-sm font-mono text-emerald-400 font-semibold">TR-2025-0158</p>
                                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                                    Completed
                                                </span>
                                            </div>
                                            <p class="text-sm text-zinc-300">Phoenix signs Shadow for mid lane position</p>
                                            <p class="text-xs text-zinc-500">January 15, 2025 - 2:34 PM</p>
                                        </div>
                                    </div>

                                    <!-- Timeline Item -->
                                    <div class="relative pl-8 pb-6 border-l-2 border-zinc-800 last:border-l-0 last:pb-0">
                                        <div class="absolute left-0 top-0 w-4 h-4 -ml-[9px] bg-amber-500 rounded-full border-4 border-zinc-900"></div>
                                        <div class="space-y-2">
                                            <div class="flex items-start justify-between gap-2">
                                                <p class="text-sm font-mono text-emerald-400 font-semibold">TR-2025-0157</p>
                                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-amber-500/10 text-amber-400 border border-amber-500/20">
                                                    Pending
                                                </span>
                                            </div>
                                            <p class="text-sm text-zinc-300">Blaze negotiating with Apex management</p>
                                            <p class="text-xs text-zinc-500">January 14, 2025 - 4:12 PM</p>
                                        </div>
                                    </div>

                                    <!-- Timeline Item -->
                                    <div class="relative pl-8 pb-6 border-l-2 border-zinc-800 last:border-l-0 last:pb-0">
                                        <div class="absolute left-0 top-0 w-4 h-4 -ml-[9px] bg-emerald-500 rounded-full border-4 border-zinc-900"></div>
                                        <div class="space-y-2">
                                            <div class="flex items-start justify-between gap-2">
                                                <p class="text-sm font-mono text-emerald-400 font-semibold">TR-2025-0156</p>
                                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                                    Completed
                                                </span>
                                            </div>
                                            <p class="text-sm text-zinc-300">Vortex appoints Maria Lopez as head coach</p>
                                            <p class="text-xs text-zinc-500">January 13, 2025 - 11:23 AM</p>
                                        </div>
                                    </div>

                                    <!-- Timeline Item -->
                                    <div class="relative pl-8">
                                        <div class="absolute left-0 top-0 w-4 h-4 -ml-[9px] bg-red-500 rounded-full border-4 border-zinc-900"></div>
                                        <div class="space-y-2">
                                            <div class="flex items-start justify-between gap-2">
                                                <p class="text-sm font-mono text-emerald-400 font-semibold">TR-2025-0155</p>
                                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-red-500/10 text-red-400 border border-red-500/20">
                                                    Failed
                                                </span>
                                            </div>
                                            <p class="text-sm text-zinc-300">Frost transfer to Nexus collapsed</p>
                                            <p class="text-xs text-zinc-500">January 12, 2025 - 9:45 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>