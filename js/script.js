$(function () {

    // var themes = new Array('afterdark', 'afternoon', 'afterwork', 'aristo', 'black-tie', 'blitzer', 'bluesky', 'bootstrap', 'casablanca', 'cruze',
    //     'cupertino', 'dark-hive', 'dot-luv', 'eggplant', 'excite-bike', 'flick', 'glass-x', 'home', 'hot-sneaks', 'humanity', 'le-frog', 'midnight',
    //     'mint-choc', 'overcast', 'pepper-grinder', 'redmond', 'rocket', 'sam', 'smoothness', 'south-street', 'start', 'sunny', 'swanky-purse', 'trontastic',
    // //     'ui-darkness', 'ui-lightness', 'vader');
    // var themes = new Array(
    //     {'id':'1'},{'id':'2'},{'id':'3'}
    // );
    var themes = new Array(
        1,2,3,4,5
    );
    $('#advanced').puiorderlist({
        controlsLocation: 'left',
        caption: 'Themes',
        effect: 'bounce',
        responsive: true,
        datasource: themes,
        content: function (option) {
            console.log(option.label)
            return $('<div id="option.id" class="ui-helper-clearfix">'+option.value+'</div>');
        },
        reorder: function(event) {
            console.log(event)
        }
    });
    $('#advanced1').puiorderlist({
        responsive: true,
        content: function (option) {
            json = $.get('/getbyid/'+option.value);
            json = $.parseJSON(json);
            alert(json.id);
            return $('<div id="option.id" style="border-bottom: 1px gray solid" class="ui-helper-clearfix"><img  style="margin-right: 10px" width="100" src="img/renault.jpg"/>'+option.text+'<button name="'+option.value+'" style="margin-top: 15px; float:right;" class="puie">Edit</button><button name="'+option.value+'" style="margin-top: 15px; float:right;" class="puid">Delete</button></div>');
        },hb
        reorder: fuz
    >$.parseJSON(1nction(event) {
            console.log(event.target)
        }
    });
    $('#default').puibutton();
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
})
