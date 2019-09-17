<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $req, Response $res){
      $html = <<<EOF
      <html>
        <head>
          <title>Hello</title>
          <style>
          body {font-size:11pt; color:#999;}
          h1 { font-size:55pt; text-align:left; color: #eee;
               margin:5px 0px -30px 0px; }
          </style>
        </head>
      </html>
      <body>
        <h1>Hello</h1>
        <h3>Request</h3>
        <pre>{$req}</pre>
        <H3>Response</H3>
        <pre>{$res}</pre>
      </body>
      </html>
      EOF;

      $res->setContent($html);
      return $res;
    }
}
