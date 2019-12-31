<?php

namespace Jane\OpenApi\Generator;

use Jane\OpenApi\Generator\Authentication\GetPluginGenerator;
use Jane\OpenApiCommon\Generator\AuthenticationGenerator as CommonAuthenticationGenerator;

class AuthenticationGenerator extends CommonAuthenticationGenerator
{
    use GetPluginGenerator;
}
