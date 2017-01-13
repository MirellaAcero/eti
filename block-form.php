<!-- Block Form -->
<div class="block-form clearfix">
  <h3><span>Sé un</span> Senatino</h3>
  <p>Solicita información de carrera o diplomado</p>
  <form id="block-form" action="send-form.php" method="post">
    <div class="form-group">
      <input type="text" class="form-control required" name="firstname" placeholder="Nombres" />
    </div>
    <div class="form-group">
      <input type="text" class="form-control required" name="lastname" placeholder="Apellidos" />
    </div>
    <div class="form-group">
      <select id="genero" name="gener">
        <option value="Femenino">Género</option>
        <option value="Femenino">Femenino</option>
        <option value="Masculino">Masculino</option>
      </select>
    </div>
    <div class="form-group">
      <input type="email" class="form-control required" name="email" placeholder="Correo Electrónico" />
    </div>
    <div class="form-group">
      <input type="tel" class="form-control required" name="phone" placeholder="Teléfono celular" />
    </div>
    <div class="form-group">
      <select id="departamento" name="departament">
        <option value=" ">Departamento</option>
        <option value="Amazonas">Amazonas</option> 
        <option value="Ancash">Ancash</option>
        <option value="Apurimac">Apurimac</option>
        <option value="Arequipa">Arequipa</option>
        <option value="Ayacucho">Ayacucho</option>
        <option value="Cajamarca">Cajamarca</option>
        <option value="Callao">Callao</option>
        <option value="Cusco">Cusco</option>
        <option value="Huancavelica">Huancavelica</option>
        <option value="Huanuco">Huanuco</option>
        <option value="Ica">Ica</option>
        <option value="Junin">Junin</option>
        <option value="La Libertad">La Libertad</option>
        <option value="Lambayeque">Lambayeque</option>
        <option value="Lima">Lima</option>
        <option value="Loreto">Loreto</option>
        <option value="Madre De Dios">Madre De Dios</option>
        <option value="Moquegua">Moquegua</option>
        <option value="Pasco">Pasco</option>
        <option value="Piura">Piura</option>
        <option value="Puno">Puno</option>
        <option value="San Martin">San Martin</option>
        <option value="Tacna">Tacna</option>  
        <option value="Tumbes">Tumbes</option>
        <option value="Ucayali">Ucayali</option>  
      </select>
    </div>
    <div class="form-group">
      <select id="carrera" name="career">
        <option value=" ">Carrera o Diplomado de Interés</option>
        <option value="Desarrollo de Software">Carrera: Desarrollo de Software</option> 
        <option value="Diseño Gráfico Digital">Carrera: Diseño Gráfico Digital</option>
        <option value="Diseño y Desarrollo Web">Carrera: Diseño y Desarrollo Web</option>
        <option value="Seguridad de la Información">Carrera: Seguridad de la Información</option>
        <option value="Redes de Computadoras y Comunicación de Datos">Carrera: Redes de Computadoras y Comunicación de Datos</option>
        <option value="Diseño de estructuras de metálicas y de construcción">Carrera: Diseño de estructuras de metálicas y de construcción</option>
        <option value="Soporte y Mantenimiento de Equipos de Computación">Carrera: Soporte y Mantenimiento de Equipos de Computación</option>
        <option value="Gobierno y Gestión de las tecnologías de la información">Diplomado: Gobierno y Gestión de las tecnologías de la información</option>
        <option value="Marketing Digital">Diplomado: Marketing Digital</option>
        <option value="Ofimática digital">Diplomado: Ofimática digital</option>
        <option value="Excel">Diplomado: Excel</option> 
      </select>
    </div>
    <div class="form-group">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="terms"> He leído y acepto las condiciones en el documento
        </label>
      </div>
    </div>
    <div class="form-group form-actions">
      <input type="submit" class="btn" value="Enviar">
    </div>
  </form>
</div>