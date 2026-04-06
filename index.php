<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box1">
        <h2>All STUDENTS</h2>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD STUDENT</button>
    </div>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Uveys</td>
                <td>Dzaurov</td>
                <td>20</td>
            </tr>
            
            <tr>
                <td>2</td>
                <td>Maga</td>
                <td>Magaev</td>
                <td>21</td>
            </tr>
        </tbody>
    </table>

    <?php

        if ($_GET["message"]) {
            echo "<h6>".$_GET["message"]."</h6>";
        }

    ?>

    <form action="insert_data.php" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>

                    <div class="modal-body">
                        
                            <div class="form-group">
                                <label for="f_name">First Name</label>
                                <input type="text" name="f_name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="l_name">Last Name</label>
                                <input type="text" name="l_name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" name="age" class="form-control">
                            </div>
                        
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-dark" name="add_student" value="Add">
                    </div>
                </div>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>