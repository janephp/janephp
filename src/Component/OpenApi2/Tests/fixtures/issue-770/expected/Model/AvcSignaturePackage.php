<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AvcSignaturePackage
{
    /**
     * Identifier of the Signature Package
     *
     * @var string
     */
    public string $id;
    /**
     * Name of the Signature Package
     *
     * @var string
     */
    public string $fileName;
    /**
     * Version of the Signature Package
     *
     * @var string
     */
    public string $version;
    /**
     * Size of the Signature Package
     *
     * @var int
     */
    public int $size;
    /**
     * General information about the binary files in the Signature Package
     *
     * @var list<AvcSignaturePackageBinary>
     */
    public array $binariesInfo;
    /**
     * @var AvcCheckLatestInstallableSignaturePackageSettings
     */
    public AvcCheckLatestInstallableSignaturePackageSettings $checkLatestInstallableSettings;
    /**
     * @var AvcLatestInstallableSignaturePackage
     */
    public AvcLatestInstallableSignaturePackage $latestInstallable;
}