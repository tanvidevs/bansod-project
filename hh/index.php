<?php
// Start session to store form data
session_start();

// Include your database connection
include './dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Validate that fields are not empty
    if (!empty($name) && !empty($phone) && !empty($email)) {
        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO contact (name, phone, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $phone, $email);
        
        if ($stmt->execute()) {
            // Store form data in session to access on the thankyou.php page
            $_SESSION['name'] = $name;
            $_SESSION['phone'] = $phone;
            $_SESSION['email'] = $email;
            
            // Redirect to thankyou.php after form submission
            header("Location: thankyou-page.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "All fields are required!";
    }
}
$conn->close();
?>



<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navbar -->
     <div class="bg-white sticky top-0 z-50">
      <nav class="bg-white py-2 md:py-4 mr-0 md:mr-28 ml-0 md:ml-28 border-b border-gray-200 border-b-orange-600">
                <div class="container px-4 mx-auto md:flex md:items-center">
            
                  <div class="flex justify-between items-center">
                    <a href="#" class="font-bold text-2xl text-orange-600">Parthamesh Bansod</a>
                    <button class="border border-solid border-gray-600 px-3 py-1 rounded text-gray-600 opacity-50 hover:opacity-75 md:hidden" id="navbar-toggle">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                      </svg>
                      
                    </button>
                  </div>
            
                  <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
                    
                    <a href="#" class="p-2 lg:px-4 md:mx-2 text-orange-600 text-center border border-transparent rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">About Me</a>
                    <a href="#" class="p-2 lg:px-4 md:mx-2 text-orange-600 text-center border border-transparent rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">Recent Clips</a>
                    <a href="#" class="p-2 lg:px-4 md:mx-2 text-orange-600 text-center border border-transparent rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">Recogized by</a>
                    <a href="#" class="p-2 lg:px-4 md:mx-2 text-orange-600 text-center border border-transparent rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">Actively working</a>
                    <a href="#" class="p-2 lg:px-4 md:mx-2 text-orange-600 text-center border border-transparent rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">Contact Me</a>
                  </div>
                </div>
          </nav>
     </div>


    <!-- Hero Section -->
    <section class="text-gray-600 body-font mr-0 md:mr-28 ml-0 md:ml-28">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Before they sold out
              <br class="hidden lg:inline-block">readymade gluten
            </h1>
            <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
            <img src="./signature.png" class="h-10 mb-8" alt="">
            <div class="flex justify-center">
              <button class="inline-flex text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded text-lg">Book a Consultation Call</button>
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" style="margin-bottom: -95px;" alt="hero" src="./BgNagpur.png">
          </div>
        </div>
    </section>
   
    <!-- About -->
<div id="about me" class="bg-orange-100 pt-10 pb-10">
    <section  class="mr-0 md:mr-36 ml-0 md:ml-36">
        <h2 class="text-center text-5xl text-gray-900 font-extrabold">About <span class='text-orange-600'>Me</span></h2>
        <div class="container mx-auto flex px-5 py-10 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img loading="lazy" class="object-cover object-center rounded" alt="hero" src="./2.png">
        </div>
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">

            <p class="mb-8 leading-relaxed text-justify">At SQFT INFRA, we understand that buying property is a significant milestone in life. Our mission is to make this journey seamless and fulfilling for you. With a team of dedicated professionals, we offer a range of real estate solutions tailored to meet your unique needs. Whether you are looking to buy, sell, or invest, we are here to guide you every step of the way.</p>
            <p class="mb-8 leading-relaxed text-justify">Our extensive experience in the industry ensures that we provide accurate, up-to-date information and advice, empowering you to make informed decisions. We pride ourselves on our integrity, transparency, and commitment to customer satisfaction. At SQFT INFRA, your dream property is just a step away. Let us help you find the perfect place to call home.</p>
            
        </div>
        </div>
    </section>
  </div>


    <!-- Reel videos -->
    <h2 id="recent clips" class="mt-20 mb-5 text-center text-5xl text-gray-900 font-extrabold">Recent <span class='text-orange-600'>Clips</span></h2>
    <div class="flex flex-nowrap overflow-x-auto sm:flex-wrap justify-between mr-0 md:mr-36 ml-0 md:ml-36 mb-20">
      <div class="w-56 h-96 flex-shrink-0 p-4">
          <iframe class="w-full h-full rounded-lg" src="https://www.youtube.com/embed/IdezyE70U_s?si=nSopTvaKyiu6pXyT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div class="w-56 h-96 flex-shrink-0 p-4">
          <iframe class="w-full h-full rounded-lg" src="https://www.youtube.com/embed/pPDN3gdZA4Q?si=Db7iEHhhVx4VjaVK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div class="w-56 h-96 flex-shrink-0 p-4">
          <iframe class="w-full h-full rounded-lg" src="https://www.youtube.com/embed/KOzLvcQgPQM?si=y4KShTIvUrzOzTuy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div class="w-56 h-96 flex-shrink-0 p-4">
          <iframe class="w-full h-full rounded-lg" src="https://www.youtube.com/embed/T-E_EpM4L_w?si=Ek-xDA1--hFQ9bLG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
  </div>


    <!-- Recogized by -->
    <div class="bg-white py-6 sm:py-8 lg:py-12 mr-0 md:mr-36 ml-0 md:ml-36">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <h2 class="text-center text-5xl text-gray-900 font-extrabold mb-10">Recogized <span class='text-orange-600'>by</span></h2>
      
          <div class="grid grid-cols-2 gap-6 rounded-lg bg-orange-100 p-6 sm:h-40 sm:content-evenly md:grid-cols-4">
            <!-- logo - start -->
            <div class="flex justify-center text-orange-500">
              <img src="https://dummyimage.com/200x100/000/fff" alt="">
            </div>
            <!-- logo - end -->
      
            <!-- logo - start -->
            <div class="flex justify-center text-orange-500">
              <img src="https://dummyimage.com/200x100/000/fff" alt="">
            </div>
            <!-- logo - end -->
      
            <!-- logo - start -->
            <div class="flex justify-center text-orange-500">
              <img src="https://dummyimage.com/200x100/000/fff" alt="">
            </div>
            <!-- logo - end -->
      
            <!-- logo - start -->
            <div class="flex justify-center text-orange-500">
              <img src="https://dummyimage.com/200x100/000/fff" alt="">
            </div>
            <!-- logo - end -->
          </div>
        </div>
    </div>

    <!-- Actively working with -->
    <div class="bg-white py-6 sm:py-8 lg:py-12 mr-0 md:mr-36 ml-0 md:ml-36">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
              <h2 class="text-center text-5xl text-gray-900 font-extrabold mb-10">Actively <span class='text-orange-600'>working</span></h2>
              <div class="flex justify-center">
                <img src="./map.png" class="w-full md:w-1/2 max-w-3xl h-auto" alt="">
            </div>
        </div>
    </div>

    <!-- Number of events -->
    <section  class="text-gray-600 body-font">
      <div id="events" class="container px-5 py-24 mx-auto">
        <h2 class="text-center text-5xl text-gray-900 font-extrabold mb-10">Number of <span class='text-orange-600'>Events</span></h2>
        <div class="flex flex-wrap -m-4 text-center bg-orange-100 p-10 mt-5">
          <div class="p-4 sm:w-1/4 w-1/2">
            <h2 class="title-font font-medium sm:text-7xl text-5xl text-orange-600">2.7K</h2>
            <p class="leading-relaxed">Users</p>
          </div>
          <div class="p-4 sm:w-1/4 w-1/2">
            <h2 class="title-font font-medium sm:text-7xl text-5xl text-orange-600">2.7K</h2>
            <p class="leading-relaxed">Subscribes</p>
          </div>
          <div class="p-4 sm:w-1/4 w-1/2">
            <h2 class="title-font font-medium sm:text-7xl text-5xl text-orange-600">2.7K</h2>
            <p class="leading-relaxed">Downloads</p>
          </div>
          <div class="p-4 sm:w-1/4 w-1/2">
            <h2 class="title-font font-medium sm:text-7xl text-5xl text-orange-600">2.7K</h2>
            <p class="leading-relaxed">Products</p>
          </div>
          
        </div>
      </div>
    </section>

    <!-- #1 Heading Topics -->
  <section class="text-gray-600 body-font mr-0 md:mr-36 ml-0 md:ml-36">
    <h2 class="text-center text-5xl text-gray-900 font-extrabold mb-10">#1 Heading <span class='text-orange-600'>Topics</span></h2>
    <div class="container mx-auto flex px-5 md:flex-row flex-col items-center">
        <!-- Removed image section -->
        <div class="lg:flex-grow md:w-full lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <p class="mb-8 leading-relaxed text-justify">At SQFT INFRA, we understand that buying property is a significant milestone in life. Our mission is to make this journey seamless and fulfilling for you. With a team of dedicated professionals, we offer a range of real estate solutions tailored to meet your unique needs. Whether you are looking to buy, sell, or invest, we are here to guide you every step of the way.</p>
            <p class="mb-8 leading-relaxed text-justify">Our extensive experience in the industry ensures that we provide accurate, up-to-date information and advice, empowering you to make informed decisions. We pride ourselves on our integrity, transparency, and commitment to customer satisfaction. At SQFT INFRA, your dream property is just a step away. Let us help you find the perfect place to call home.</p>
            
         </div>
       </div>
  </section>

  <!-- #2 Heading Topics -->
  <section class="text-gray-600 body-font mr-0 md:mr-36 ml-0 md:ml-36 mt-10">
    <h2 class="text-center text-5xl text-gray-900 font-extrabold mb-10">#2 Heading <span class="text-orange-600">Topics</span></h2>
    <div class="container mx-auto flex px-5 flex-col pb-20 items-center">
        <!-- Content section -->
        <div class="lg:flex-grow md:w-full lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <p class="mb-8 leading-relaxed text-justify">At SQFT INFRA, we understand that buying property is a significant milestone in life. Our mission is to make this journey seamless and fulfilling for you. With a team of dedicated professionals, we offer a range of real estate solutions tailored to meet your unique needs. Whether you are looking to buy, sell, or invest, we are here to guide you every step of the way.</p>
            <p class="mb-8 leading-relaxed text-justify">Our extensive experience in the industry ensures that we provide accurate, up-to-date information and advice, empowering you to make informed decisions. We pride ourselves on our integrity, transparency, and commitment to customer satisfaction. At SQFT INFRA, your dream property is just a step away. Let us help you find the perfect place to call home.</p>
        </div>
        <!-- Centered Image -->
        <div class="flex justify-center">
          <img src="https://dummyimage.com/600x400/000/fff" class="w-full h-auto mx-auto" alt="img">
      </div>
    </div>
</section>


<!-- why choose you -->
<section class="text-gray-600 body-font mr-0 md:mr-36 ml-0 md:ml-36">
  <div class="container flex flex-col justify-center px-4 py-8 mx-auto md:p-8">
      <!-- Heading Section -->
      <h2 class="text-center text-5xl text-gray-900 font-extrabold mb-10">#2 Heading <span class="text-orange-600">Topics</span></h2>

      <!-- FAQ Content Section -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <details class="w-full border rounded-lg bg-orange-100">
              <summary class="px-4 py-6 focus:outline-none focus-visible:ring-violet-600 text-lg font-semibold">Ex orci laoreet egestas sapien magna egestas scelerisque?</summary>
              <p class="px-4 py-6 pt-0 ml-4 -mt-4 text-gray-600 text-justify">Lectus iaculis orci metus vitae ligula dictum per. Nisl per nullam taciti at adipiscing est.</p>
          </details>
          <details class="w-full border rounded-lg  bg-orange-100">
              <summary class="px-4 py-6 focus:outline-none focus-visible:ring-violet-600 text-lg font-semibold">Lorem at arcu rutrum viverra metus sapien venenatis lobortis odio?</summary>
              <p class="px-4 py-6 pt-0 ml-4 -mt-4 text-gray-600 text-justify">Tincidunt ut hac condimentum rhoncus phasellus nostra. Magna porttitor egestas tincidunt neque vehicula potenti.</p>
          </details>
          <details class="w-full border rounded-lg  bg-orange-100">
              <summary class="px-4 py-6 focus:outline-none focus-visible:ring-violet-600 text-lg font-semibold">Eleifend feugiat sollicitudin laoreet adipiscing bibendum suscipit erat?</summary>
              <p class="px-4 py-6 pt-0 ml-4 -mt-4 text-gray-600 text-justify">Justo libero tellus integer tincidunt justo semper consequat venenatis aliquet imperdiet. Ultricies urna proin fusce nulla pretium sodales vel magna et massa euismod vulputate sed.</p>
          </details>
          <details class="w-full border rounded-lg bg-orange-100">
              <summary class="px-4 py-6 focus:outline-none focus-visible:ring-violet-600 text-lg font-semibold">Quisque suscipit ipsum est, eu venenatis leo ornare eget?</summary>
              <p class="px-4 py-6 pt-0 ml-4 -mt-4 text-gray-600 text-justify">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
          </details>
          <details class="w-full border rounded-lg bg-orange-100">
            <summary class="px-4 py-6 focus:outline-none focus-visible:ring-violet-600 text-lg font-semibold">Quisque suscipit ipsum est, eu venenatis leo ornare eget?</summary>
            <p class="px-4 py-6 pt-0 ml-4 -mt-4 text-gray-600 text-justify">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
        </details>
        <details class="w-full border rounded-lg bg-orange-100">
          <summary class="px-4 py-6 focus:outline-none focus-visible:ring-violet-600 text-lg font-semibold">Quisque suscipit ipsum est, eu venenatis leo ornare eget?</summary>
          <p class="px-4 py-6 pt-0 ml-4 -mt-4 text-gray-600 text-justify">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
      </details>
      </div>
  </div>
</section>



<!-- Testimonial -->
<section class="text-gray-600 body-font mr-0 md:mr-36 ml-0 md:ml-36">
  <div class="container px-5 py-24 mx-auto">
    <h2 class="text-center text-5xl text-gray-900 font-extrabold mb-10">Testi<span class="text-orange-600">monials</span></h2>
    <div class="flex overflow-x-auto space-x-4 -m-4 pb-5  ">
      <!-- Testimonial 1 -->
      <div class="p-4 md:w-1/2 w-full shrink-0" style="min-width: 300px;">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Holden Caulfield</span>
              <span class="text-gray-500 text-sm">UI DEVELOPER</span>
            </span>
          </a>
        </div>
      </div>
      <!-- Testimonial 2 -->
      <div class="p-4 md:w-1/2 w-full shrink-0" style="min-width: 300px;">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="https://dummyimage.com/107x107" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Alper Kamu</span>
              <span class="text-gray-500 text-sm">DESIGNER</span>
            </span>
          </a>
        </div>
      </div>
      <!-- Testimonial 2 -->
      <div class="p-4 md:w-1/2 w-full shrink-0" style="min-width: 300px;">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="https://dummyimage.com/107x107" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Alper Kamu</span>
              <span class="text-gray-500 text-sm">DESIGNER</span>
            </span>
          </a>
        </div>
      </div>
      <!-- Testimonial 2 -->
      <div class="p-4 md:w-1/2 w-full shrink-0" style="min-width: 300px;">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="https://dummyimage.com/107x107" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Alper Kamu</span>
              <span class="text-gray-500 text-sm">DESIGNER</span>
            </span>
          </a>
        </div>
      </div>
      <!-- Testimonial 2 -->
      <div class="p-4 md:w-1/2 w-full shrink-0" style="min-width: 300px;">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="https://dummyimage.com/107x107" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Alper Kamu</span>
              <span class="text-gray-500 text-sm">DESIGNER</span>
            </span>
          </a>
        </div>
      </div>
      <!-- Add more testimonials as needed -->
    </div>
  </div>
</section>


<!-- form -->
<section class="text-gray-600 body-font relative">
  <div id="contact" class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h2 class="text-center text-5xl text-gray-900 font-extrabold mb-10">Book Consultation <span class="text-orange-600">Call</span></h2>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <form action="" method="POST">
        <div class="flex flex-wrap -m-2">
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
              <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-orange-500 focus:bg-white focus:ring-2 focus:ring-orange-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
            </div>
          </div>
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="phone" class="leading-7 text-sm text-gray-600">Phone Number</label>
              <input type="tel" id="phone" name="phone" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-orange-500 focus:bg-white focus:ring-2 focus:ring-orange-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
            </div>
          </div>
          <div class="p-2 w-full">
            <div class="relative">
              <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
              <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-orange-500 focus:bg-white focus:ring-2 focus:ring-orange-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
            </div>
          </div>
          <div class="p-2 w-full">
            <button type="submit" class="flex mx-auto text-white bg-orange-500 border-0 py-2 px-8 focus:outline-none hover:bg-orange-600 rounded text-lg">Submit</button>
          </div>
        </div>
      </form>
     
    </div>
  </div>
</section>







    

    <!-- footer -->
    <div class="bg-orange-50 pt-4 sm:pt-10 lg:pt-12">
        <footer class="mx-auto max-w-screen-2xl px-4 md:px-8">
          <div class="flex flex-col items-center border-t pt-6">
            <img src="https://dummyimage.com/300x100/000/fff" class="mb-4" alt="">
            <!-- nav - start -->
            <nav class="mb-4 flex flex-wrap justify-center gap-x-4 gap-y-2 md:justify-start md:gap-6">
              <a href="#about me" class="text-gray-500 transition duration-100 hover:text-orange-500 active:text-orange-600">About Me</a>
              <a href="#recent clips" class="text-gray-500 transition duration-100 hover:text-orange-500 active:text-orange-600">Recent Clips</a>
              <a href="#events" class="text-gray-500 transition duration-100 hover:text-orange-500 active:text-orange-600">Events</a>
              <a href="#contact" class="text-gray-500 transition duration-100 hover:text-orange-500 active:text-orange-600">Contact</a>
            </nav>
            <!-- nav - end -->
      
            <!-- social - start -->
            <div class="flex gap-4">
              <a href="#" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
                <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg>
              </a>
      
              <a href="#" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
                <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                </svg>
              </a>
      
              <a href="#" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
                <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                </svg>
              </a>
      
              <a href="#" target="_blank" class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
                <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                </svg>
              </a>
            </div>
            <!-- social - end -->
          </div>
      
          <div class="py-8 text-center text-sm text-gray-400">© 2024 - Present Sqftinfra. All rights reserved.</div>
        </footer>
      </div>


      <script>
        let toggleBtn = document.querySelector("#navbar-toggle");
        let collapse = document.querySelector("#navbar-collapse");

        toggleBtn.onclick = () => {
        collapse.classList.toggle("hidden");
        collapse.classList.toggle("flex");
        };
      </script>
</body>
</html>