<x-guest-layout>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 shadow-lg border border-sky-400 rounded-lg m-auto p-5">
                <header class="text-center mb-3">
                    <h1 class="h3">Recovery Email</h1>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                </header>
                <!-- From start !-->
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email</label> <span class="text-danger">*</span>
                        <input type="email" name="email" class="form-control border rounded-lg bg-transparent" placeholder="Enter your email">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-3">Email Password Reset Link</button>
                </form>
                <!-- From end !-->
            </div>
        </div>
    </div>
</x-guest-layout>
