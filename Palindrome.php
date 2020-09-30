<?php

class Palindrome {

    /**
     * Method to check whether given string/number is Palindrome or not
     * @param type $str
     * @return string
     */
    public function isPalindrome($str) {
        if (!$str) {
            return '';
        }
        $strlength      = strlen($str);
        $reversedString = $this->reverseString($str);
        
        return ($str == $reversedString) ? TRUE : FALSE;
    }

    /**
     * Method to reverse the given string or number
     * @param type $str
     * @return string
     */
    public function reverseString($str) {
        if (!$str) {
            return '';
        }
        $length        = strlen($str);
        $reversedString = '';
        // Loop to reverse the given string/number
        for ($i = $length - 1; $i >= 0; $i--) {
            $reversedString .= $str{$i};
        }
        return $reversedString;
    }

}

class Main {

    public function __construct(Palindrome $palindrome) {
        $this->palindrome = $palindrome;
    }

    public function getData($str) {
        return $this->palindrome->reverseString($str);
    }

    public function isPalindrome($str) {
        return $this->palindrome->isPalindrome($str);
    }

}

$palindromeObj = new Palindrome();
$obj           = new Main($palindromeObj);
$res           = $obj->isPalindrome("LIRIL");
echo ($res) ? "Palindrome\n" : "Not a Palindrome\n";
echo $obj->getData("NITIN");
?>