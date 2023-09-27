<?php

namespace App\Http\Controllers;

use App\Mail\kirimInvoice;
use Illuminate\Http\Request;
use App\Models\Pesan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class emailController extends Controller
{
    public function email()
    {
        $user = Auth::user();
        Mail::to($user->email)->send(new kirimInvoice());
        return redirect('');
    }
}
