<?php

namespace App\Http\Controllers\pembeli;

use App\Http\Controllers\Controller;
use App\Models\Pembeli;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public const cust = 1;
    public function index()
    {
        return view('screen.auth.login');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user-email'    => 'required',
            'user-password' => 'required|min:6',
            'repassword'    => 'required|same:user-password',
            'fullname'      => 'required|string|max:255',
            'noHp'          => 'required|string|min:10|max:13',
            'namaKantor'    => 'required|string',
            'lantai'        => 'required',
            'nomorKantor'   => 'required'
        ]);
        Log::info($request->all());
        // dd($validator->fails());
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator) 
                ->withInput(); 
        }

        $date = now(); 
        $randomNumber = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT); 
        $formattedId = '#PL' . $date->format('H') . $date->format('i') . $date->format('d') . $date->format('m') . $date->format('Y') . $randomNumber;
    
        try {
            User::create([
                'id'        => $formattedId,
                'name'      => $request->input('fullname'),
                'email'     => $request->input('user-email'),
                'noHp'      => $request->input('noHp'),
                'password'  => bcrypt($request->input('user-password')),
                'cust'      => 1
            ]);
        } catch (\Throwable $th) {
            // return view('screen/auth/400');
            dd($th);
        }

        try {
            Pembeli::create([
                'idUser'        => $formattedId,
                'nama_kantor'   => $request->input('namaKantor'),
                'lantai'        => $request->input('lantai'),
                'nomor_kantor'  => $request->input('nomorKantor'),
            ]);
        } catch (\Throwable $th) {
            dd($th);
        }

        
        return view('welcome');
        
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user-name' => 'required|email',
            'user-password' => 'required|min:6',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput(); 
        }
    
        $credentials = [
            'email' => $request->input('user-name'),
            'password' => $request->input('user-password')
        ];
    
        $remember = $request->input('rme') == '1'; 
    
        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();
            return redirect('/');
        }
    
        return redirect()->back()
                ->withErrors(['login' => 'Username dan Password tidak valid.']);
        }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Anda telah berhasil logout.');
    }
}