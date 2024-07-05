<x-guest-layout>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 shadow-lg border border-sky-400 rounded-lg m-auto p-5">
                <header class="text-center mb-3">
                    <h1 class="h3">Reset Your Password</h1>
                    <p>Be aware dear</p>
                </header>

                <form method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="form-group">
                        <label for="email">Email</label> <span class="text-danger">*</span>
                        <input type="email" name="email" class="form-control border rounded-lg bg-transparent" placeholder="Enter your email">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
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

                    <button type="submit" class="btn btn-primary w-100 mt-3">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
