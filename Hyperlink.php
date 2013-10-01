<?php

namespace Common\Framework\Html;

/**
 * Description of A
 *
 * The <a> tag defines a hyperlink, which is used to link from one page to another.
 * 
 * @author rodrigo
 */
class Hyperlink Extends VisibleElement{
    
    /**
     * Opens the linked document in a new window or tab
     */
    const NEW_WINDOW = "_blank";
    
    /**
     * Opens the linked document in the same frame as it was clicked (this is default)
     */
    const SELF = "_self";
    
    /**
     * Opens the linked document in the parent frame
     */
    const PARENT = "_parent";
    
    /**
     * Opens the linked document in the full body of the window
     */
    const TOP = "_top";
    
    /**
     * Adds an A (link) Element to the Document
     * @param Document $document
     * @param type $href the adress to where the link will point
     * @param type $label An Optional text of the link
     */
    public function __construct(Document $document, $href, $label = "") {
        parent::__construct($document, "a");
        
        $this->setAttribute("href", $href);
        if ($label !== "")
            $this->setText($label);
        else
            $this->setText($href);
    }
    
    /**
     * Sets the text that will be shown when users put the mouse over the link
     * @param string $title
     */
    public function setTitle($title) {
        $this->setAttribute("title", $title);
    }


    /**
     * Adds an text (label) to the link
     * @param string $text Text to represent the link
     */
    public function setText($text) {
        $this->nodeValue = $text;
    }
    
    /**
     * Set the target atribute of the a element
     * @param String $target the target value
     */
    public function setTarget($target = Hyperlink::SELF) {
        $this->setAttribute("target", $target);
    }


    /**
     * Sets an onClick javascript function to the a element
     * @param string $function Javascript function(s) to be called when the link is clicked
     */
    public function OnClick($function) {
        $this->setAttribute("onClick", $function);
    }

    
}

?>
