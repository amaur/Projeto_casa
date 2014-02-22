<!DOCTYPE html>

<html lang="pt-br" ng-app="CEUACA || Casa do Estudante Universitário Aparício Cora de Almeida">
	<head>
		<meta charset="utf-8"/>
		<title>..:: Contato ::..</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/style.css" rel="stylesheet"/>
		<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
		<link rel="icon" href="image/favicon.ico" type="image/x-icon">
	
	</head>
	
	<body>
		
		<div style="background-color:#87CEEB;" class="navbar  navbar-static-top">
			<div class="container">
				<a href="../home.html" class="navbar-brand">..: CEUACA</a>
				
				
				
			</div>
		</div>
		
		<div class="container">
			
			<div class="jumbotron">
				<center><h1>Bem Vindo....!</h1>
				<p>As a best practice, we highly recommend using the  element whenever possible to ensure matching cross-browser rendering.</p> <br>
				<p>As a best practice, we highly recommend using the  element whenever possible to ensure matching cross-browser rendering.</p> <br>
				<p>As a best practice, we highly recommend using the  element whenever possible to ensure matching cross-browser rendering.</p> <br>

				<a href="../home.html" class="btn btn-default">Inicio</a>
				<a href="#contact" data-toggle="modal" class="btn btn-info">Escrever mensagem</a> </center>
			</div>
		
		</div>
		
		
		
		<div class="modal fade" id="contact" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form class="form-horizontal">
						
					
					
						<div class=" modal-header">
							<h4>Contato CEUACA</h4>
					
						</div>
							<div class="modal-body">
								
									
															
								<div class="form-group">
									<label for="contact-name" class="col-lg-2 control-label">Nome:</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="contact-name" placeholder="Nome completo" required/>
									</div>
								</div>	
								
															
								<div class="form-group">
									<label for="contact-cidade" class="col-lg-2 control-label">Cidade:</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="contact-cidade" placeholder="Sua cidade" required/>
									</div>
								</div>	
								
															
								<div class="form-group">
									<label for="contact-estado" class="col-lg-2 control-label">Estado:</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="contact-estado" placeholder="Seu estado" required/>
									</div>
								</div>	
								
								
								<div class="form-group">
									<label for="contact-email" class="col-lg-2 control-label">Profissão:</label>
									<div class="col-lg-10">
										<input type="work" class="form-control" id="contact-email" placeholder="Estudante" required/>
									</div>	
								
								</div>
								
								
									
								<div class="form-group">
									<label for="contact-email" class="col-lg-2 control-label">Email:</label>
									<div class="col-lg-10">
										<input type="email" class="form-control" id="contact-email" placeholder="you@example.com" required/>
									</div>	
								
								</div>	
								
															
								<div class="form-group">
									<label for="contact-sujet" class="col-lg-2 control-label">Assunto:</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="contact-sujet" placeholder="O assunto" required/>
									</div>
								</div>	
									
									
								<div class="form-group">
									<label for="contact-msg" class="col-lg-2 control-label">Mensagem:</label>
									<div class="col-lg-10">
										<textarea class="form-control" rows="5" placeholder="sua mensagem" required maxLength="200" data-minlength="10"></textarea>
									</div>
								</div>
								
							</div>
						
							<div class="modal-footer">
								<button class="btn btn-primary" type="submit">Enviar</button>
								<button class="btn btn-warning" data-dismiss="modal">Cancelar</button>
							</div>
					</form>
				</div>
			</div>
		</div>
		
		
		
		
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>




</html>
