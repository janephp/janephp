<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonPortalCustomization
{
    /**
     * Language
     *
     * @var string
     */
    public string $language = 'en_US';
    /**
     * Title
     *
     * @var string
     */
    public string $title;
    /**
     * logo
     *
     * @var string
     */
    public string $logo;
    /**
     * Terms and conditions is required or not
     *
     * @var bool
     */
    public bool $termsAndConditionsRequired = 'false';
    /**
     * Terms and conditions text
     *
     * @var string
     */
    public string $termsAndConditionsText = 'Terms of Use

By accepting this agreement and accessing the wireless network, you acknowledge that you are of legal age, you have read and understood, and agree to be bound by this agreement.
(*) The wireless network service is provided by the property owners and is completely at their discretion. Your access to the network may be blocked, suspended, or terminated at any time for any reason.
(*) You agree not to use the wireless network for any purpose that is unlawful or otherwise prohibited and you are fully responsible for your use.
(*) The wireless network is provided "as is" without warranties of any kind, either expressed or implied.

This wireless network is powered by Ruckus Wireless.';
}