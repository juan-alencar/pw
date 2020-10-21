<HTML>
	<HEAD>
		<TITLE>ATIVIDADE 1 - PROGRAMAÇÃO WEB</TITLE>
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
             <form action="" method="get">
                Ano:  <input type="number" name="year" /><br />
                <input type="submit" name="submit" value="Testar" />
            </form> 

        
            <?php
                $ano = $_GET['year'];

                if ( ($ano%4==0 && $ano%100!=0) || $ano%400 == 0)
                    echo "$ano é bissexto";
                else
                    echo "$ano não é bissexto";*/

            ?>

            </font>
            </p>
        </h3>
	</BODY>
</HTML>
