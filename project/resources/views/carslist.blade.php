@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cars list</div>

                <div class="panel-body">
                    <button id="new" type="button">New</button>
                    <br/><br/>
                    <select id="advanced1" style="height:300px">
                        <?php
                            use Illuminate\Support\Facades\DB;
                            $cars = \DB::table('cars')->get();
//                        echo '<pre>';print_r($cars); echo '</pre>';
                            foreach($cars as $car):
                                echo "<option img=".$car->img." value=".json_encode($car).">".json_encode($car)."</option>";
                            endforeach;
                        ?>
                    </select>

                </div>
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript">
        $('#advanced1').puiorderlist({
            responsive: true,
            content: function (option) {
                console.log(JSON.parse(option.text))
                data = JSON.parse(option.text)

                return $('<div id="option.id" style="border-bottom: 1px gray solid" class="ui-helper-clearfix"><img  style="margin-right: 10px" width="100" src="'+data.img+'"/>'+data.nr+'<button name="'+option.value+'" style="margin-top: 15px; float:right;" class="puie">Edit</button><button name="'+option.value+'" style="margin-top: 15px; float:right;" class="puid">Delete</button></div>');
            }
        });

        $('.puie').puibutton({
            click: function(event) {
                alert("Edit: " + this.name)
            }
        });
        $('.puid').puibutton({
            click: function(event) {
                alert("Delete: " + this.name)
            }
        });
        $('#new').puibutton({
            click: function(event) {
                alert("New: " + this.name)
            }
        });
    </script>
@endsection
