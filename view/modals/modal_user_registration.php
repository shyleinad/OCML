<script src="./controller/modals/user_registration.js"></script>
<div id="modal_user_registration" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Regisztráció</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="input_user_reg_email" class="form-label">Email cím</label>
            <input type="email" class="form-control" id="input_user_reg_email" required>
            <small class="form-text text-muted">(Pl. pelda@domain.hu)</small>
          </div>
          <div class="mb-3">
            <label for="input_user_reg_name" class="form-label">Teljes név</label>
            <input type="text" class="form-control" id="input_user_reg_name" required>
            <small class="form-text text-muted">(Pl. Példa Géza, Példa-Nagy Géza, Példa Géza Béla)</small>
          </div>
          <!--<div class="mb-3">
            <label for="input_user_reg_borndate" class="form-label">Születési idő</label>
            <input type="date" class="form-control" id="input_user_reg_borndate" min="1920-01-01" max="<?php echo(date("Y-m-d")); ?>" required>
          </div>--> <!--taken out-->
          <div class="mb-3">
            <label for="input_user_reg_pswd" class="form-label">Jelszó</label>
            <input type="password" class="form-control" id="input_user_reg_pswd" required>
            <small class="form-text text-muted">(Min. 8 karakter hosszúságúnak kell lennie és tartalmaznia kell kisbetűt, nagybetűt, számot és speciális karaktert.)</small>
          </div>
          <div class="mb-3">
            <label for="input_user_reg_pswd_confirm" class="form-label">Jelszó megerősítése</label>
            <input type="password" class="form-control" id="input_user_reg_pswd_confirm" required>
            <small class="form-text text-muted">(Meg kell egyeznie a fentebb megadott jelszóval.)</small>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>
        <button type="submit" class="btn btn-primary" id="button_user_reg_send">Regisztráció</button>
      </div>
    </div>
  </div>
</div>
