<?php

declare (strict_types = 1);

namespace Phpml\Classifier;

interface Classifier
{
    /**
     * @param array $features
     * @param array $labels
     */
    public function train(array $features, array $labels);

    /**
     * @param mixed $feature
     *
     * @return mixed
     */
    public function predict($feature);
}