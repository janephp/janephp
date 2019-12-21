<?php

namespace Jane\OpenApi2\Command;

use Jane\OpenApi2\JaneOpenApi;
use Jane\OpenApiCommon\Command\GenerateCommand as CommonGenerateCommand;

class GenerateCommand extends CommonGenerateCommand
{
    protected const OPEN_API_CLASS = JaneOpenApi::class;
}
