<?php
namespace Sachleen\Twig;

class TwigTruncatePExtension extends \Twig_Extension
{
    public function getName() {
        return 'TruncateP';
    }
    
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('TruncateP', array($this, 'TruncatePFilter')),
        );
    }

    /**
     * The "TruncateP" filter returns only the first $pLen p tags from a html string
     *
     * Usage: {{ post.content|TruncateP(2)|raw }}
     * Usage: {{ post.content|TruncateP(2, 'Continue Reading...')|raw }}
     * 
     */
    public function TruncatePFilter($text, $pLen = 2, $endStr = '')
    {
        $dom = new \DOMDocument();
        $dom->loadHTML((mb_convert_encoding($text, 'HTML-ENTITIES', 'UTF-8')));
        $paragraphs = $dom->getElementsByTagName('p');
        
        $count = min($pLen, $paragraphs->length);
        $retStr = "";
        for ($i = 0; $i < $count; $i++) {
            
            $retStr .= $dom->saveXML($paragraphs->item($i));
        }
        
        return $retStr . $endStr;
    }
}
?>