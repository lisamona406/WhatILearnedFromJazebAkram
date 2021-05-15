<?php


    /*Regular Expressions is a technique for parsing and extracting data from text. It is used in Javascript, Python, PHP, Perl, Ruby etc, almost all the programming language. */

    // preg_match(pattern, string , arrays.)


    $string = "PHP is the web php scripting language of 522 choice. 825";

    echo $string."<br>";
    // 'i' is represented for case insensitive.
    //$exp = preg_match_all("/PHP/i", $string);

    //$exp = preg_match_all("/web/i", $string);

    //$exp = preg_match_all("/php/i", $string, $array);


    // for finding multiple items like 'php' and 'web'
    //$exp = preg_match_all("/php|web/i", $string, $array);

    // for finding multiple items like 'php', 'web' and 'the'.
    //$exp = preg_match_all("/php|web|the/i", $string, $array);

    // for finding characters like w, o and t.
    //$exp = preg_match_all("/w|o|t/i", $string, $array);



    // for finding numbers 522 in the string.
    //$exp = preg_match_all("/522/i", $string, $array);


    // for finding numbers 522 and 825
        //$exp = preg_match_all("/522|825/i", $string, $array);

    //$exp = preg_match_all("/522|888/i", $string, $array);


    //  to search for multiple items without using '|', use '[w]'.

        // to search for 'w' in a '[]'.
        //$exp = preg_match_all("/[w]/i", $string, $array);

        // to search for 'w' and 'o' separately in '[]'.
        //$exp = preg_match_all("/[wo]/i", $string, $array);

        // to search for 'w', 'o' and 't' separtely in '[]'
        //$exp = preg_match_all("/[wot]/i", $string, $array);


        // to search for other characters except for 'w', 'o' and 't'.
        //$exp = preg_match_all("/[^wot]/i", $string, $array);

        // to search characters range from a to d.
        //$exp = preg_match_all("/[a-d]/i", $string, $array);

        // to search for characters range from a to j.
        //$exp = preg_match_all("/[a-j]/i", $string, $array);

        // to search for characters range from A to J only.
        //$exp = preg_match_all("/[A-J]/", $string, $array);


        // to search for characters range from A-J and a-j only.
        //$exp = preg_match_all("/[A-Ja-j]/", $string, $array);

        // to find numeric ranges from 0 to 0
        //$exp = preg_match_all("/[0-9]/i", $string, $array);

        // to find numeric ranges from 0 to 5.
        //$exp = preg_match_all("/[0-5]/i", $string, $array);

        // to show numeric ranges excluding numeric ranges from 0 to 5.
        //$exp = preg_match_all("/[^0-5]/i", $string, $array);

        // to show every other ranges excluding range from 'a' to 'j' regardless of its lowercase or uppercase.
        //$exp = preg_match_all("/[^a-j]/i", $string, $array);

        // to show every other ranges  ranges from '2-5' and 'a-j' regardless of its lowercase or uppercase.
        $exp = preg_match_all("/[a-j2-5]/i", $string, $array);


    if($exp) {
        echo "A match was found";
    } else {
        echo "A match was not found";
    }

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo $array[0] [0]. "<br>";
    // echo $array[0] [1]. "<br>";
    // echo $array[0] [2]. "<br>";
    // echo $array[0] [3]. "<br>";
?>


<?php 

    /*
       1. /file[123#?6]/

        file1 file2 file3 file# file? file6
        file1 file2 file3 file#file?file6
    */
    

    /*
        2. /201[0-9]/
            
            2015 2015 2019 2018
           2015 2016 2019 2018
    */


    /*
        3.  /w[abcdefghij]b/ or /w[a-j]b
        
            web
        PHP is the web php scripting language of 522 choice. 825
    
    */

    /*
        4. [bc]at
            bat cat
            bat mat cat sat rat

            [^bc]at
            mat sat rat
    */

    /*  5. Meta Characters 

            \w, it will select alphabatic characters, numeric characters, underscore except hypen and dot and question mark.

            /\w/
                PHP is the web php scripting language o_f 522 choi-ce. 825?
                bat mat cat sat rat

            
            \W, it will select spaces, hypens, dots and question mark.

            /\W/
            PHP is the web php scripting language o_f 522 choi-ce. 825?
            bat mat cat sat rat


            /\d/, it will select the numeric values.

            522 825
            PHP is the web php scripting language o_f 522 choi-ce. 825?
            bat mat cat sat rat


            /\D/, it will select everything except the numeric values.
            PHP is the web php scripting language o_f 522 choi-ce. 825?
            bat mat cat sat rat


            /\s/, it will select white spaces.

            /\b, it is a boundary selector, it will select a separate character(which do not a character before it or after it, it will have spaces around them).

            /\bweb\b
                web
              PHP is the web php scripting language o_f 522 choi-ce. 825?
              bat mat cat sat rat  
              
              
            /\bi\b
                i
             PHP is the i web php scripting language o_f 522 choi-ce. 825?
            bat mat cat sat rat


            /\b23\
            23
            1234 123 23 2356

            /\.\, it will select single characters

            / \ph.\/
                it will select 'php'

                php PHP
                 PHP is the web php scripting language o_f 522 choi-ce. 825?
            bat mat cat sat rat



            / \.eb\/
            web

            / \..age/
                uage

            / \sc../
            scri
            / \sc...\/
                scrip
             PHP is the web php scripting language o_f 522 choi-ce. 825?
            bat mat cat sat rat
     */


     /*
        . ? ( ) [ ] + $ ^ | /, they are special characters.

        / \./, it will find out the dots and nothing else.

        / \?/, it will find out the questions marks

        / \+/, it will find out +.

        / \$/, it will find out $

        / \  * /, it will find out *


        / \ ^/, it will find out ^.

     */


     /*   URL

        / https: \/\/www\.yahoo\.net\/folder\/file\.php /

        https://www.yahoo.com/folder/file.php
     
     


        file.txt file2txt file#txt fitle txt
     
     */


     /*

        Regular Expressions: Quantifiers
     
        * 0 or more
        + 1 or more
        ? 0 or One
        {3} Exact Number
        {3,5} Range of Numbers{minimum,maximum}
        {3,} Minimum Number to Infinite.





        1. PHP is the web scripting phhhhp language of choice.

        / ph* /i
        / ph+ /i


        1
        12
        123
        1234
        / \d* /, it is selected all together


        /\d*word/
        / \d+word/
        word 
        1word
        22word
        333word
        4444word



        /file\d*.php/
        /file\d+.php/
        file.php
        file1.php
        file23.php
        file456.php


        /oh+/
        o
        oh
        ohh
        ohhhh
        ohhhhhh


        /\d+word/i
        word
        1word
        22word
        333word
        4444word


        /./, it will select single characters
        /\d+.\d+.\d+.
        212-456-7896
        212*456*7896

        /\d+[-]\d+[-]\d+
        212-456-7896



        /scr?ipting/, it will go with either r or i
        PHP is the scripting phhhp language scipting of choice.


        /colou?r/, it will go with either u or r
        color
        colour


        /()/, it is used for grouping
        /Jan(uary)?
        Jan
        January


        /Aug(ust)?\s22(nd)?
        August 22nd
        Aug 22
        Aug 22nd
        August 22
     
     */


     /*
        oh{2,}
        oh{2,5}
        o
        oh
        ohhh
        ohhhhh


        /d{6,}/
        12000
        250000
        45820
        152222

        /ph{2,}/
        /ph{2,2}/
        PHP is the web scripting phhhp language scipting of choice
     
     */


     /* Regular Expressions: Greedy and Lazy Match

     *n Greedy Match
     +n Greedy Match
     *?n Lazy Match
     +?n Lazy Match


     /s[a-z]*i/, it is greedy match
     /s[a-z]*?i, it is lazy match

     PHP is the web scripting phhhp language scipting of choice


    /<.*>/, it is greedy match.
    /<.*?>, it is lazy match.
     <h1>PHP is the web scripting phhhp language scipting of choice</h1>


     /".+"/, it is greedy match.
     /".+?"/, it is lazy match.
     <h1>PHP is the "web" scripting phhhhp "language" scipting of choice</h1>



     /\w/, it will select words.

     /\w+/, it will select all words.

     /^\w+/, it will select first word.
     PHP is the "web" scripting phhhp "languages" scripting of choice.
     

     /\w+$/, it will select last word.
     PHP is the "web" scripting phhhp "languages" scripting of choice.


     /(im)?possible/
     possible
     impossible

    /play([a-z]+)?/
     play
     player
     played
     playing
     playon
     play123
     


    /file\w*\.(txt|xlsx|docx|pptx)/
     file.txt
     file1.lsx
     file20.docx
     fileabc1.pptx
     */
?>