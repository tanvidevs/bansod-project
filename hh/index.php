<?php
// Start session to retrieve form data
session_start();

// Check if the session variables exist, else redirect back to form page
if (!isset($_SESSION['name']) || !isset($_SESSION['phone']) || !isset($_SESSION['email'])) {
    header("Location: index.php");  // Redirect to form page if no data is available
    exit();
}
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
                    <a href="#">
                    <h2 class="font-bold text-2xl"><span class="text-orange-600">Prathamesh</span> Bansod</h2>
                    </a>
                    <button class="border border-solid border-gray-600 px-3 py-1 rounded text-gray-600 opacity-50 hover:opacity-75 md:hidden" id="navbar-toggle">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                      </svg>
                      
                    </button>
                  </div>
            
                  <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
                    
                    <a href="#about me" class="p-2 lg:px-4 md:mx-2 text-orange-600 text-center border border-transparent rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">About Me</a>
                    <a href="#recent clips" class="p-2 lg:px-4 md:mx-2 text-orange-600 text-center border border-transparent rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">Recent Clips</a>
                    <a href="#recogized by" class="p-2 lg:px-4 md:mx-2 text-orange-600 text-center border border-transparent rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">Recogized by</a>
                    <a href="#actively working" class="p-2 lg:px-4 md:mx-2 text-orange-600 text-center border border-transparent rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">Actively working</a>
                    <a href="#contact" class="p-2 lg:px-4 md:mx-2 text-orange-600 text-center border border-transparent rounded hover:bg-orange-100 hover:text-orange-700 transition-colors duration-300">Contact Me</a>
                  </div>
                </div>
          </nav>
     </div>


    <!-- Hero Section -->
    <section class="text-gray-600 body-font mr-0 md:mr-28 ml-0 md:ml-28">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <div class="flex">
                    <img src="https://media.tenor.com/bm8Q6yAlsPsAAAAj/verified.gif" class="w-10 md:w-24 mb-8" alt="">
                    <h1 class="ml-5 title-font sm:text-8xl text-4xl mb-4 font-bold text-gray-900">Thank <span class="text-orange-600">You!</span></h1>
                </div>
                <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <!-- Responsive Table -->
                <div class="overflow-x-auto">
                    <table class="table-auto border-collapse border border-gray-300 w-full text-left">
                        <tbody>
                            <tr>
                                <th class="px-2 md:px-4 py-2 border border-gray-300 text-sm md:text-base  bg-orange-100">Name</th>
                                <td class="px-2 md:px-4 py-2 border border-gray-300 text-sm md:text-base"><?php echo htmlspecialchars($_SESSION['name']); ?></td>
                            </tr>
                            <tr>
                                <th class="px-2 md:px-4 py-2 border border-gray-300 text-sm md:text-base bg-orange-100">Phone</th>
                                
                                <td class="px-2 md:px-4 py-2 border border-gray-300 text-sm md:text-base"><?php echo htmlspecialchars($_SESSION['phone']); ?></td>
                              
                            </tr>
                            <tr>
                                <th class="px-2 md:px-4 py-2 border border-gray-300 text-sm md:text-base bg-orange-100">Email</th>
                            
                                <td class="px-2 md:px-4 py-2 border border-gray-300 text-sm md:text-base"><?php echo htmlspecialchars($_SESSION['email']); ?></td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


      <!-- Reel videos -->
      <h2 id="recent clips" class="mt-20 text-center text-4xl md:text-5xl md:text-5xl text-gray-900 font-extrabold">Happy <span class='text-orange-600'>Clients</span></h2>
      <p class="text-center text-md text-gray-900 font-medium mb-10 mt-4">Let’s Chat! Secure Your Consultation Call Today!</p>
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
    
<!-- cta -->
    <div class="bg-white py-6 sm:py-8 lg:py-12 mr-0 md:mr-28 ml-0 md:ml-28">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <div class="flex flex-col items-center justify-between gap-4 rounded-lg bg-orange-100 p-4 sm:flex-row md:p-8">
      <div>
        <h2 class="text-xl font-bold text-orange-600 md:text-2xl">Start your free trial</h2>
        <p class="text-gray-600">No Credit Card required</p>
      </div>

      <a href="https://wa.me/919325152367?text=I%20want%20to%20join%20your%20team
" class="inline-block rounded-lg bg-orange-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-orange-600 focus-visible:ring active:bg-indigo-700 md:text-base">Start now</a>
    </div>
  </div>
</div>
    


<!-- Testimonial -->
<section class="text-gray-600 body-font mr-0 md:mr-36 ml-0 md:ml-36">
  <div class="container px-5 py-24 mx-auto">
    <h2 class="text-center text-4xl md:text-5xl text-gray-900 font-extrabold">Testi<span class="text-orange-600">monials</span></h2>
    <p class="text-center text-md text-gray-900 font-medium mb-10 mt-4">Transforming Lives in Amazing Ways</p>
    <div class="flex overflow-x-auto space-x-4 -m-4 pb-5">
      <!-- Testimonial 1 -->
      <div class="p-4 md:w-1/2 w-full shrink-0" style="min-width: 300px;">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">"This real estate investment changed my life! The team was supportive every step of the way."</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="./Client/Dr umberkar WCL.png" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Dr Kiran Umberkar</span>
              <span class="text-gray-500 text-sm">INVESTOR</span>
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
          <p class="leading-relaxed mb-6">"I never thought investing in real estate could be this straightforward. Highly recommend!"</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="./Client/Santosh Khobragade Bhandara.png" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Santosh Khobragade Bhandara</span>
              <span class="text-gray-500 text-sm">CUSTOMER</span>
            </span>
          </a>
        </div>
      </div>
      <!-- Testimonial 3 -->
      <div class="p-4 md:w-1/2 w-full shrink-0" style="min-width: 300px;">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">"The support from the team was incredible! I felt valued and informed throughout."</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="./Client/Kishor Ashtanker.png" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Kishor Ashtanker</span>
              <span class="text-gray-500 text-sm">FIRST-TIME BUYER</span>
            </span>
          </a>
        </div>
      </div>
      <!-- Testimonial 4 -->
      <div class="p-4 md:w-1/2 w-full shrink-0" style="min-width: 300px;">
        <div class="h-full bg-gray-100 p-8 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
          </svg>
          <p class="leading-relaxed mb-6">"Our home buying experience was seamless. The team provided exceptional support!"</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="./Client/Nitin Bhaisare bhadrawati.png" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-gray-900">Nitin Bhaisare bhadrawati</span>
              <span class="text-gray-500 text-sm">HOME BUYER</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="bg-orange-50 pt-4 sm:pt-10 lg:pt-12">
        <footer class="mx-auto max-w-screen-2xl px-4 md:px-8">
          <div class="flex flex-col items-center border-t pt-6">
            <img src="./Image/signclr.png" class="h-36 mb-4" alt="">
            <h2 class="font-bold mb-4 text-3xl"><span class="text-orange-600">Prathamesh</span> Bansod</h2>
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

<script>





        <script>
          var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"919325152367","welcomeMessage":" i want to join your team","zIndex":999999,"btnColorScheme":"light"};
          window.onload = () => {
            _waEmbed(wa_btnSetting);
          };
        </script>
      
</body>
</html>
