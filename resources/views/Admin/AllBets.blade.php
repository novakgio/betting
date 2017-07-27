@extends('Admin.admin_layout')


@section('content')
<style>
.container-fluid{
    background-color:white;
}

</style>
<link href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">
    <div class="container-fluid">
       <table  class="table table-striped table-bordered datatables">
                                            <thead>
                                                <tr>
                                                    <th data-field="team_one">Team One</th>
                                                    <th data-field="team_two">Team Two</th>
                                                    <th data-field="sport_name">Sport Name</th>
                                                    <th data-field="winner_pick">Result</th>
                                                    <th data-field="start_time">Start Time</th>
                                                    <th data-field="created_at">Created At</th>
                                                    <th data-field="State">State</th>
                                                    <th data-field="edit">Edit</th>
                                                  

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
        "ajax": "{{ route('getAllBets') }}",
        "columns": [
            {data: 'team_one', name: 'team_one'},
            {data: 'team_two', name: 'team_two',searchable:false},
            {data: 'sport_name', name: 'sport_name'},
            {data: 'winner_pick', name: 'winner_pick',searchable:false},
            {data: 'start_time', name:'start_time',searchable:false},
            {data: 'created_at',name:'created_at',searchable:false},
            {data: 'State',name:'State',searchable:false},
            {data:'edit',name:'edit',searchable:false}
           

        ]
    });
    });
  </script>
@stop