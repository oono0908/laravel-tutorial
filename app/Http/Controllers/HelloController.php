<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id="noname",$pass="unknown"){
        return <<<EOF
        <html>
            <body>
            <h1>
            ID: {$id}
            PASS: {pass}
            </h1>
            </body>
        </html>
        EOF;
    }
}
