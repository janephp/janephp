<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemStatisticListItem
{
    /**
     * timestamp
     *
     * @var float
     */
    public float $timestamp;
    /**
     * @var SystemStatisticListItemCpu
     */
    public SystemStatisticListItemCpu $cpu;
    /**
     * @var SystemStatisticListItemDisk
     */
    public SystemStatisticListItemDisk $disk;
    /**
     * @var SystemStatisticListItemMemory
     */
    public SystemStatisticListItemMemory $memory;
    /**
     * @var SystemPortStatistic
     */
    public SystemPortStatistic $port0;
    /**
     * @var SystemPortStatistic
     */
    public SystemPortStatistic $port1;
    /**
     * @var SystemPortStatistic
     */
    public SystemPortStatistic $port2;
    /**
     * @var SystemPortStatistic
     */
    public SystemPortStatistic $port3;
    /**
     * @var SystemPortStatistic
     */
    public SystemPortStatistic $port4;
    /**
     * @var SystemPortStatistic
     */
    public SystemPortStatistic $port5;
    /**
     * @var SystemPortStatistic
     */
    public SystemPortStatistic $control;
    /**
     * @var SystemPortStatistic
     */
    public SystemPortStatistic $cluster;
    /**
     * @var SystemPortStatistic
     */
    public SystemPortStatistic $management;
}