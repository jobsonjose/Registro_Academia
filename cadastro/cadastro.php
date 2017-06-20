<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro Aluno</title>
	<link rel="stylesheet" type="text/css" href="cadastro2.css">
	<script>
				function idadeMenor(){
					var i = document.getElementById("valor");
					//i.value=i.value.toUpperCase();
					if(i.value < 18){
					// alert("menores.php");
					document.getElementById('dimenor').style.display = 'block';
					}else{
					// alert("maior de idade");
					document.getElementById('dimenor').style.display = 'none';
					}	
				}
	</script>
</head>
<body>
	<h1>Novo Cadastro:</h1>
	<div class="formularioMaior">	
		<form action="registrar.php" method="post">
			<div>
				<label class="titulo">Nome:</label>
				<input type="text" name="nome" placeholder=" Nome" class="tamanho">
			</div>
			<div>
			<br>
				<label class="titulo">Estado Civil:</label>
					<select>
						<option>Casado(a)</option>
						<option>Solteiro(a)</option>
						<option>Viúvo(a)</option>
						<option>Divorsiado(a)</option>
					</select>
			</div>
			<div>
				<label class="titulo">CPF:</label>
				<input type="text" name="cpf"  placeholder=" 000.000.000-00" class="tamanho">
			</div>
			<div>
				<label class="titulo">Idade:</label>
				<input type="number" name="idade" id="valor" class="tamanho" onblur="idadeMenor()">

			<div id="dimenor" style="display:none""><br>
				<fieldset>
				<h2>Dados do Responsável</h2>
					<form class="formularioMaior">
						<div>			
								<label class="menores">Nome:</label>
								<input type="text" name="nome_responsavel" placeholder=" Nome" class="tamanho">
							</div>
							<div>
								<label class="menores">Grau de Parentesco:</label>
								<input type="text" name="parentesco" class="tamanho">
							</div>		
							<div>
								<label class="menores">Endereço:</label>
								<input type="text" name="endereco" class="tamanho">
							</div>
							<div>
								<label class="menores">Nº:</label>
								<input type="number" name="numero" class="tamanho">
							</div>
							<div>
								<label class="menores">Complemento:</label>
								<input type="textarea" name="complemento" class="tamanho">		
							</div>
							<div>
								<label class="menores">Bairro:</label>
								<input type="text" name="bairro" class="tamanho">
							</div>
							<div>
								<label class="menores">Cidade:</label>
								<input type="text" name="cidade" class="tamanho">
							</div>
							<div>
								<label class="menores">UF:</label>
								<input type="number" name="uf" class="tamanho">		
							</div>
							<div>
								<label class="menores">CEP:</label>
								<input type="number" name="cep" class="tamanho">
							</div>
							<div>
								<label class="menores">Telefone:</label>
								<input type="tel" name="telefone" class="tamanho">
							</div>
						</form>
					</div>
				</fieldset><br>
			 </div>
			<div> 
				<label class="titulo">Data de Nascimento:</label>
				<input type="date" name="data" class="tamanho">
			</div>
			<div>
				<label class="titulo">E-mail:</label>
				<input type="email" name="email" class="tamanho">
			</div>
			<div>
			<br>
				<label class="titulo">Sexo:</label>
				<select>
					<option value="Mas-01">Masculino</option>
					<option value="Fem-02">Feminino</option>
					<option value="Out-03">Outros</option>
				</select>
			</div>
			<div>
				<label class="titulo">Profissão:</label>
				<input type="text" name="profissao" placeholder=" Profissão" class="tamanho">
			</div>
			<div>
				<label class="titulo">RG:</label>
				<input type="text" name="rg" placeholder=" 0.000.000" class="tamanho">
			</div>
			<div>
				<label class="titulo">Órgão:</label>
				<input type="text" name="orgao" class="tamanho">
			</div>
			<div id ="tamanho">
				<br>
				<input type="submit" name="enviar" id="botao">
			</div>
		</form>
	</div>		
</body>
</html>