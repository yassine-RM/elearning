<!-- Modal -->
     
<div id="cycle" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter Cycle</h4>
      </div>
      <div class="modal-body">
      
        <form action="newCycle" method="post" id="frmC">
       @method('put')
       @csrf
        <div class="form-group row">
       <div class="form-row">
  
    <div class="form-group col-md-4">
      <label >Nom</label>
      <input type="text" class="form-control" id="nom" name="nom">
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

