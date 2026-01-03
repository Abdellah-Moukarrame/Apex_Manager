<?php
session_start();

if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("Location: ../auth/logout.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Management - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-slate-100 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 border-r border-slate-800 flex flex-col">
            <div class="p-6 border-b border-slate-800">
                <h1 class="text-2xl font-bold text-emerald-500">Apex Management</h1>
            </div>
            <nav class="flex-1 p-4 space-y-1">
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-emerald-500/10 text-emerald-400 border-l-4 border-emerald-500 font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>
                <a href="../roaster/roaster.php" class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-400 hover:bg-slate-800 hover:text-slate-100 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Roster
                </a>
                <a href="../teams/display_teams.php" class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-400 hover:bg-slate-800 hover:text-slate-100 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    Teams
                </a>
                <a href="../teams/add_team.php"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg 
                    bg-emerald-600/10 text-emerald-400 
                    hover:bg-emerald-600/20 transition-colors mt-2">

                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4v16m8-8H4" />
                    </svg>

                    Add Team
                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-400 hover:bg-slate-800 hover:text-slate-100 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Contracts
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-400 hover:bg-slate-800 hover:text-slate-100 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                    </svg>
                    Transfers
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-400 hover:bg-slate-800 hover:text-slate-100 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    System Logs
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Topbar -->
            <header class="h-16 bg-slate-900 border-b border-slate-800 flex items-center justify-between px-6">
                <div class="flex-1 max-w-xl">
                    <div class="relative">
                        <input
                            type="text"
                            placeholder="Search players, teams, contracts..."
                            class="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 pl-10 text-sm text-slate-100 placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                        <svg class="w-5 h-5 absolute left-3 top-2.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-center gap-4 ml-6">
                    <button class="relative p-2 text-slate-400 hover:text-slate-100 hover:bg-slate-800 rounded-lg transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                    <div class="flex items-center gap-3 pl-4 border-l border-slate-800">
                        <div class="text-right">
                            <p class="text-sm font-medium text-slate-100">Admin User</p>
                            <p class="text-xs text-slate-500">Super Admin</p>
                        </div>
                        <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-full flex items-center justify-center font-bold">
                            AU
                        </div>
                        <a href="../auth/logout.php" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg text-sm font-medium transition-colors">
                            Logout
                        </a>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="flex-1 overflow-y-auto bg-slate-950 p-6">
                <div class="max-w-7xl mx-auto space-y-6">
                    <!-- Page Title -->
                    <div>
                        <h2 class="text-3xl font-bold text-slate-100">Dashboard</h2>
                        <p class="text-slate-400 mt-1">Overview of your eSport management platform</p>
                    </div>

                    <!-- KPI Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Total Players -->
                        <div class="bg-slate-900 rounded-xl p-6 border-l-4 border-emerald-500 shadow-lg">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-slate-400 text-sm font-medium">Total Players</p>
                                    <p class="text-3xl font-bold text-slate-100 mt-2">142</p>
                                </div>
                                <div class="w-12 h-12 bg-emerald-500/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Total Teams -->
                        <div class="bg-slate-900 rounded-xl p-6 border-l-4 border-blue-500 shadow-lg">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-slate-400 text-sm font-medium">Total Teams</p>
                                    <p class="text-3xl font-bold text-slate-100 mt-2">8</p>
                                </div>
                                <div class="w-12 h-12 bg-blue-500/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Global Budget -->
                        <div class="bg-slate-900 rounded-xl p-6 border-l-4 border-amber-500 shadow-lg">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-slate-400 text-sm font-medium">Global Budget</p>
                                    <p class="text-3xl font-bold text-slate-100 mt-2">$4.2M</p>
                                </div>
                                <div class="w-12 h-12 bg-amber-500/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Active Transfers -->
                        <div class="bg-slate-900 rounded-xl p-6 border-l-4 border-purple-500 shadow-lg">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-slate-400 text-sm font-medium">Active Transfers</p>
                                    <p class="text-3xl font-bold text-slate-100 mt-2">12</p>
                                </div>
                                <div class="w-12 h-12 bg-purple-500/10 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Budget Analytics Section -->
                    <div class="bg-slate-900 rounded-xl shadow-lg overflow-hidden">
                        <div class="p-6 border-b border-slate-800">
                            <h3 class="text-xl font-bold text-slate-100">Budget Evolution by Team</h3>
                            <p class="text-slate-400 text-sm mt-1">Monthly budget allocation and spending trends</p>
                        </div>
                        <div class="p-6">
                            <!-- Chart Placeholder -->
                            <div class="h-80 bg-slate-800/50 rounded-lg border border-slate-700 flex items-center justify-center">
                                <div class="text-center">
                                    <svg class="w-16 h-16 text-slate-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                    <p class="text-slate-500 text-sm">Chart visualization placeholder</p>
                                </div>
                            </div>
                            <p class="text-slate-500 text-sm mt-4">Data represents budget allocation across all teams for the current fiscal year</p>
                        </div>
                    </div>

                    <!-- Recent Transfers Section -->
                    <div class="bg-slate-900 rounded-xl shadow-lg overflow-hidden">
                        <div class="p-6 border-b border-slate-800">
                            <h3 class="text-xl font-bold text-slate-100">Recent Transfers</h3>
                            <p class="text-slate-400 text-sm mt-1">Latest player transfer activity</p>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-slate-800/50">
                                    <tr>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-slate-400 uppercase tracking-wider">Transfer Ref</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-slate-400 uppercase tracking-wider">From Team</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-slate-400 uppercase tracking-wider">To Team</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-slate-400 uppercase tracking-wider">Amount</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-slate-400 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-800">
                                    <tr class="hover:bg-slate-800/30 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-mono text-emerald-400">TR-2025-0042</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">Team Phoenix</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">Team Vortex</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-slate-100">$125,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                                Completed
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-800/30 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-mono text-emerald-400">TR-2025-0041</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">Team Apex</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">Team Phoenix</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-slate-100">$89,500</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-amber-500/10 text-amber-400 border border-amber-500/20">
                                                Pending
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-800/30 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-mono text-emerald-400">TR-2025-0040</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">Team Nexus</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">Team Inferno</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-slate-100">$200,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                                Completed
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-800/30 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-mono text-emerald-400">TR-2025-0039</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">Team Shadow</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">Team Apex</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-slate-100">$156,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-500/10 text-red-400 border border-red-500/20">
                                                Failed
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-800/30 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-mono text-emerald-400">TR-2025-0038</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">Team Inferno</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300">Team Nexus</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-slate-100">$75,000</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-amber-500/10 text-amber-400 border border-amber-500/20">
                                                Pending
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>