<?php

namespace App\Http\Controllers\Auth\LoginController;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

$login = $_POST['login'];
$password = $_POST['password'];

echo $login."<br/>";
echo $password;


?>