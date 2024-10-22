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
                <div class="w-10 h-10 mx-auto bg-gray-300 text-gray-600 rounded-full flex items-center justify-center">2</div>
                <p class="mt-2">Customization</p>
            </a>
            <a href="preview.php" class="text-center">
                <div class="w-10 h-10 mx-auto bg-blue-500 text-white rounded-full flex items-center justify-center">3</div>
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
        <h2 class="text-xl font-bold mb-4">Fabric Selection</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-gray-200 p-6 rounded-lg shadow-md">
    <h3 class="text-xl font-semibold mb-4">Fabric Type</h3>
    <div class="relative mb-4">
        <select class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="fabric-type">
            <option>Satin</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
            </svg>
        </div>
    </div>
    <div class="flex mb-4">
        <div class="w-2/3 pr-2">
            <img src="img/fabric.png" alt="Fabric sample" class="w-full h-48 object-cover rounded-lg">
        </div>
        <div class="w-1/3 pl-2 flex flex-col justify-between">
            <div class="flex mb-2">
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
            </div>
            <p class="text-sm">Elevate your designs with our luxurious satin fabric in a timeless <span class="font-semibold">old rose</span> hue, adding sophistication and elegance to any endeavor.</p>
            <div class="mt-2">
                <span class="text-sm font-semibold">Length Price</span>
                <div class="bg-black text-white text-sm px-3 py-1 rounded inline-block mt-1">₱ 101.00/meter</div>
            </div>
        </div>
    </div>
    <div class="flex justify-between items-center mt-4">
        <div class="w-1/2 pr-2">
            <p class="font-semibold text-sm mb-1">Color</p>
            <div class="relative">
                <select class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="color">
                    <option>Old Rose</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="w-1/2 pl-2">
            <p class="font-semibold text-sm mb-1">Pattern</p>
            <div class="relative">
                <select class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="pattern">
                    <option>Plain</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Style Templates -->
        <div class="bg-white p-6 rounded-lg shadow-md">
    <div class="grid grid-cols-2 gap-4 mb-4">
        <img src="img/big fabric.png" alt="Main Style" class="w-full h-40 object-cover rounded-lg">
        <div class="bg-gray-100 p-4 rounded-lg">
            <h3 class="font-semibold mb-2 text-sm">Style Templates</h3>
            <div class="relative mb-4">
                <input type="text" class="w-full pl-10 pr-4 py-2 border rounded-full text-sm" placeholder="Search style templates">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
            <p class="text-xs text-gray-500 mb-2">If your preferred clothing style isn't listed, input it manually.</p>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Individual Classification</label>
                    <select class="w-full p-2 border rounded text-sm">
                        <option>Women</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Apparel Classification</label>
                    <select class="w-full p-2 border rounded text-sm">
                        <option>Top</option>
                    </select>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Garment Style</label>
                <select class="w-full p-2 border rounded text-sm">
                    <option>Sleepwear</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Garment Features</label>
                <select class="w-full p-2 border rounded mb-2 text-sm">
                    <option>Relaxed fit</option>
                </select>
                <select class="w-full p-2 border rounded mb-2 text-sm">
                    <option>V-neck</option>
                </select>
                <select class="w-full p-2 border rounded mb-2 text-sm">
                    <option>Sleeveless</option>
                </select>
                <select class="w-full p-2 border rounded text-sm">
                    <option>Chest pocket</option>
                </select>
            </div>
        </div>
    </div>
    <div class="bg-gray-100 p-4 rounded-lg mt-4">
        <h3 class="font-semibold mb-2 text-sm">Available Styles</h3>
        <div class="flex justify-between">
            <img src="/api/placeholder/80/80" alt="Style 1" class="w-20 h-20 object-cover rounded-lg">
            <img src="/api/placeholder/80/80" alt="Style 2" class="w-20 h-20 object-cover rounded-lg">
            <img src="/api/placeholder/80/80" alt="Style 3" class="w-20 h-20 object-cover rounded-lg">
            <img src="/api/placeholder/80/80" alt="Style 4" class="w-20 h-20 object-cover rounded-lg">
        </div>
    </div>
    <div class="mt-4">
        <button class="bg-black text-white px-4 py-2 rounded w-full text-sm">Proceed to Style Selection</button>
        <!-- Cancel Selection Button -->
        <button class="border border-black text-black px-4 py-2 rounded w-full mt-2 text-sm" id="cancelSelectionButton">
            Cancel Selection
        </button>
    </div>
</div>
</div>

    <!-- Body Measurement -->
    <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Body Measurement</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <select class="w-full p-2 border rounded mb-4 text-sm">
                    <option>Women</option>
                </select>
                <select class="w-full p-2 border rounded text-sm">
                    <option>Small</option>
                </select>
            </div>
            <div class="col-span-2">
                <img src="img/body measurement.png" alt="Body measurement diagram" class="w-full h-64 object-contain mb-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h4 class="font-semibold mb-2 text-sm">Upper Body</h4>
                        <div class="grid grid-cols-2 gap-2">
                            <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
                            <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
                            <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
                            <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
                        </div>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-2 text-sm">Lower Body</h4>
                        <div class="grid grid-cols-2 gap-2">
                            <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
                            <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
                            <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
                            <input type="text" placeholder="Input" class="p-2 border rounded text-sm">
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