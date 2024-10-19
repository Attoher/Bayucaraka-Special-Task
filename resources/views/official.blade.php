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
                  <h1 class="text-yellow-500 text-5xl font-bold tracking-wider">Official Bayucaraka</h1>
                  <p class="text-orange-500 text-lg mt-4">
                    Sponsorship, Admin, and Media
                  </p>
              </div>
          </div>
      </div>
      <div class="flex justify-center items-center h-128 bg-yellow-600 p-10">
          <div class="w-1/2 p-6 bg-white shadow-lg rounded-md">
              <h2 class="text-white bg-blue-800 px-4 py-2 text-2xl font-bold w-max">
                Official Divison
              </h2>
              <p class="mt-4 text-gray-800">
                The official is responsible for the operation and handling of administrative aspects, financing, cooperation, event management, and other non-technical aspects.
                This role ensures the smooth functioning of various organizational activities and supports the overall strategic goals.
              </p>
          </div>
      
          <div class="w-1/3 bg-white shadow-xl rounded-lg ml-10 p-6">
              <div class="flex justify-between mb-4">
                  <span class="bg-blue-100 text-blue-800 text-sm px-2 py-1 rounded-full">Fleet Specification</span>
                  <span class="font-semibold">SBY ➔ ITS</span>
              </div>
      
              <h3 class="text-xl font-bold mb-4">Official</h3>
              <div class="grid grid-cols-2 gap-4 text-sm">
                  <div>
                      <p>JobDesc</p>
                      <p class="font-bold">Non-Technical</p>
                  </div>
                  <div>
                      <p>Sponsorship</p>
                      <p class="font-bold">Find Sponsor</p>
                  </div>
                  <div>
                      <p>Media</p>
                      <p class="font-bold">Editing Media</p>
                  </div>
                  <div>
                      <p>Admin</p>
                      <p class="font-bold">Data & Documentation</p>
                  </div>
              </div>
      
              <div class="mt-6 flex justify-center">
                  <img src="img/barcode-4.webp" alt="Barcode" class="h-20">
              </div>
          </div>
      </div>
      
    
    <x-footer></x-footer>
  </div>
  <script src="js/script.js"></script>
  </script>
</x-layout>
