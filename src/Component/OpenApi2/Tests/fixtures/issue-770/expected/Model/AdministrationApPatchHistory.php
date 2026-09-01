<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AdministrationApPatchHistory
{
    /**
     * startDateTime of the AP Patch history
     *
     * @var string
     */
    public string $startDateTime;
    /**
     * file name of the AP Patch history
     *
     * @var string
     */
    public string $fileName;
    /**
     * apFwVersion of the AP Patch history
     *
     * @var string
     */
    public string $apFwVersion;
    /**
     * AP Models of the AP Patch history
     *
     * @var list<string>
     */
    public array $apModelList;
}