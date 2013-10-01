<?php

namespace Common\Framework\Html;


/**
 * Description of FormInput
 * 
 * The <input> tag specifies an input field where the user can enter data.
 * 
 * <input> elements are used within a <form> element to declare input controls that allow users to input data.
 *
 * @author rodrigo
 */
class FormInput extends FormField{
    
    /**
     * 
     * @var int, string. The size of the input in whatever measure unit.
     */
    protected $size;
    
    /**
     *
     * @var string the type of the input field. 
     */
    protected $type;


    /**
     * Creates an input element
     * @param Document $document
     * @param string $name the name of the input
     */
    public function __construct(Document $document, $name) {
        parent::__construct($document, $name, "input");
    }
    
    public function setSize($size) {
        $this->size = $size;
        $this->setAttribute("size", $size);
    }

    public function getSize() {
        return $this->size;
    }
    
    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
        $this->setAttribute("type", $type);
    }


    
}

?>
