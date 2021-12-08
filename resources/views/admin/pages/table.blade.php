@extends('admin.pages.masterpage')
@section('content')

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Basic Table</h5>
               <table class="table Table" id="Table1">

                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">name</th>
                      <th scope="col">EMAIL</th>
                      <th scope="col">Delete</th>
                      <th scope="col">Edits</th>
                      <th scope="col">Image</th>
                  
                      </tr>
                      <a href="/add/" ><button>ADD</button></a> 
                  </thead>
                  <tbody class="list">
                @foreach($post as $data)
                <tr>
                  <td class="budget">
                    {{$data->id}}
                  </td>
                  <td>
                    {{$data->name}}
                  </td>
                  <td>
                    {{$data->email}}
                  </td>
               
                  <td>
                
                 <button class="deleteRecord" data-id="{{ $data->id }}">Delete</button> 
                  <!-- <td> <button class="deleteRecord btn-danger" data-id="{{ $data->id }}">Delete Record</button></td>
                   -->
                  </td>
                  <td>
                  <a href="/edit/{{$data->id}}"><button>Update</button></a>
                  </td>
               
                  </tr>
                  @endforeach
                 
                 
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">

                <p><img src="{{asset('images/'.$data->image)}}" alt="" style="width: 200px;"></p>
                <table id="myTable">
                    <thead>
                      
                    </tbody>

                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

        @endsection

