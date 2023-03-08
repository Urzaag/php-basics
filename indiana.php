<?php
    $originalTitle = "Indiana Jones and the last crusade";
    $seenOrNot = true;
    $yearMade = 1989;
    $note = 8.2;

    echo $originalTitle . "<br>";
    echo $seenOrNot . "<br>";
    echo $yearMade . "<br>";
    echo $note . "<br>";
    echo "<br><br>";

    function decodeMessage (string $message):string {

        $keyNumber = strlen($message) / 2;
        $subChain = substr($message, 5, $keyNumber);
        $subChain = str_replace("@#?", " ", $subChain);
        return strrev($subChain);
    }

    $msg1 = "0@sn9sirppa@#?ia'jgtvryko1";
    $msg2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
    $msg3 = "aopi?sgnirts@#?sedhtg+p9l!";

    $arrayMessage = [$msg1, $msg2, $msg3];

    $i = 1;

    foreach ($arrayMessage as $msg) {

        echo "Message " . $i . " : " . decodeMessage($msg) . "</br>";
        $i++;
    };

