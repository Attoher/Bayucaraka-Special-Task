<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div>
      <div class="relative w-full h-screen">
  
          <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('img/background.webp');"></div>
      
          <div class="absolute inset-0 flex items-center justify-center">
              <img src="img/vtol-dark.webp" alt="VTOL" class="h-96 object-contain">
          </div>
      
          <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
              <div class="mt-12">
                  <h1 class="text-yellow-500 text-5xl font-bold tracking-wider">SOEROPEKA</h1>
                  <p class="text-orange-500 text-lg mt-4">
                    Strength And Precision Are Our Priority
                    background
                  </p>
              </div>
          </div>
      </div>
      <div class="flex justify-center items-center h-128 bg-yellow-600 p-10">
          <div class="w-1/2 p-6 bg-white shadow-lg rounded-md">
              <h2 class="text-white bg-blue-800 px-4 py-2 text-2xl font-bold w-max">
                VTOL Divison
              </h2>
              <p class="mt-4 text-gray-800">
                VTOL focuses on the design and development of autonomous UAVs (Unmanned Aerial Vehicles) with rotary wing types.
                This division specializes in creating UAVs capable of vertical take-off and landing, enhancing their versatility and operational capabilities in various environments.
              </p>
          </div>
      
          <div class="w-1/3 bg-white shadow-xl rounded-lg ml-10 p-6">
              <div class="flex justify-between mb-4">
                  <span class="bg-blue-100 text-blue-800 text-sm px-2 py-1 rounded-full">Fleet Specification</span>
                  <span class="font-semibold">SBY ➔ ITS</span>
              </div>
      
              <h3 class="text-xl font-bold mb-4">VTOL</h3>
              <div class="grid grid-cols-2 gap-4 text-sm">
                  <div>
                      <p>Diameter</p>
                      <p class="font-bold">890mm</p>
                  </div>
                  <div>
                      <p>Material</p>
                      <p class="font-bold">Carbon And PLA+</p>
                  </div>
                  <div>
                      <p>Weight</p>
                      <p class="font-bold">4200 gram</p>
                  </div>
                  <div>
                      <p>System</p>
                      <p class="font-bold">GPS, CAMERA, LIDAR</p>
                  </div>
                  <div>
                      <p>Battery</p>
                      <p class="font-bold">3300 mAH</p>
                  </div>
                  <div>
                      <p>Motor</p>
                      <p class="font-bold">T-Motor U5 400KV</p>
                  </div>
              </div>
      
              <div class="mt-6 flex justify-center">
                  <img src="img/barcode-2.webp" alt="Barcode" class="h-20">
              </div>
          </div>
      </div>
      
    
    <x-footer></x-footer>
  </div>
  <script src="js/script.js"></script>
  </script>
</x-layout>
