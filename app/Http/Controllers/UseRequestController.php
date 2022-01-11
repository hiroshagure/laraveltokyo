<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UseRequestController extends Controller
{
    public function request(Request $request, Response $response) {
        $html = <<<EOF
<html>
<head>
<title>Request</title>
<style>
body {font-size: 16pt; color: #999; }
h1 { font-size: 120pt; text-align: right; color: #fafafa; margin: -50px 0px -120px 0px;}
</style>
</head>
<body>
    <h1>Use request in controller</h1>
    <h3>Request</h3>
    <pre>{$request->url()}</pre>
    <pre>{$request->fullUrl()}</pre>
    <pre>{$request->path()}</pre>
    <h3>Response</h3>
    <pre>{$response->status()}</pre>
    <pre>{$response->content()}</pre>
    <pre>{$response->setContent('aaa')}</pre>
</body>
</html>
EOF;
        $response->setContent($html);
        return $response;
    }
}
