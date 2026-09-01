<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AvcDownloadLatestInstallableSignaturePackage
{
    /**
     * The message of current download process
     *
     * @var string
     */
    public string $message;
    /**
     * The state of current download process
     *
     * @var string
     */
    public string $state;
    /**
     * @var AvcLatestInstallableSignaturePackage
     */
    public AvcLatestInstallableSignaturePackage $latestInstallable;
}