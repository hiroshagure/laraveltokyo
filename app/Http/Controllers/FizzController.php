<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FizzController extends Controller
{
    // ルートパラメータをコントローラで使う
    public function index($id='noname', $pass='unknown') {
        return <<<EOF
<html>
<head>
<title>Fizz/Index</title>
<style>
body {font-size:16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
    <h1>Index</h1>
    <p>これは、Fizzコントローラのindexアクションです。</p>
    <ul>
        <li>ID: {$id}</li>
        <li>PASS: {$pass}</li>
    </ul>
</body>
</html>
EOF;
    }
}
