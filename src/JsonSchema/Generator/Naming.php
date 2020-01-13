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

    public function getPropertyName(string $name): string
    {
        $name = $this->cleaning($name);

        return $name;
    }

    public function getPrefixedMethodName(string $prefix, string $name): string
    {
        $name = $this->cleaning($name);

        return sprintf('%s%s', $prefix, Inflector::classify($name));
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
        return $this->getClassName(sprintf('%sAuthentication', $name));
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

        if (mb_strlen($name) > 218) {
            // usual filesystem will block after 255 characters
            // we stop at 218 to keep 32 characters for a MD5 hash of the original file (to avoid colision)
            // and last 4 characters for the extension (.php)
            $hash = md5($name);
            $name = mb_substr($name, -218, 218);
            $name = ucfirst($hash) . ucfirst($name);
        }

        if ($class) {
            return Inflector::classify($name);
        }

        return Inflector::camelize($name);
    }
}
