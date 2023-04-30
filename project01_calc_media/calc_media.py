valores = int(input("Informe a quantidades de valores a serem inseridos: "))
soma = 0

for num in range(valores):
    valor = int(input("Informe o valor: "))
    soma = soma + valor

media = soma / valores
print(f"A média dos {valores} valores é de: {media} \n")

input("Clica enter para sair \n")
