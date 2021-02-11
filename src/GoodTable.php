<?php

namespace Shaulhaf\GoodTable;

use Laravel\Nova\Fields\Field;

class GoodTable extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-goodtable';

    public function columns($columns)
    {
        $this->withMeta(['columns' => $columns]);

        return $this;
    }
}
