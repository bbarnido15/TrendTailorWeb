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

        <!-- My Orders Section -->
        <section class="w-full md:w-2/3">
            <div class="bg-gray-100 rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-1">My Orders</h3>
                <p class="text-gray-600 mb-4">Manage your bag</p>

                <!-- Thread and Needle Boutique Order -->
                <div class="bg-white rounded-lg p-4 mb-4">
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                            <span class="font-semibold">Thread and Needle Boutique</span>
                        </div>
                        <input type="checkbox" class="w-5 h-5">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="img/woman.png" alt="Product" class="w-24 h-24 object-cover rounded mr-4">
                            <div>
                                <div class="flex items-center space-x-4 mb-2">
                                    <div class="flex items-center">
                                        <span class="mr-2">Quantity</span>
                                        <button class="text-gray-500">-</button>
                                        <span class="mx-2">1</span>
                                        <button class="text-gray-500">+</button>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="mr-2">Size</span>
                                        <select class="border-none bg-transparent">
                                            <option>XL</option>
                                        </select>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="mr-2">Color</span>
                                        <select class="border-none bg-transparent">
                                            <option>Red</option>
                                        </select>
                                    </div>
                                </div>
                                <span class="font-semibold">Total Price: ₱ 399.00</span>
                            </div>
                        </div>
                        <button class="bg-gray-200 p-2 rounded-full">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </div>
                    <div class="mt-4 flex items-center text-sm text-gray-600">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Add Voucher
                    </div>
                    <div class="mt-2 flex items-center text-sm text-gray-600">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Cash On Delivery
                    </div>
                </div>

                <!-- Customized Order -->
                <div class="bg-white rounded-lg p-4 mb-4">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        <a href="customization.php" class="font-semibold">Customized Order</a>
                    </div>
                    <div class="flex items-center">
                        <span class="text-sm text-gray-500 mr-4">Last Update: 06/08/24</span>
                        <input type="checkbox" class="w-5 h-5">
                    </div>
                </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <a href="preview.php">
                                <img src="img/clothes.png" alt="Customized Product" class="w-40 h-24 object-cover rounded mr-4">
                            </a>
                            <div>
                                <p class="font-semibold mb-1">Customized Order Name: My Satin</p>
                                <p class="text-sm text-gray-600 mb-2">Customization Form ID: 12203040</p>
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center">
                                        <span class="mr-2">Quantity</span>
                                        <button class="text-gray-500">-</button>
                                        <span class="mx-2">1</span>
                                        <button class="text-gray-500">+</button>
                                    </div>
                                    <p class="font-semibold">Total Price: ₱ 282.00</p>
                                </div>
                            </div>
                        </div>

                        <button class="bg-gray-200 p-2 rounded-full">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </div>
                    <div class="mt-4 flex items-center text-sm text-gray-600">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Add Voucher
                    </div>
                    <div class="mt-2 flex items-center text-sm text-gray-600">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                        Self Pick-up
                    </div>
                </div>

                <!-- Checkout Section -->
                <div class="flex justify-between items-center mt-6 bg-white rounded-lg p-4">
                    <button class="bg-black text-white py-2 px-4 rounded-md hover:bg-gray-800 transition" onclick="checkout()">Check Out</button>
                <div class="flex items-center">
                        <div class="text-right mr-4">
                            <p class="text-sm text-gray-600">Total Price (Items: 1)</p>
                            <p class="font-semibold text-lg">₱ 282.00</p>
                        </div>
                        <input type="checkbox" class="w-5 h-5">
                        <button class="bg-gray-200 p-2 rounded-full ml-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<script>
function checkout() {
    // Change the content of the orders section
    const ordersSection = document.querySelector('.md\\:w-2\\/3');
    ordersSection.innerHTML = `
        <div class="bg-gray-100 rounded-lg shadow p-6">
            <h3 class="text-xl font-semibold mb-1">My Orders</h3>
            <p class="text-gray-600 mb-4">Manage your order status</p>
    
            <!-- Thread and Needle Boutique Order -->
            <div class="bg-white rounded-lg p-4 mb-4">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                        <span class="font-semibold">Thread and Needle Boutique</span>
                    </div>
                    <button class="text-gray-500 hover:text-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="img/woman.png" alt="Product" class="w-24 h-24 object-cover rounded mr-4">
                        <div>
                            <div class="flex items-center space-x-4 mb-2">
                                <span class="font-semibold">Total Price: ₱ 399.00</span>
                                <span>x 1</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                                <span>Parcel Shipped</span>
                                <span class="ml-2">08/07/24</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    `;
}
</script>
    
    <!-- Footer -->
    <?php include 'utilities/footer.html'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.js"></script>
</body>
</html>