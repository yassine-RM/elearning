<!-- Modal -->
<div id="administrateur" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter Administrateur</h4>
      </div>
      <div class="modal-body">

        <form action="newadmin" method="post" id="frmAd">
        @method('put')
    @csrf
        <div class="form-group row">
       <div class="form-row">
    <div class="form-grou p col-md-4">
      <label>CIN</label>
      <input type="text" class="form-control" id="cin" name="cin">
      <span class="text-danger" id="cinError"></span>
    </div>
    <div class="form-group col-md-4">
      <label >Nom</label>
      <input type="text" class="form-control" id="nom" name="nom">
    </div>
    <div class="form-group col-md-4">
      <label >Prénom</label>
      <input type="text" class="form-control" id="prenom" name="prenom">
    </div>
    <div class="form-group col-md-4">
      <label>Email</label>
      <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="form-group col-md-4">
      <label >Password</label>
      <input type="password" class="form-control" id="password" name="password" >
    </div>
    <div class="form-group col-md-4">
      <label >Téléphone</label>
      <input type="text" class="form-control" id="telephone" name="telephone">
    </div>
    <div class="form-group col-md-4">
      <label >Date naissance</label>
      <input type="date" class="form-control" id="date_naissance" name="date_naissance">
    </div>
    <div class="form-group col-md-4">
      <label >Adress</label>
      <input type="text" class="form-control" id="adress" name="adress">
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

