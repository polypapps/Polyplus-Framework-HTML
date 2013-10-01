<?php

namespace Common\Framework\Html;

/**
 * Description of CheckBox
 *
 * Checkboxes let a user select ZERO or MORE options of a limited number of choices.
 * 
 * @author rodrigo
 */
class CheckBox extends FormInput{
    
    /**
     * 
     * @param Document $document
     * @param string $name
     * @param boolean $checked if the checkbox will come checked by default
     */
    public function __construct(Document $document, $name, $checked = false) {
        parent::__construct($document, $name);
        $this->setAttribute("type", "checkbox");
        if($checked)
            $this->setChecked ();
    }
    
    /**
     * set the checkbox as checked by default.
     */
    public function setChecked() {
        $this->setAttribute("checked", "checked");
    }
    
}

?>
