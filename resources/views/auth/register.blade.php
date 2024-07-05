<x-guest-layout>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 shadow-lg border border-sky-400 rounded-lg m-auto p-5">
                <header class="text-center mb-3">
                    <h1 class="h3">Welcome Dear</h1>
                    <p>Let's began a new journey with us.</p>
                </header>
                <!-- From start !-->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="d-flex justify-content-between">
                        <div class="form-group">
                            <label for="first_name">First Name</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control border rounded-lg bg-transparent" name="first_name" placeholder="Enter your first name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control border rounded-lg bg-transparent" name="last_name" placeholder="Enter your  last name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label> <span class="text-danger">*</span>
                        <input type="email" name="email" class="form-control border rounded-lg bg-transparent" placeholder="Enter your email">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile</label> <span class="text-danger">*</span>
                        <input type="number" name="mobile" class="form-control border rounded-lg bg-transparent" placeholder="Enter your mobile">
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label> <span class="text-danger">*</span>
                        <input type="password" name="password" class="form-control border rounded-lg bg-transparent" placeholder="Enter password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label> <span class="text-danger">*</span>
                        <input type="password" name="password_confirmation" class="form-control border rounded-lg bg-transparent" placeholder="Enter password">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth</label> <span class="text-danger">*</span>
                        <input type="date" name="dob" class="form-control border rounded-lg bg-transparent">
                    </div>

                    <div class="from-group">
                        <label for="genger">Gender</label> <span class="text-danger">*</span>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center border border-slate-400 px-2 py-2 rounded-lg">
                                <p class="pr-5">Male</p>
                                <input type="radio" name="gender" value="male">
                            </div>
                            <div class="d-flex align-items-center border border-slate-400 px-2 py-2 rounded-lg">
                                <p class="pr-5">Female</p>
                                <input type="radio" name="gender" value="female">
                            </div>
                            <div class="d-flex align-items-center border border-slate-400 px-2 py-2 rounded-lg">
                                <p class="pr-5">Custom</p>
                                <input type="radio" name="gender" value="custom">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">Register</button>
                </form>
                <!-- From end !-->

                <div class="mt-3 text-center">
                    <span>Already registered? <a class="text-primary" href="{{ route('login') }}">Login now</a></span>
                </div>
                <!-- Registration end !-->
            </div>
        </div>
    </div>
</x-guest-layout>
