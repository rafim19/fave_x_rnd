<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../style/main.css" />
    <script src="https://unpkg.com/vue@next"></script>
    <title>Check Order</title>
  </head>
  <body class="bg-white flex flex-col">
    <!-- nav white signed in -->
    <nav
      id="regisWhite"
      class="flex py-8 px-24 justify-between sticky top-0 text-gray-700 bg-white"
    >
      <img class="w-30 h-10" src="../assets/logo-black.png" alt="" />
      <div class="flex flex-col">
        <div class="flex space-x-6">
          <button class="w-36 pr-8" type="button">Check Order</button>
          <img
            class="cursor-pointer"
            src="../assets/fillerpic.svg"
            alt=""
            onclick="popUpWhite()"
          />
        </div>
        <div
          id="profilePopUpWhite"
          class="bg-white text-gray-700 rounded-lg px-4 py-6 w-9/12 mt-3 ml-4"
          style="display: none"
        >
          <div class="flex border-b-2 border-gray-100 mb-5 pb-5">
            <img src="../assets/fillerpic.svg" alt="" />
            <h1 class="text-2xl w-1/2 text-center pl-2">Natasya Febryani</h1>
          </div>
          <div class="flex flex-col space-y-5">
            <a href="">
              <div class="flex">
                <img src="../assets/userUnactive.svg" alt="" />
                <p class="pl-4">Profile</p>
              </div>
            </a>
            <a href="">
              <div class="flex">
                <img src="../assets/icon/lock.svg" alt="" />
                <p class="pl-4">Change Password</p>
              </div>
            </a>
            <a href="">
              <div class="flex">
                <img src="../assets/icon/door.svg" alt="" />
                <p class="pl-4">Log Out</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <div id="container" class="mx-24 my-8">
      <h1 class="text-4xl font-semibold text-gray-700 py-4">My Order</h1>
      <div class="py-10 px-8 flex">
        <!-- deleteModal -->
        <form action="">
          <div id="deleteModal" class="modal px-96 font-semibold">
            <div class="bg-white rounded-lg -mx-8">
              <button
                id="tutup"
                class="w-min float-right p-4"
                onclick="closeDelete()"
              >
                X
              </button>
              <div class="p-14">
                <img
                  class="w-1/4 mx-auto pb-4"
                  src="../assets/icon/ion_trash-bin-big.svg"
                  alt=""
                />
                <h1 class="text-center text-2xl text-gray-800">
                  Are you sure you want to cancel your order?
                </h1>
                <div class="text-center space-x-2 mt-6">
                  <button
                    class="bg-white border-2 border-gray-300 py-1 px-10 text-gray-500 rounded-lg w-32 hover:shadow-lg"
                    type="button"
                    id="tutupjuga"
                    onclick="closeDelete()"
                  >
                    Return
                  </button>
                  <button
                    class="bg-red-600 text-white py-1 px-6 rounded-lg hover:shadow-lg"
                    type="submit"
                  >
                    Cancel Order
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- editModal -->
        <form action="">
          <div id="editModal" class="modal">
            <div
              class="border-2 shadow-lg bg-white mx-56 text-gray-400 rounded-lg p-12 flex flex-col rounded-2xl"
            >
              <h1 class="text-black text-3xl font-semibold">Your Ticket</h1>
              <!-- menu milih mesen -->
              <div class="flex flex-col my-4">
                <!-- atas -->
                <div class="flex flex-row">
                  <!-- from -->
                  <div class="flex flex-col">
                    <p>From</p>
                    <div class="flex flex-row border-b-2 border-gray-100 mt-1">
                      <img src="../assets/icon/departure.svg" alt="" />
                      <!-- dari sini -->
                      <div id="fromModal" class="mx-4">
                        <!-- ini yg munculin valuenya, jadi kalo mau modif disini paling -->
                        <p id="valueFromModal">{{selected}}</p>
                        <!-- dropdownnya -->
                        <select v-model="selected" class="w-150">
                          <option
                            v-for="option in options"
                            v-bind:value="option.value"
                          >
                            {{option.text}}
                          </option>
                        </select>
                        <!-- dropdownnya -->
                      </div>
                      <!-- sampe sini -->
                    </div>
                  </div>
                  <!-- to -->
                  <div class="flex flex-col">
                    <p>To</p>
                    <!-- cari cara dropdown semua bandaranya -->
                    <div class="flex flex-row border-b-2 border-gray-100 mt-1">
                      <img src="../assets/icon/landing.svg" alt="" />
                      <!-- dari sini -->
                      <div id="toModal" class="mx-4">
                        <!-- ini yg munculin valuenya, jadi kalo mau modif disini paling -->
                        <p id="valueToModal">{{selected}}</p>
                        <!-- dropdownnya -->
                        <select v-model="selected" class="w-150">
                          <option
                            v-for="option in options"
                            v-bind:value="option.value"
                          >
                            {{option.text}}
                          </option>
                        </select>
                        <!-- dropdownnya -->
                      </div>
                      <!-- sampe sini -->
                    </div>
                  </div>
                  <!-- passenger -->
                  <div class="flex flex-col ml-10 w-1/2">
                    <p>Passengers</p>
                    <div class="flex flex-row border-b-2 border-gray-100 mt-4">
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
                    <div class="flex flex-row border-b-2 border-gray-100 mt-4">
                      <img src="../assets/icon/calendar.svg" alt="" />
                      <input class="pl-2" type="date" name="date" id="" />
                    </div>
                  </div>
                  <!-- seat class -->
                  <div class="flex flex-col mx-40">
                    <p>Seat Class</p>
                    <!-- cari cara dropdown semua bandaranya -->
                    <div class="flex flex-row border-b-2 border-gray-100 mt-2">
                      <img
                        src="../assets/icon/seat.svg"
                        class="w-11persen"
                        alt=""
                      />
                      <!-- dari sini -->
                      <div id="seatModal" class="mx-4">
                        <!-- ini yg munculin valuenya -->
                        <p id="valueSeatModal">{{selected}}</p>
                        <!-- dropdownnya -->
                        <select v-model="selected" class="w-150">
                          <option
                            v-for="option in options"
                            v-bind:value="option.value"
                          >
                            {{option.text}}
                          </option>
                        </select>
                        <!-- dropdownnya -->
                      </div>
                      <!-- sampe sini -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- button -->
              <div class="flex flex-row-reverse">
                <button
                  id="bookNow"
                  type="submit"
                  class="biru-button text-white p-2 rounded-md font-semibold w-1/6 hover:bg-blue-700 hover:shadow-lg ml-3"
                >
                 Save Changes
                </button>
                <button id="cancel" type="button" class="text-gray-700 p-2 rounded-md font-semibold w-1/6 border-2 border-gray-400 hover:shadow-lg">Cancel</button>
              </div>
            </div>
          </div>
        </form>
        <div id="tabelnya">
          <div class="table w-full text-center text-gray-800 font-semibold">
            <div class="table-header-group">
              <div class="table-row">
                <div class="table-cell w-32 border-b-2 border-t-2">
                  Order ID
                </div>
                <div class="table-cell w-24 border-b-2 border-t-2">From</div>
                <div class="table-cell w-24 border-b-2 border-t-2">To</div>
                <div class="table-cell w-36 border-b-2 border-t-2">
                  Departure Date
                </div>
                <div class="table-cell w-28 border-b-2 border-t-2">
                  Seat Class
                </div>
                <div class="table-cell px-6 border-b-2 border-t-2">
                  Passengers
                </div>
                <div class="table-cell border-b-2 border-t-2">Total Order</div>
                <div class="table-cell border-b-2 border-t-2"></div>
                <div class="table-cell border-b-2 border-t-2"></div>
              </div>
              <div class="table-row">
                <div class="table-cell inline-block align-middle border-b-2">
                  A001
                </div>
                <div class="table-cell inline-block align-middle border-b-2">
                  Jakarta (JKTC)
                </div>
                <div class="table-cell inline-block align-middle border-b-2">
                  Surabaya (SBYC)
                </div>
                <div class="table-cell inline-block align-middle border-b-2">
                  05/04/2021
                </div>
                <div class="table-cell inline-block align-middle border-b-2">
                  First Class
                </div>
                <div class="table-cell inline-block align-middle border-b-2">
                  <div>
                    <p>1 Adult</p>
                    <p>0 Child</p>
                  </div>
                </div>
                <div class="table-cell inline-block align-middle border-b-2">
                  IDR1.000.000
                </div>
                <div
                  class="table-cell px-6 py-6 border-b-2 cursor-pointer"
                  onclick="editBtn()"
                >
                  <img
                    class="hover:shadow-lg"
                    src="../assets/icon/ant-design_edit-filled.svg"
                    alt=""
                  />
                </div>
                <div
                  class="table-cell px-6 py-6 border-b-2 cursor-pointer"
                  onclick="deleteBtn()"
                >
                  <img
                    class="hover:shadow-lg"
                    src="../assets/icon/ion_trash-bin.svg"
                    alt=""
                  />
                </div>
              </div>
              <div class="table-row">
                <div class="table-cell inline-block align-middle border-b-2">
                  A001
                </div>
                <div class="table-cell inline-block align-middle border-b-2">
                  Jakarta (JKTC)
                </div>
                <div class="table-cell inline-block align-middle border-b-2">
                  Surabaya (SBYC)
                </div>
                <div class="table-cell inline-block align-middle border-b-2">
                  05/04/2021
                </div>
                <div class="table-cell inline-block align-middle border-b-2">
                  First Class
                </div>
                <div class="table-cell inline-block align-middle border-b-2">
                  <div>
                    <p>1 Adult</p>
                    <p>0 Child</p>
                  </div>
                </div>
                <div class="table-cell inline-block align-middle border-b-2">
                  IDR1.000.000
                </div>
                <div
                  class="table-cell px-6 py-6 border-b-2 cursor-pointer"
                  onclick="editBtn()"
                >
                  <img
                    class="hover:shadow-lg"
                    src="../assets/icon/ant-design_edit-filled.svg"
                    alt=""
                  />
                </div>
                <div
                  class="table-cell px-6 py-6 border-b-2 cursor-pointer"
                  onclick="deleteBtn()"
                >
                  <img
                    class="hover:shadow-lg"
                    src="../assets/icon/ion_trash-bin.svg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
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
    <script src="../script/script.js"></script>
    <script src="../script/tiketScript.js"></script>
    <script>
      // ilang dimana aja
      let editnya = document.getElementById("editModal");
      let deletenya = document.getElementById("deleteModal");
      // editBtn show
      function editBtn() {
        if (editnya.style.display === "none") {
          editnya.style.display = "block";
        } else {
          editnya.style.display = "none";
        }
      }
      function closeEdit() {
        editnya.style.display = "none";
      }
      // deleteBtn show
      function deleteBtn() {
        if (deletenya.style.display === "none") {
          deletenya.style.display = "block";
        } else {
          deletenya.style.display = "none";
        }
      }
      // deleteBtn close
      function closeDelete() {
        deletenya.style.display = "none";
      }
      // pas pencet window ngeclose
      window.onclick = function (event) {
        if (event.target == editnya) {
          editnya.style.display = "none";
        }
        if (event.target == deletenya) {
          deletenya.style.display = "none";
        }
      };
    </script>
  </body>
</html>
