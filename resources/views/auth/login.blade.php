 <x-guest-layout>

     <!-- Session Status -->
     <x-auth-session-status class="mb-4" :status="session('status')" />

     <div class="container">
         <div class="row shadow-lg border border-sky-400 rounded-lg h-full">
             <div class="col-lg-6 px-5 pt-5">
                 <header class="text-center mb-5">
                     <h1 class="h3">Welcome Dear</h1>
                     <p>Let's began a new journey with us.</p>
                 </header>
                 <!-- From start !-->
                 <form method="POST" action="{{ route('login') }}">
                     @csrf

                     <div class="form-group">
                         <label for="email">Email</label> <span class="text-danger">*</span>
                         <input type="email" name="email" class="form-control border rounded-lg bg-transparent" placeholder="Enter your email">
                         <x-input-error :messages="$errors->get('email')" class="mt-2" />
                     </div>
                     <div class="form-group">
                         <label for="password">Password</label> <span class="text-danger">*</span>
                         <input type="password" name="password" class="form-control border rounded-lg bg-transparent" placeholder="Enter password">
                         <x-input-error :messages="$errors->get('password')" class="mt-2" />
                     </div>

                     <div class="d-flex justify-content-between">
                         <label for="remember_me" class="inline-flex items-center">
                             <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-100 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                             <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                         </label>

                         @if (Route::has('password.request'))
                             <a class="underline text-sm text-gray-600 dark:text-gray-400 rounded-md" href="{{ route('password.request') }}">
                                 {{ __('Forgot your password?') }}
                             </a>
                         @endif
                     </div>

                     <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
                 </form>
                 <!-- From end !-->

                 <!-- Registration start !-->
                 <div class="row mt-3 d-flex align-items-center">
                     <div class="col-lg-4">
                         <hr>
                     </div>
                     <div class="col-lg-4 text-center">Or, login with</div>
                     <div class="col-lg-4">
                         <hr>
                     </div>
                 </div>

                 <div class="mt-3">
                     <button class="w-100 text-center bg-transparent border border-slate-600 rounded-lg"> <img src="{{ asset('assets/images/logo/google-logo.png') }}" alt="logo" class="d-inline"> Sign up with Google</button>
                 </div>

                 <div class="mt-3 text-center">
                     <span>Don't have an account ? <a class="text-primary" href="{{ route('register') }}">Register here</a></span>
                 </div>
                 <!-- Registration end !-->
             </div>
             <div class="col-lg-6 w-100 border-left py-5">
                 <img src="{{ asset('assets/images/auth/login.svg') }}" alt="">
             </div>
         </div>
     </div>

 </x-guest-layout>
