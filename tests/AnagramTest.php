<?php
    require_once "src/Anagram.php";
    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_makeAnagram_specOne()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = "A";
            $input2 = array("A");
            //Act
            $result = $test_Anagram->makeAnagram($input1, $input2);
            //Assert
            $this->assertEquals(array("A"), $result);
        }
        function test_makeAnagram_specTwo()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = "doom";
            $input2 = array("mood");
            //Act
            $result = $test_Anagram->makeAnagram($input1, $input2);
            //Assert
            $this->assertEquals(array("mood"), $result);
        }
        function test_makeAnagram_specThree()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = "doom";
            $input2 = array("cat");
            //Act
            $result = $test_Anagram->makeAnagram($input1, $input2);
            //Assert
            $this->assertEquals(array(), $result);
        }
        function test_makeAnagram_specFour()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = "doom";
            $input2 = array("cat", "mood", "odom", "dog");
            //Act
            $result = $test_Anagram->makeAnagram($input1, $input2);
            //Assert
            $this->assertEquals(array("mood", "odom"), $result);
        }
    }
?>
