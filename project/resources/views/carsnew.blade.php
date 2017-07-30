@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cars new</div>

                <div class="panel-body">
                    <form action="/cars" method="post">
                        {{ csrf_field() }}
                        <fieldset id="toggle">
                            <legend>Images</legend>
                            <button id="upload" type="button">Upload</button>
                        </fieldset>


                        <h4 class="first">Nr</h4>
                        <input id="in" type="text" size="30"/>
                        <br/><br/>
                        <div id="tabs">
                            <ul>
                                <li><a href="#lv">LV</a></li>
                                <li><a href="#en">EN</a></li>
                                <li><a href="#ru">RU</a></li>
                            </ul>
                            <div>
                                <div id="lv">
                                    <div class="form-group">
                                        <label for="InputTitleLv">Title</label>
                                        <input type="text" class="form-control" id="InputTitleLv" name="InputTitleLv" value="" aria-describedby="h1HelpLv" placeholder="">
                                        <small id="h1HelpLv" class="form-text text-muted">Title Tag.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputMetaDescriptionLv">Meta Description</label>
                                        <input type="text" class="form-control" id="InputMetaDescriptionLv"  name="InputMetaDescriptionLv" value="" aria-describedby="mdHelpLv" placeholder="">
                                        <small id="mdHelpLv" class="form-text text-muted">MetaDescription.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputH1Lv">H1</label>
                                        <input type="text" class="form-control" id="InputH1Lv" name="InputH1Lv" value="" aria-describedby="h1HelpLv" placeholder="">
                                        <small id="h1HelpLv" class="form-text text-muted">H1 virsraksts.</small>
                                    </div>
                                    <hr/>

                                        <table>
                                            <tr>
                                                <th>Dienas</th><th>Cena</th>
                                            </tr>
                                            <tr>
                                                <td>1-5</td><td>20</td><td><a href="">edit </a></td><td><a href=""> delete</a></td>
                                            </tr>
                                        </table>
                                        <button id="upload" type="button">New</button>
<br/><br/>

                                    <div class="form-group">
                                        <label for="InputBodyLv">Text</label>
                                        <textarea type="text" class="form-control" name="InputBodyLv" id="InputBodyLv" aria-describedby="h1Help" placeholder=""></textarea>
                                        {{--<small id="h1Help" class="form-text text-muted">H1 virsraksts.</small>--}}
                                    </div>
                                </div>
                                <div id="en">
                                    content 2
                                </div>
                                <div id="ru">
                                    content 3
                                </div>
                            </div>
                        </div>
                        <br/>
                        <button id="create" type="button">Create</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript">
        $('#tabs').puitabview();
        $('#create').puibutton({
            click: function(event) {
                alert("Create: " + this.name)
            }
        });
        $('#upload').puibutton({
            click: function(event) {
                alert("Upload: " + this.name)
            }
        });

        $('#in').puiinputtext();

        $('#toggle').puifieldset({
            toggleable: true
        });


    </script>
@endsection
