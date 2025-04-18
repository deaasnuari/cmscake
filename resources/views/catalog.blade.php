<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Products - Manies Cakery</title>
  <link rel="stylesheet" href="css/flowbite.min.css" />
  <script src="js/flowbite.min.js"></script>
  <style>
    body {
      background-color: #fff;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .container {
      flex-grow: 1;
      padding: 40px;
    }
    footer {
      background-color: #3a2e25;
      color: white;
      padding: 40px 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 30px;
      font-size: 14px;
      margin-top: auto; 

    .footer-section h4 {
      margin-bottom: 10px;
      color: #f4b183;
    }

  </style>
</head>
<body>
  <!-- Header -->
  <header class="bg-gray-800 text-white flex justify-between items-center p-4">
    <div class="text-lg font-bold">Manies Cakery</div>
    <nav>
      <a href="#" class="text-white mx-4">Home</a>
      <a href="#" class="text-white mx-4 active">Product</a>
      <a href="#" class="text-white mx-4">About Us</a>
      <a href="#" class="text-white mx-4">Register</a>
    </nav>
  </header>
  <!--  END Header -->

  <!-- MAIN-->
  <div class="container">
<!-- BAR NAVIGASI -->
    <div class="flex justify-between items-center mb-4">
      <div class="flex space-x-4">
        <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Cake</button>
        <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">BROWNIES</button>
        <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">COOKIES</button>
        <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">HAMPERS</button>
        <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">GRAB & GO</button>
      </div>
      <div class="flex items-center">
        <label class="mr-2">Sort By</label>
        <select class="border rounded p-1">
          <option>Best Seller</option>
          <option>Terbaru</option>
        </select>
      </div>
    </div>
<!-- ENDBAR NAVIGASI -->

    <h2 class="text-2xl font-bold mb-4">Brownies</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
<!-- CARD -->
      <div class="card bg-gray-100 p-4 rounded-lg text-center">
        <img src="image_hdn/brownies.jpg" alt="" class="w-full h-32 object-cover rounded mb-2">
        <p class="font-semibold">Brownies Coklat</p>
        <div class="text-yellow-500">★★★★★</div>
        <p class="text-blue-500 cursor-pointer">Ulasan ></p>
      </div>

      <div class="card bg-gray-100 p-4 rounded-lg text-center">
        <img src="image_hdn/brownies.jpg" alt="" class="w-full h-32 object-cover rounded mb-2">
        <p class="font-semibold">Brownies Coco</p>
        <div class="text-yellow-500">★★★★★</div>
        <p class="text-blue-500 cursor-pointer">Ulasan ></p>
      </div>
    </div>
  </div>
<!--END CARD -->

<!-- Footer  -->
  <footer>
    <div class="footer-section flex-1">
      <h4 class="text-[#f4b183] font-semibold">Manies Cakery</h4>
      <p>Home-made cake shop with a variety of sweet choices made with love. Brownies, cookies, breads, and more.</p>
    </div>
    <div class="footer-section flex-1">
      <h4 class="text-[#f4b183] font-semibold">Follow & Order</h4>
      <p> <a href="#" class="hover:underline">Instagram</a></p>
      <p> <a href="#" class="hover:underline">WhatsApp</a></p>
      <p> <a href="#" class="hover:underline">Google Maps</a></p>
    </div>
    <div class="footer-section flex-1">
      <h4 class="text-[#f4b183] font-semibold">About</h4>
      <a href="#" class="hover:underline">About Us</a><br>
      <a href="#" class="hover:underline">Location</a><br>
      <a href="#" class="hover:underline">Contact Us</a>
    </div>
    <div class="footer-section flex-1">
      <h4 class="text-[#f4b183] font-semibold">Support</h4>
      <a href="#" class="hover:underline">Privacy Policy</a><br>
      <a href="#" class="hover:underline">Terms</a>
    </div>
  </footer>
<!-- END Footer  -->
</body>
</html>
