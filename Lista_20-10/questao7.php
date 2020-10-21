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
        
            <form action = "lista02.php" method="POST">
            
            <fieldset>

				<legend>Insira 10 números:</legend>
				<LABEL>
                    Número° 1:
                    <input type="text" name="n1">
                </LABEL>
                <br>
				<LABEL>
                    Número° 2:
                    <input type="text" name="n2">
                </LABEL>
                <br>
				<LABEL>
                    Número° 3:
                    <input type="text" name="n3">
                </LABEL>
                <br>
				<LABEL>
                    Número° 4:
                    <input type="text" name="n4">
                </LABEL>
                <br>
				<LABEL>
                    Número° 5:
                    <input type="text" name="n5">
                </LABEL>
                <br>
				<LABEL>
                    Número° 6:
                    <input type="text" name="n6">
                </LABEL>
                <br>
				<LABEL>
                    Número° 7:
                    <input type="text" name="n7">
                </LABEL>
                <br>
				<LABEL>
                    Número° 8:
                    <input type="text" name="n8">
                </LABEL>
                <br>
				<LABEL>
                    Número° 9:
                    <input type="text" name="n9">
                </LABEL>
                <br>
				<LABEL>
                    Número° 10:
                    <input type="text" name="n10">
                </LABEL>
                <br>
                <input type="submit" value="Enviar">
                
			</fieldset>
		</form>
		<p>
			<?php

				echo "Números na ordem crescente: <br>";
				$ordem = array($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5'], $_POST['n6'], $_POST['n7'], $_POST['n8'], $_POST['n9'], $_POST['n10']);
				asort($ordem);
				
				foreach($ordem as $numeros):
					
					echo "$numeros <br/>";
				  endforeach;
            

			?>

            </font>
            </p>
        </h3>
	</BODY>
</HTML>

