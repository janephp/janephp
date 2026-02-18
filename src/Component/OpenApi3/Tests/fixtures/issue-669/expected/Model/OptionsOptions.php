<?php

namespace Jane\Generated\DigitalOcean\Model;

class OptionsOptions extends \ArrayObject
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
     * @var OptionsOptionsKafka
     */
    protected $kafka;
    /**
     * @var OptionsOptionsMongodb
     */
    protected $mongodb;
    /**
     * @var OptionsOptionsPg
     */
    protected $pg;
    /**
     * @var OptionsOptionsMysql
     */
    protected $mysql;
    /**
     * @var OptionsOptionsRedis
     */
    protected $redis;
    /**
     * @var OptionsOptionsValkey
     */
    protected $valkey;
    /**
     * @var OptionsOptionsOpensearch
     */
    protected $opensearch;
    /**
     * @return OptionsOptionsKafka
     */
    public function getKafka(): OptionsOptionsKafka
    {
        return $this->kafka;
    }
    /**
     * @param OptionsOptionsKafka $kafka
     *
     * @return self
     */
    public function setKafka(OptionsOptionsKafka $kafka): self
    {
        $this->initialized['kafka'] = true;
        $this->kafka = $kafka;
        return $this;
    }
    /**
     * @return OptionsOptionsMongodb
     */
    public function getMongodb(): OptionsOptionsMongodb
    {
        return $this->mongodb;
    }
    /**
     * @param OptionsOptionsMongodb $mongodb
     *
     * @return self
     */
    public function setMongodb(OptionsOptionsMongodb $mongodb): self
    {
        $this->initialized['mongodb'] = true;
        $this->mongodb = $mongodb;
        return $this;
    }
    /**
     * @return OptionsOptionsPg
     */
    public function getPg(): OptionsOptionsPg
    {
        return $this->pg;
    }
    /**
     * @param OptionsOptionsPg $pg
     *
     * @return self
     */
    public function setPg(OptionsOptionsPg $pg): self
    {
        $this->initialized['pg'] = true;
        $this->pg = $pg;
        return $this;
    }
    /**
     * @return OptionsOptionsMysql
     */
    public function getMysql(): OptionsOptionsMysql
    {
        return $this->mysql;
    }
    /**
     * @param OptionsOptionsMysql $mysql
     *
     * @return self
     */
    public function setMysql(OptionsOptionsMysql $mysql): self
    {
        $this->initialized['mysql'] = true;
        $this->mysql = $mysql;
        return $this;
    }
    /**
     * @return OptionsOptionsRedis
     */
    public function getRedis(): OptionsOptionsRedis
    {
        return $this->redis;
    }
    /**
     * @param OptionsOptionsRedis $redis
     *
     * @return self
     */
    public function setRedis(OptionsOptionsRedis $redis): self
    {
        $this->initialized['redis'] = true;
        $this->redis = $redis;
        return $this;
    }
    /**
     * @return OptionsOptionsValkey
     */
    public function getValkey(): OptionsOptionsValkey
    {
        return $this->valkey;
    }
    /**
     * @param OptionsOptionsValkey $valkey
     *
     * @return self
     */
    public function setValkey(OptionsOptionsValkey $valkey): self
    {
        $this->initialized['valkey'] = true;
        $this->valkey = $valkey;
        return $this;
    }
    /**
     * @return OptionsOptionsOpensearch
     */
    public function getOpensearch(): OptionsOptionsOpensearch
    {
        return $this->opensearch;
    }
    /**
     * @param OptionsOptionsOpensearch $opensearch
     *
     * @return self
     */
    public function setOpensearch(OptionsOptionsOpensearch $opensearch): self
    {
        $this->initialized['opensearch'] = true;
        $this->opensearch = $opensearch;
        return $this;
    }
}