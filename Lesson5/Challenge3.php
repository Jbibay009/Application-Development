<?php
//Find the longest word 

function findLongestWord(string $sentence) 
: string{
        $words = explode(" " , $sentence ); //split the sentence into array
        $longestword = "";

        foreach($words as $word)
            {
                if(strlen($word) > strlen($longestword))
                {
                    $longestword = $word;
                }
            }
        
        return $longestword;
        }

$sentence = 'The quick brown fox jumped over the lazy dog';
$longestword = findLongestWord($sentence);

echo "The Longest word from the sentence is: $longestword";

?>