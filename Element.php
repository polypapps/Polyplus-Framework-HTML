<?php

namespace Common\Framework\Html;


/**
 * Description of Element
 * 
 * A Generic  Element
 *
 * @author rodrigo
 */
class Element Extends \DOMElement{
    
    /**
     * Used to create elements in the head
     * @var Document 
     */
    protected $document;
    
    /**
     * ID of the element
     * @var string
     */
    protected $id;
    
    /**
     *
     * @var array nodes added to this element.
     */
    protected $nodes = array();


    /**
     * Classes atributed to this element.
     * @var array 
     */
    protected $classes = array();
    
    /**
     * Creates a html document.
     * @param Document $document
     * @param string $name the name of the tag to be created, e.g "div".
     */
    public function __construct(Document $document, $name) {
        
        parent::__construct($name);
        $this->document = $document;
        
    }
    
    /**
     * Adds a DOMNode to this Element.
     * Overwrited to suport getting and setting specific nodes.
     * 
     * @param \DOMNode $newnode Node to be added.
     * @return \DOMNode The same node passed as param
     */
    public function appendChild(\DOMNode $newnode) {
        $this->nodes = $newnode;
        parent::appendChild($newnode);
        return $newnode;
    }
    
    /**
     * Check if this element have a node.
     * @param DOMNode $node the node to be searched
     * @return boolean false if the Element doesn't have the node
     * @return DOMNode the node finded
     */
    public function hasNode(\DOMNode $node) {
        foreach ($this->nodes as $target) {
            if ($target === $node)
                return $target;
        }
        return false;
    }
    
    /**
     * Sets the ID atribute of the element.
     * @param string $id
     */
    public function setId($id) {
        
        $this->id = $id;
        $this->setAttribute("id", $this->id);
        
    }
    
    /**
     * 
     * @return string the id of the element.
     */
    public function getId() {
        return $this->id;
    }
        
    /**
     * Add a class atribute to the element.
     * Duplicate classes will not be added.
     * @param string $class Name of the class to be added.
     */
    public function addClass($class) {
        
        if(!in_array($class, $this->classes)) {
            $this->classes[] = $class;
            $this->updateClasses();
        }
        
    }
    
    /**
     * Remove a class from the class atribute, if it exists.
     * @param string $class name of the class to be removed
     */
    public function removeClass($class) {
        
        $classKey = array_search($class, $this->classes);
        if($classKey) {
            unset($this->classes[$classKey]);
            $this->updateClasses();
        }
        
    }
    
    /**
     * Check if this element have a specific class.
     * @param string $class
     * @return boolean True if the class is found, false otherwise
     */
    public function hasClass($class) {
        return in_array($class, $this->classes);
    }
    
    /**
     * Update the class atribute based on the classes added and removed.
     * This function is automatically called after the inclusion or removal of a class.
     */
    private function updateClasses() {
        
        if (count($this->classes) > 0) {
            
            $classes = "";
            foreach ($this->classes as $classe) {
                $classes .= "$classe ";
            }
            $classes = preg_replace("/ $/", "", $classes);
            $this->setAttribute("class", $classes);
        }
        
        
    }
    
}

?>
