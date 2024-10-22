<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrendTailor - Order Form Cost</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.css" rel="stylesheet">
</head>
<!-- Navbar -->
<?php include 'utilities/user_navbar.html'; ?>
<body class="bg-gray-100">
    

    <div class="container mx-auto px-4 py-8 max-w-5xl">
        <!-- Promo Banner -->
        <div class="bg-black text-white text-center py-2 mb-6 rounded">
            <p>Use code TrendTailor for 10% off custom creations</p>
        </div>

        <!-- Progress Steps -->
        <div class="flex justify-between mb-8">
            <a href="my_account.php" class="text-center">
                <div class="w-10 h-10 mx-auto bg-gray-300 text-gray-600 rounded-full flex items-center justify-center">1</div>
                <p class="mt-2">Browse</p>
            </a>
            <a href="customization.php" class="text-center">
                <div class="w-10 h-10 mx-auto bg-gray-300 text-gray-600 rounded-full flex items-center justify-center">2</div>
                <p class="mt-2">Customization</p>
            </a>
            <a href="preview.php" class="text-center">
                <div class="w-10 h-10 mx-auto bg-gray-300 text-gray-600 rounded-full flex items-center justify-center">3</div>
                <p class="mt-2">Preview</p>
            </a>
            <a href="cost.php" class="text-center">
                <div class="w-10 h-10 mx-auto bg-gray-300 text-gray-600 rounded-full flex items-center justify-center">4</div>
                <p class="mt-2">Cost</p>
            </a>
            <a href="order_placement.php" class="text-center">
                <div class="w-10 h-10 mx-auto bg-blue-500 text-white rounded-full flex items-center justify-center">5</div>
                <p class="mt-2">Order Placement</p>
            </a>
        </div>

        <h2 class="text-xl font-bold mb-4">Order Details</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Left Column -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="img/fabric.png" alt="Selected fabric" class="w-full h-40 object-cover rounded-lg">
                <div class="bg-gray-100 p-4 rounded-lg mb-4">
                    <h3 class="font-semibold mb-2">Cost Information</h3>
                    <p class="text-sm mb-1">Designer Labor</p>
                    <p class="font-bold mb-1">₱50.00</p>
                    <p class="text-xs text-gray-600">8 days delivery</p>
                    <button class="bg-black text-white px-4 py-2 rounded text-sm mt-2">Chat with the Designer</button>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg mb-4">
                    <h3 class="font-semibold mb-2">Cost Estimation</h3>
                    <div class="flex justify-between mb-2">
                        <span>Fabric Selection</span>
                        <span class="font-bold">₱80.00</span>
                    </div>
                    <div class="flex items-center mb-2">
                        <input type="number" value="4" class="w-16 p-1 border rounded mr-2">
                        <span>Yards</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Labor</span>
                        <span class="font-bold">₱80.00</span>
                    </div>
                </div>
                <div class="mb-4">
                    <h3 class="font-semibold mb-2">Seller's Information</h3>
                    <input type="text" placeholder="@trendtailor" class="w-full p-2 border rounded mb-2">
                    <input type="text" placeholder="https://www.example..." class="w-full p-2 border rounded">
                </div>
            </div>

            <!-- Right Column -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="bg-gray-100 p-4 rounded-lg">
                        <h3 class="font-semibold mb-2">Delivery Address</h3>
                        <p class="text-sm">Juan Dela Cruz</p>
                        <p class="text-sm">+123 456 6789</p>
                        <p class="text-sm">Marikina St, Downtown Subdivision, New York City</p>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg">
                        <h3 class="font-semibold mb-2">Shipping Option</h3>
                        <p class="font-bold mb-2">Standard Local</p>
                        <select class="w-full p-2 border rounded mb-2">
                            <option>TrendTailor</option>
                        </select>
                        <select class="w-full p-2 border rounded">
                            <option>Over-the-Counter</option>
                        </select>
                    </div>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h3 class="font-semibold mb-4">Payment Details</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span>Merchandise Subtotal</span>
                            <span class="font-bold">₱202.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Shipping Subtotal</span>
                            <span class="font-bold">₱80.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Shipping Discount Subtotal</span>
                            <span class="font-bold">₱0.00</span>
                        </div>
                        <div class="flex justify-between font-bold text-lg mt-4">
                            <span>Total Payment</span>
                            <span>₱282.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>

        </div>
    <!-- Footer -->
    <?php include 'utilities/footer.html'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.js"></script>

</body>
</html>
