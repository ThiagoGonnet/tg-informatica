<div class="text-center my-5">
  <h1 class="display-4 fw-bold">Contactanos</h1>
  <p class="lead text-muted">Dejanos tu mensaje. Te responderemos a la brevedad.</p>
</div>

<div class="container my-5">
  <div class="row g-5 align-items-center">

    <div class="col-md-6">
      <div class="mb-4">
        <h2 class="h4 fw-semibold text-dark"><i class="bi bi-telephone-fill text-primary me-2"></i>Llamanos</h2>
        <p class="fs-5 text-secondary">+542494021127</p>
      </div>

      <div class="mb-4">
        <h2 class="h4 fw-semibold text-dark"><i class="bi bi-envelope-fill text-primary me-2"></i>Escribinos</h2>
        <p class="fs-5 text-secondary">tg.informatica2710@gmail.com</p>
      </div>

      <div class="mb-4">
        <h2 class="h4 fw-semibold text-dark"><i class="bi bi-geo-alt-fill text-primary me-2"></i>Visitanos</h2>
        <p class="fs-5 text-secondary">Tandil, Argentina</p>
      </div>
    </div>

    <div class="col-md-6">
      <form class="form-group p-4 bg-light rounded shadow-sm" action="formContacto" method="post">

        <div class="mb-3">
          <label for="nombre" class="form-label fw-medium text-secondary">Ingresa tu nombre</label>
          <input type="text" class="form-control" name="nombre" placeholder="Tu nombre" required>
        </div>

        <div class="mb-3">
          <label for="mail" class="form-label fw-medium text-secondary">Ingresa tu mail</label>
          <input type="email" class="form-control" name="mail" placeholder="Tu mail" required>
        </div>

        <div class="mb-3">
          <label for="asunto" class="form-label fw-medium text-secondary">Ingresa el asunto del mensaje</label>
          <input type="text" class="form-control" name="asunto" placeholder="Tu asunto" required>
        </div>

        <div class="mb-3">
          <label for="mensaje" class="form-label fw-medium text-secondary">Tu mensaje</label>
          <textarea name="mensaje" class="form-control" rows="4" placeholder="Escribí acá tu mensaje..." required></textarea>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-primary fw-bold py-2">Enviar Mensaje</button>
        </div>
      </form>
    </div>

  </div>
</div>
