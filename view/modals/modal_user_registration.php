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
            <input type="email" class="form-control" id="input_user_reg_email">
            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
          </div>
          <div class="mb-3">
            <label for="input_user_reg_name" class="form-label">Teljes név</label>
            <input type="text" class="form-control" id="input_user_reg_name">
          </div>
          <div class="mb-3">
            <label for="input_user_reg_borndate" class="form-label">Születési idő</label>
            <input type="date" class="form-control" id="input_user_reg_borndate" min="1920-01-01" max="<?php echo(date("Y-m-d")); ?>">
            <!--<label for="select_user_reg_bornyear" class="form-label">Születési év</label>
            <select id="select_user_reg_bornyear" class="form-select">
              <option>Select</option>
            </select>-->
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Jelszó</label>
            <input type="password" class="form-control" id="input_user_reg_pswd">
          </div>
          <!--<button type="submit" class="btn btn-primary">Submit</button>-->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>
        <button type="button" class="btn btn-primary" id="button_user_reg_send">Regisztráció</button>
      </div>
    </div>
  </div>
</div>
