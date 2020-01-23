<?php

/**
 * Copyright (c) Vincent Klaiber.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/wordplate/acf
 */

declare(strict_types=1);

namespace WordPlate\Acf\Fields;

use WordPlate\Acf\Fields\Attributes\Endpoint;
use WordPlate\Acf\Fields\Attributes\Instructions;

class Accordion extends Field
{
    use Endpoint;
    use Instructions;

    /**
     * @var string
     */
    protected $type = 'accordion';

    /**
     * Enable multi expand.
     *
     * @return self
     */
    public function multiExpand(): self
    {
        $this->config->set('multi_expand', true);

        return $this;
    }

    /**
     * Set the accordion to open.
     *
     * @return self
     */
    public function open(): self
    {
        $this->config->set('open', true);

        return $this;
    }
}
