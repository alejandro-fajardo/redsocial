  
							<form  method="post" action="login.php" autocomplete="on"> 
                                <h3 id="login_title">Ingresar</h3> 
								<hr color="black">
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Usuario </label>
                                    <input id="username" name="username" required="required" type="text"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Contraseña </label>
                                    <input id="password" name="password" required="required" type="password"/> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" name="login" value="Ingresar" /> 
								</p>
                                <p class="change_link">
									Aun no eres miembro ?
									<a onClick="changeRegister()" class="to_register">Regístrate</a>
								</p>
                            </form>