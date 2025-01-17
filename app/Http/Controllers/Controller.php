<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
>>>>>>> 240b5a1064a946fadec0837b313c365e320f4739
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
<<<<<<< HEAD
    // Kamu bisa menambahkan fungsi-fungsi lainnya di sini jika diperlukan
=======
    use AuthorizesRequests, ValidatesRequests;
>>>>>>> 240b5a1064a946fadec0837b313c365e320f4739
}
