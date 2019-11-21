<?php

declare(strict_types=1);

namespace Jane\OpenApiRuntime\Client;

use Http\Client\Common\Plugin;

interface Authentication
{
    public function getPlugin(): Plugin;
}
