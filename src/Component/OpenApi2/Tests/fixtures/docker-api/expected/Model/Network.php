<?php

namespace Docker\Api\Model;

class Network
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $created;
    /**
     * @var string
     */
    public string $scope;
    /**
     * @var string
     */
    public string $driver;
    /**
     * @var bool
     */
    public bool $enableIPv6;
    /**
     * @var IPAM
     */
    public IPAM $iPAM;
    /**
     * @var bool
     */
    public bool $internal;
    /**
     * @var bool
     */
    public bool $attachable;
    /**
     * @var bool
     */
    public bool $ingress;
    /**
     * @var array<string, NetworkContainer>
     */
    public iterable $containers;
    /**
     * @var array<string, string>
     */
    public iterable $options;
    /**
     * @var array<string, string>
     */
    public iterable $labels;
}