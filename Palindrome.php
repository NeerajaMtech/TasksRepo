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
        $strlength  = strlen($str);
        $returnData = '';
        for ($i = $strlength - 1; $i >= 0; $i--) {
            $returnData .= $str{$i};
        }
        return ($str == $returnData) ? TRUE : FALSE;
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
        $length = strlen($str);
        $returnData = '';
        // Loop to reverse the given string/number
        for ($i = $length - 1; $i >= 0; $i--) {
            $returnData .= $str{$i};
        }
        return "Reversed String/Integer is :: " . $returnData;
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