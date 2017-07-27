@extends('Admin.admin_layout')


@section('content')
<link href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">
    <div class="container-fluid">
       <table  class="table table-striped table-bordered datatables">
                                            <thead>
                                                <tr>
                                                    <th data-field="fullname">Full Name</th>
                                                    <th data-field="username">User Name</th>
                                                    <th data-field="email">Email</th>
                                                    <th data-field="phone">Phone</th>
                                                    <th data-field="created_at">Registered</th>
                                                    <th data-field="confirmed">Verified</th>
                                                    <th data-field="authority">Authority</th>
                                                    <th data-field="State">Change State</th>

                                               </tr>
                                            </thead>
                                      </table> 
    </div>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
     $('.datatables').DataTable({
        language: {
            searchPlaceholder: "Search By username"
        },
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('getallusers') }}",
        "columns": [
            {data: 'fullname', name: 'fullname'},
            {data: 'username', name: 'username',searchable:false},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone',searchable:false},
            {data: 'created_at', name:'created_at',searchable:false},
            {data: 'confirmed',name:'confirmed',searchable:false},
            {data: 'authority',name:'authority',searchable:false},
            {data: 'State',name:'State',searchable:false}

        ]
    });
    });
  </script>
@stop