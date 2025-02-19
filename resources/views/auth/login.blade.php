
    <!-- Session Status -->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf --}}

        <!-- Email Address -->
        {{-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}

        <!-- Password -->
        {{-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> --}}

        <!-- Remember Me -->
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
    <html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="storage/back/assets/"
    data-template="vertical-menu-template-free"
  >
    <head>
      <meta charset="utf-8" />
      <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
      />
  
      <title>Login Basic </title>
  
      <meta name="description" content="" />
  
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="storage/back/assets/img/favicon/favicon.ico" />
  
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
      />
  
      <!-- Icons. Uncomment required icon fonts -->
      <link rel="stylesheet" href="{{asset('storage/back/assets/vendor/fonts/boxicons.css')}}" />
  
      <!-- Core CSS -->
      <link rel="stylesheet" href="{{asset('storage/back/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
      <link rel="stylesheet" href="{{asset('storage/back/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
      <link rel="stylesheet" href="{{asset('storage/back/assets/css/demo.css')}}" />
  
      <!-- Vendors CSS -->
      <link rel="stylesheet" href="{{asset('storage/back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
  
      <!-- Page CSS -->
      <!-- Page -->
      <link rel="stylesheet" href="{{asset('storage/back/assets/vendor/css/pages/page-auth.css')}}" />
      <!-- Helpers -->
      <script src="{{asset('storage/back/assets/vendor/js/helpers.js')}}"></script>
  
      <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
      <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
      <script src="storage/back/assets/js/config.js"></script>
    </head>
  
    <body>
      <!-- Content -->
  
      <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
          <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
              <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                  <a href="index.html" class="app-brand-link gap-2">
                    <span class="app-brand-logo demo">
                      <svg
                        width="25"
                        viewBox="0 0 25 42"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                      >
                        <defs>
                          <path
                            d="M12.5,0 C13.3284271,0 14,0.671572875 14,1.5 L14,26 C14,30.1421356 10.6421356,33.5 6.5,33.5 C2.35786438,33.5 -1,30.1421356 -1,26 L-1,23.5 C-1,22.6715729 -0.328427125,22 0.5,22 C1.32842712,22 2,22.6715729 2,23.5 L2,26 C2,28.4852814 4.01471863,30.5 6.5,30.5 C8.98528137,30.5 11,28.4852814 11,26 L11,1.5 C11,0.671572875 11.6715729,0 12.5,0 Z"
                            id="path-1"
                          ></path>
                          <path
                            d="M6.5,6 C7.32842712,6 8,6.67157288 8,7.5 C8,8.32842712 7.32842712,9 6.5,9 C5.67157288,9 5,8.32842712 5,7.5 C5,6.67157288 5.67157288,6 6.5,6 Z"
                            id="path-3"
                          ></path>
                          <path
                            d="M6.5,16 C7.32842712,16 8,16.6715729 8,17.5 C8,18.3284271 7.32842712,19 6.5,19 C5.67157288,19 5,18.3284271 5,17.5 C5,16.6715729 5.67157288,16 6.5,16 Z"
                            id="path-4"
                          ></path>
                          <path
                            d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                            id="path-5"
                          ></path>
                        </defs>
                        <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                            <g id="Icon" transform="translate(27.000000, 15.000000)">
                              <g id="Mask" transform="translate(0.000000, 8.000000)">
                                <mask id="mask-2" fill="white">
                                  <use xlink:href="#path-1"></use>
                                </mask>
                                <use fill="#696cff" xlink:href="#path-1"></use>
                                <g id="Path-3" mask="url(#mask-2)">
                                  <use fill="#696cff" xlink:href="#path-3"></use>
                                  <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                </g>
                                <g id="Path-4" mask="url(#mask-2)">
                                  <use fill="#696cff" xlink:href="#path-4"></use>
                                  <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                </g>
                              </g>
                              <g
                                id="Triangle"
                                transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                              >
                                <use fill="#696cff" xlink:href="#path-5"></use>
                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </span>
                    <span class="app-brand-text demo text-body fw-bolder">JPanel</span>
                  </a>
                </div>
                <!-- /Logo -->
                <h4 class="mb-2">Welcome to JPanel! 👋</h4>
                <p class="mb-4">Please sign-in to your account and start the adventure</p>
  
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label">Email or Username</label>
                    <input
                      type="text"
                      class="form-control"
                      id="email"
                      name="email" :value="old('email')" required autofocus autocomplete="username"
                      placeholder="Enter your email or username"
                      
                    />
                  </div>
                  <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                      <label class="form-label" for="password">Password</label>
                      <a href="{{ route('password.request') }}">
                        <small>Forgot Password?</small>
                      </a>
                    </div>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        required autocomplete="current-password"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password"
                      />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="form-check">
                      <input class="form-check-input" name="remember" type="checkbox" id="remember-me" />
                      <label class="form-check-label" for="remember-me"> Remember Me </label>
                    </div>
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                  </div>
                </form>
  
                <p class="text-center">
                  <span>New on our platform?</span>
                  <a href="{{route('register')}}">
                    <span>Create an account</span>
                  </a>
                </p>
              </div>
            </div>
            <!-- /Register -->
          </div>
        </div>
      </div>
  
      <!-- / Content -->
  

  
      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="{{asset('storage/back/assets/vendor/libs/jquery/jquery.js')}}"></script>
      <script src="{{asset('storage/back/assets/vendor/libs/popper/popper.js')}}"></script>
      <script src="{{asset('storage/back/assets/vendor/js/bootstrap.js')}}"></script>
      <script src="{{asset('storage/back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
  
      <script src="{{asset('storage/back/assets/vendor/js/menu.js')}}"></script>
      <!-- endbuild -->
  
      <!-- Vendors JS -->
  
      <!-- Main JS -->
      <script src="{{asset('storage/back/assets/js/main.js')}}"></script>
  
      <!-- Page JS -->
  
      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
  </html>

