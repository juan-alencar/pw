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

    
            //      QUESTÃO 1 -----------------------------------------------------------------------------------------------------------------------
            
            /*//DESTRAVA CÓDIGO
            
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
            */
            
            //---------------------------------------------------------------------------------------------------------------------------------------
            








            //      QUESTÃO 2 -----------------------------------------------------------------------------------------------------------------------

            /* //DESTRAVA CÓDIGO

            //q2: Supondo que x = 4, y = 6 e z = 1, qual o valor lógico das expressões abaixo:   
            //A) if (x == 5) = 0(Fakse)
            //B if (x == 5 || z < 0) = 0(False)
            //C if (y - x + z - 1) = 2 (1{True})
            //D if (x == 4 || y >= z && ! (z)) = 1(True)

            */
            //---------------------------------------------------------------------------------------------------------------------------------------









            //      QUESTÃO 3  ----------------------------------------------------------------------------------------------------------------------
            //q3: Qual o valor será impresso na tela após o processamento do código abaixo:
            
            /* //DESTRAVA CÓDIGO

            $a = 6;
            $b = 2;
            if($a>$b){
                $temp = $a;
                $a = $b;
                $b = $temp;     
            }
            echo $a + $temp;
            
            
            //RESPOSTA = 8, pois no If, 
            //primeiramente o valor de A(6) se tornará o valor de Temp
            //segundamente o valor de B(2) se tornará o valor de A
            //e por ultimo o valor de temp(6) se tornará o valor de B
            
            //***fazendo a operação: A(2) + Temp(6) == 8***
            
            */
            //---------------------------------------------------------------------------------------------------------------------------------------






            


            //      QUESTÃO 4  ----------------------------------------------------------------------------------------------------------------------
            //q4:Implemente um código utilizando switch de forma que implemente um sistema de
            //gerenciamento de caixa eletrônico com as operações de saque, depósito, transferência*/
            
            /* //DESTRAVA CÓDIGO
            
            //algum processo de login/autenticação de dados para conseguir as contas bancarias
            $conta_user = 100.0;  //conta bancaria do user
            $conta_receptor = 200.0; //conta bancaria do receptor (demonstração da transferencia)
            
            
            //menu do caixa eletronico    
            echo 'CAIXA ELETRÔNICO <br> ';
            echo 'Digite 1 para realizar um SAQUE <br>';
            echo 'Digite 2 para realizar um DEPÓSITO <br>';
            echo 'Digite 3 para realizar uma TRANSFERÊNCIA <br>';
            
            $usuario = 3;  //variavel de comunicação user/server
            
            switch ($usuario) { //switch usado para conferir as situações
                case 1: 
                    
                    echo '<br><br>';
                    echo 'Você deseja fazer um SAQUE!<br><br>'; //confirmação de opção
                    
                    echo 'O valor atual da sua conta é: R$' . $conta_user . '!<br>';  //demonstrando os dados do usuario atraves do BD
                    
                    echo 'Digite o valor a ser Sacado: R$______'; //lugar do input
                    echo '<br><br>';
                    
                    $valor = 50.0; //valor dado pelo usuário, para realizar as ações
                    
                    echo 'DIGITE "S" PARA CONFIRMAR O DEPÓSITO DE VALOR R$' . $valor . '.<br><br>'; //confirmação de deposito
                    $opcao = 's'; //caso o input seja 'S' ou 's' a ação é validada!
                    
                    if ($opcao == 's' || $opcao == 'S') {  //if utilizado para validar ação
                        
                        $saldo = $conta_user - $valor; //subtraindo na conta do usuário, o valor que ele sacou
                        
                        echo 'O valor R$' . $valor . ', foi sacado com sucesso!<br>';
                        echo 'O saldo da sua conta agora é: R$' .  round($saldo, 2);  //mostrando o saldo pós ação
                        
                    } else { //else usado para cancelar ação
                        echo 'OPERAÇÃO CANCELADA';
                    }
                break;
                
                case 2: //caso seja um deposito
                    
                    echo '<br><br>';
                    echo 'Você deseja fazer um DEPÓSITO!<br><br>';
                    
                    echo 'O valor atual da sua conta é: R$' . $conta_user . '!<br>';
                    echo 'Digite o valor a ser Depositado: R$______';
                    echo '<br><br>';
                    
                    $valor = 50.0;
                    
                    echo 'DIGITE "S" PARA CONFIRMAR O DEPÓSITO DE VALOR R$' . $valor . '.<br><br>';
                    
                    $opcao = 's';
                    
                    if ($opcao == 's' || $opcao == 'S') {
                        $saldo = $conta_user + $valor;
                        
                        echo 'O valor R$' . $valor . ', foi depositado com sucesso!<br>';
                        echo 'O saldo da sua conta agora é: R$' .  round($saldo, 2);
                        
                    } else {
                        echo 'OPERAÇÃO CANCELADA';
                    }
                break;
                
                case 3: //caso seja uma transferencia
                    
                    echo '<br><br>';
                    echo 'Você deseja fazer uma TRANSFERÊNCIA!<br><br>';  //apresentação
                    
                    echo 'O valor atual da sua conta é: R$' . $conta_user . '!<br>'; 
                    echo 'Digite o valor a ser Transferido: R$______';
                    echo '<br> <br>';
                    
                    $valor = 50.0;  //valor do usuario
                    
                    echo 'DIGITE "S" PARA CONFIRMAR A TRANSFERÊNCIA DE VALOR R$' . $valor . '.<br><br>'; //confirmação
                    
                    $opcao = 's';
                    
                    if ($opcao == 's' || $opcao == 'S') {  //validação
                        
                        $saldo = $conta_user - $valor;  //saldo do usuario
                        $saldo_receptor = $conta_receptor  + $valor;  //saldo do receptor (demonstração)
                        
                        echo 'O valor: R$' . $valor . ', foi transferido com sucesso!<br>'; //mostrando o valor trasnferido
                        echo 'O saldo da sua conta agora é: R$' .  round($saldo, 2) . '<br><br>'; 
                        
                        echo 'Conta receptora (saldo antigo: R$' . $conta_receptor . ')<br>'; //mostrando a conta do receptor (demonstração)
                        echo 'Conta receptora (saldo atual: R$' . $saldo_receptor . ')';
                    } 
                    else {
                        echo 'OPERAÇÃO CANCELADA';
                    }
                break;
    
                default :
                echo 'Opção inválida, por favor verifique o que foi digitado';
                break;
            }
            */
            //---------------------------------------------------------------------------------------------------------------------------------------
          
          






          
            //        QUESTÃO 5----------------------------------------------------------------------------------------------------------------------
          
            /* //DESTRAVA CÓDIGO
          
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
            
            */
            //---------------------------------------------------------------------------------------------------------------------------------------


            ?>

            </font>
            </p>
        </h3>
	</BODY>
</HTML>