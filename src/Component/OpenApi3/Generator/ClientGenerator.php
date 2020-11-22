<?php

namespace Jane\Component\OpenApi3\Generator;

use Jane\Component\OpenApi3\Generator\Client\ServerPluginGenerator;
use Jane\Component\OpenApiCommon\Generator\ClientGenerator as BaseClientGenerator;

class ClientGenerator extends BaseClientGenerator
{
    use ServerPluginGenerator;
}
