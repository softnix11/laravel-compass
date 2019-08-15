<?php

namespace Davidhsianturi\Compass\Http\Controllers;

use Compass\Compass;

class HomeController
{
    /**
     * Display the Compass view.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('compass::layout', [
            'compassScriptVariables' => Compass::scriptVariables(),
        ]);
    }
}
