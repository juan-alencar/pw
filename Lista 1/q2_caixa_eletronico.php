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
        
            //QUESTÃO 4  
            //q4:Implemente um código utilizando switch de forma que implemente um sistema de
            //gerenciamento de caixa eletrônico com as operações de saque, depósito, transferência*/
            
            
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
            
            ?>

            </font>
            </p>
        </h3>
	</BODY>
</HTML>