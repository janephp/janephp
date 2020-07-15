<?php

function (\Symfony\Component\OptionsResolver\Options $options, $value) {
    return $value ? 'true' : 'false';
};
