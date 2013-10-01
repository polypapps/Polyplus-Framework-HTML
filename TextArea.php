<?php

namespace Common\Framework\Html;


/**
 * Description of TextArea
 *
 * The <textarea> tag defines a multi-line text input control.
 * 
 * A text area can hold an unlimited number of characters, 
 * and the text renders in a fixed-width font (usually Courier).
 * 
 * The size of a text area can be specified through CSS' height and width properties.
 * 
 * @author rodrigo
 */
class TextArea extends FormField{
    
    /**
     *
     * @var DOMText Content of the text area. (represented by the value)
     */
    private $content;
    
    /**
     * creates a text area
     * @param Document $document
     * @param string $name the name of the textarea
     */
    public function __construct(Document $document, $name) {
        parent::__construct($document, $name, "textarea");
    }
    
    /**
     * Sets the content of the textarea
     * @param type $value
     * 
     * @todo In this version, when you set a value, it is appened to the existing one instead of replace it. 
     * Have to discuss if this will be the default behavior.
     */
    public function setValue($value) {
        $this->value = $value;
        $this->content = $this->appendChild(new \DOMText($value));
    }
}

?>
