<?php

namespace Insyht\LarvelousSkeletonTheme\Http\Controllers;

use Insyht\Larvelous\Http\Controllers\BasePluginControllerInterface;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class BaseController extends Controller implements BasePluginControllerInterface
{
    public function match(string $slug): bool
    {
        $found = false;

        return $found;
    }

    public function load(string $slug): Factory|View|null
    {
        $return = null;

        return $return;
    }
}
