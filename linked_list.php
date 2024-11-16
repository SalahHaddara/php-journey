<?php

class Node
{
    public $value;
    public $next;

    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
    }
}

class LinkedList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function append($value)
    {
        $newNode = new Node($value);
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    public function printNodesWithTwoVowels()
    {
        $current = $this->head;
        while ($current !== null) {
            if ($this->countVowels($current->value) == 2) {
                echo $current->value . "\n";
            }
            $current = $current->next;
        }
    }

    private function countVowels($str)
    {
        $vowels = "aeiouAEIOU";
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if (str_contains($vowels, $str[$i])) {
                $count++;
            }
        }
        return $count;
    }
}

$linkedList = new LinkedList();
$linkedList->append("apple");
$linkedList->append("car");
$linkedList->append("grape");

echo "Nodes with exactly 2 vowels:\n";
$linkedList->printNodesWithTwoVowels();

