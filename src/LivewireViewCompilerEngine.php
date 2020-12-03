<?php

namespace Livewire;

use Exception;
use Throwable;
use Livewire\ComponentConcerns\RendersLivewireComponents;

class LivewireViewCompilerEngine extends CompilerEngine
{
    use RendersLivewireComponents;
}
