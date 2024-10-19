<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div>
        <section class="bg-gray-900 text-white py-12">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold text-orange-400">About Bayucaraka Team</h2>
                <p class="mt-4 max-w-2xl mx-auto">
                The name Bayucaraka ITS is taken from the Sanskrit 'Vāyu' which means air and 'Caraka' which means wanderer. Overall, the name Bayucaraka ITS means Air Nomad through innovative work and research in the field of UAV (Unmanned Aerial Vehicle).
                </p>
                <div class="mt-8">
                <iframe class="w-full max-w-xl h-64 mx-auto rounded-lg" src="img/Company Profile ITS Team BAYUCARAKA 2020.mp4" title="Company Profile ITS Team BAYUCARAKA"></iframe>
                </div>
            </div>
        </section>
          
        <section class="bg-yellow-100 py-12">
            <div class="container mx-auto text-center">
                <div class="bg-orange-500 text-white py-6 px-8 rounded-lg">
                <h3 class="text-xl font-bold">#GarudakuJayaSelalu</h3>
                <p class="mt-2">
                    This team also has the hashtag #GarudakuJayaSelalu which means the Bayucaraka Team is ready to continue to bring glory to the skies of Indonesia through their work and research.
                </p>
                </div>
            </div>
        </section>
          
        <section class="py-12 text-white">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold">Bayucaraka Gallery's</h2>
                <p class="mt-4 max-w-2xl mx-auto">
                Let's see our journey through the pictures that have been captured all this time.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-8">
                <div class="bg-gray-200 rounded-3xl h-64">
                    <img src="img/lima.webp" alt="" class="w-full h-full">
                </div>
                <div class="bg-gray-200 rounded-3xl h-64">
                    <img src="img/satu.webp" alt="" class="w-full h-full">
                </div>
                <div class="bg-gray-200 rounded-3xl h-64">
                    <img src="img/dua.webp" alt="" class="w-full h-full">
                </div>
                </div>
            </div>
        </section>
        
        <div x-data="{ selectedCategory: 'all' }" class="bg-[#1E2328] py-16">
            <div class="text-center mb-12">
              <h2 class="text-4xl font-bold text-orange-500">Meet Our Team</h2>
              <p class="text-white mt-4">
                Every kick-butt project rolls with a squad boasting mad skills and epic teamwork! Check out the awesome players of the team:
              </p>
            </div>
          
            <!-- Buttons for Team Categories -->
            <div class="flex justify-center flex-wrap mb-8 space-x-2">
              <button @click="selectedCategory = 'all'"
                :class="selectedCategory === 'all' ? 'bg-orange-500' : 'bg-gray-700 hover:bg-gray-600'"
                class="text-white py-2 px-4 rounded-md transition duration-200">All</button>
          
              <button @click="selectedCategory = 'td-propulsion'"
                :class="selectedCategory === 'td-propulsion' ? 'bg-orange-500' : 'bg-gray-700 hover:bg-gray-600'"
                class="text-white py-2 px-4 rounded-md transition duration-200">TD Propulsion</button>
          
              <button @click="selectedCategory = 'td-flight-controller'"
                :class="selectedCategory === 'td-flight-controller' ? 'bg-orange-500' : 'bg-gray-700 hover:bg-gray-600'"
                class="text-white py-2 px-4 rounded-md transition duration-200">TD Flight Controller</button>
          
              <button @click="selectedCategory = 'td-ground-control'"
                :class="selectedCategory === 'td-ground-control' ? 'bg-orange-500' : 'bg-gray-700 hover:bg-gray-600'"
                class="text-white py-2 px-4 rounded-md transition duration-200">TD Ground Control Station</button>
          
              <button @click="selectedCategory = 'td-airframe'"
                :class="selectedCategory === 'td-airframe' ? 'bg-orange-500' : 'bg-gray-700 hover:bg-gray-600'"
                class="text-white py-2 px-4 rounded-md transition duration-200">TD Airframe</button>
          
              <button @click="selectedCategory = 'fixed-wing'"
                :class="selectedCategory === 'fixed-wing' ? 'bg-orange-500' : 'bg-gray-700 hover:bg-gray-600'"
                class="text-white py-2 px-4 rounded-md transition duration-200">Fixed Wing</button>
          
              <button @click="selectedCategory = 'official'"
                :class="selectedCategory === 'official' ? 'bg-orange-500' : 'bg-gray-700 hover:bg-gray-600'"
                class="text-white py-2 px-4 rounded-md transition duration-200">Official</button>
          
              <button @click="selectedCategory = 'vtol'"
                :class="selectedCategory === 'vtol' ? 'bg-orange-500' : 'bg-gray-700 hover:bg-gray-600'"
                class="text-white py-2 px-4 rounded-md transition duration-200">VTOL</button>
          
              <button @click="selectedCategory = 'racing-plane'"
                :class="selectedCategory === 'racing-plane' ? 'bg-orange-500' : 'bg-gray-700 hover:bg-gray-600'"
                class="text-white py-2 px-4 rounded-md transition duration-200">Racing Plane</button>
            </div>
          
            <!-- Team Members Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto px-4">
              <!-- Card 1 - TD Propulsion -->
              <div x-show="selectedCategory === 'all' || selectedCategory === 'td-propulsion'" class="bg-white rounded-lg shadow-lg p-6">
                <img src="img/rama.webp" alt="Rama Suryansyah" class="w-32 h-32 rounded-full mx-auto">
                <h3 class="mt-4 text-lg font-bold text-center">Rama Suryansyah B.</h3>
                <p class="text-center text-gray-600">Head of TD</p>
                <p class="text-center text-gray-500">Teknik Mesin</p>
              </div>
          
              <!-- Card 2 - TD Flight Controller -->
              <div x-show="selectedCategory === 'all' || selectedCategory === 'td-flight-controller'" class="bg-white rounded-lg shadow-lg p-6">
                <img src="img/taufiq.webp" alt="Muhammad Taufiq" class="w-32 h-32 rounded-full mx-auto">
                <h3 class="mt-4 text-lg font-bold text-center">Muhammad Taufiq</h3>
                <p class="text-center text-gray-600">Head of Subdivision</p>
                <p class="text-center text-gray-500">Teknik Elektro</p>
              </div>
          
              <!-- Card 3 - TD Ground Control Station -->
              <div x-show="selectedCategory === 'all' || selectedCategory === 'td-ground-control'" class="bg-white rounded-lg shadow-lg p-6">
                <img src="img/sukma.webp" alt="Sukma Wiratama Widodo" class="w-32 h-32 rounded-full mx-auto">
                <h3 class="mt-4 text-lg font-bold text-center">Sukma Wiratama Widodo</h3>
                <p class="text-center text-gray-600">Senior Staff</p>
                <p class="text-center text-gray-500">Teknik Mesin</p>
              </div>
            </div>
        </div>          
      
      <x-footer></x-footer>
    </div>
    <script src="js/script.js"></script>
    </script>
  </x-layout>
