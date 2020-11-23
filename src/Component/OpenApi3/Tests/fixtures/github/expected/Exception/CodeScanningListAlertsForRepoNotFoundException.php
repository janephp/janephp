<?php

namespace Github\Exception;

class CodeScanningListAlertsForRepoNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response if the ref doesn\'t match an existing ref', 404);
    }
}