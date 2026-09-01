<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemControlPlaneListListItem
{
    /**
     * Identifier of the control plane
     *
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * Management IP
     *
     * @var string
     */
    public string $managementIp;
    /**
     * Cluster IP
     *
     * @var string
     */
    public string $clusterIp;
    /**
     * Control IP
     *
     * @var string
     */
    public string $controlIp;
    /**
     * Model
     *
     * @var string
     */
    public string $model;
    /**
     * Serial Number
     *
     * @var string
     */
    public string $serialNumber;
    /**
     * Total Connected APs
     *
     * @var string
     */
    public string $numOfAps;
    /**
     * Description
     *
     * @var string
     */
    public string $description;
    /**
     * Firmware
     *
     * @var string
     */
    public string $firmware;
    /**
     * Cluster Role
     *
     * @var string
     */
    public string $clusterRole;
    /**
     * Uptime
     *
     * @var string
     */
    public string $upTime;
}