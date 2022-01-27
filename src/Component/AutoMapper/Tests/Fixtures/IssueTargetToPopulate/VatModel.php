<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures\IssueTargetToPopulate;

class VatModel
{
    /**
     * @var string
     */
    protected $countryCode;
    /**
     * @var string|null
     */
    protected $stateCode;
    /**
     * @var float
     */
    protected $standardVatRate;
    /**
     * @var float
     */
    protected $reducedVatRate;
    /**
     * @var bool
     */
    protected $displayIncVatPrices = false;

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getStateCode(): ?string
    {
        return $this->stateCode;
    }

    public function setStateCode(?string $stateCode): self
    {
        $this->stateCode = $stateCode;

        return $this;
    }

    public function getStandardVatRate(): float
    {
        return $this->standardVatRate;
    }

    public function setStandardVatRate(float $standardVatRate): self
    {
        $this->standardVatRate = $standardVatRate;

        return $this;
    }

    public function getReducedVatRate(): float
    {
        return $this->reducedVatRate;
    }

    public function setReducedVatRate(float $reducedVatRate): self
    {
        $this->reducedVatRate = $reducedVatRate;

        return $this;
    }

    public function getDisplayIncVatPrices(): bool
    {
        return $this->displayIncVatPrices;
    }

    public function setDisplayIncVatPrices(bool $displayIncVatPrices): self
    {
        $this->displayIncVatPrices = $displayIncVatPrices;

        return $this;
    }
}
