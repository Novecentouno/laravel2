<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">

    <!-- Example Code -->
    <form class="row g-3 needs-validation" novalidate>
      <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Nome</label>
        <input type="text" class="form-control" id="validationCustom01" value="" required>
        <div class="valid-feedback">
          Ottimo!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Cognome</label>
        <input type="text" class="form-control" id="validationCustom02" value="" required>
        <div class="valid-feedback">
          Ottimo!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustomDate" class="form-label">Data</label>
        <input type="date" class="form-control" id="validationCustomDate" value="" required>
        <div class="valid-feedback">
          Ottimo!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">E-mail</label>
        <div class="input-group has-validation">
          <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Inserisci un e-mail.
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Provincia</label>
        <select class="form-select" id="validationCustom03" required>
          <option selected disabled value="">Scegli...</option>
        </select>
        <div class="invalid-feedback">
          Inserisci una provincia.
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustomCity" class="form-label">Comune</label>
        <select class="form-select" id="validationCustomCity" required>
          <option selected disabled value="">Scegli...</option>
        </select>
        <div class="invalid-feedback">
          Inserisci un comune.
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom05" class="form-label">Richiesta</label>
        <div class="input-group">
          <textarea class="form-control" aria-label="With textarea" id="validationCustom05" required></textarea>
        </div>
        <div class="invalid-feedback">
          Inserisci una richiesta.
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Invia</button>
      </div>
    </form>
    
    <!-- End Example Code -->
  </body>
</html>