<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

enum PlanetType : string
{
    case Terrestrial = 'terrestrial';
    case GasGiant = 'gas_giant';
    case IceGiant = 'ice_giant';
    case Dwarf = 'dwarf';
    case SuperEarth = 'super_earth';
}