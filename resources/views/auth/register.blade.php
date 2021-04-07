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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
    <title>Register</title>
  </head>
  <body class="bg-biru h-auto">
    <div class="flex h-auto">
      <div class="kiri flex flex-col w-1/2 p-20 pt-6 bg-white">
        <img class="w-1/5" src="{{ asset('img/main-logo.svg') }}" alt="" />
        <div class="mt-14 ml-2">
          <h1 class="text-4xl font-bold text-gray-700">Get Started</h1>
          <p class="pt-2">Your journey starts here! Create your account now.</p>
        </div>

        <div class="flex flex-col p-2 text-sm" >
          <!-- disini startnya -->
          <div style="display: block;" id="personalInfo">
          <div class="flex my-4">
            <div class="flex border-b-2 border-blueish pb-2">
              <img src="{{ asset('img/user.svg') }}" alt="" />
              <p class="pl-2">Personal Info</p>
            </div>
            <button
              class="profilePicture flex ml-12 pb-2 w-32 cursor-pointer"
              onclick="switchDisplay()"
            >
              <img src="{{ asset('img/cameraUnactive.svg') }}" alt="" />
              <p class="unactive pl-2">Profile Picture</p>
            </button>
          </div>
          <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input
              class="border-2 w-80 mb-4 rounded-md p-2"
              type="email"
              placeholder="  Email"
              name="email"
            />
            <br />
            <div class="border-2 flex w-80 h-12 rounded-md mb-4">
              <input
                class="w-80 p-2"
                id="passwordLogin"
                type="password"
                placeholder="  Password"
                name="password"
              />
            </div>
            <div class="border-2 flex w-80 h-12 rounded-md mb-4">
              <input
                class="w-80 p-2"
                id="confirm-password"
                type="password"
                placeholder="  Confirm Password"
                name="password_confirmation"
              />
            </div>
            <input
              class="border-2 w-80 mb-4 rounded-md p-2"
              type="text"
              placeholder="   Date of Birth"
              onfocus="(this.type='date')"
              name="dob"
            />
            <textarea
              class="border-2 w-80 mb-4 rounded-md p-2 h-16"
              placeholder="Address"
              name="address"
              id="address"
              rows="4"
              cols="50"
            >Address
            </textarea>
            <div>
              <button
                type="button"
                class="btn bg-blue-200 p-2 w-80 blue-green text-white font-semibold h-12 rounded-md"
                onclick="switchDisplay()"
              >
                Next
              </button>
              <p class="pl-14 text-sm pt-4">
                Already have an account?
                <a href="./login.html" class="text-blue-green hover:underline"
                  >Login</a
                >
              </p>
            </div>
          </div>

            <!-- ini first part -->

            <div style="display: none;" id="submitProfilePicture">
              <!-- yg camera sama sampingnya itu -->
              <div class="flex my-4">
                <button class="personalInfo flex pb-2 w-32" onclick="switchDisplay()">
                  <img src="{{ asset('img/userUnactive.svg') }}" alt="" />
                  <p class="pl-2 unactive">Personal Info</p>
                </button>
                <div
                  class="profilePicture flex ml-12 border-b-2 border-blueish pb-2 w-32"
                >
                  <img src="{{ asset('img/camera.svg') }}" alt="" />
                  <p class="pl-2">Profile Picture</p>
                </div>
              </div>

              <!-- bawahnya sampe sebelum button gede -->
              <div class="text-blue-green">
                <div>
                  <h1 class="font-bold">Profile Picture</h1>
                  <p>Please upload your profile picture here.</p>
                </div>
                <div class="flex">
                  <img class="py-4" src="{{ asset('img/insertPP.svg') }}" alt="" /> 
                  <input type="file" name="profile_picture" id="" class="my-12 pl-3">
              </div>
                <!-- yg bulet stop disini -->
                <div>
                  <h1 class="font-semibold pb-2">Identity Card</h1>
                  <p>
                    Please upload a selfie with your ID card. Both your face and
                    your ID card should be shown clearly in the photo.
                  </p>
                </div>
                <div>
                  <p class="py-2">Sample photo</p>
                  <img
                    class="pb-2"
                    src="{{ asset('img/sample-photo-id.svg') }}"
                    alt=""
                  />
                </div>
                <div class="border-2 border-blueish rounded-md w-min my-4">
                  <input class="p-3" type="file" name="id_card" />
                </div>
              </div>

              <!-- ini button paling bawah -->
              <div class="text-blue-green">
                <button
                  type="submit"
                  class="btn p-2 w-80 blue-green text-white font-semibold h-12 rounded-md mb-2"
                >
                  Sign Up
                </button>
                <button
                  type="button"
                  class="btn bg-white p-2 w-80 font-semibold h-12 rounded-md border-2 border-blueish"
                  onclick="switchDisplay()"
                >
                  Back
                </button>
              </div>
              <!-- sampe sini -->
            </div>
          </form>
        </div>
      </div>
      <div class="paperAirplaneRed w-1/2"></div>
    </div>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>  
</body>
</html>