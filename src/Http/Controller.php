<?php

namespace Hybridly\Http;

use Hybridly\View\Factory;
use Illuminate\Http\Request;

class Controller
{
    public function __invoke(Request $request): Factory
    {
        return hybridly(
            $request->route()->defaults['component'],
            $request->route()->defaults['properties'],
        );
    }
}
