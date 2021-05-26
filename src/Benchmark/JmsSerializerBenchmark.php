<?php

namespace Jane\Benchmark;

use Jane\Component\AutoMapper\Tests\Fixtures\Address;
use Jane\Component\AutoMapper\Tests\Fixtures\User;
use JMS\Serializer\SerializerBuilder;
use PhpBench\Benchmark\Metadata\Annotations\BeforeMethods;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;
use PhpBench\Benchmark\Metadata\Annotations\Warmup;

/**
 * @BeforeMethods({"initSerializer"})
 * @Warmup(1)
 * @Revs(60)
 * @Iterations(60)
 */
class JmsSerializerBenchmark
{
    private $serializer;

    public function initSerializer(): void
    {
        $this->serializer = (SerializerBuilder::create())->build();
    }

    public function benchJmsSerializer()
    {
        $address = new Address();
        $address->setCity('Toulon');
        $user = new User(1, 'yolo', '13');
        $user->address = $address;
        $user->addresses[] = $address;

        $this->serializer->serialize($user, 'json');
    }
}
