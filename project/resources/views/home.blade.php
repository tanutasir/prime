@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cars list</div>

                <div class="panel-body">
                    <select id="advanced1" style="height:300px">
                        <option value="1">pirmais</option>
                        <option value="2">otrais</option>
                        <option value="3">tresais</option>
                        <option value="4">ceturtais</option>
                        <option value="5">piektais</option>
                    </select>
                    <button id="default" type="button">Default</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
