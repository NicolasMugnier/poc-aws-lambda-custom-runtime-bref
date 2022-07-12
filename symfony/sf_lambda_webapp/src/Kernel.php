<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Bref\SymfonyBridge\BrefKernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;
}
