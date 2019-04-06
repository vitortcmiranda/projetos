create procedure receber{
	in cpf  int(11)
    in nome VARCHAR(150)
    in n1 DOUBLE
    in n2 DOUBLE
    in n3 DOUBLE
    in n4 DOUBLE
    in n5 DOUBLE
    in n6 DOUBLE
    out media DOUBLE
    out resultado VARCHAR(100)
} BEGIN
	if n1>n2 
    media = (n1 + n3 + n6)
    else
    media = (n2 + n3 + n6)
    end if
    
    if media> 5
     resultado = 'Aprovado'
	else
		resultado ='Reprovado'
    end if
    
    
	insert into dados_do_aluno(NOME_COMPLETO,N1,N2,N3,N4,N5,N6,MEDIA,RESULTADO)
    values(cpf,nome,n1,n2,n3,n4,n5,n6,media,resultado)
    
END