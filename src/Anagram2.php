<?php
    class Anagram
    {
        function makeAnagram($main_word, $check_words)
        {
            return(count_chars($main_word, 1)==count_chars($check_words, 1));
        }
    }
?>
