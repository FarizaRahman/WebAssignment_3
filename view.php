<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact us</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">

        <div class="card mt-5">
          <div class="card-header">
            <h4>Contact Information</h4>
          </div>
          <div class="card-body">

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Message </th>
                </tr>
              </thead>
              <tbody>
                <?php
                $con = mysqli_connect("localhost", "root", "", "web_work");

                $query = "SELECT * FROM info";
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $row) {
                ?>
                    <tr>
                      <td><?= $row['name']; ?></td>
                      <td><?= $row['email']; ?></td>
                      <td><?= $row['phone']; ?></td>
                      <td><?= $row['msg']; ?></td>
                    </tr>
                  <?php
                  }
                } else {
                  ?>
                  <tr>
                    <td colspan="4">No Record Found</td>
                  </tr>
                <?php
                }
                ?>

              </tbody>
            </table>

          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>