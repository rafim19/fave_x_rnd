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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <title>Login Page</title>
  </head>
  <body class="bg-biru h-auto">
    <div class="flex h-auto">
      <div class="kiri flex flex-col w-1/2 p-20 pt-6 bg-white">
        <img class="w-1/5" src="{{ asset('img/main-logo.svg') }}" alt="" />
        <div class="my-14 ml-2">
          <h1 class="text-4xl font-bold text-gray-700">Welcome Back!</h1>
          <p class="pt-2">Let’s discover your future trip destination</p>
        </div>
        <div class="flex flex-col p-2">
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <input
              type="email"
              placeholder="  Email"
              name="email"
              class="border-2 w-80 mb-6 rounded-md p-2"
            />

            <br>
            <div class="border-2 flex w-80 h-12 rounded-md mb-2">
              <input
                id="passwordLogin"
                type="password"
                placeholder="  Password"
                name="password"
                class="w-80 p-2"
              />
            </div>
            @if (session('error'))
                <div class="alert alert-danger text-red-500">{{ session('error') }}</div>
            @endif
            <div class="flex">
              <div class="mb-32">
                <input type="checkbox" id="remember" />
                <label for="remember" class="text-blue-green text-sm"
                  >Remember Me</label
                >
              </div>
              <div class="pl-24">
                <a href="./register.html" class="text-blue-green text-sm"
                  >Forgot Password?</a
                >
              </div>
            </div>
            <div>
              <button
                class="btn bg-blue-200 p-2 w-80 blue-green text-white font-semibold h-12 rounded-md"
              >
                Log In
              </button>
              <p class="pl-14 text-sm pt-4">
                Don't have an account?
                <a
                  href="./register.html"
                  class="text-blue-green hover:underline"
                  >Sign up</a
                >
              </p>
            </div>
          </form>
        </div>
      </div>
      <div class="kanan w-1/2"></div>
    </div>
    <script src="../script/script.js"></script>
  </body>
</html>