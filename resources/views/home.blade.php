<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <title>Home</title>
  </head>
  <body class="bg-white flex flex-col">
    <div class="header bg-pesawat text-white">
      <nav class="flex py-8 px-24 justify-between">
        <img class="w-11persen" src="../assets/logo-white.png" alt="" />
        <div class="flex space-x-6">
          <button class="w-36 border-r-2 pr-8" type="button">
            Check Order
          </button>
          <button class="w-20" type="button">Log in</button>
          <button class="w-32 border-2 rounded-full" type="button">
            Register
          </button>
        </div>
      </nav>
      <div class="flex flex-col text-center my-6">
        <h1 class="text-4xl font-semibold tracking-widest">
          Book your flight right from seat
        </h1>
        <!-- carousel -->
        <div class="one-time mx-auto my-6">
          <div>
            <img src="../assets/carousel/300k.svg" />
          </div>
          <div>
            <img src="../assets/carousel/500k.svg" />
          </div>
          <img src="../assets/carousel/20persen.svg" alt="" />
          <div>
            <img src="../assets/carousel/30persen.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- ini yang ituannya tiket.com -->
    <div
      id="btnModal"
      class="border-2 shadow-lg bg-white mx-56 text-gray-400 rounded-lg p-12 flex flex-col rounded-2xl"
    >
      <h1 class="text-black text-3xl font-semibold">
        Where would you like to go?
      </h1>
      <!-- menu milih mesen -->
      <div class="flex flex-col my-4">
        <!-- atas -->
        <div class="flex flex-row">
          <!-- from -->
          <div class="flex flex-col">
            <p>From</p>
            <!-- cari cara dropdown semua bandaranya -->
            <div class="flex flex-row border-b-2 border-gray-100 mt-2">
              <img src="../assets/icon/departure.svg" alt="" />
              <input
                class="pl-2"
                type="text"
                name="from"
                id=""
                placeholder="   From"
              />
            </div>
          </div>
          <!-- switch -->
          <div class="flex flex-col my-4 mx-10">
            <button type="button" class="border-2 border-gray-200 rounded-full">
              <img class="w-10" src="../assets/icon/switch.svg" alt="" />
            </button>
          </div>
          <!-- to -->
          <div class="flex flex-col">
            <p>To</p>
            <!-- cari cara dropdown semua bandaranya -->
            <div class="flex flex-row border-b-2 border-gray-100 mt-2">
              <img src="../assets/icon/landing.svg" alt="" />
              <input
                class="pl-2"
                type="text"
                name="to"
                id=""
                placeholder="  To"
              />
            </div>
          </div>
          <!-- passenger -->
          <div class="flex flex-col ml-10 w-1/2">
            <p>Passengers</p>
            <div class="flex flex-row border-b-2 border-gray-100 mt-2">
              <img src="../assets/icon/passenger.svg" alt="" />
              <input
                class="pl-2 w-1/2"
                type="number"
                name="adults"
                id=""
                placeholder="Adult"
              />
              <input
                class="pl-2 w-1/2"
                type="number"
                name="children"
                id=""
                placeholder="Child"
              />
            </div>
          </div>
        </div>
        <!-- bawah -->
        <div class="flex flex-row my-4">
          <!-- departure date-->
          <div class="flex flex-col">
            <p>Departure Date</p>
            <!-- cari cara dropdown semua bandaranya -->
            <div class="flex flex-row border-b-2 border-gray-100 mt-2">
              <img src="../assets/icon/calendar.svg" alt="" />
              <input class="pl-2" type="date" name="date" id="" />
            </div>
          </div>
          <!-- seat class -->
          <div class="flex flex-col mx-40">
            <p>Seat Class</p>
            <!-- cari cara dropdown semua bandaranya -->
            <div class="flex flex-row border-b-2 border-gray-100 mt-2">
              <img src="../assets/icon/seat.svg" alt="" />
              <input
                class="pl-2"
                type="text"
                name="seat"
                id=""
                placeholder="   Seat Class"
              />
            </div>
          </div>
        </div>
      </div>
      <!-- button -->
      <div class="flex flex-row-reverse">
        <button
          type="submit"
          class="biru-button text-white p-3 rounded-md font-semibold w-1/6"
        >
          Book Now
        </button>
      </div>
    </div>
    <!-- modalnya -->
    <div id="modalnya" class="modal">
      <div
        class="border-2 shadow-lg bg-white mx-56 text-gray-400 rounded-lg p-12 flex flex-col rounded-2xl"
      >
        <h1 class="text-black text-3xl font-semibold">
          Where would you like to go?
        </h1>
        <!-- menu milih mesen -->
        <div class="flex flex-col my-4">
          <!-- atas -->
          <div class="flex flex-row">
            <!-- from -->
            <div class="flex flex-col">
              <p>From</p>
              <!-- cari cara dropdown semua bandaranya -->
              <div class="flex flex-row border-b-2 border-gray-100 mt-2">
                <img src="../assets/icon/departure.svg" alt="" />
                <input
                  class="pl-2"
                  type="text"
                  name="from"
                  id=""
                  placeholder="   From"
                />
              </div>
            </div>
            <!-- switch -->
            <div class="flex flex-col my-4 mx-10">
              <button
                type="button"
                class="border-2 border-gray-200 rounded-full"
              >
                <img class="w-10" src="../assets/icon/switch.svg" alt="" />
              </button>
            </div>
            <!-- to -->
            <div class="flex flex-col">
              <p>To</p>
              <!-- cari cara dropdown semua bandaranya -->
              <div class="flex flex-row border-b-2 border-gray-100 mt-2">
                <img src="../assets/icon/landing.svg" alt="" />
                <input
                  class="pl-2"
                  type="text"
                  name="to"
                  id=""
                  placeholder="  To"
                />
              </div>
            </div>
            <!-- passenger -->
            <div class="flex flex-col ml-10 w-1/2">
              <p>Passengers</p>
              <div class="flex flex-row border-b-2 border-gray-100 mt-2">
                <img src="../assets/icon/passenger.svg" alt="" />
                <input
                  class="pl-2 w-1/2"
                  type="number"
                  name="adults"
                  id=""
                  placeholder="Adult"
                />
                <input
                  class="pl-2 w-1/2"
                  type="number"
                  name="children"
                  id=""
                  placeholder="Child"
                />
              </div>
            </div>
          </div>
          <!-- bawah -->
          <div class="flex flex-row my-4">
            <!-- departure date-->
            <div class="flex flex-col">
              <p>Departure Date</p>
              <!-- cari cara dropdown semua bandaranya -->
              <div class="flex flex-row border-b-2 border-gray-100 mt-2">
                <img src="../assets/icon/calendar.svg" alt="" />
                <input class="pl-2" type="date" name="date" id="" />
              </div>
            </div>
            <!-- seat class -->
            <div class="flex flex-col mx-40">
              <p>Seat Class</p>
              <!-- cari cara dropdown semua bandaranya -->
              <div class="flex flex-row border-b-2 border-gray-100 mt-2">
                <img src="../assets/icon/seat.svg" alt="" />
                <input
                  class="pl-2"
                  type="text"
                  name="seat"
                  id=""
                  placeholder="   Seat Class"
                />
              </div>
            </div>
          </div>
        </div>
        <!-- button -->
        <div class="flex flex-row-reverse">
          <button
            id="bookNow"
            type="button"
            class="biru-button text-white p-3 rounded-md font-semibold w-1/6"
          >
            Book Now
          </button>
        </div>
      </div>
    </div>
    <!-- order details modal -->
    <div id="modalnya2" class="modal" style="display: none">
      <div
        class="border-2 shadow-lg bg-white mx-56 text-gray-400 rounded-md p-12 flex flex-col rounded-2xl"
      >
        <h1 class="text-black text-3xl font-semibold">Order Details</h1>
        <!-- atas -->
        <div>
          <!-- kiri foto maskapai -->
          <div>
            <h1>Nama Maskapai</h1>
            <img src="../assets/airline/garuda.png" alt="" />
          </div>
          <!-- kanan perintilan -->
          <div>
            <!-- pake grid -->
          </div>
        </div>
        <!-- bawah -->
        <div>
          <!-- total order -->
          <h1>Total order</h1>
          <h1>Sekian</h1>
          <!-- button -->
          <div class="flex flex-row-reverse">
            <button>cancel</button>
            <button
              type="submit"
              class="biru-button text-white p-3 rounded-md font-semibold w-1/6"
            >
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>
    <div id="container" class="mx-56 my-10">
      <!-- yang going anywhere -->
      <div class="flex mt-20">
        <img class="w-auto" src="../assets/airplane-about.png" alt="" />
        <div class="ml-20 mt-8">
          <div class="text-gray-800 font-semibold tracking-wider">
            <h2 class="text-2xl">Going anywhere?</h2>
            <h1 class="text-3xl">JoFlights is the answer!</h1>
          </div>
          <p class="mt-4 text-gray-500 text-lg">
            JoFlights provides an enjoyable experience of booking flights. With
            a single-click from your couch, you are ready to fly to your
            destination! We provide various flights from various trusted flights
            companies to provide you a safe and enjoyable flights.
          </p>
        </div>
      </div>
      <!-- yang ada 3 itu -->
      <div class="flex flex-col text-center font-semibold text-gray-800 mt-40">
        <h1 class="text-3xl tracking-wider mb-16">
          Why Booking Flights at JoFlights?
        </h1>
        <!-- 3 iconnya -->
        <div class="flex space-x-16">
          <!-- hp -->
          <div>
            <img class="mx-auto" src="../assets/icon/book-flights.svg" alt="" />
            <h1 class="text-xl my-3">Book Your Flights Fast & Easily</h1>
            <p class="text-gray-500 font-medium">
              Now, you can book your flights right from your seat!
            </p>
          </div>
          <!-- tiket -->
          <div>
            <img
              class="mx-auto"
              src="../assets/icon/ticket-flight.svg"
              alt=""
            />
            <h1 class="text-xl my-3">Get Your Ticket at The Best Price</h1>
            <p class="text-gray-500 font-medium">
              We provide various flights with the best price you could get!
            </p>
          </div>
          <!-- tangan -->
          <div>
            <img
              class="mx-auto"
              src="../assets/icon/trusted-partner.svg"
              alt=""
            />
            <h1 class="text-xl my-3">Trusted Flights Partners</h1>
            <p class="text-gray-500 font-medium">
              Our partners have years of experience in serving best flights
              service.
            </p>
          </div>
        </div>
      </div>
      <!-- airline partners -->
      <div
        class="text-center text-2xl text-gray-800 font-semibold my-40 tracking-wider"
      >
        <h1 class="mb-16">Our Airline Partners</h1>
        <!-- logo2nya -->
        <div class="grid grid-flow-col grid-cols-8 grid-rows-2 gap-3">
          <div><img src="../assets/airline/garuda.png" alt="" /></div>
          <div><img src="../assets/airline/airasia.png" alt="" /></div>
          <div><img src="../assets/airline/citilink.png" alt="" /></div>
          <div><img src="../assets/airline/pegasus.png" alt="" /></div>
          <div><img src="../assets/airline/lionair.png" alt="" /></div>
          <div><img src="../assets/airline/koreair.png" alt="" /></div>
          <div><img src="../assets/airline/swiss.png" alt="" /></div>
          <div><img src="../assets/airline/jejuAir.png" alt="" /></div>
          <div><img src="../assets/airline/unitedAirlines.png" alt="" /></div>
          <div><img src="../assets/airline/etihad.png" alt="" /></div>
          <div><img src="../assets/airline/shenzhen.png" alt="" /></div>
          <div><img src="../assets/airline/sriwijaya.png" alt="" /></div>
          <div><img src="../assets/airline/batikAir.png" alt="" /></div>
          <div><img src="../assets/airline/scoot.png" alt="" /></div>
          <div><img src="../assets/airline/thaiLion.png" alt="" /></div>
          <div><img src="../assets/airline/ana.png" alt="" /></div>
        </div>
      </div>
    </div>
    <footer class="flex border-t-2 mx-24 py-8">
      <!-- satu -->
      <div class="w-1/3">
        <img class="w-1/4" src="../assets/logo-black.png" alt="" />
        <h1 class="font-semibold py-4 text-gray-800">Download JoFlights App</h1>
        <div class="flex">
          <a href="https://play.google.com/store"
            ><img src="../assets/googlePlay.svg" alt=""
          /></a>
          <a href="https://www.apple.com/app-store/"
            ><img class="pl-2" src="../assets/appstore.svg" alt=""
          /></a>
        </div>
      </div>
      <!-- dua -->
      <div class="px-2">
        <h1 class="text-gray-800 font-semibold text-lg">JoFlights</h1>
        <p class="py-2 text-sm text-gray-500">About JoFlights</p>
        <p class="py-2 text-sm text-gray-500">Blogs</p>
        <p class="py-2 text-sm text-gray-500">Careers</p>
        <p class="py-2 text-sm text-gray-500">Partners</p>
        <p class="py-2 text-sm text-gray-500">Contact Us</p>
        <p class="py-2 text-sm text-gray-500">Help Center</p>
      </div>
      <!-- tiga -->
      <div class="px-12">
        <h1 class="text-gray-800 font-semibold text-lg">Products</h1>
        <p class="py-2 text-sm text-gray-500">One Way Flights</p>
        <p class="py-2 text-sm text-gray-500">Round trip Flights</p>
        <p class="py-2 text-sm text-gray-500">Domestic Flights</p>
        <p class="py-2 text-sm text-gray-500">International Flights</p>
      </div>
      <!-- empat -->
      <div class="px-2">
        <h1 class="text-gray-800 font-semibold text-lg">Customer Care</h1>
        <p class="py-2 text-sm text-gray-500">Help Center</p>
        <p class="py-2 text-sm text-gray-500">FAQ</p>
        <p class="py-2 text-sm text-gray-500">Terms and Condition</p>
        <p class="py-2 text-sm text-gray-500">Privacy</p>
      </div>
      <!-- lima -->
      <div class="pl-12">
        <h1 class="text-gray-800 font-semibold text-lg">Follow Us</h1>
        <div class="flex py-2">
          <a href="https://www.facebook.com/"
            ><img class="pr-2" src="../assets/facebook.svg" alt=""
          /></a>
          <a href="https://twitter.com/"
            ><img class="px-2" src="../assets/twitter.svg" alt=""
          /></a>
          <a href="https://instagram.com/"
            ><img class="px-2" src="../assets/instagram.svg" alt=""
          /></a>
          <a href="https://linkedin.com/"
            ><img class="px-2" src="../assets/linkedin.svg" alt=""
          /></a>
        </div>
      </div>
    </footer>
    <!-- copyrgith -->
    <div class="border-t-2 mx-24 py-8">
      <h1 class="text-center text-gray-500">
        ©2021 JoFlights, Inc. All Rights Reserved.
      </h1>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    ></script>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>  
    <script>
      var modal = document.getElementById("modalnya");
      var btnModal = document.getElementById("btnModal");

      if (modal.style.display == "block") {
        modal.style.display = "none";
      } else if (modal.style.display == "none") {
        modal.style.display = "block";
      }
      // muncul
      btnModal.onclick = function () {
        modal.style.display = "block";
      };
      // ilang dimana aja
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    </script>
  </body>
</html>