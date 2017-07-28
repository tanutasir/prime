@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cars list</div>

                <div class="panel-body">
                    <select id="advanced1" style="height:300px">
                        <?php
                            use Illuminate\Support\Facades\DB;
                            $cars = \DB::table('cars')->get();
                        echo '<pre>';print_r($cars); echo '</pre>';
                            foreach($cars as $car):
                                echo "<option value=".$car->id.">".$car->nr."</option>";
                            endforeach;
                        ?>
                    </select>
                    <button id="default" type="button">Default</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
