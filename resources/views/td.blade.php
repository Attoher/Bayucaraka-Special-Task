<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div>
      <div class="relative w-full h-screen">
  
          <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('img/background.webp');"></div>
      
          <div class="absolute inset-0 flex items-center justify-center">
              <img src="img/content-image.webp" alt="Fixed Wing" class="h-96 object-contain">
          </div>
      
          <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
              <div class="mt-12">
                  <h1 class="text-yellow-500 text-5xl font-bold tracking-wider">GAYATRI</h1>
                  <p class="text-orange-500 text-lg mt-4">
                    Creativity and Innovation, We Inspire Society.
                  </p>
              </div>
          </div>
      </div>
      <div class="flex justify-center items-center h-128 bg-yellow-600 p-10">
          <div class="w-1/2 p-6 bg-white shadow-lg rounded-md">
              <h2 class="text-white bg-blue-800 px-4 py-2 text-2xl font-bold w-max">
                Technology Development Divison
              </h2>
              <p class="mt-4 text-gray-800">
                Technology Development focuses on the research and development of UAVs (Unmanned Aerial Vehicles) and supporting technologies independently, ensuring compliance with local content requirements (TKDN).
                This division aims to advance innovative solutions and promote the use of domestically produced components and systems.
              </p>
          </div>
      
          <div class="w-1/3 bg-white shadow-xl rounded-lg ml-10 p-6">
              <div class="flex justify-between mb-4">
                  <span class="bg-blue-100 text-blue-800 text-sm px-2 py-1 rounded-full">Fleet Specification</span>
                  <span class="font-semibold">SBY ➔ ITS</span>
              </div>
      
              <h3 class="text-xl font-bold mb-4">Technology Development</h3>
              <div class="grid grid-cols-2 gap-4 text-sm">
                  <div>
                      <p>Propeller Code</p>
                      <p class="font-bold">12x6</p>
                  </div>
                  <div>
                      <p>Propeller Blade</p>
                      <p class="font-bold">2.455.5 MM</p>
                  </div>
                  <div>
                      <p>Weight</p>
                      <p class="font-bold">20 gram</p>
                  </div>
                  <div>
                      <p>Thrust</p>
                      <p class="font-bold">1.5 KG</p>
                  </div>
                  <div>
                      <p>Reverse Trust</p>
                      <p class="font-bold">1 KG</p>
                  </div>
                  <div>
                      <p>Motor</p>
                      <p class="font-bold">800 kv</p>
                  </div>
              </div>
      
              <div class="mt-6 flex justify-center">
                  <img src="img/barcode-3.webp" alt="Barcode" class="h-20">
              </div>
          </div>
      </div>
      
    
    <x-footer></x-footer>
  </div>
  <script src="js/script.js"></script>
  </script>
</x-layout>
