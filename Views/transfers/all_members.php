<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Transfer Members</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-slate-100 min-h-screen p-8">

  <h1 class="text-3xl font-bold mb-10 text-center">
    Transfer Members
  </h1>

  <!-- Grid -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

    <!-- Member Card -->
    <div class="bg-slate-900 rounded-2xl shadow-xl p-6 flex flex-col justify-between hover:scale-105 transition">

      <!-- Header -->
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold text-sky-400">
          John Doe
        </h2>

        <!-- Role Badge -->
        <span class="text-xs px-3 py-1 rounded-full bg-green-600">
          Coach
        </span>
      </div>

      <!-- Info -->
      <div class="space-y-2 text-sm">
        <p>
          <span class="font-semibold text-slate-300">Email:</span>
          coach@email.com
        </p>

        <p>
          <span class="font-semibold text-slate-300">Style:</span>
          Offensive
        </p>

        <p>
          <span class="font-semibold text-slate-300">Experience:</span>
          5 years
        </p>
      </div>

      <!-- Action -->
      <button
        class="mt-6 w-full bg-sky-600 hover:bg-sky-700 text-white py-2 rounded-xl font-semibold transition">
        Transfer Member
      </button>
    </div>

    <!-- Player Card -->
    <div class="bg-slate-900 rounded-2xl shadow-xl p-6 flex flex-col justify-between hover:scale-105 transition">

      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold text-sky-400">
          Alex Smith
        </h2>

        <span class="text-xs px-3 py-1 rounded-full bg-purple-600">
          Player
        </span>
      </div>

      <div class="space-y-2 text-sm">
        <p>
          <span class="font-semibold text-slate-300">Email:</span>
          player@email.com
        </p>

        <p>
          <span class="font-semibold text-slate-300">Role:</span>
          Striker
        </p>

        <p>
          <span class="font-semibold text-slate-300">Market Value:</span>
          €2,000,000
        </p>
      </div>

      <button
        class="mt-6 w-full bg-sky-600 hover:bg-sky-700 text-white py-2 rounded-xl font-semibold transition">
        Transfer Member
      </button>
    </div>

  </div>

</body>
</html>
