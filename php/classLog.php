<?php
    class Log{
        public static function upisiLog($nameFile, $textToWrite){//$nameFile gde upisujem//$textToWrite Sta upusujem
            $textToWrite=date("d.m.Y H:i:s",time())."-$textToWrite\r\n";
           /* $f=fopen($nameFile, "a");
            fwrite($f, $textToWrite);
            fclose($f);*/
            $text="";
            if(file_exists($nameFile)) $text=file_get_contents($nameFile);// vraca logove redosledom poslednjeg ulogovanog          
            $textToWrite.=$text;
            file_put_contents($nameFile, $textToWrite);
        }

    }

?>