<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationLicenses
{
    /**
     * license description
     *
     * @var string
     */
    public string $description;
    /**
     * license name
     *
     * @var string
     */
    public string $name;
    /**
     * number of licenses
     *
     * @var int
     */
    public int $count;
    /**
     * license effective date
     *
     * @var string
     */
    public string $createTime;
    /**
     * license expiry date
     *
     * @var string
     */
    public string $expireDate;
}