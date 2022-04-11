<?php
if (isset($_POST['submit'])) {
  require "config.php";
  require "common.php";

  try {
    $connection = new PDO($dsn, $username, $password, $options);

    $new_user = array(
      'seguro'=>$_POST['seguro'],
'nombres'=>$_POST['nombres'],
'apellidop'=>$_POST['apellidop'],
'apellidom'=>$_POST['apellidom'],
'nacimiento'=>$_POST['nacimiento'],
'membresia'=>$_POST['membresia'],
'titular'=>$_POST['titular'],
'direccion'=>$_POST['direccion'],
'codigo'=>$_POST['codigo'],
'correo'=>$_POST['correo'],
'genero'=>$_POST['genero']
    );

    $sql = sprintf("INSERT INTO %s (%s) values (%s)","registro", implode(", ", array_keys($new_user)),":" . implode(", :", array_keys($new_user)));

    $statement = $connection->prepare($sql);
    $statement->execute($new_user);
    
    
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}
?>

<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Dental Care Services, Preventive services include:, About Our Dental Clinicand why choose us?, Our Services, GeneralDentist &amp; Prosthodontist, High Quality Treatment, contact us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Casa</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Casa.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.21.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1"
}</script>
    <meta name="theme-color" content="#4867d6">
    <meta property="og:title" content="Casa">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-palette-1-base u-header" id="sec-ae8a"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XL">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Casa.html#carousel_4730" data-page-id="230220328" style="padding: 10px 0px;">Registrarse</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Casa.html#sec-8d87" data-page-id="230220328" style="padding: 10px 0px;">Especialistas</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Casa.html#carousel_0697" data-page-id="230220328" style="padding: 10px 0px;">Servicios</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Casa.html#sec-d87c" data-page-id="230220328" style="padding: 10px 0px;">Regresar</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Casa.html#carousel_4730" data-page-id="230220328" style="padding: 10px 0px;">Registrese</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Casa.html#carousel_4730" data-page-id="230220328" style="padding: 10px 0px;">Registrarse</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Casa.html#sec-8d87" data-page-id="230220328" style="padding: 10px 0px;">Especialistas</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Casa.html#carousel_0697" data-page-id="230220328" style="padding: 10px 0px;">Servicios</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Casa.html#sec-d87c" data-page-id="230220328" style="padding: 10px 0px;">Regresar</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Casa.html#carousel_4730" data-page-id="230220328" style="padding: 10px 0px;">Registrese</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
    
      <section class="u-align-center u-clearfix u-section-1" id="sec-c19d">
        <div class="u-clearfix u-sheet u-valign-top u-sheet-1">
          <div class="u-form u-form-1">
            <form method="post">
              <div class="u-form-group u-form-group-1">
                <label for="text-8c90" class="u-form-control-hidden u-label"></label>
                <input type="text" placeholder="Numero de Seguro Medico" id="text-8c90" name="seguro" class="u-border-6 u-border-grey-30 u-input u-input-rectangle u-radius-17" required="required" autofocus="autofocus">
              </div>
              <div class="u-form-group u-form-name u-form-group-2">
                <label for="name-6797" class="u-form-control-hidden u-label">Name</label>
                <input type="text" placeholder="Nombre(s)" id="name-6797" name="nombres" class="u-border-6 u-border-grey-30 u-input u-input-rectangle u-radius-17" required="">
              </div>
              <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-3">
                <label for="name-b7d1" class="u-form-control-hidden u-label"></label>
                <input type="text" placeholder="Apellido Paterno" id="name-b7d1" name="apellidop" class="u-border-6 u-border-grey-30 u-input u-input-rectangle u-radius-17" required="">
              </div>
              <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-4">
                <label for="name-29f3" class="u-form-control-hidden u-label"></label>
                <input type="text" placeholder="Apellido materno" id="name-29f3" name="apellidom" class="u-border-6 u-border-grey-30 u-input u-input-rectangle u-radius-17" required="">
              </div>
              <div class="u-form-date u-form-group u-form-group-5">
                <label for="date-57bf" class="u-label">Fecha de Nacimiento</label>
                <input type="date" placeholder="MM/DD/YYYY" id="date-57bf" name="nacimiento" class="u-border-6 u-border-grey-30 u-input u-input-rectangle u-radius-17" required="">
              </div>
              <div class="u-form-group u-form-group-6">
                <label for="text-db76" class="u-form-control-hidden u-label"></label>
                <input type="text" placeholder="Tipo de Membresia" id="text-db76" name="membresia" class="u-border-6 u-border-grey-30 u-input u-input-rectangle u-radius-17" required="required">
              </div>
              <div class="u-form-group u-form-group-7">
                <label for="text-d6b6" class="u-form-control-hidden u-label"></label>
                <input type="text" placeholder="Titular de la cuenta" id="text-d6b6" name="titular" class="u-border-6 u-border-grey-30 u-input u-input-rectangle u-radius-17">
              </div>
              <div class="u-form-address u-form-group u-form-partition-factor-2 u-form-group-8">
                <label for="address-2166" class="u-form-control-hidden u-label"></label>
                <input type="text" placeholder="Direccion (Calle, Numero, Fracc. o Col.)" id="address-2166" name="direccion" class="u-border-6 u-border-grey-30 u-input u-input-rectangle u-radius-17" required="" maxlength="100">
              </div>
              <div class="u-form-address u-form-group u-form-partition-factor-2 u-form-group-9">
                <label for="address-4fdf" class="u-form-control-hidden u-label"></label>
                <input type="number" placeholder="Codigo Postal" id="address-4fdf" name="codigo" class="u-border-6 u-border-grey-30 u-input u-input-rectangle u-radius-17" max='99999'required="">
              </div>
              <div class="u-form-group u-form-group-10">
                <label for="text-604a" class="u-form-control-hidden u-label"></label>
                <input type="text" placeholder="Correro (example@example.com)" id="text-604a" name="correo" class="u-border-6 u-border-grey-30 u-input u-input-rectangle u-radius-17">
              </div>
              <div class="u-form-group u-form-select u-form-group-11">
                <label for="select-30de" class="u-label">Genero</label>
                <div class="u-form-select-wrapper">
                  <select id="select-30de" name="genero" class="u-border-6 u-border-grey-30 u-input u-input-rectangle u-radius-17" required="required">
                    <option value="--Seleccione opcion--">--Seleccione opcion--</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                  </select>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                </div>
              </div>
                 <input type="submit" name="submit" value="Submit" id="submit">
            </form>
          </div>
        </div>
      </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-palette-1-base u-footer" id="sec-1694"><div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-1">Este es un sitio de prueba para una actividad de la Universidad Politécnica de Durango.</h3>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/templates" target="_blank">
        <span></span>
      </a>
      <p class="u-text">
        <span></span>
      </p>
      <a class="u-link" href="https://nicepage.com/wysiwyg-html-editor" target="_blank">
        <span></span>
      </a>
    </section>
  </body>
</html>