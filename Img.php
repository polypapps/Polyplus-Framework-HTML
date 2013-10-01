<?php

namespace Common\Framework\Html;


/**
 * Description of Img
 *
 * The <img> tag defines an image in an HTML page.
 * 
 * The <img> tag has two required attributes: src and alt.
 * YOu can set the alt after instanciate the Img.
 * 
 * Note: Images are not technically inserted into an HTML page, images are linked to HTML pages. 
 * The <img> tag creates a holding space for the referenced image.
 * 
 * @author rodrigo
 */
class Img extends VisibleElement{
    
    /**
     * creates an image element.
     * @param Document $document
     * @param string $src the source path to the file.
     */
    public function __construct(Document $document, $src) {
        parent::__construct($document, "img");
        
        $this->setAttribute("src", $src);
        
    }
    
    /**
     * Adds an alternative text to be show if the image can't be loaded
     * @param String $alt Alternative Text
     */
    public function setAlt($alt) {
        $this->setAttribute("alt", $alt);
    }
    
    /**
     * Set the Height of the Image
     * @param string $height new Image Height, it can be in whatever measure unit you want (px, em, pt, %, etc)
     */
    public function setheight($height) {
        $this->setAttribute("height", $height);
    }
    
    /**
     * Set the Height of the Image
     * @param string $width new Image Width, it can be in whatever measure unit you want (px, em, pt, %, etc)
     */
    public function setWidth($width) {
        $this->setAttribute("width", $width);
    }
    
    /**
     * Set the Size of the Image
     * @param string $height new Image Height, it can be in whatever measure unit you want (px, em, pt, %, etc)
     * @param string $width new Image Width, it can be in whatever measure unit you want (px, em, pt, %, etc)
     */
    public function setSize($height, $width) {
        $this->setheight($height);
        $this->setWidth($width);
    }
    
}

?>
