<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrendTailor - Order Form Cost</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <?php include 'utilities/user_navbar.html'; ?>

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
                <div class="w-10 h-10 mx-auto bg-blue-500 text-white rounded-full flex items-center justify-center">4</div>
                <p class="mt-2">Cost</p>
            </a>
            <a href="order_placement.php" class="text-center">
                <div class="w-10 h-10 mx-auto bg-gray-300 text-gray-600 rounded-full flex items-center justify-center">5</div>
                <p class="mt-2">Order Placement</p>
            </a>
        </div>

        <h2 class="text-xl font-bold mb-4">Cost</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Left Column -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="grid grid-cols-2 gap-4">
                    <img src="img/fabric.png" alt="Selected fabric" class="w-full h-40 object-cover rounded-lg">
                    <div class="bg-gray-100 p-4 rounded-lg">
                        <h3 class="font-semibold mb-2 text-sm">Cost Information</h3>
                        <p class="text-sm mb-1">Designer Labor</p>
                        <p class="font-bold mb-1">₱50.00</p>
                        <p class="text-xs text-gray-600">In some days update</p>
                        <button class="bg-black text-white px-3 py-1 rounded text-xs mt-2">Chat with the Designer</button>
                    </div>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg mt-4">
                    <h3 class="font-semibold mb-2 text-sm">Cost Estimation</h3>
                    <div class="flex justify-between mb-2 text-sm">
                        <span>Fabric Selection</span>
                        <span class="font-bold">₱80.00</span>
                    </div>
                    <div class="flex items-center mb-2">
                        <input type="number" value="3" class="w-16 p-1 border rounded mr-2 text-sm">
                        <span class="text-sm">Yards</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span>Labor</span>
                        <span class="font-bold">₱70.00</span>
                    </div>
                </div>
                <div class="mt-4">
                    <h3 class="font-semibold mb-2 text-sm">Seller's Information</h3>
                    <input type="text" placeholder="@trendtailor" class="w-full p-2 border rounded mb-2 text-sm">
                    <input type="text" placeholder="https://www.myshop..." class="w-full p-2 border rounded text-sm">
                </div>
                <button class="bg-black text-white px-4 py-2 rounded w-full mt-4 text-sm">Proceed to Order Placement</button>
                <!-- Cancel Order Button with Modal Trigger -->
                <button class="border border-black text-black px-4 py-2 rounded w-full mt-2 text-sm" id="cancelOrderButton">
                Cancel Order
            </button>

                
            </div>

            <!-- Right Column -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="bg-gray-100 p-4 rounded-lg">
                        <h3 class="font-semibold mb-2 text-sm">Delivery Address</h3>
                        <p class="text-sm">Juan Dela Cruz</p>
                        <p class="text-sm">+63 456 6789</p>
                        <p class="text-sm">Marikina St, Downtown Subd, New York City</p>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg">
                        <h3 class="font-semibold mb-2 text-sm">Shipping Options</h3>
                        <p class="font-bold mb-2 text-sm">Standard (Local)</p>
                        <select class="w-full p-2 border rounded text-sm mb-2">
                            <option>Standard</option>
                        </select>
                        <select class="w-full p-2 border rounded text-sm">
                            <option>Cash-on-Delivery</option>
                        </select>
                    </div>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h3 class="font-semibold mb-4 text-sm">Payment Details</h3>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span>Merchandise Subtotal</span>
                            <span class="font-bold">₱202.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Shipping Subtotal</span>
                            <span class="font-bold">₱150.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Shipping Discount Subtotal</span>
                            <span class="font-bold">₱0.00</span>
                        </div>
                        <div class="flex justify-between font-bold text-base mt-4">
                            <span>Total Payment</span>
                            <span>₱352.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cancel Order Modal -->
    <div id="cancelModal" tabindex="-1" class="fixed inset-0 z-50 hidden flex items-center justify-center w-full p-4 overflow-x-hidden overflow-y-auto h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" id="closeModalButton">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h1m0 4h1v-4h-1m2 4h1v-4h-1m1 8v-4H8v4a2 2 0 11-4 0v-4H2v4a6 6 0 006 6h4a6 6 0 006-6v-4z"></path>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to cancel this order?</h3>
                <button id="confirmCancelButton" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Yes, I'm sure
                </button>
                <button type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" id="closeModalButton2">
                    No, cancel
                </button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Footer -->
<?php include 'utilities/footer.html'; ?>

<!-- JavaScript for Modal -->
<script>
    const cancelOrderButton = document.getElementById('cancelOrderButton');
    const cancelModal = document.getElementById('cancelModal');
    const closeModalButton1 = document.getElementById('closeModalButton');
    const closeModalButton2 = document.getElementById('closeModalButton2');

    // Show the modal
    cancelOrderButton.addEventListener('click', function () {
        cancelModal.classList.remove('hidden');
    });

    // Hide the modal
    closeModalButton1.addEventListener('click', function () {
        cancelModal.classList.add('hidden');
    });

    closeModalButton2.addEventListener('click', function () {
        cancelModal.classList.add('hidden');
    });


    // Add confirmation behavior here if needed
    document.getElementById('confirmCancelButton').addEventListener('click', function () {
        // Add logic to handle order cancellation
        alert('Order canceled!'); // Example alert
        cancelModal.classList.add('hidden'); // Close modal after confirmation
    });
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.js"></script>
</body>
</html>
