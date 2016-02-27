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
            xmlhttp.open("GET", "../delete-task.php?q=" + todo, true);
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

    function display(todo) {
        $('.destroy').off('click');
        $('.toggle').off('click');
        var todos = $todoList.html();
        todos += "" +
				"<li>" +
                    "<div class='view'>" +
                        "<input class='toggle' type='checkbox'>" +
                        "<label data=''>" + todo + "</label>" +
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
            xmlhttp.open("GET", "../check_list.php?q=" + todo, true);
            xmlhttp.send();
            //console.log("Enter");
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    //console.log("received");
                    //document.getElementById("app_name").innerHTML = xmlhttp.responseText;
                    var return_text = xmlhttp.responseText;

                    if (return_text == "display") {
                        console.log(return_text);
                        display(todo);

                    }
                    else {
                        $(this).val('');
                    }
                }
            }

        }
    }); //end of press key

    function load_page() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "load_page.php", true);
        xmlhttp.send();
        //console.log("send");
        //console.log(xmlhttp.status);
        //console.log(xmlhttp.readyState);
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var return_text = xmlhttp.responseText;
                //console.log("received");
                if (return_text !== undefined && return_text !== null) {
                    console.log(return_text);
                    var task = JSON.parse(return_text);
                    for (i = 0; i < task.length; i++) {
                        console.log(task[i].key);
                        display(task[i].key);
                    }
                }
            }
        }
    }

    load_page();

    function date_time() {
        var x = new Date();
        var M = x.getMonth() + 1,
                d = x.getDate(),
                y = x.getFullYear(),
                h = x.getHours(),
                m = x.getMinutes();
        if (h < 10) h = '0' + h;
        if (m < 10) m = '0' + m;
        var time = h + ":" + m;
        var date = M + "/" + d + "/" + y;
        document.getElementById('time').innerHTML = time;
        document.getElementById('date').innerHTML = date;
        setTimeout(function () { date_time(); }, 60000);
    }
    date_time();
});

