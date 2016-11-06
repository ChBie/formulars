<?php
/**
 * Created by PhpStorm.
 * User: cbiedermann
 * Date: 06.11.2016
 * Time: 13:10
 */

namespace ChBie\Formulars\Fields;

/**
 * Class AbstractFieldBuilder
 * contains base functionality for all field builders
 *
 * @package ChBie\Formulars\Fields
 */
abstract class AbstractFieldBuilder
{
    /**
     * var name in the form
     * @var string
     */
    protected $name;

    /**
     * all additional css classes for this field
     * hint: no need to add bootstrap-css classes
     *
     * @var array
     */
    protected $cssClasses = [];

    /**
     * this is the html field type
     *
     * @var string
     */
    protected $fieldType;

    /**
     * the id which have to be unique in dom
     * @var string
     */
    protected $cssId;

    /**
     * the translated varname of this field, when using
     * automatic created identifier
     *
     * @var string
     */
    protected $varNameAlias;

    /**
     * AbstractFieldBuilder constructor.
     *
     * @param string $fieldType
     */
    protected function __construct(string $fieldType)
    {

    }
}