@extends('Admin.admin_layout')


@section('content')
 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Place New Bet
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
<style>

.form-group input{
    width:30%;
    margin-left:35%;
}
</style>
                <div class="row" style='text-align: center;'>
                    <div>

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('admin_side.pick.store') }}">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label>Team 1</label>
                                <input class="form-control" name="team_one">
                               
                            </div>
                            <div class="form-group">
                                <label>Team 2</label>
                                <input class="form-control" name="team_two">
                                
                            </div>
                            <div class="form-group">
                                <label>Sport Name</label>
                                <input class="form-control" name="sport_name">
                               
                            </div>
                             <div class="form-group">
                                <label>Result?</label>
                                <input class="form-control" name="winner_pick">
                                
                            </div>
                             <div class="form-group">
                                <label>Start_time?</label>
                                <input class="form-control" name="start_time">
                               
                            </div>

                            <div class="form-group">

                            <button type="submit" class="btn btn-success">Add New Bet</button>


                        </form>
                    </div>
                </div>

                    
                <!-- /.row -->
@stop