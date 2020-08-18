<?php

namespace Jane\OpenApi3\Generator;

use Jane\OpenApi3\Generator\Client\ServerPluginGenerator;
use Jane\OpenApiCommon\Generator\ClientGenerator as BaseClientGenerator;

class ClientGenerator extends BaseClientGenerator
{
    use ServerPluginGenerator;
}
