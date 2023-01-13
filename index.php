<?php
include 'foo.php';
?>
<!doctype html>
<html lang="en">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Курсовая работа</title>
    <script>
        $(document).ready(function() {
            let sq = 1;
            function goaway() {
                let tid = setInterval(() => {
                    let okna = 2;
                    $.get("goaway.php?num=" + sq,
                        function(result) {
                            let content = '';
                            if(result.items){
                                result.items.forEach(item => {
                                    sq++;
                                    content = ('<p> Client ' + item.name + ' ' + item.id + ' -> <span>'+(sq%okna + 1)+'</span></p>');
                                })
                                document.querySelector('#windows').innerHTML += content;

                            }
                        });

                }, 500);
            }
        }
    </script>
    <style>
        body {
            background-image: url(course.jpg);
        }
        .get_button {
            width: 90px;
            height: 90px;
        }
        .btn_add {
            width: 90px;
            height: 90px;
        }
        .btn_cancel {
            width: 90px;
            height: 90px;
        }
        #windows {
            opacity: 0.75;
            position: absolute;
            width: 340px;
            height: 800px;
            padding: 30px;
            top: 0px;
            background: #FFFAFA;
            margin: 20px auto 0;
            margin-left: 20px;
            overflow-x: hidden;
            overflow-y: auto;
            -webkit-box-shadow: 0 1px 3px;rgba(0,0,0, .13);
        }
        #queue_size {
            width: 320px;
            height: auto;
            padding: 30px;
            background: #fff;
            margin: auto 675px 0;
            -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.13);
            -moz-box-shadow: 0 1px 3px rgba(0,0,0,.13);
            box-shadow: 0 1px 3px rgba(0,0,0,.13);
            overflow: hidden;
        }

    </style>
</head>
<body>
<form action="authhtml.php">
    <button type="submit" class="btn btn-warning admin_btn" style="margin-right: 10px; float: right; margin-top: 10px; font" ><font face="Arial Black">Admin</font></button>
</form>
<div class="conteiner">
    <div class="row">
        <div class="col-12">
            <center><button class="btn btn-warning mt-2 get_button" data-toggle="modal" data-target="#create"><i class="fa fa-plus fa-2x"></i></center>
           <center><table class="table table-striped table-hover mt-2" style="width: 500px">
                <thead class="table-dark">
                <th>ID</th>
                <th>Имя</th>
                </thead>
                   <tbody>
                   <?php foreach (array_reverse($result) as $res) { ?>
                   <td><?php echo $res->id; ?></td>
                   <td><?php echo $res->name; ?></td>
                   </tbody>
                     <?php } ?>
            </table></center>
            </button>
        </div>
    </div>
</div>

<!-- CREATE -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавление в очередь</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action = "" method = "post">
                    <div class = "form-group">
                        <small>Введите имя</small>
                        <input type = "text" class = "form-control" name = "name">
                    </div>
            </div>
            <div style="margin-bottom: 20px; margin-left: 150px">
                <button type="button" class="btn btn-danger btn_cancel" data-dismiss="modal">Закрыть</button>
                <button type="submit" class="btn btn-warning btn_add" name = "add">Добавить</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="queue_size"></div>
<div id="windows"></div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</body>
</html>