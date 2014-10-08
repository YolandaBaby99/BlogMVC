<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Blog | Admin panel</title>

        <!-- Bootstrap core CSS -->
        <link href="{url_root}assets/css/bootstrap.css" rel="stylesheet">
        <style>
                body {
                        padding-top: 50px;
                }
                .sidebar{
                        margin-top: 50px;
                }
        </style>
    </head>
    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Blog</a>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">< Back to front</a></li>
                        <li><a href="{url_logout}">Logout</a></li>
                    </ul>
                </div>

            </div><!-- /.container -->
        </div>

        <div class="container">

            <h1>Manage posts</h1>

            <p><a href="admin_edit.html" class="btn btn-primary">Add a new post</a></p>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Publication date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>The Route of All Evil</td>
                        <td>09/24/2013 10:00</td>
                        <td>Category #1</td>
                        <td>
                            <a href="admin_edit.html" class="btn btn-primary">Edit</a>
                            <a href="admin_index.html" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>The Route of All Evil</td>
                        <td>09/24/2013 09:00</td>
                        <td>Category #1</td>
                        <td>
                            <a href="admin_edit.html" class="btn btn-primary">Edit</a>
                            <a href="admin_index.html" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <ul class="pagination">
                <li class="prev"><a href="#" rel="prev">Previous</a></li>
                <li><a href="#">1</a></li>
                <li class="active"><a>2</a></li>
                <li class="disabled"><a>Next</a></li>
            </ul>


        </div> <!-- /container -->
    </body>
</html>