<!-- Modal -->
<div id="filiere" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter Filiere</h4>
      </div>
      <div class="modal-body">
      
        <form action="newFil" method="post" id="frmF">
      @method('put')
       @csrf
        <div class="form-group row">
       <div class="form-row">
  
    <div class="form-group col-md-4">
      <label >Nom</label>
      <input type="text" class="form-control" id="nom" name="nom">
    </div>
    <div class="form-group col-md-10">
      <label>Département</label>
      <select name="departement" id="departement" class="form-control">
        <option selected>Select Département</option>
        @foreach($departements as  $departement)
        <option value="{{$departement->id}}">{{$departement->nom}}</option>
        
        @endforeach
        
      </select>
    </div>
    <div class="form-group col-md-10">
      <label>Cycle</label>
      <select name="cycle" id="cycle" class="form-control">
        <option selected>Select Cycle</option>
        @foreach($cycles as $cycle)
        <option value="{{$cycle->id}}">{{$cycle->nom}}</option>
        
        @endforeach
        
      </select>
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

