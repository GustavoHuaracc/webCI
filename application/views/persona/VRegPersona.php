


	<h1>Cargo Persona</h1>
	<form action="<?php echo base_url();?>CPersona/guardar" method="POST">
		<table>
			<tr>
				<td><label>DNI</label></td>
				<td><input type="text" name="txtDNI" maxlength="8"></td>
			</tr>
			<tr>
				<td><label>Nombre</label></td>
				<td><input type="text" name="txtNombre"></td>
			</tr>
			<tr>
				<td><label>Ape Parterno</label></td>
				<td><input type="text" name="txtApePaterno"></td>
			</tr>
			<tr>
				<td><label>Ape Materno</label></td>
				<td><input type="text" name="txtApeMaterno"></td>
			</tr>
			<tr>
				<td><label>Email</label></td>
				<td><input type="text" name="txtEmail"></td>
			</tr>
			
			<tr>
				<td><label>Fecha Nac.</label></td>
				<td><input type="date" name="txtFechaNac"></td>
			</tr>
			
			<tr>
				<td colspan="2"><label>Usuario</label></td>
			</tr>

			<tr>
				<td><label>Usuario</label></td>
				<td><input type="text" name="txtUsuario"></td>
			</tr>
			
			<tr>
				<td><label>Clave</label></td>
				<td><input type="password" name="txtClave"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Guardar"></td>
			</tr>
		</table>
	</form>
	<a href="<?php echo base_url();?>CLogin">Loguearse</a>

