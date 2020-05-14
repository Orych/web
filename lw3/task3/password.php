<?php
header('Content-Type: text/plain');
$text = $_GET['password'];
function CheckComplexityOfPasswordParametr($text) 
{
    $Symbol = 0;
    $Complexity = 0;
    $SmalllettersCount = 0;
    $BigLettersCount = 0; 
    $NumberScore = 0;
    $SmallLettersString = 'qwertyuiopasdfghjklzxcvbnm';
    $BigLettersString = 'QWERTYUIOPASDFGHJKLZXCVBNM';
    $NumbersString = '1234567890';
    $retext = '';
    while ($Symbol < strlen($text)) 
    {
        
        if (ctype_digit($text[$Symbol]) === true)
        {
            $NumberScore++;
        };
        if (ctype_lower($text[$Symbol]) === true)
        {
            $SmalllettersCount++;
        }
        if (ctype_upper($text[$Symbol]) === true)
        {
            $BigLettersCount++;
        }
       if (stripos($retext, $text[$Symbol]) === false)
       {
           $retext = $retext.$text[$Symbol];
       }
        $Symbol++;
    };
    echo $retext;
    for ($i = 0; $i < strlen($retext); $i++) 
	{
		if (substr_count($text, $retext[$i]) > 1) 
		{
			$Complexity = $Complexity - substr_count($text, $retext[$i]);
		}
	}
    echo $Complexity, "\n";
    echo $NumberScore, ' NumberScore', "\n";
    echo $SmalllettersCount, ' SmalllettersCount', "\n";
    echo $BigLettersCount, ' BigLettersCount', "\n";
    $Complexity = $Complexity + 4 * strlen($text);
    echo $Complexity, 'length', "\n";
    $Complexity = $Complexity + ($NumberScore * 4);
    echo $Complexity, 'numcmplexity', "\n";
    $Complexity = $Complexity + ((strlen($text)-$SmalllettersCount)*2);
    echo $Complexity, 'smcmpx', "\n";
    $Complexity = $Complexity + ((strlen($text)-$BigLettersCount)*2);
    echo $Complexity, 'bigcmpx', "\n";
    if ($NumberScore = 0)
    {
        $Complexity = $Complexity - strlen($text);
    }
    echo $Complexity, 'scorecheck', "\n";
    if ($NumberScore === strlen($text))
    {
        $Complexity = $Complexity - strlren($text);
    }
    echo $Complexity, 'alfcheck', "\n";
    echo $Complexity;
    return $Complexity;
}
if ($text != null)
{
    CheckComplexityOfPasswordParametr($text);
}
else
{
    echo 'error, there is no parametr for get request';
}
?>