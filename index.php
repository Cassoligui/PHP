<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <title>CRUDjs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/script.js"></script>
    <!-- header !-->
    <html lang="pt-BR">
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal">+NEW</button>
        </li>
    </ul>
    <!-- end header !-->
</head>
<!-- modal new user !-->
<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">NEW USER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div id="input-data">
                        <section>
                            <input id="name" class="input-text" placeholder="Name" type="text" required />
                            <input id="email" class="input-text" placeholder="Email" type="email" required />
                            <input id="phone" class="input-text" placeholder="Phone" type="text" required />
                        </section>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input class="btn btn-secondary" id="send" type="submit" data-dismiss="modal" value="Send" onclick="return addToTable()" />
            </div>
        </div>
    </div>
</div>
<!-- end modal !-->
<body>
    <div class="container-fluid">
        <h2 id="table-title">Users</h2>
        <table id="myTable">
            <tr id="0">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </table>
    </div>
</body>
</html>