<?php

namespace Jane\JsonSchema\Generator;

use Doctrine\Common\Inflector\Inflector;

/**
 * Helper to generate name for property / class / ....
 */
class Naming
{
    const BAD_CLASS_NAME_REGEX = '/^
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

    /**
     * Get a property name.
     *
     * @param $name
     *
     * @return string
     */
    public function getPropertyName($name)
    {
        $name = $this->replaceDollar($name);

        return Inflector::camelize($name);
    }

    /**
     * Get a method name given a prefix.
     *
     * @param $prefix
     * @param $name
     *
     * @return string
     */
    public function getPrefixedMethodName($prefix, $name)
    {
        $name = $this->replaceDollar($name);

        return sprintf('%s%s', $prefix, Inflector::classify($name));
    }

    /**
     * Get a class name.
     *
     * @param $name
     *
     * @return string
     */
    public function getClassName($name)
    {
        $name = $this->replaceDollar($name);
        $name = preg_replace_callback('#[/\{\}]+(\w)#', function ($matches) {
            return ucfirst($matches[1]);
        }, $name);

        // Doctrine Inflector does not seem to handle some characters (like dots) well.
        // So replace invalid char by an underscore to allow Doctrine to uppercase word correctly.
        $name = trim(preg_replace('/[^a-z0-9 ]+/iu', '_', $name));

        $name = Inflector::classify($name);

        if (preg_match(self::BAD_CLASS_NAME_REGEX, $name)) {
            $name = '_' . $name;
        }

        return $name;
    }

    /**
     * @param $name
     *
     * @return mixed
     */
    protected function replaceDollar($name)
    {
        if (preg_match('/\$/', $name)) {
            $name = preg_replace_callback('/\$([a-z])/', function ($matches) {
                return 'dollar' . ucfirst($matches[1]);
            }, $name);
        }

        return $name;
    }
}
