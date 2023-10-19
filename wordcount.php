<?php
class WordCount{
public function countWord ($sentence) {
    return count (explode (" ", $sentence));
}
}
?>