<?php
/**
 * Created by PhpStorm.
 * User: cbiedermann
 * Date: 06.11.2016
 * Time: 13:15
 */

namespace ChBie\Formulars\Fields;


class TextInputBuilder extends AbstractFieldBuilder
{
    /**
     * TextInputBuilder constructor.
     */
    public function __construct()
    {
        parent::__construct('text');
    }
}