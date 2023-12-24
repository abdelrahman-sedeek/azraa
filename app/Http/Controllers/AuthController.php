<?php
 
 namespace App\Http\Controllers;
 
 use App\Models\User;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\Hash;
 use Illuminate\Foundation\Auth\User as Authenticatable;
 use Illuminate\Validation\Rule;

class AuthController extends Controller 
{
    public function register()
    {
        return view('auth.register');
    }
 
    public function registerPost(Request $request)
    {
        $validator = $request->validate([
            'mobile' => [
                'required',
                'numeric',
                'digits:11',
                Rule::unique('users', 'mobile'), 
            ],
        ]);
        // if ($validator->fails()) {
        //     return back()->withErrors($validator)->withInput();
        // }
        $user = new User();
        $user->name = 'test user';
        $user->longitude=0;
        $user->latitude=0;
        $user->mobile = $request->mobile;
        $user->email = $request->mobile.'@zahcode.com';
        $user->password = Hash::make($request->password);
        $user->location = 'null';
        $user->balance = 0;
        $user->type = 'ماركت';
 
        $user->save();
        Auth::login($user);
        return redirect()->route('index');

    }
 
    public function login()
    {
        return view('auth.login');
    }
 
    public function loginPost(Request $request)
    {
        $credetials = [
            'mobile' => $request->mobile,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect()->route('index');
        }
 
        return back()->with('error', 'Error Email or Password');
    }
 
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}