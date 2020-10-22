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

            //QUESTÃO 5
            
            //q5:  Implemente um código em PHP utilizando if, elseif ou else para computar a situação do aluno em
            //     uma disciplina. O aluno poderá passar por média, ir para a final ou ser reprovado direto.

            echo 'Digite aqui sua primeira nota: <br>';
            echo 'Digite aqui sua segunda nota: <br><br>';

            $nota1 = 4.5;
            $nota2 = 10.4;
            
            $media = ($nota1 + $nota2)/2;

            if($media <= 1.0){
                echo 'Você foi reprovado com média: ' . round($media, 2) . '.';
            } elseif($media < 7.0){
                echo 'Você está na prova final, e sua média é ' . round($media, 2) . '.';
            } else {
                echo 'Parabéns, você foi aprovado com média ' . round($media, 2) . '!';
            }
            


          ?>

          </font>
          </p>
      </h3>
  </BODY>
</HTML>