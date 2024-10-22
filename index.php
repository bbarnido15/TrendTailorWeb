<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrendTailor</title>
    
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.css" rel="stylesheet" />
    
    <!-- External CSS -->
    <link rel="stylesheet" href="src/styles.css"> <!-- Adjusted link to point to your CSS file -->

</head>
<body>

<!-- Navigation Bar -->
<?php include 'templates/utilities/navbar.html'; ?>
 

<!-- Main Content -->
<main class="flex items-center justify-center py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Flex Container for Text and Carousel -->
        <div class="flex flex-col md:flex-row items-center justify-between"> 
            <!-- Text Container -->
            <div class="text-container mb-2 text-center md:text-left md:mr-4"> 
                <h1 class="text-6xl sm:text-8xl serif-font font-bold text-gray-900 max-w-4xl z-10 relative"> 
                    <span class="block md:inline">Craft your style,</span> 
                    <span class="block md:inline">Stitch your story.</span> 
                </h1>
            </div>

            <!-- Carousel Wrapper -->
            <div id="custom-controls-gallery" class="relative w-full mb-4 md:w-1/2" data-carousel="slide"> 
                <!-- Carousel items -->
                <div class="relative h-48 overflow-hidden rounded-lg md:h-64 flex justify-center items-center"> 
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="templates/img/satin-gray-silk-cloth-wallpaper-preview.png" class="h-full w-auto max-w-full object-cover" alt="Brown fabric"> 
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="templates/img/machine-model-linen-actress-wallpaper-preview.png" class="h-full w-auto max-w-full object-cover" alt="Light pink fabric"> 
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="templates/img/silk-cloth-material-texture-wallpaper-preview.png" class="h-full w-auto max-w-full object-cover" alt="Gray fabric"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<?php include 'templates/utilities/footer.html'; ?>

<!-- Flowbite JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.js"></script>
</body>
</html>
