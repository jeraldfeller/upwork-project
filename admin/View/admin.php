<?php
    // Get the last part of the URL (the "slug")
    $url = $_SERVER['REQUEST_URI'];
    $urlParts = explode('/', $url);
    $lastSlug = end($urlParts);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

     <!-- DataTables CSS -->
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <style>

        .dashboard-header {
            margin-bottom: 30px;
        }
        .checkbox-container{
            width: 25px;
            height: 25px;
            position: relative;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php echo $lastSlug == 'logs' ? 'active' : '' ?>">
                    <a class="nav-link" href="/admin/logs">Logs</a>
                </li>
                <li class="nav-item <?php echo $lastSlug == 'used' ? 'active' : '' ?>">
                    <a class="nav-link" href="/admin/used">Used</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#changePasswordModal" data-toggle="modal" class="btn btn-primary">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/logout">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid mt-5">
        <div class="dashboard-header">
            <h1><?php echo ucfirst($lastSlug); ?></h1>
            
    
            <div class="mt-5">
                <button class="btn btn-danger" id="bulkDelete">Bulk Delete</button>
                <?php if($lastSlug == 'logs'): ?>
                    <button class="btn btn-secondary" id="bulkMove">Bulk Move</button>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Table -->
        <table class="table table-striped" id="myDataTable" style="width:100%">
            <thead>
                <tr>
                    <th>Selection</th>
                    <th>Session ID</th>
                    <th>Page ID</th>
                    <th>Quick Data</th>
                    <th>Created At</th>
                    <th>Comments</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table rows go here -->
            </tbody>
        </table>

        <!-- Image View Modal -->
        <div class="modal fade" id="imageViewModal" tabindex="-1" role="dialog" aria-labelledby="imageViewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageViewModalLabel">View Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="" id="modalImage" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>


        <!-- Comment View Modal -->
        <div class="modal fade" id="commentViewModal" tabindex="-1" role="dialog" aria-labelledby="commentViewModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="commentViewModalLabel">View Comment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <textarea id="modalComment" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary saveComment">Save</button>
                    </div>
                </div>
            </div>
        </div>




        <!-- Change Password Modal -->
        <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="changePasswordForm">
                            <div class="form-group">
                                <label for="current-password">Current Password</label>
                                <input type="password" class="form-control" id="current-password" name="currentPassword" required>
                            </div>
                            <div class="form-group">
                                <label for="new-password">New Password</label>
                                <input type="password" class="form-control" id="new-password" name="newPassword" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirm-password" name="confirmPassword" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>


    <script>
        const lastSlug = getLastSlug();
        let commentId = null;
        let loginId = null;
        $(document).ready(function() {


            var myDataTable= $('#myDataTable').DataTable({
                "pageLength": 10,
                "processing": true,
                "serverSide": true,
                "searching": false, // Disable the default search box
                "ajax": {
                    "url": "/admin/Api/data?used="+(lastSlug == 'logs' ? 0 : 1), // Replace with the path to your data source
                },
                "columnDefs": [
                    { "orderable": true, "targets": 4 }, // Enable sorting only on the 5th column
                    { "orderable": false, "targets": "_all" }, // Disable sorting on all columns
                ],
                "order": [[4, 'asc']] // Set default sorting to the 5th column, ascending order
                
            });

            $('body').on('click', '.delete', function() {
                var id = $(this).data('id'); // Get the data-id attribute

                if (confirm('Are you sure you want to delete this item?')) {
                    $.ajax({
                        type: 'POST',
                        url: 'Api/delete', // Adjust the URL as needed
                        data: { id: id },
                        success: function(response) {
                            // Handle success - you might want to remove the deleted element from the DOM, for example
                            myDataTable.ajax.reload(null, false); // false means stay on the current page after reload
                
                        },
                        error: function(xhr, status, error) {
                            // Handle error
                            alert('Error deleting item');
                        }
                    });
                }
            });
            


            $('body').on('click', '.view-image', function() {
                var id = $(this).data('id');

                $.ajax({
                    type: 'POST',
                    url: 'Api/data-get', // Your data-get API endpoint
                    data: { id: id, action: 'image' },
                    success: function(response) {
                        response = JSON.parse(response);
                        // Assuming response contains an object with the 'src' attribute for image
                        $('#modalImage').attr('src', response.src);
                        $('#imageViewModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        alert('Error fetching image');
                    }
                });
            });


            $('body').on('click', '.comment', function() {
                var id = $(this).data('id');
                loginId = id;
                $.ajax({
                    type: 'POST',
                    url: 'Api/data-get', // Your data-get API endpoint
                    data: {
                        id: id,
                        action: 'getComment' // Additional parameter for the action
                    },
                    success: function(response) {
                        response = JSON.parse(response);
                        var comment = '';

                        if(response.comment.length == 0) {
                            commentId = null;
                            comment = '';
                        }else{
                            commentId = response.comment[0].comment_id;
                            comment = response.comment[0].comment;
                        }
                        // Handle success
                        // For example, display the comment
                        $('#modalComment').val(comment);
                        $('#commentViewModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        alert('Error fetching comment');
                    }
                });
            });

            $('body').on('click', '.saveComment', function() {
                var updatedComment = $('#modalComment').val();

                $.ajax({
                    type: 'POST',
                    url: 'Api/data-put',
                    data: {
                        commentId: commentId,
                        loginId: loginId,
                        comment: updatedComment,
                        action: 'set'
                    },
                    success: function(response) {
                        $('#commentViewModal').modal('hide');
                        myDataTable.ajax.reload(null, false);
                        
                    },
                    error: function() {
                        alert('Error saving comment');
                    }
                });
            });


            $('#changePasswordForm').on('submit', function(e) {
                e.preventDefault();

                var formData = {
                    currentPassword: $('#current-password').val(),
                    newPassword: $('#new-password').val(),
                    confirmPassword: $('#confirm-password').val()
                };

                $.ajax({
                    type: 'POST',
                    url: 'Api/change_password', // Adjust the URL as needed
                    data: formData,
                    success: function(response) {
                         response = JSON.parse(response);
                        // Handle success - close modal, show message, etc.
                        if(response.error) {
                            alert(response.error);
                            return;
                        }else{
                            alert(response.success);
                            $('#changePasswordModal').modal('hide');
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        alert('Error changing password');
                    }
                });
            });

            $('#bulkDelete').on('click', function() {
                var selected = [];
                $('input[name="check[]"]:checked').each(function() {
                    selected.push($(this).val());
                });

                $.ajax({
                        type: 'POST',
                        url: 'Api/bulk_delete', // Adjust the URL as needed
                        data: { selected: selected },
                        success: function(response) {
                            // Handle success - you might want to remove the deleted element from the DOM, for example
                            myDataTable.ajax.reload(null, false); // false means stay on the current page after reload
                
                        },
                        error: function(xhr, status, error) {
                            // Handle error
                            alert('Error deleting item');
                        }
                });
            });

            $('#bulkMove').on('click', function() {
                var selected = [];
                $('input[name="check[]"]:checked').each(function() {
                    selected.push($(this).val());
                });

                $.ajax({
                        type: 'POST',
                        url: 'Api/bulk_move', // Adjust the URL as needed
                        data: { 
                            selected: selected,
                            used: (lastSlug == 'logs') ? 1 : 0 
                        },
                        success: function(response) {
                            // Handle success - you might want to remove the deleted element from the DOM, for example
                            myDataTable.ajax.reload(null, false); // false means stay on the current page after reload
                
                        },
                        error: function(xhr, status, error) {
                            // Handle error
                            alert('Error deleting item');
                        }
                });
            });

            $('body').on('click', '.check', function() {
                var id = $(this).data('id');
                var used = $(this).data('used');

                $.ajax({
                    type: 'POST',
                    url: 'Api/data-put',
                    data: {
                        id: id,
                        used: (used == 1) ? 0 : 1,
                        action: 'set-used'
                    },
                    success: function(response) {
                        myDataTable.ajax.reload(null, false);
                    },
                    error: function() {
                        alert('Error saving comment');
                    }
                });
            });
        });

        function getLastSlug() {
            var path = window.location.pathname; // Get the pathname
            var pathParts = path.split('/'); // Split the path by '/'
            return pathParts.pop() || pathParts.pop(); // Pop the last element (handle trailing '/')
        }

        
    </script>


</body>
</html>
