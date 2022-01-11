<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// グローバル変数
global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size:16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag(string $tag, string $txt) : string {
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class MultipleActionController extends Controller
{
    public function index() : string {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Multiple/Index') . $style . $body . tag('h1', 'Index') . tag('p', 'this is Index page.') . '<a href="/multiple/other">go to Other page</a>' . $end;
        return $html;
    }

    public function other() : string {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Multiple/Other') . $style . $body . tag('h1', 'Other') . tag('p', 'this is Other page.') . $end;
        return $html;
    }
}
