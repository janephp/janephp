<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AvcLatestInstallableSignaturePackage
{
    /**
     * The version of the latest installable signature package
     *
     * @var string
     */
    public string $version;
    /**
     * The binaries information of the latest installable signature package
     *
     * @var list<AvcLatestInstallableSignaturePackageBinary>
     */
    public array $binariesInfo;
    /**
     * The last checked time for the latest installable signature package
     *
     * @var int
     */
    public int $lastCheckedTime;
}