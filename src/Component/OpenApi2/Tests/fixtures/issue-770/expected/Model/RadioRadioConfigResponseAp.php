<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class RadioRadioConfigResponseAp
{
    /**
     * @var RadioRadio24gResponse
     */
    public RadioRadio24gResponse $radio24g;
    /**
     * @var RadioRadio5gResponseAp
     */
    public RadioRadio5gResponseAp $radio5g;
    /**
     * @var RadioRadio5gResponseAp
     */
    public RadioRadio5gResponseAp $radio5gUpper;
    /**
     * @var RadioRadio5gResponseAp
     */
    public RadioRadio5gResponseAp $radio5gLower;
    /**
     * @var RadioRadio6gResponse
     */
    public RadioRadio6gResponse $radio6g;
    /**
     * @var bool
     */
    public bool $dual5gEnabled;
}