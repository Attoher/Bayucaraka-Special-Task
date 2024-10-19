<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div>
        <div class="relative w-full h-screen">
    
            <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('img/background.webp');"></div>
        
            <div class="absolute inset-0 flex items-center justify-center">
                <img src="img/rp-dark-image.webp" alt="Racing Plane" class="h-96 object-contain">
            </div>
        
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                <div class="mt-12">
                    <h1 class="text-yellow-500 text-5xl font-bold tracking-wider">ULDORO</h1>
                    <p class="text-orange-500 text-lg mt-4">
                        Maybe Speed Has Its Limits, But The Hope Of Winning Is Endless.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center h-128 bg-yellow-600 p-10">
            <div class="w-1/2 p-6 bg-white shadow-lg rounded-md">
                <h2 class="text-white bg-blue-800 px-4 py-2 text-2xl font-bold w-max">
                    A Racing Plane Division
                </h2>
                <p class="mt-4 text-gray-800">
                    The Jatayujet, a remarkable machine under the Racing Plane Division, epitomizes the relentless pursuit of victory. 
                    With a philosophy that acknowledges the limits of speed but celebrates the boundless hope of winning, this plane 
                    is built to dominate the skies and capture the essence of competitive racing.
                </p>
            </div>
        
            <div class="w-1/3 bg-white shadow-xl rounded-lg ml-10 p-6">
                <div class="flex justify-between mb-4">
                    <span class="bg-blue-100 text-blue-800 text-sm px-2 py-1 rounded-full">Fleet Specification</span>
                    <span class="font-semibold">SBY ➔ ITS</span>
                </div>
        
                <h3 class="text-xl font-bold mb-4">RACING PLANE</h3>
                <div class="grid grid-cols-2 gap-4 text-sm">
                    <div>
                        <p>Wingspan</p>
                        <p class="font-bold">130 cm</p>
                    </div>
                    <div>
                        <p>Body Length</p>
                        <p class="font-bold">110 cm</p>
                    </div>
                    <div>
                        <p>Weight</p>
                        <p class="font-bold">2550 gram</p>
                    </div>
                    <div>
                        <p>Propeller</p>
                        <p class="font-bold">12 x 10 cm (2 Blades)</p>
                    </div>
                    <div>
                        <p>Battery</p>
                        <p class="font-bold">2200 mAH</p>
                    </div>
                    <div>
                        <p>Motor</p>
                        <p class="font-bold">850KV 1100WATT</p>
                    </div>
                </div>
        
                <div class="mt-6 flex justify-center">
                    <img src="img/barcode.webp" alt="Barcode" class="h-20">
                </div>
            </div>
        </div>
        
      
      <x-footer></x-footer>
    </div>
    <script src="js/script.js"></script>
    </script>
  </x-layout>
