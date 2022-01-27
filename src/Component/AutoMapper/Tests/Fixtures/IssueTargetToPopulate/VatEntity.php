<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures\IssueTargetToPopulate;

class VatEntity
{
    /**
     * @var int|null
     */
    private $id = null;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string|null
     */
    private $stateCode;

    /**
     * @var float
     */
    private $standardVatRate;

    /**
     * @var float
     */
    private $reducedVatRate;

    /**
     * @var bool
     */
    private $displayIncVatPrices;

    public function __construct(
        string $countryCode,
        string $stateCode = null,
        float $standardVatRate = 0,
        float $reducedVatRate = 0,
        bool $displayIncVatPrices = false
    ) {
        $this->countryCode = $countryCode;
        $this->stateCode = $stateCode;
        $this->standardVatRate = $standardVatRate;
        $this->reducedVatRate = $reducedVatRate;
        $this->displayIncVatPrices = $displayIncVatPrices;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    public function getStateCode(): ?string
    {
        return $this->stateCode;
    }

    public function setStateCode(?string $stateCode): void
    {
        $this->stateCode = $stateCode;
    }

    public function getStandardVatRate(): float
    {
        return $this->standardVatRate;
    }

    public function setStandardVatRate(float $standardVatRate): void
    {
        $this->standardVatRate = $standardVatRate;
    }

    public function getReducedVatRate(): float
    {
        return $this->reducedVatRate;
    }

    public function setReducedVatRate(float $reducedVatRate): void
    {
        $this->reducedVatRate = $reducedVatRate;
    }

    public function isDisplayIncVatPrices(): bool
    {
        return $this->displayIncVatPrices;
    }

    public function setDisplayIncVatPrices(bool $displayIncVatPrices): void
    {
        $this->displayIncVatPrices = $displayIncVatPrices;
    }
}
