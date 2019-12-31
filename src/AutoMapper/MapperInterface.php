<?php

namespace Jane\AutoMapper;

interface MapperInterface
{
    /**
     * @param mixed   $value   Value to map
     * @param Context $context Options mapper have access to
     *
     * @return mixed The mapped value
     */
    public function &map($value, Context $context);
}
