    <div class="row" id="info_profile">
      
		<div class="col-md-10">
			<hr>
			<div class="pull-right"><a href="edit_profile.php" class="btn btn-info"><i class="icon-pencil"></i> Editar</a></div>
			<p>Información Personal
			
			</p>
				<?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
			?>
			<hr>
			<p>Nombre: <?php echo $row['firstname']." ".$row['lastname']; ?></p>
			<hr>
			<p>Dirección: <?php echo $row['address']; ?></p>
			<hr>
			<p>Género: <?php echo $row['gender']; ?></p>
						<hr>
			<p>Fecha de Nacimiento: <?php echo $row['birthdate']; ?></p>
						<hr>
			<p>Número de Contacto: <?php echo $row['mobile']; ?></p>
						<hr>
			<p>Estado: <?php echo $row['status']; ?></p>
						<hr>
				<p>Trabajo: <?php echo utf8_encode($row['work']); ?></p>
			<hr>
				<p>Religión: <?php echo $row['religion']; ?></p>
		</div>

    </div> 