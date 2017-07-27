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

                        
                       
                {{ Form::model($bet, array('route' => array('admin_side.pick.update', $bet->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
                
                        {{csrf_field()}}
                            <div class="form-group">
                                <label>Team 1</label>
                               
                               {{ Form::text('team_one',null,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                <label>Team 2</label>
                                {{ Form::text('team_two',null,['class' => 'form-control']) }}
                                
                            </div>
                            <div class="form-group">
                                <label>Sport Name</label>
                                {{ Form::text('sport_name',null,['class' => 'form-control']) }}
                               
                            </div>
                             <div class="form-group">
                                <label>Result?</label>
                                {{ Form::text('winner_pick',null,['class' => 'form-control']) }}
                                
                            </div>
                             <div class="form-group">
                                <label>Start_time?</label>
                                {{ Form::text('start_time',null,['class' => 'form-control']) }}
                               
                            </div>

                            <div class="form-group">
                                <label>State:Win,Lose Or Waiting</label>
                                 {{ Form::text('state',null,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">

                            <button type="submit" class="btn btn-success">Change Bet State</button>
                            </div>

                        {{Form::close()}}
                    </div>
                </div>

                    
                <!-- /.row -->
@stop