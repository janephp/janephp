<?php

namespace Jane\Generated\DigitalOcean\Model;

class SourceDatabase extends \ArrayObject
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
     * @var SourceDatabaseSource
     */
    protected $source;
    /**
     * Enables SSL encryption when connecting to the source database.
     *
     * @var bool
     */
    protected $disableSsl;
    /**
     * List of databases that should be ignored during migration.
     *
     * @var list<string>
     */
    protected $ignoreDbs = array();
    /**
     * @return SourceDatabaseSource
     */
    public function getSource(): SourceDatabaseSource
    {
        return $this->source;
    }
    /**
     * @param SourceDatabaseSource $source
     *
     * @return self
     */
    public function setSource(SourceDatabaseSource $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
     * Enables SSL encryption when connecting to the source database.
     *
     * @return bool
     */
    public function getDisableSsl(): bool
    {
        return $this->disableSsl;
    }
    /**
     * Enables SSL encryption when connecting to the source database.
     *
     * @param bool $disableSsl
     *
     * @return self
     */
    public function setDisableSsl(bool $disableSsl): self
    {
        $this->initialized['disableSsl'] = true;
        $this->disableSsl = $disableSsl;
        return $this;
    }
    /**
     * List of databases that should be ignored during migration.
     *
     * @return list<string>
     */
    public function getIgnoreDbs(): array
    {
        return $this->ignoreDbs;
    }
    /**
     * List of databases that should be ignored during migration.
     *
     * @param list<string> $ignoreDbs
     *
     * @return self
     */
    public function setIgnoreDbs(array $ignoreDbs): self
    {
        $this->initialized['ignoreDbs'] = true;
        $this->ignoreDbs = $ignoreDbs;
        return $this;
    }
}