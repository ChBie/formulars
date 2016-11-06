<?php
/**
 * Created by PhpStorm.
 * User: cbiedermann
 * Date: 06.11.2016
 * Time: 09:42
 */

namespace ChBie\Formulars;

use ChBie\Formulars\Fields\TextInputBuilder;

/**
 * Class FormBuilder
 * this class is the tool for creating a form
 *
 * @package ChBie\Formulars
 */
class FormBuilder
{
    /**
     * this var holds the created field classes
     *
     * @var array
     */
    protected $fields = [];

    /**
     * all forms should have a identifier
     *
     * @var string
     */
    protected $name = 'unnamed';

    /**
     * will the class create all ids automatically
     *
     * @var bool
     */
    protected $hasAutoIdCreation = true;

    /**
     * gives a class to construct a text field as reference
     *
     * @return TextInputBuilder
     */
    public function getTextFieldBuilder()
    {
        $fieldAmount = count($this->fields);
        $this->fields[$fieldAmount] =& new TextInputBuilder($this->hasAutoIdCreation);
        return $this->fields[$fieldAmount];
    }

    public function getSelectFieldBuilder()
    {

    }

    /**
     * here you can write a form description xml
     * to your local storage
     *
     * @param string $filename
     */
    public function writeXML(string $filename)
    {
        file_put_contents($filename, $this->getXML());
    }

    /**
     * when formular is final this method
     * gives the description xml
     *
     * @return string
     */
    public function getXML() : string
    {
        return '<?xml version="1.0" /><form name="'
        . $this->name
        . '"></form>';
    }

}