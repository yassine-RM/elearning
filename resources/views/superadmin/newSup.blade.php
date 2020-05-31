<!-- Modal -->
<div id="super" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter Super-Administrateur</h4>
      </div>
      <div class="modal-body">
   
        <form action="newSup" method="post" id="frmS">
        @method('put')
    @csrf
  
        <div class="form-group row">
       <div class="form-row">
    <div class="form-grou p col-md-4">
      <label>CIN</label>
      <input type="text" class="form-control is-invalid" id="cin" name="cin">
    </div>
   
    <div class="form-group col-md-4">
      <label >Nom</label>
      <input type="text" class="form-control is-invalid" id="nom" name="nom">
    </div>
    <div class="form-group col-md-4">
      <label >Prénom</label>
      <input type="text" class="form-control is-invalid" id="prenom" name="prenom">
    </div>
    <div class="form-group col-md-4">
      <label>Email</label>
      <input type="text" class="form-control is-invalid" id="email" name="email">
    </div>
    <div class="form-group col-md-4">
      <label >Password</label>
      <input type="password" class="form-control is-invalid" id="password" name="password" >
    </div>
    <div class="form-group col-md-4">
      <label >Téléphone</label>
      <input type="text" class="form-control is-invalid" id="telephone" name="telephone">
    </div>
    <div class="form-group col-md-4">
      <label >Date naissance</label>
      <input type="date" class="form-control is-invalid" id="date_naissance" name="date_naissance">
    </div>
    <div class="form-group col-md-4">
      <label >Adress</label>
      <input type="text" class="form-control is-invalid" id="adress" name="adress">
    </div>
   
    </div>
        
</div>
      </div>
      <input type="hidden" name="id" id="id" value="">
      <div class="modal-footer">
   
      <input type="submit" class="btn btn-info" value="Save" id="save" >
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
</form>
    </div>

  </div>
</div>

