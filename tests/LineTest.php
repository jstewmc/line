<?php 
/**
 * The file for the line tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Line;

use Jstewmc\TestCase\TestCase;


/**
 * Tests for the line object
 */
class LineTest extends TestCase
{
    /* !__construct() */
    
    /**
     * __construct() should set the line's text
     */
    public function testConstruct()
    {
        $text = 'foo';
        
        $line = new Line($text);
        
        $this->assertEquals($text, $this->getProperty('text', $line));
        
        return;
    }
    
    /* !__toString() */
    
    /**
     * __toString() should return string
     */
    public function testToString()
    {
        $text = 'foo';
        
        $line = new Line($text);
        
        $this->setProperty('text', $line, $text);
        
        $this->assertEquals($text, (string) $line);
        
        return;
    }
    
    
    /* !getText() */ 
    
    /**
     * getText() should return string
     */
    public function testGetText()
    {
        $text = 'foo';
        
        $line = new Line($text);
        
        $this->setProperty('text', $line, $text);
        
        $this->assertEquals($text, $line->getText());
        
        return;
    }
}
