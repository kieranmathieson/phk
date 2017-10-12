<?php

namespace AppBundle\Twig\Extension;

class TwigThings extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'twig_things';
    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('noneify', [$this, 'noneifyFilter']),
        ];
    }

    public function noneifyFilter($value) {
        return $value ? $value : '(None)';
    }
}
