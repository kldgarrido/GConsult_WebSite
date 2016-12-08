<!-- <FormContacto> -->
<br/>
<div class="row-fluid">
    <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3>Contactenos</h3></div>
                <div class="panel-body">
                    <p>
                    <h5><strong>¿Necesita más información?</strong> Escríbanos por esta vía, nos pondremos en contacto con usted y le enviaremos todos los datos que usted necesita.</h5>
                    
                    <h6 align="right"><br/><strong><em>¡Puede realizar un diagnóstico sin costo!</em></strong></h6>
                    </p>
                    <form class="form-group" method="post" action="landingpageFinal.php">
                        <div class="form-group">
                            <label for="exampleInputName2">Nombres</label>
                            <input type="text" class="form-control" name="name" id="exampleInputName2" placeholder=""  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputlastName2">Apellidos</label>
                            <input type="text" class="form-control" name="lastname" id="exampleInputName2" placeholder=""  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder=""  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputTel">Telefono</label>
                            <input type="tel" class="form-control" name="phone" id="exampleInputTel" placeholder="Celular o Fijo"  required>
                        </div>
                        <div class="form-group">
                            <label for="input_calendar_contact">Horario de preferencia para ser contactado:</label><br/>
            				<label class="radio-inline"><input type="radio" name="calendar_contact" value="Mañana" required>Mañana</label>
            				<label class="radio-inline"><input type="radio" name="calendar_contact" value="Mediodia" required>Mediodia</label>
            				<label class="radio-inline"><input type="radio" name="calendar_contact" value="Noche" required>Noche</label>
            				<label class="radio-inline"><input type="radio" name="calendar_contact" value="Cualquier_Hora" required>Cualquier Hora</label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputComment">Comentarios<h6 align="right"><em>Opcionalmente puede dejarnos un comentario</em></h6></label>
                            <textarea class="form-control" rows="3" class="form-control" name="comment" id="exampleInputComment" placeholder="Campo opcional" maxlength="250"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
                </div>
            </div>
     </div>
</div>
<!-- </FormContacto> -->