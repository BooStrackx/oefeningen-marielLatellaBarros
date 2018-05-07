<?php namespace textnode;

class TextNode
{
    private $text;
    private $nextNode;

    private function __construct($text)
    {
        //..de eigenschap nextNode krijgt waarde null
        $this->nextNode = null;
        //..de eigenschap text krijgt een waarde
        $this->text = $text;
    }

    public static function makeNode($text)
    {
        //..roep de constructor aan en geef dit object terug
        return new self($text);
    }

    //de functie addNode voegt een TextNode toe op het einde va een keten van nodes
    public function addNode($text)
    {
        //kijk of nextNode gelijk is aan null
        //indien ja: maak een nieuwe node aan en ken die toe aan nextNode
        if ($this->nextNode == null) {
            $this->nextNode = self::makeNode($text);
        } else {
            //indien nee: roep de methode addNode aan op nextNode
            $this->nextNode->addNode($text);
        }
    }

    public function printAll()
    {
        print ($this->text . "\n");
        if ($this->nextNode != null) {
            $this->nextNode->printAll();
        }
    }

    public function printTextNodeAt($i)
    {
        try {
            //TODO: magic happens here
            array_keys($this->text, $i);
        } catch (\Exception $exception) {
            throw new \Exception("number must be positive or as big as the amount of nodes");
        }
        //TODO
        return 1;

    }
}