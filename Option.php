<?php

namespace Common\Framework\Html;

/**
 * Description of Option
 *
 * An option to be added to selectableLists. The tag generated will depend on where you append it.
 * 
 * @author rodrigo
 */
class Option {
    
    /**
     * 
     * @var string the value of the Option 
     */
    private $value;
    
    /**
     *
     * @var string the text that will be visible to this option.
     */
    private $label;
    
    /**
     * Creates a new Option
     * @param type $value
     * @param type $label
     */
    public function __construct($value, $label) {
        $this->value = $value;
        $this->label = $label;
    }
    
    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function getLabel() {
        return $this->label;
    }

    public function setLabel($label) {
        $this->label = $label;
    }


    
}

?>
