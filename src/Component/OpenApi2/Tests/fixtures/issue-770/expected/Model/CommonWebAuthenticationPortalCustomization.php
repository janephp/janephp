<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonWebAuthenticationPortalCustomization
{
    /**
     * Title of the custom portal
     *
     * @var string
     */
    public string $title;
    /**
     * Logo encoded with base64, format is "data:image/png;base64,the base64 encoded logo"
     *
     * @var string
     */
    public string $logo;
}