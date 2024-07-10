<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     * @return View
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.ipify.org?format=json");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($response);
        $data->ip;

        DB::table('sessions')->insert(
            [
                'id' => uniqid(),
                'user_id' => $request->user()->id,
                'ip_address' => $data->ip,
                'user_agent' => $request->userAgent(),
                'payload' => 'login',
                'last_activity' => time(),
            ]
        );
        return redirect()->intended(route('welcome', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     * @param Request $request 
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
