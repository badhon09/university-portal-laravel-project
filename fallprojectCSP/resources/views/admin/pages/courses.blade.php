@extends('admin.layouts.master')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
@endsection

@section('content')

<div class="container">
<div class="col-lg-12 mt-3 col-5 text-right">
              <a href="{{route('admin.createcourse')}}" class="btn btn-lg btn-success">Add Course</a>
         
            </div>
	<div class="row">
    @if(session('success'))
    <div class="alert alert-success ml-4">
      {{session('success')}}
    </div>
    @endif
		
        
        <div class="col-md-12">
        <h1>Courses List</h1>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                    <th>Course Code</th>
                   <th>Course Name</th>
                    <th>Department</th>
                     <th>Credit</th>
                      <th>Fee</th>
                      <th>Action</th>
                   </thead>
    <tbody>
      @foreach ($allcourse as $allcourse)
    
    <tr>
    
    <td>{{$allcourse->course_code}}</td>
    <td>{{$allcourse->course_name}}</td>
    <td>{{$allcourse->course_department}}</td>
    <td>{{$allcourse->course_credit}}</td>
    <td>{{$allcourse->course_fee}}</td>
    <td><a href="{{route('admin.courses.editcourse', $allcourse->id)}}" class="btn-sm btn-success" >edit</a>
      <a href="{{route('admin.courses.deletecourse', $allcourse->id)}}" class="btn-sm btn-danger">Delete</a>
      </td>
    </tr>
    
    @endforeach
    
    </tbody>
        
</table>

<div class="clearfix"></div>

                
            </div>
            
        </div>
	</div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>


@endsection
@push('scripts')
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
   

    <script>
      $(document).ready( function () {
    $('#mytable').DataTable( {
      
      
         
             
    } );
} );
    </script>
@endpush