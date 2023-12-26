<?php
 
 namespace App\Http\Controllers;
 
 use App\Models\User;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Validator;

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
        $customMessages = [
            'mobile.required' => 'هذا الحقل مطلوب.',
            'mobile.numeric' => 'ادخل 11 رقم',
            'mobile.digits' => 'ادخل 11 رقم',
            'mobile.unique' => 'هذا الرقم تم استخدامة من قبل',
            'address.required' =>  'هذا الحقل مطلوب.',
            'password.required' =>  'هذا الحقل مطلوب.',
            'password.min' => 'ادخل علي الاقل 6 ارقام',
            'type.required' =>  'هذا الحقل مطلوب.',
            'name.required' =>  'هذا الحقل مطلوب.',
        ];
        $validator = Validator::make($request->all(), [
            'mobile' => [
                'required',
                'numeric',
                'digits:11',
                Rule::unique('users')->ignore($request->mobile),
            ],
            'address' => [
                'required',
            ],
            'password' => [
                'required',
                'min:6',
            ],
            'type' => [
                'required',
            ],
            'name' => [
                'required',
            ],
        ],$customMessages);
    
        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Validation passed, proceed to save data
        $user = new User();
        $user->name = $request->name;
        $user->longitude = 0;
        $user->latitude = 0;
        $user->mobile = $request->mobile;
        $user->email = $request->mobile . '@zahcode.com';
        $user->password = Hash::make($request->password);
        $user->location = $request->address;
        $user->balance = 0;
        $user->type = $request->type;
    
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