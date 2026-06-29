<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class ProjectProposal
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var GlobalEcoScore|null
     */
    protected $ecoScore;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return GlobalEcoScore|null
     */
    public function getEcoScore(): ?GlobalEcoScore
    {
        return $this->ecoScore;
    }
    /**
     * @param GlobalEcoScore|null $ecoScore
     *
     * @return self
     */
    public function setEcoScore(?GlobalEcoScore $ecoScore): self
    {
        $this->initialized['ecoScore'] = true;
        $this->ecoScore = $ecoScore;
        return $this;
    }
}