<?php

namespace Jane\Component\OpenApi31\Tests\Issue1006\Model;

class Widget
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var WidgetSettings
     */
    public WidgetSettings $settings;
    /**
     * @var WidgetSettings
     */
    public WidgetSettings $plain;
}