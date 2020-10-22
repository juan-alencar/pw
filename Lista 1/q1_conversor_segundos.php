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

        <?php

    
            //QUESTÃO 1 
                        
            //crie um programa que peça ao usuario uma quantidade de segundos, e converta em dias horas minutos e segundos
            //receber o total de segundos
            $total_segundos = 9040; //variável com o valor do usuário
            
            if ($total_segundos >= 0) {  //if para validação de informações
                
                //calculadora usando restos para fazer as operações
                $dias = $total_segundos / 86400;
                $horas  = ($total_segundos % 86400)/3600;
                $minutos  = ($total_segundos % 3600)/60;
                $segundos  =  $total_segundos % 60;
                
                //prints mostrando os valores na tela
                echo 'Dias: ' . round($dias); //round sendo usado para truncar as variáveis, para mostrar apenas o valor inteiro.
                echo '<br>';
                echo 'Horas: ' . round($horas);
                echo '<br>';
                echo 'Minutos: ' . round($minutos);
                echo '<br>';
                echo 'Segundos: ' . round($segundos);
                
            } else { // else usado para mostrar a mensagem de erro
                echo 'Números negativos não são válidos!';
            }
        ?>

            </font>
            </p>
        </h3>
	</BODY>
</HTML>