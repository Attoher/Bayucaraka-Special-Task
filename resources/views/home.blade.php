<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div>
    <div class="aircraft-animation left">
      <img src="{{ asset('img/Pesawat Cropped.png') }}" alt="Left Aircraft" class="mx-auto h-auto flying-left z-10 overflow-x-hidden">
    </div>
    <div class="aircraft-animation right">
      <img src="{{ asset('img/Pesawat Crop.png') }}" alt="Right Aircraft" class="mx-auto h-auto flying-right z-10 overflow-x-hidden">
    </div>
    <div class="relative bg-cover bg-center">
      <div class="absolute inset-0 opacity-50"></div>
      <div class="relative container mx-auto flex flex-col lg:flex-row items-center justify-center text-center py-20">
        <div class="w-full max-w-xl text-center mb-8 lg:mb-0">
          <h1 class="text-4xl sm:text-7xl font-bold mb-4 text-white">
            Welcome To Bayucaraka ITS
          </h1><br>
          <p class="text-lg sm:text-xl mb-6 text-white z-50">
            Soaring Beyond Boundaries: Unleashing UAV Innovation at Sepuluh Nopember Institute of Technology - Building Great Prospects for the Future.
          </p>
          <div class="relative flex justify-center items-center py-8">
            <div class="container mx-auto text-center">
              <img src="img/dor1sec-resize-clean.gif" alt="Computer man" class="z-10 scale-[2.25] mt-1 absolute gif-explosion">
              <img src="{{ asset('img/photos.webp') }}" alt="Bayucaraka ITS" class="scale-[1.2] mx-auto h-auto mt-8 z-30" style="position: absolute">
              <img src="{{ asset('img/photos.webp') }}" alt="Bayucaraka ITS" class="scale-[1.2] mx-auto h-auto mt-8 z-30">
            </div>
          </div>           
        </div>
      </div>
    </div>
    
    <x-barrier></x-barrier>
    
    <div class="flex flex-col items-center mt-32 w-full rounded-tl-3xl rounded-tr-3xl rounded-br-3xl rounded-bl-3xl bg-white text-black shadow-lg">
      <div class="flex flex-col lg:flex-row justify-between w-full">
          <img src="img/plane.webp" alt="Plane" class="w-1/4 fade-in vibrating" id="plane">
          <img src="img/sticker_home.webp" alt="Sticker" class="scale-[0.25] absolute top-4 left-4 fade-in" id="sticker">
          <img src="img/Logoandname.jpg" alt="Logo" class="w-1/4 lg:static right-2 lg:top-0 fade-in" id="logo">
          <img src="img/jatayujet.webp" alt="Plane" class="w-1/4 lg:static right-2 lg:top-0 fade-in vibrating" id="jatayu">
      </div>
  
      <div class="flex flex-col lg:flex-row items-center justify-center mt-8 w-full bg-white text-black shadow-lg px-8 rounded-3xl">
          <div class="w-full lg:w-1/2 pr-8 mb-4 lg:mb-0 text-center fade-in" id="text-content">
              <h2 class="text-4xl font-bold mb-2 uppercase">Get To Know Us!</h2><br>
              <p class="text-2xl mb-4">
                  Bayucaraka rocks a name of 'Bayu,' the mighty god of wind, and 'Caraka,' the emissary. Essentially, Bayucaraka is the messenger of the wind god.
              </p>
              <p class="text-2xl mb-4">
                  ITS Bayucaraka, a team thriving under the Sepuluh Nopember Institute of Technology since 2015. Our game? We are crafting cutting-edge UAVs (Unmanned Aerial Vehicles), split into four slick divisions with distinct missions: <strong>Fixed Wing, Vertical Take Off & Landing, Racing Plane, and Technology Development</strong>. These tech aficionados are rewriting the rules of the aerial game with style.
              </p>
          </div>
          <div class="w-full lg:w-1/2 pr-8 flex justify-center fade-in" id="image-content"> 
              <img src="img/gettoknow.webp" alt="Get to Know" class="mx-auto">
          </div>
      </div>
    </div><br>         

    <x-barrier></x-barrier>

    <div class="flex flex-col items-center mt-32 w-full rounded-tl-3xl rounded-tr-3xl rounded-br-3xl rounded-bl-3xl bg-black text-white shadow-lg">
      <div class="flex flex-col lg:flex-row items-center justify-center mt-8 w-full shadow-lg px-8 rounded-3xl">
          <h2 id="timeline-heading" class="ml-16 text-5xl font-bold text-center mb-12"></h2>
          <div class="flex justify-center items-center gap-10 mx-auto">
              <div class="timeline-item text-center fade-in">
                  <p class="text-lg mb-2">Monday, 7 - 15 (Extended) Oktober</p>
                  <div class="phase-box bg-orange-400 rounded-lg px-8 py-4 shadow-md">
                      <p class="font-semibold">Open Registration</p>
                  </div>
                  <div class="decorative-line w-1 h-10 bg-orange-400 mx-auto"></div>
              </div>
          
              <div class="timeline-item text-center fade-in">
                  <p class="text-lg mb-2">Wednesday, 16 Oktober 2024</p>
                  <div class="phase-box bg-orange-400 rounded-lg px-8 py-4 shadow-md">
                      <p class="font-semibold">Announcement Phase 1</p>
                  </div>
                  <div class="decorative-line w-1 h-10 bg-orange-400 mx-auto"></div>
              </div>
          
              <div class="timeline-item text-center fade-in">
                  <p class="text-lg mb-2">Thursday, 17 - 20 Oktober 2024</p>
                  <div class="phase-box bg-orange-400 rounded-lg px-8 py-4 shadow-md">
                      <p class="font-semibold">Interview Phase</p>
                  </div>
                  <div class="decorative-line w-1 h-10 bg-orange-400 mx-auto"></div>
              </div>
          
              <div class="timeline-item text-center fade-in">
                  <p class="text-lg mb-2">Tuesday, 22 Oktober 2024</p>
                  <div class="phase-box bg-orange-400 rounded-lg px-8 py-4 shadow-md">
                      <p class="font-semibold">Announcement Passed Interview</p>
                  </div>
                  <div class="decorative-line w-1 h-10 bg-orange-400 mx-auto"></div>
              </div>
          </div>
      </div>
    </div><br>  

    <x-barrier></x-barrier>

    <div class="relative flex flex-col items-center mt-32 w-full bg-white text-black rounded-3xl p-8 shadow-lg">
      <h2 class="text-4xl font-bold text-center mb-6">Meet Our Team</h2>
      <p class="text-center text-lg mb-10">Every kick-butt project rolls with a squad boasting mad skills and epic teamwork! Check out the awesome players of the team:</p>
      
      <div class="flex flex-wrap justify-center gap-8">
          <div class="team-member text-center">
              <img src="img/gm1.webp" alt="Raditya Eka Putra" class="mx-auto mb-4 w-1/2 h-auto">
              <h3 class="font-bold text-xl">Raditya Eka Putra</h3>
              <p class="text-sm">Electrical Eng - Batch 2021</p>
              <p class="text-yellow-600 font-semibold mt-2">GENERAL MANAGER</p>
          </div>
  
          <div class="team-member text-center">
              <img src="img/fw.webp" alt="Naufal Ahmad F." class="mx-auto mb-4 w-1/2 h-auto">
              <h3 class="font-bold text-xl">Naufal Ahmad F.</h3>
              <p class="text-sm">Informatics Eng - Batch 2022</p>
              <p class="text-yellow-600 font-semibold mt-2">FIXED WING</p>
          </div>
  
          <div class="team-member text-center">
              <img src="img/vt.webp" alt="Muhammad Yusuf" class="mx-auto mb-4 w-1/2 h-auto">
              <h3 class="font-bold text-xl">Muhammad Yusuf</h3>
              <p class="text-sm">Electrical Eng - Batch 2022</p>
              <p class="text-yellow-600 font-semibold mt-2">VTOL</p>
          </div>
  
          <div class="team-member text-center">
              <img src="img/fc.webp" alt="Arya Wijaya A" class="mx-auto mb-4 w-1/2 h-auto">
              <h3 class="font-bold text-xl">Arya Wijaya A</h3>
              <p class="text-sm">Development Studies - Batch 2022</p>
              <p class="text-yellow-600 font-semibold mt-2">LELA</p>
          </div>
  
          <div class="team-member text-center">
              <img src="img/rp.webp" alt="Aloysius Abraham" class="mx-auto mb-4 w-1/2 h-auto">
              <h3 class="font-bold text-xl">Aloysius Abraham</h3>
              <p class="text-sm">Electrical Eng - Batch 2022</p>
              <p class="text-yellow-600 font-semibold mt-2">RACING PLANE</p>
          </div>
  
          <div class="team-member text-center">
              <img src="img/gc.webp" alt="Rama Suryansyah" class="mx-auto mb-4 w-1/2 h-auto">
              <h3 class="font-bold text-xl">Rama Suryansyah</h3>
              <p class="text-sm">Physics Eng - Batch 2022</p>
              <p class="text-yellow-600 font-semibold mt-2">TECHNOLOGY DEVELOPMENT</p>
          </div>
  
          <div class="team-member text-center">
              <img src="img/airframe.webp" alt="Christopher Roy" class="mx-auto mb-4 w-1/2 h-auto">
              <h3 class="font-bold text-xl">Christopher Roy</h3>
              <p class="text-sm">Materials and Metallurgical Eng - Batch 2023</p>
              <p class="text-yellow-600 font-semibold mt-2">OFFICIAL</p>
          </div>
      </div>
      
      <img src="img/vector.webp" alt="Noah Airplane" class="absolute left-0 top-1 w-1/6">
      <img src="img/noah.webp" alt="Noah Airplane" class="absolute vibrating right-0 bottom-5 w-1/5">
    </div><br>    
    
    <x-barrier></x-barrier>

    <div class="flex flex-col items-center mt-32 w-full bg-white text-black rounded-3xl p-8 shadow-lg">
      <h2 class="text-3xl font-bold mb-2">Our Divisions</h2>
      <p class="text-lg mb-6">We divided our divisions into two categories, technical and non-technical. Dive in more:</p>
      
      <div class="flex justify-center gap-8 flex-wrap">
        <div class="text-center division">
            <img src="img/jatayujet_logo.webp" alt="Jatayujet Icon" class="mx-auto mb-4 w-1/2 h-auto">
            <h3 class="font-bold text-xl">Jatayujet</h3>
            <p class="text-sm italic">Speed is Everything</p>
        </div>
    
        <div class="text-center division">
            <img src="img/soeromiber_logo.webp" alt="Soeromiber Icon" class="mx-auto mb-4 w-1/2 h-auto">
            <h3 class="font-bold text-xl">Soeromiber</h3>
            <p class="text-sm italic">Strength And Precision</p>
        </div>
    
        <div class="text-center division">
            <img src="img/arnayadirga_logo.webp" alt="Arnayadirga Icon" class="mx-auto mb-4 w-1/2 h-auto">
            <h3 class="font-bold text-xl">Arnayadirga</h3>
            <p class="text-sm italic">Mapping and monitoring areas</p>
        </div>
    
        <div class="text-center division">
            <img src="img/bayusuta_logo.webp" alt="Technology Icon" class="mx-auto mb-4 w-1/2 h-auto">
            <h3 class="font-bold text-xl">Technology Development</h3>
            <p class="text-sm italic">Creativity And Innovation</p>
        </div>
    
        <div class="text-center division">
            <img src="img/official_logo.webp" alt="Official Icon" class="mx-auto mb-4 w-1/2 h-auto">
            <h3 class="font-bold text-xl">Official</h3>
            <p class="text-sm italic">Assist and Manage Team</p>
        </div>
      </div>
    </div><br>    
  
    <x-barrier></x-barrier>

    <div class="flex flex-col items-center mt-32 w-full bg-white text-black rounded-3xl p-8 shadow-lg">
      <h2 class="text-4xl font-bold mb-8">The Patrons</h2>
      <p class="text-lg text-center mb-10">Powering our creative odyssey, our patrons are the catalysts propelling our creative expedition:</p>
      <div class="flex flex-wrap justify-center space-x-10">
          <img src="img/Bank_Jatim.webp" alt="Bank Jatim" class="h-24 w-auto rounded-lg"> <!-- Gambar dengan rounded -->
          <img src="img/sier.webp" alt="SIER" class="h-24 w-auto rounded-lg">
          <img src="img/skk_migas.webp" alt="SKK Migas" class="h-24 w-auto rounded-lg">
          <img src="img/sig.webp" alt="SIG" class="h-24 w-auto rounded-lg">
          <img src="img/pertamina_ep.webp" alt="Pertamina EP" class="h-24 w-auto rounded-lg">
          <img src="img/pln.webp" alt="PLN" class="h-24 w-auto rounded-lg">
          <img src="img/PNP.webp" alt="Print & Print" class="h-24 w-auto rounded-lg">
          <img src="img/chempo.webp" alt="ChempoSite Store" class="h-24 w-auto rounded-lg">
      </div>
    </div><br>

    <x-footer></x-footer>
  </div>
  <script src="js/script.js"></script>
  <script>
    window.addEventListener('load', function() {
      const loadingScreen = document.getElementById('loading-screen');
      loadingScreen.style.display = 'none';

      setTimeout(() => {
        const aircraftImages = document.querySelectorAll('.aircraft-animation img');
        aircraftImages.forEach((img) => {
          img.classList.add('flying');
        });
      }, 1000);
    });
  </script>
</x-layout>
