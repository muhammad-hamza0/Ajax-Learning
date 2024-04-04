<!-- first commit  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ajax Project</title>
</head>
<body>
    <div style="max-width: 1000px; margin: 0 auto;">
        <h1>Ajax Tutorial</h1>
    
        <button id="ajax-load-btn" class="mt-3">Load Data</button>
    
        <table id="students-table" class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>S:no</th>
                    <th>Student Name</th>
                    <th>Student Class</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('#ajax-load-btn').click(function() {
            $.ajax({
                url: 'students-read.php',
                type: 'POST',
                success: function(data) {
                    console.log(data);
                    $('#students-table').find('tbody').append(data);
                }
            })
        })
    })
</script>
</html>