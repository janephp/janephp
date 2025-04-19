<?php

namespace Jane\Component\JsonSchema\Generator;

use Jane\Component\JsonSchema\Tools\InflectorTrait;

/**
 * Helper to generate name for property / class / ...
 */
class Naming
{
    use InflectorTrait;

    public const BAD_CLASS_NAME_REGEX = '/^
        ([0-9])|
        \b(
            (a(bstract|nd|rray|s))|
            (c(a(llable|se|tch)|l(ass|one)|on(st|tinue)))|
            (d(e(clare|fault)|ie|o))|
            (e(cho|lse(if)?|mpty|nd(declare|for(each)?|if|switch|while)|val|x(it|tends)))|
            (f(inal|or(each)?|unction))|
            (g(lobal|oto))|
            (i(f|mplements|n(clude(_once)?|st(anceof|eadof)|terface)|sset))|
            (n(amespace|ew))|
            (p(r(i(nt|vate)|otected)|ublic))|
            (re(quire(_once)?|turn))|
            (s(tatic|witch))|
            (t(hrow|r(ait|y)))|
            (u(nset|se))|
            (__halt_compiler|break|list|(x)?or|var|while)
        )\b
    /ix';

    public function getPropertyName(string $name): string
    {
        $name = $this->cleaning($name);
        // php property can't start with a number
        if (is_numeric(substr($name, 0, 1))) {
            $name = 'n' . $name;
        }

        return $name;
    }

    /**
     * @param string             $name                Property name to be cleaned/deduplicated
     * @param array<string, int> $otherPropertiesName
     */
    public function getDeduplicatedName(string $name, array &$otherPropertiesName): string
    {
        $cleanedName = $this->cleaning($name);

        $duplicateName = strtolower($cleanedName);
        if (\array_key_exists($duplicateName, $otherPropertiesName)) {
            ++$otherPropertiesName[$duplicateName];
            $cleanedName .= '' . $otherPropertiesName[$duplicateName];
        } else {
            $otherPropertiesName[$duplicateName] = 1;
        }

        return $cleanedName;
    }

    public function getPrefixedMethodName(string $prefix, string $name): string
    {
        $name = $this->cleaning($name);
        // since it's prefixed, it doesn't require to check if it start with a number

        return \sprintf('%s%s', $prefix, $this->getInflector()->classify($name));
    }

    public function getClassName(string $name): string
    {
        $name = $this->cleaning($name, true);

        if (preg_match(self::BAD_CLASS_NAME_REGEX, $name)) {
            $name = '_' . $name;
        }

        return $name;
    }

    public function getAuthName(string $name): string
    {
        return $this->getClassName(\sprintf('%sAuthentication', $name));
    }

    public function getConstraintName(string $name): string
    {
        return $this->getClassName(\sprintf('%sConstraint', $name));
    }

    public function getRuntimeNamespace(string $schemaNamespace, array $namespace): string
    {
        $namespaceSuffix = '';
        if (\count($namespace) > 0) {
            $namespaceSuffix = '\\' . implode('\\', $namespace);
        }

        return $schemaNamespace . '\\Runtime' . $namespaceSuffix;
    }

    public function getRuntimeClassFQCN(string $schemaNamespace, array $namespace, string $class): string
    {
        return \sprintf('%s\\%s', $this->getRuntimeNamespace($schemaNamespace, $namespace), $class);
    }

    protected function cleaning(string $name, bool $class = false): string
    {
        if (preg_match('/\$/', $name)) {
            $name = preg_replace_callback('/\$([a-z])/', function ($matches) {
                return 'dollar' . ucfirst($matches[1]);
            }, $name);
        }

        $name = preg_replace_callback('#[/\{\}]+(\w)#', function ($matches) {
            return ucfirst($matches[1]);
        }, $name);

        // Doctrine Inflector does not seem to handle some characters (like dots, @, :) well.
        // So replace invalid char by an underscore to allow Doctrine to uppercase word correctly.
        $name = trim(preg_replace('/[^a-z0-9 ]+/iu', '_', $name));

        if ($class) {
            return $this->getInflector()->classify($name);
        }

        return $this->getInflector()->camelize($name);
    }
}
