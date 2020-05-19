<?php
header('Content-Type: text/plain');
$text = $_GET['password'];
if ($text != null)
{
    checkComplexityOfPasswordParametr($text);
}
else
{
    echo 'error, there is no parametr for get request';
}
function checkComplexityOfPasswordParametr($text) 
{
    $Symbol = 0;
    $Complexity = 0;
    $smallLettersCount = 0;
    $bigLettersCount = 0; 
    $numberScore = 0;
    $smallLettersString = 'qwertyuiopasdfghjklzxcvbnm';
    $bigLettersString = 'QWERTYUIOPASDFGHJKLZXCVBNM';
    $numbersString = '1234567890';
    $reText = '';
    while ($Symbol < strlen($text)) 
    {
        
        if (ctype_digit($text[$Symbol]))
        {
            $numberScore++;
        }
        if (ctype_lower($text[$Symbol]))
        {
            $smallLettersCount++;
        }
        if (ctype_upper($text[$Symbol]))
        {
            $bigLettersCount++;
        }
        if (!(stripos($reText, $text[$Symbol])))
        {
           $reText = $reText . $text[$Symbol];
        }
        $Symbol++;
    };
    echo $reText;
    for ($i = 0; $i < strlen($reText); $i++) 
	{
        if (substr_count($text, $reText[$i]) > 1) 
		{
		    $Complexity = $Complexity - substr_count($text, $reText[$i]);
		}
	}
    echo $Complexity, "\n";
    echo $numberScore, ' numberScore', "\n";
    echo $smallLettersCount, ' smallLettersCount', "\n";
    echo $bigLettersCount, ' bigLettersCount', "\n";
    $Complexity = $Complexity + 4 * strlen($text);
    echo $Complexity, 'length', "\n";
    $Complexity = $Complexity + ($numberScore * 4);
    echo $Complexity, 'numcmplexity', "\n";
    $Complexity = $Complexity + ((strlen($text) - $smallLettersCount) * 2);
    echo $Complexity, 'smcmpx', "\n";
    $Complexity = $Complexity + ((strlen($text) - $bigLettersCount) * 2);
    echo $Complexity, 'bigcmpx', "\n";
    if ($numberScore = 0)
    {
        $Complexity = $Complexity - strlen($text);
    }
    echo $Complexity, 'scorecheck', "\n";
    if ($numberScore === strlen($text))
    {
        $Complexity = $Complexity - strlren($text);
    }
    echo $Complexity, 'alfcheck', "\n";
    echo $Complexity;
    return $Complexity;
}