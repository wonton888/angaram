<?php
    class Anagram
    {
        function makeAnagram($main_word, $check_words)
        {
            $output = array();
            $arr1 = str_split($main_word);
            sort($arr1);

            foreach($check_words as $word) {
                $arr2 = str_split($word);
                sort($arr2);
                if ($arr1 === $arr2) {
                    array_push($output, $word);
                }
            }
            return $output;
         }
     }
?>
