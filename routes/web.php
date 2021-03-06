<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// パラメータの利用(必須パラメータ) hello以降にパラメータがないと404エラーに。
// use命令　親スコープの変数を引き継ぐ
$hoge = "hogehoge";
Route::get('hello/{msg}', function ($msg) use ($hoge){
    $html = <<<EOF
    <html>
    <head>
    <title><Hello></title>
    <style>
    body {font-size:16pt; color:#999; }
    h1 { font-size:100pt; text-align:right; color:#eee;
        margin:-40px 0px -50px 0px; }
    </style>
    </head>
    <body>
        <h1>Hello</h1>
        <p>{$msg}</p>
        <p>これは、サンプルで作ったページです。</p>
        <p>$hoge</p>
    </body>
    </html>
    EOF;
    return $html;
});

// パラメータの利用（任意パラメータ） thanks以降にパラメータがなくてもdefaulの値をパラメータとして処理する。
Route::get('thanks/{msg?}', function ($msg='no message.') {
    $html = <<<EOF
    <html>
    <head>
    <title><Hello></title>
    <style>
    body {font-size:16pt; color:#999; }
    h1 { font-size:100pt; text-align:right; color:#eee;
        margin:-40px 0px -50px 0px; }
    </style>
    </head>
    <body>
        <h1>Hello</h1>
        <p>{$msg}</p>
        <p>これは、サンプルで作ったページです。</p>
        <p>$huga</p>
    </body>
    </html>
    EOF;
    return $html;
});
