<?php

namespace Jane\Generated\DigitalOcean\Model;

class OptionsVersionAvailability extends \ArrayObject
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
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @var list<DatabaseVersionAvailability>
     */
    protected $kafka;
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @var list<DatabaseVersionAvailability>
     */
    protected $pg;
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @var list<DatabaseVersionAvailability>
     */
    protected $mysql;
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @var list<DatabaseVersionAvailability>
     */
    protected $redis;
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @var list<DatabaseVersionAvailability>
     */
    protected $valkey;
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @var list<DatabaseVersionAvailability>
     */
    protected $mongodb;
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @var list<DatabaseVersionAvailability>
     */
    protected $opensearch;
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @return list<DatabaseVersionAvailability>
     */
    public function getKafka(): array
    {
        return $this->kafka;
    }
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @param list<DatabaseVersionAvailability> $kafka
     *
     * @return self
     */
    public function setKafka(array $kafka): self
    {
        $this->initialized['kafka'] = true;
        $this->kafka = $kafka;
        return $this;
    }
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @return list<DatabaseVersionAvailability>
     */
    public function getPg(): array
    {
        return $this->pg;
    }
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @param list<DatabaseVersionAvailability> $pg
     *
     * @return self
     */
    public function setPg(array $pg): self
    {
        $this->initialized['pg'] = true;
        $this->pg = $pg;
        return $this;
    }
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @return list<DatabaseVersionAvailability>
     */
    public function getMysql(): array
    {
        return $this->mysql;
    }
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @param list<DatabaseVersionAvailability> $mysql
     *
     * @return self
     */
    public function setMysql(array $mysql): self
    {
        $this->initialized['mysql'] = true;
        $this->mysql = $mysql;
        return $this;
    }
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @return list<DatabaseVersionAvailability>
     */
    public function getRedis(): array
    {
        return $this->redis;
    }
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @param list<DatabaseVersionAvailability> $redis
     *
     * @return self
     */
    public function setRedis(array $redis): self
    {
        $this->initialized['redis'] = true;
        $this->redis = $redis;
        return $this;
    }
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @return list<DatabaseVersionAvailability>
     */
    public function getValkey(): array
    {
        return $this->valkey;
    }
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @param list<DatabaseVersionAvailability> $valkey
     *
     * @return self
     */
    public function setValkey(array $valkey): self
    {
        $this->initialized['valkey'] = true;
        $this->valkey = $valkey;
        return $this;
    }
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @return list<DatabaseVersionAvailability>
     */
    public function getMongodb(): array
    {
        return $this->mongodb;
    }
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @param list<DatabaseVersionAvailability> $mongodb
     *
     * @return self
     */
    public function setMongodb(array $mongodb): self
    {
        $this->initialized['mongodb'] = true;
        $this->mongodb = $mongodb;
        return $this;
    }
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @return list<DatabaseVersionAvailability>
     */
    public function getOpensearch(): array
    {
        return $this->opensearch;
    }
    /**
     * An array of objects, each indicating the version end-of-life, end-of-availability for various database engines
     *
     * @param list<DatabaseVersionAvailability> $opensearch
     *
     * @return self
     */
    public function setOpensearch(array $opensearch): self
    {
        $this->initialized['opensearch'] = true;
        $this->opensearch = $opensearch;
        return $this;
    }
}