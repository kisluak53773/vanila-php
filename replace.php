<?php

declare(strict_types=1);

function replaceGreetings(string $text): string
{
    return str_replace("Greetings", "Hello", $text);
}

$text = "Greetings World! Greetings \nGreetings" . PHP_EOL;

echo replaceGreetings($text) . PHP_EOL;

function replaceHtmlTags(string $text): string
{
    $pattern = '/<[^>]*>/';

    return preg_replace($pattern, '', $text);
}

$html = '<Html>    
<Head>  
<title>  
Example of anchor or hyperlink  
</title>  
</Head>  
<Body>   
<center> Click on <a href="https://www.javatpoint.com/html-favicon"> this link </a> for reading about HTML favicon in JavaTpoint.   
</center>  
</Body>  
</Html> ';

echo replaceHtmlTags($html) . PHP_EOL;