                            <form  action="signup_save.php" method="post" autocomplete="on"> 
                                <h3 class="login_title"> Formulario de Registro </h3> 
                                <hr color="black">
                                <div style="margin:20px">
                                    <p> 
                                        <label class="register-label" for="usernamesignup" class="uname" data-icon="u">Tu usuario</label>
                                        <input class="register-input" id="usernamesignup" name="username" required="required" type="text" placeholder="Usuario" />
                                    </p>
                                    <p> 
                                        <label class="register-label" for="passwordsignup" class="youpasswd" data-icon="p">Tu contraseña </label>
                                        <input class="register-input" id="passwordsignup" name="password" required="required" type="password" placeholder="Contraseña"/>
                                    </p>
                                    <p> 
                                        <label class="register-label" for="passwordsignup" class="youpasswd" >Nombre </label>
                                        <input class="register-input" id="passwordsignup" name="firstname" required="required" type="text" placeholder="First Name"/>
                                    </p>
                                    <p> 
                                        <label class="register-label" for="passwordsignup" class="youpasswd" >Apellido </label>
                                        <input class="register-input" id="passwordsignup" name="lastname" required="required" type="text" placeholder="Last Name"/>
                                    </p>
                                    <p> 
                                        <label class="register-label" for="passwordsignup" class="youpasswd" >Tu género </label>
                                        <select class="register-input" id="passwordsignup"  name="gender">
                                            <option></option>
                                            <option>Hombre</option>
                                            <option>Mujer</option>
                                        </select>
                                    </p>
                                    <p class="signin button">
                                        <div style="overflow:hidden;">
                                            <div style="float: left;width:40%;margin-left:10%" id="message_register">
                                                Al hacer click en "Registrarte", aceptas nuestras Condiciones, la politica de datos y politica de cookies.
                                            </div>
                                            <div style="float: left;width:30%;">
                                                <input type="submit" value="Registrar" id="button_register"/>
                                            </div>
                                        </div>
                                         
                                    </p>
                                    <br>
                                    <p class="change_link" style="margin-left:20%">  
                                        Ya estás registrado ?
                                        <a onClick="changeLogin()" class="to_register" id="register-back"> Ingresar </a>
                                    </p>
                                </div>
                            </form>