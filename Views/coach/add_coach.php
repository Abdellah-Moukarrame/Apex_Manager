<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Contract Coach</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-slate-100 min-h-screen p-6">

  <!-- Header -->
  <div class="max-w-3xl mx-auto mb-6">
    <h1 class="text-3xl font-bold text-indigo-400">Add Contract Coach</h1>
    <p class="text-slate-400 mt-1">
      Create a coach and assign him to a team with a contract
    </p>
  </div>

  <!-- Form -->
  <form class="max-w-3xl mx-auto bg-slate-900 p-6 rounded-xl shadow-lg space-y-6">

    <!-- Coach Info -->
    <div>
      <h2 class="text-lg font-semibold text-slate-200 mb-4">
        Coach Information
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <!-- ID Coach -->
        <div>
          <label class="text-sm text-slate-400">Coach ID</label>
          <input type="text" disabled
            placeholder="Auto generated"
            class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-slate-400 cursor-not-allowed">
        </div>

        <!-- Name -->
        <div>
          <label class="text-sm text-slate-400">Full Name</label>
          <input type="text" placeholder="Coach name"
            class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">
        </div>

        <!-- Email -->
        <div>
          <label class="text-sm text-slate-400">Email</label>
          <input type="email" placeholder="coach@email.com"
            class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">
        </div>

        <!-- Coaching Style -->
        <div>
          <label class="text-sm text-slate-400">Coaching Style</label>
          <input type="text" placeholder="Defensive / Offensive / Balanced"
            class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">
        </div>

        <!-- Experience -->
        <div>
          <label class="text-sm text-slate-400">Years of Experience</label>
          <input type="number" min="0" placeholder="5"
            class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">
        </div>

      </div>
    </div>

    <!-- Contract Info -->
    <div>
      <h2 class="text-lg font-semibold text-slate-200 mb-4">
        Contract Information
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <!-- Team -->
        <div>
          <label class="text-sm text-slate-400">Assign to Team</label>
          <select
            class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">
            <option>Select Team</option>
            <option>Team Apex</option>
            <option>Team Phoenix</option>
            <option>Team Nexus</option>
          </select>
        </div>

        <!-- Salary -->
        <div>
          <label class="text-sm text-slate-400">Salary</label>
          <input type="number" placeholder="7000"
            class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">
        </div>

        <!-- Contract End -->
        <div>
          <label class="text-sm text-slate-400">Contract End Date</label>
          <input type="date"
            class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">
        </div>

      </div>
    </div>

    <!-- Actions -->
    <div class="flex justify-end gap-3 pt-4 border-t border-slate-800">
      <a href="#"
         class="px-4 py-2 rounded-lg bg-slate-700 hover:bg-slate-600 transition">
        Cancel
      </a>
      <button type="submit"
        class="px-6 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-700 font-medium transition">
        Save Contract
      </button>
    </div>

  </form>

</body>
</html>
