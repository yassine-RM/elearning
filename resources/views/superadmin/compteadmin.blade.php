@extends('superadmin.master')
@section('content')
<!DOCTYPE html>
<html>
<html dir="ltr" lang="en-US">
<head>


         <meta charset="UTF-8" />
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/linearicons/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/chartist/css/chartist-custom.css')}}">
            <link rel="stylesheet" href="{{asset('css/main.css')}}">
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
            <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">



      </head>
<body>

				<div class="container-fluid">
					<h3 class="page-title">Gestion Départements</h3>
@include('superadmin.newadmin')

<!-- TABLE HOVER -->
<div class="panel">

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary"><button type="button"  name="add" id="add"class="btn btn-primary btn-lg">Nouveau Département</button>
</h6>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>



<th>CIN</th>
<th>Nom</th>
<th>Prenom</th>
<th>Email</th>
<th>Password</th>
<th>Téléphone</th>
<th>Date-naissance</th>
<th>Adress</th>
<th>Action</th>

</tr>
</thead>
<tbody>
@foreach($administrateurs as $key => $administrateur)
<tr id="administrateur{{$administrateur->id}}">
<td>{{$administrateur->CIN}}</td>
<td>{{$administrateur->nom}}</td>
<td>{{$administrateur->prenom}}</td>
<td>{{$administrateur->email}}</td>
<td>{{$administrateur->password}}</td>
<td>{{$administrateur->telephone}}</td>
<td>{{$administrateur->date_naissance}}</td>
<td>{{$administrateur->adress}}</td>






<td><button  class="btn btn-danger btn-delete" data-id="{{$administrateur->id}}"><i class="glyphicon glyphicon-trash"></i></button>
   <button  class="btn btn-success btn-edit" data-id="{{$administrateur->id}}"><i class="glyphicon glyphicon-pencil"></i></button>
   	</td>
     </tr>
     @endforeach
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>


<script type="text/javascript">
$.ajaxSetup({
  headers:{
    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
  }
}
)

$('#add').on('click',function(){
  $('#save').val('save');
  $('#frmAd').trigger('reset');
$('#administrateur').modal('show');
})

$('#frmAd').on('submit',function(e){

  e.preventDefault();
  var form=$('#frmAd');
  var formData=form.serialize();
  var url =form.attr('action');
  var state=$('#save').val();
  var type= 'get';
  if(state=='update'){
    type= 'put';
    //var url='{{URL::to('newDep')}}';
  }
  $.ajax({
    type : "POST",
    url : url,
    data : formData,
    success:function(data){
     //console.log(data);
     // addRow(data);
     var row='<tr id="administrateur'+ data.id +'">'+


     '<td>'+data.cin+'</td>'+
                  '<td>'+data.nom+'</td>'+
                  '<td>'+data.prenom+'</td>'+
                   '<td>'+data.email+'</td>'+
                    '<td>'+data.password+'</td>'+
                  '<td>'+data.telephone+'</td>'+
                  '<td>'+data.date_naissance+'</td>'+
                  '<td>'+data.adress+'</td>'+


                  '<td><button  class="btn btn-danger btn-delete" data-id="'+ data.id+'"> <i class="glyphicon glyphicon-trash"></i></button>'+
   '<button  class="btn btn-success btn-edit" data-id="'+ data.id +'" ><i class="glyphicon glyphicon-pencil"></i></td>'+
'</tr>';
          if(state=='save'){
            $('tbody').append(row);
          }else{
            $('#administrateur'+data.id).replaceWith(row);
          }
      $('#frmAd').trigger('reset');
      $('#nom').focus();

    },error(err){
      $("#cinError").text(err.responseJSON.errors.cin);

    }
  });
})
//---------------------addrow------------
  /*function addRow(data){
                    var d=$("#departement_id option:selected").text();
                      var row='<tr id="tuteur'+data.id+'">'+
                      '<td>'+data.CIN+'</td>'+
                      '<td>'+data.Nom+'</td>'+
                      '<td>'+data.Prenom+'</td>'+
                      '<td>'+data.Email+'</td>'+
                      '<td>'+data.Telephone+'</td>'+
                      '<td>'+data.Mot_de_passe+'</td>'+
                      '<td>'+data.Date_naiss+'</td>'+
                      '<td>'+data.Adresse+'</td>'+
                      '<td>'+data.Num_some+'</td>'+
                      '<td>'+d+'</td>'+

              '<td><a href="#" class="edit-modal btn btn-success btn-sm" data-id="'+data.id+'">'+
'<i class="glyphicon glyphicon-pencil"></i></a>'+
              '<a href="#" class="delete-modal btn btn-danger btn-sm" data-id="'+data.id+'">'+
               '<i class="glyphicon glyphicon-trash"></i></td>'+
                      '</tr>';
                      $('tbody').append(row);
                    }*/

                    function addRow(data){
                      var row='<tr id="administrateur'+ data.id +'">'+


                      '<td>'+data.cin+'</td>'+
                  '<td>'+data.nom+'</td>'+
                  '<td>'+data.prenom+'</td>'+
                   '<td>'+data.email+'</td>'+
                    '<td>'+data.password+'</td>'+
                  '<td>'+data.telephone+'</td>'+
                  '<td>'+data.date_naissance+'</td>'+
                  '<td>'+data.adress+'</td>'+


                  '<td><button  class="btn btn-danger btn-delete" data-id="'+ data.id+'"> <i class="glyphicon glyphicon-trash"></i></button>'+
   '<button  class="btn btn-success btn-edit" data-id="'+ data.id +'" ><i class="glyphicon glyphicon-pencil"></i></td>'+
'</tr>';

                  $('tbody').append(row);

                    }

//------------------------get update---------------------
$('tbody').delegate(' .btn-edit','click',function(){
  var value=$(this).data('id');
  var url='{{URL::to('getUpdated')}}';
  $.ajax({
    type: 'get',
    url: url,
    data: {'id':value},
    success:function(data){
      $('#id').val(data.id);
      $('#cin').val(data.CIN);
      $('#nom').val(data.nom);
      $('#prenom').val(data.prenom);
      $('#email').val(data.email);
      $('#password').val(data.password);
      $('#telephone').val(data.telephone);
      $('#date_naissance').val(data.date_naissance);
      $('#adress').val(data.adress);
      $('#save').val('update');
      $('#administrateur').modal('show');

    }
  });
});
//-------------delete departement--------------------
$('tbody').delegate(' .btn-delete','click',function(){
  var value= $(this).data('id');
  var url='{{URL::to('deleteAdmin')}}';
  if(confirm('Are you sure to delete?')==true){
$.ajax({
type:'get',
url: url,
data: {'id':value},
success:function(data){
    alert(data.sms);
    //console.log(data);
    $('#administrateur'+value).remove();

    }
});
  }
});
</script>

<script type="text/javascript">
$(document).ready(function () {
  var table = $('#dataTable').dataTable({
    "paging": false,
    "fnInitComplete": function () {
      var myCustomScrollbar = document.querySelector('#dt-vertical-scroll_wrapper .dataTables_scrollBody');
      var ps = new PerfectScrollbar(myCustomScrollbar);
    },
    "language": {
         "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
     }
  })
})
</script>




</body>
@endsection
