<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrendTailor - Your Design</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    
    <!-- Navbar -->
    <?php include 'utilities/user_navbar.html'; ?>

    <div class="container mx-auto px-4 py-8">
        
        
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
        <div class="w-10 h-10 mx-auto bg-blue-500 text-white rounded-full flex items-center justify-center">2</div>
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
        <div class="w-10 h-10 mx-auto bg-gray-300 text-gray-600 rounded-full flex items-center justify-center">5</div>
        <p class="mt-2">Order Placement</p>
    </a>
</div>


        <h2 class="text-xl font-bold mb-4">Preview Model</h2>

        <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 mb-6">
            <div class="flex">
                <div class="w-3/4 pr-4">
                    <img src="img\model with clothes.png" alt="Preview Model" class="w-full mb-4 rounded-lg">
                </div>
                <div class="w-1/4 space-y-4">
                    <div>
                        <p class="font-semibold">Customization Name:</p>
                        <input type="text" value="My Satin" class="w-full border border-gray-300 rounded px-2 py-1">
                    </div>
                    <div>
                        <p class="font-semibold">Customization ID:</p>
                        <p>10203040</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-between mb-8">
            <button class="bg-black text-white py-2 px-4 rounded-md text-sm">Add Customization</button>
            <div>
                <button class="bg-white text-black border border-black py-2 px-4 rounded-md text-sm mr-2">Share</button>
                <button class="bg-black text-white py-2 px-4 rounded-md text-sm">Export</button>
            </div>
        </div>
    
    <!-- Footer -->
    <?php include 'utilities/footer.html'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.js"></script>
</body>
</html>