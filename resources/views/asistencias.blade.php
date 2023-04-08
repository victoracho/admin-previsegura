<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="margin: 20px;">
  <img src="http://previsegura.com/assets/logo.7fd4836f.png" style="margin-left: auto; display: -webkit-box;" width="200" height="200" class="img-thumbnail" alt="...">
  <?php if ($asistencia == 'Asistencia funeraria nacional e internacional') : ?>
    <h3 style="text-align: center;">
      ANEXO SOLICITUD DE AFILIACION
      <br>
      ASISTENCIA FUNERARIA NACIONAL E INTERNACIONAL
    </h3>
  <?php endif; ?>
  <?php if ($asistencia == 'Asistencia financiera en duelo') : ?>
    <h3 style="text-align: center;">
      ANEXO SOLICITUD DE AFILIACION
      <br>
      ASISTENCIA FINANCIERA EN DUELO
    </h3>
  <?php endif; ?>
  <?php if ($asistencia == 'Asistencia médica telefónica y domiciliaria') : ?>
    <h3 style="text-align: center;">
      ANEXO SOLICITUD DE AFILIACION
      <br>
      ASISTENCIA FUNERARIA NACIONAL E INTERNACIONAL
    </h3>
  <?php endif; ?>
  <?php if ($asistencia == 'Combo citas médicas') : ?>
    <h3 style="text-align: center;">
      ANEXO SOLICITUD DE AFILIACION
      <br>
      SERVICIO DE ASISTENCIA SALUD (Citas Medicas)
    </h3>
  <?php endif; ?>

  <?php if ($asistencia == 'Asistencia médica telefónica y domiciliaria') : ?>
    <h3 style="text-align: center;">
      ANEXO SOLICITUD DE AFILIACION
      <br>
      SERVICIO DE ASISTENCIA SALUD (Citas Medicas)
    <?php endif; ?>
    <?php if ($asistencia == 'Asistencia odontológica') : ?>
      <h3 style="text-align: center;">
        ANEXO SOLICITUD DE AFILIACION
        <br>
        ASISTENCIA ODONTOLOGICA
      </h3>
    <?php endif; ?>
    <?php if ($asistencia == 'Asistencia financiera en hospitalización') : ?>
      <h3 style="text-align: center;">
        ANEXO SOLICITUD DE AFILIACION
        <br>
        ASISTENCIA FINANCIERA EN HOSPITALIZACION
      </h3>
    <?php endif; ?>
    <?php if ($asistencia == 'Asistencia financiera en enfermedad grave') : ?>
      <h3 style="text-align: center;">
        ANEXO SOLICITUD DE AFILIACION
        <br>
        ASISTENCIA FINANCIERA EN ENFERMEDAD GRAVE
      </h3>
    <?php endif; ?>
    <?php if ($asistencia == 'Asistencia Mascotas en el Cielo') : ?>
      <h3 style="text-align: center;">
        ANEXO SOLICITUD DE AFILIACION
        <br>
        ASISTENCIA MASCOTAS EN EL CIELO
      </h3>
    <?php endif; ?>


    <h3 style="text-align: center; background-color: black; color: white;">
      CONSULTAS POR AFILIACION
    </h3>
    <p> Cada afiliado (Titular y hasta 3) personas reportadas para consultas de su grupo familiar directo(Conyuge, Padres
      e Hijos) tendra un maximo de 4 consultas al ano, ya sea de la misma especialidad o distribuidas de acuerdo a sus
      necesidades entre las 4 especialidades.</p>
    <h3 style="text-align: center; background-color: black; color: white;">
      INFORMACION DEL CONTRATANTE </h3>
    <ul>
      <li> Nombre: <?= $profile['firstnames'] . ' ' . $profile['lastnames'] ?></li>
      <li> Genero: <?= $profile['gender'] ?></li>
      <li> Telefono: <?= $profile['main_phone'] ?></li>
      <li> Cedula: <?= $profile['doc'] ?></li>
      <li> Email: <?= $profile['email'] ?></li>
      <li> Direccion: <?= $profile['address'] ?></li>
      <li> Estado: <?= $profile['state'] ?></li>
      <li> Ciudad: <?= $profile['city'] ?></li>
      <li> Fecha de Ingreso: <?= $profile['fecha_ingreso'] ?></li>
    </ul>

    <h3 style="text-align: center; background-color: black; color: white;">
      DESCRIPCION DE SU CONTRATO DE ASISTENCIA SALUD (Citas Medicas)
    </h3>
    <ul>
      <li> Codigo: <?= $contract['code'] ?></li>
      <li> Estatus: <?= $contract['contract']['status'] ?></li>
      <li> Fecha del contrato: <?= $contract['contract']['status_date'] ?></li>
      <li> Fecha de covertura: <?= $contract['contract']['coverage_date'] ?></li>
      <li> Convenio: <?= $contract['contract']['covenant'] ?></li>
      <li> Plan: <?= $contract['contract']['plan'] ?></li>
      <li> Banco: <?= $contract['contract']['bank_name'] ?></li>
      <li> Venta: <?= $contract['contract']['sales'] ?></li>
      <li> Fecha de emision: <?= $contract['contract']['emission_date'] ?></li>
      <li> Fecha de expiracion: <?= $contract['contract']['expire_date'] ?></li>
      <li> Fecha de retiro: <?= $contract['contract']['retirement_date'] ?></li>
      <li> Modalidad: <?= $contract['contract']['modality'] ?></li>
    </ul>
    <h3 style="text-align: center; background-color: black; color: white;">
      BENEFICIAROS DEL CONTRATO
    </h3>
    <?php foreach ($contract['family_members'] as $family) : ?>
      <ul>
        <li>Nombres: <?= $family['firstnames'] . ' ' . $family['lastnames'] ?> </li>
        <li>Parentesco: <?= $family['bond'] ?> </li>
        <li>Fecha de Incripcion: <?= $family['inscription'] ?> </li>
        <li>Fecha de Covertura: <?= $family['coverage_date'] ?> </li>
      </ul>
    <?php endforeach; ?>
    <h3 style="text-align: center; background-color: black; color: white;">
      CUOTAS
    </h3>
    <?php foreach ($contract['payments'] as $payment) : ?>
      <ul>
        <li>Fecha de la cuota: <?= $payment['from'] ?> </li>
        <li>Fecha de vencimiento: <?= $payment['to'] ?> </li>
        <li>Fecha del pago: <?= $payment['payment_date'] ?> </li>
        <li>Monto: <?= $payment['amount'] ?> </li>
        <li>Estatus: <?= $payment['status'] ?> </li>
        <li>Monto adicional: <?= $payment['additional_amount'] ?> </li>
        <li>Numero de Referencia: <?= $payment['payment_number'] ?> </li>
      </ul>
    <?php endforeach; ?>

</body>

</html>
