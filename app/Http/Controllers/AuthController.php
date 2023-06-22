<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ApiController extends Controller
{

public function getMessage()

{
$message = 'Bienvenue sur notre API !';

echo($message);

}

}