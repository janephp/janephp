<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SystemModifyLwapp2scg
{
    /**
     * policy of the lwapp
     *
     * @var string
     */
    public string $policy;
    /**
     * pasvMaxPort of the lwapp
     *
     * @var int
     */
    public int $pasvMaxPort;
    /**
     * pasvMinPort of the lwapp
     *
     * @var int
     */
    public int $pasvMinPort;
    /**
     * accessPoint List  of the lwapp
     *
     * @var list<string>
     */
    public array $apList;
    /**
     * natIpTranslation of the lwapp
     *
     * @var bool
     */
    public bool $natIpTranslation;
}