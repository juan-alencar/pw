<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE>LISTA 02 - PROGRAMAÇÃO WEB</TITLE>
	</HEAD>
	<BODY bgcolor="#2d2d2d">
        <font face="consolas">
        
        <h1> 
            <p align ="center">
                <font color="#22d05f" size="15" face="consolas">ATIVIDADE PROGRAMAÇÃO WEB</font>
            </p>
        </h1>
        
        <h2>
            <p align="center">
                <font color="#22d05f">
                    JUAN DIEGO MEDEIROS ALENCAR - CC - P1/NOITE
                </font>
            </p>
        </h2>

        <h3>
            <p align="justify">
                <font color= "#22d05f">
        
            <?php

                echo "São números primos:" . '<br>';

                for($i=1; $i<=1000; $i++)
                {
                    $numeros = 0;
                    for($j=$i; $j>=1; $j--)
                    {
                        if(($i % $j) == 0)
                        {
                            $numeros++;
                        }
                    }
                    if($numeros == 2)
                    {
                        echo $i . '<br>';
                    }  
                }
            ?>

            </font>
            </p>
        </h3>
	</BODY>
</HTML>

