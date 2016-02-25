var EnterKey = 13;

$.fn.isBound = function(type, fn) {
    var data = this.data('events')[type];

    if (data === undefined || data.length === 0) {
        return false;
    }

    return (-1 !== $.inArray(fn, data));
};

$(document).ready(function () {
    $todoList = $('#todo-list');

    function runBind() {
        $('.destroy').on('click', function (e) {
            $currentListItem = $(this).closest('li');
            var todo = $currentListItem.find("label").text();

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "delete-task.php?q=" + todo, true);
            xmlhttp.send();
            $currentListItem.remove();
            // document.getElementById("app_name").innerHTML = todo;
        });

        $('.toggle').on('click', function (e) {
            var $currentListItemLabel = $(this).closest('li').find('label');
            /*
            * Do this or add css and remove JS dynamic css.
            */
            if ($currentListItemLabel.attr('data') == 'done') {
                $currentListItemLabel.attr('data', '');
                $currentListItemLabel.css('text-decoration', 'none');
            }
            else {
                $currentListItemLabel.attr('data', 'done');
                $currentListItemLabel.css('text-decoration', 'line-through');
            }
        });
    }

    function display(todo, due) {
        $('.destroy').off('click');
        $('.toggle').off('click');
        var todos = $todoList.html();
        todos += "" +
				"<li>" +
                    "<div class='view'>" +
                        "<input class='toggle' type='checkbox'>" +
                        "<label data=''>" + $('#new-todo').val() + "</label>" +
                        "<a class='destroy'></a>" +
                    "</div>" +
                "</li>";
        $("#new-todo").val("");
        $todoList.html(todos);
        runBind();
        $('#main').show();
    }

    $('#new-todo').keypress(function (e) {
        //console.log("keypressed");
        var todo = $("#new-todo").val();
        var due = $("#dueday").val();

        if (e.which === EnterKey && todo != "" && due != "") {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "check_list.php?q=" + todo, true);
            xmlhttp.send();
            //console.log("Enter");
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    //console.log("received");
                    //document.getElementById("app_name").innerHTML = xmlhttp.responseText;
                    var return_text = xmlhttp.responseText;

                    if (return_text == "display") {
                        console.log(return_text);
                        display(todo, due);

                    }
                    else {
                        $(this).val('');
                    }
                }
            }

        }
    }); //end of press key

});

