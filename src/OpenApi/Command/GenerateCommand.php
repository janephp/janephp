<?php

namespace Jane\OpenApi\Command;

use Jane\OpenApi\JaneOpenApi;
use Jane\OpenApiCommon\Command\GenerateCommand as CommonGenerateCommand;

class GenerateCommand extends CommonGenerateCommand
{
    protected const OPEN_API_CLASS = JaneOpenApi::class;
}
