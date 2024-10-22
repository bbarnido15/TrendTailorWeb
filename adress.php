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

        <!-- Address Form -->
        <section class="w-full md:w-2/3">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-2">My Addresses</h3>
                <p class="text-gray-600 mb-6">Manage your addresses</p>
                <form>
                    <div class="space-y-4">
                        <div>
                            <label for="recipient-name" class="block text-sm font-medium text-gray-700 mb-1">Recipient Name</label>
                            <input type="text" id="recipient-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Maria Dela Cruz">
                        </div>

                        <div>
                            <label for="phone-number" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                            <input type="tel" id="phone-number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="+123 4567 890">
                        </div>

                        <div>
                            <label for="region-province" class="block text-sm font-medium text-gray-700 mb-1">Region, Province, City, Barangay</label>
                            <input type="text" id="region-province" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Region, Province, City, Barangay">
                        </div>

                        <div>
                            <label for="street-name" class="block text-sm font-medium text-gray-700 mb-1">Street Name, Building, House No.</label>
                            <input type="text" id="street-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Street Name, Building, House No.">
                        </div>

                        <div>
                            <label for="postal-code" class="block text-sm font-medium text-gray-700 mb-1">Postal Code</label>
                            <input type="text" id="postal-code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="0000">
                        </div>
                    </div>

                    <button type="submit" class="mt-6 w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">Save Address</button>
                </form>

                <div class="mt-8">
                    <h3 class="text-lg font-semibold mb-2">Addresses</h3>
                    <div class="bg-gray-100 p-4 rounded-md">
                        <p class="font-semibold">Maria Dela Cruz | +123 4567 890</p>
                        <p class="text-sm text-gray-600">RD-3034, ABC St, Ayala Bldg</p>
                        <p class="text-sm text-gray-600">Lapasan, Cagayan De Oro City, Mis. Or., 9000</p>
                        <div class="mt-2">
                            <button class="text-blue-600 hover:text-blue-800 mr-2">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

    
    <!-- Footer -->
    <?php include 'utilities/footer.html'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.js"></script>
</body>
</html>