<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ApApLinemanSummaryListItem
{
    /**
     * @var string
     */
    public string $mac;
    /**
     * Name of the AP
     *
     * @var string
     */
    public string $name;
    /**
     * @var float
     */
    public float $latitude;
    /**
     * @var float
     */
    public float $longitude;
    /**
     * State of the AP configuration
     *
     * @var string
     */
    public string $configState;
    /**
     * @var string
     */
    public string $location;
    /**
     * @var ApAlarmSummary
     */
    public ApAlarmSummary $alarms;
}