<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrendTailor - User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    
    <!-- Navbar -->
    <?php include 'utilities/user_navbar.html'; ?>

    <!-- Promo Banner -->
    <div class="bg-black text-white text-center py-2">
        <p>Use code TrendTailor for 10% off custom creations</p>
    </div>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col md:flex-row gap-8">

            <!-- Sidebar -->
            <?php include 'utilities/sidebar.html'; ?>

            <!-- Profile Form -->
            <section class="w-full md:w-2/3">
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-semibold mb-2">My Profile</h3>
                    <p class="text-gray-600 mb-6">Manage and protect your account</p>
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                                <input type="text" id="first-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Maria">
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text" id="last-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Dela Cruz">
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="maria@example.com">
                        </div>
                        <div class="mt-6">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="tel" id="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="09123456789">
                        </div>
                        <div class="mt-6">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input type="password" id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <div class="mt-6">
                            <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                            <input type="password" id="confirm-password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">Save Changes</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
    
    <!-- Footer -->
    <?php include 'utilities/footer.html'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.js"></script>
</body>
</html>