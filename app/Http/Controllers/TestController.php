<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class TestController extends Controller
{
    /**
     * @return RedirectResponse
     */
    public function __invoke(): RedirectResponse
    {
        exit('asdf');

        return redirect()->back();
    }
}
