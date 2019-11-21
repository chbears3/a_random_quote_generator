<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = [
    [
        "quote"    => "Quote in arr 1",
        "source"   => "Charles1",
        "citation" => "citation",
        "year"     => "year",
    ],
    [
        "quote"    => "Quote in arr 2",
        "source"   => "Charles2",
        "citation" => "citation",
        "year"     => "year",
    ],
    [
        "quote"    => "Quote in arr 3",
        "source"   => "Charles3",
        "citation" => "citation",
        "year"     => "year",
    ],
];

// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($quotes){
    $rand_int = rand(0, 2);
    return $quotes[$rand_int];
}


// Create the printQuote funtion and name it printQuote
function printQuote($quotes) {
    $quote     = getRandomQuote($quotes);
    $quote_str = $quote["quote"];
    $source    = $quote["source"];
    $citation  = $quote["citation"];
    $year      = $quote["year"];

$quote_div = <<<END
<div id="quote-box">
    <p class="quote">$quote_str</p>
    <p class="source">$source<span class="citation">$citation</span><span class="year">$year</span></p>
</div>
END;

    return $quote_div;
}
?>