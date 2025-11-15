<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyAccountMail;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
       
    }



// public function register(Request $request)
// {
//     try {
//         // Validate form inputs
//         $request->validate([
//             'name'      => 'required|string|max:255',
//             'lname'     => 'required|string|max:255',
//             'currency'  => 'required|string|max:255',
//             'email'     => 'required|email|unique:users,email',
//             'password'  => 'required|string|min:8|confirmed',
//         ]);

//         // Create new user
//         $user = User::create([
//             'name'      => $request->input('name'),
//             'lname'     => $request->input('lname'),
//             'currency'  => $request->input('currency'),
//             'email'     => $request->input('email'),
//             'password'  => bcrypt($request->input('password')),
//         ]);

//         // Redirect to update details page with success message
//         return redirect()->route('step2')->with('success', 'Registration successful! Please update your details.');

//     } catch (\Throwable $e) {
//         \Log::error('Registration error:', [
//             'message' => $e->getMessage(),
//             'file'    => $e->getFile(),
//             'line'    => $e->getLine(),
//         ]);

//         return back()->with('error', 'Registration failed. Please try again.');
//     }
// }



public function step2(Request $request)
{
    try {
        $request->validate([
            'country' => 'required|string|max:255',
            'state'   => 'required|string|max:255',
            'pcode'   => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
        ]);

        $user = Auth::user();

        $user->update([
            'country'      => $request->input('country'),
            'state'        => $request->input('state'),
            'pcode'        => $request->input('pcode'),
            'address'      => $request->input('address'),
            'phone'        => $request->input('phone'),
            'is_activated' => 1,
        ]);

        // ✅ Send the welcome email
        Mail::to($user->email)->send(new WelcomeMail($user));

        return redirect()->route('user.home')
            ->with('success', 'Your details have been successfully updated. Welcome aboard Swift Meta Trade!');

    } catch (\Throwable $e) {
        \Log::error('Update details error:', [
            'message' => $e->getMessage(),
            'file'    => $e->getFile(),
            'line'    => $e->getLine(),
        ]);

        return back()->with('error', 'Failed to update details. Please try again.');
    }
}



// public function step2(Request $request)
// {
//     try {
//         // Validate input data
//         $request->validate([
//             'country' => 'required|string|max:255',
//             'state'   => 'required|string|max:255',
//             'pcode'   => 'required|string|max:20',
//             'address' => 'required|string|max:255',
//             'phone'   => 'required|string|max:20',
//         ]);

//         // Get the authenticated user
//         $user = Auth::user();

//         // Update user details
//         $user->update([
//             'country'      => $request->input('country'),
//             'state'        => $request->input('state'),
//             'pcode'        => $request->input('pcode'),
//             'address'      => $request->input('address'),
//             'phone'        => $request->input('phone'),
//             'is_activated' => 1, // mark as activated
//         ]);

//         return redirect()->route('user.home')->with('success', 'Your details have been successfully updated.');

//     } catch (\Throwable $e) {
//         \Log::error('Update details error:', [
//             'message' => $e->getMessage(),
//             'file'    => $e->getFile(),
//             'line'    => $e->getLine(),
//         ]);

//         return back()->with('error', 'Failed to update details. Please try again.');
//     }
// }


}

