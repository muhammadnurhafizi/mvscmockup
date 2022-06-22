<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/app.css">
   

    <title>Dashboard</title>
</head>
<body class="bg">

    <div class="container py-5">
        <div class="container-fluid">
            <div class="content-header">
                <div class="row mb-3">
                    <div class="col-12">
                        <img src="../img/user.png" class="rounded-circle float-end" width="100"/>
                        <h4 class="mt-5 float-end">Ahmad Albab</h4>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">All Project Request</h5>
                            </div>
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-8 d-flex justify-content-around">
                                        <div>
                                            <h1 class="text-center text-purple">10</h1>
                                            <label class="text-center">Total Projects</label>
                                        </div>
                                        <div>
                                            <h1 class="text-center text-purple">6</h1>
                                            <label class="text-center">Draft</label>
                                        </div>
                                        <div>
                                            <h1 class="text-center text-purple">2</h1>
                                            <label class="text-center">In-Progress</label>
                                        </div>
                                        <div>
                                            <h1 class="text-center text-green">2</h1>
                                            <label class="text-center">Completed</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">My Project Status</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-upload">
                                        <thead>
                                            <tr>
                                                <th>Tetuan</th>
                                                <th>SRD</th>
                                                <th>Developer</th>
                                                <th>Last Updated On</th>
                                                <th>Project Number</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>PROJECT TARIFF MV LANDLORD TENANT > 100KVA</td>
                                                <td>10 October 2022 </td>
                                                <td>KV Construction</td>
                                                <td class="fw-bold">6 July 2022</td>
                                                <td>DPZAC201780</td>
                                                <td class="fw-bold">Connection Charges</td>
                                                <td class="text-nowrap">
                                                    <a href="connection_charges.php" class="btn btn-link text-blue">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PROJECT TARIFF MV SINGLE PREMISE > 100KVA</td>
                                                <td>11 November 2022</td>
                                                <td>ABA Hold</td>
                                                <td class="fw-bold">20 June 2022</td>
                                                <td>DPZAC201782</td>
                                                <td class="fw-bold">Technical Document Submission</td>
                                                <td>
                                                <a href="technical_document.php" class="btn btn-link text-blue">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PROJECT TARIFF MV MULTIPLE PREMISE > 100KVA</td>
                                                <td>11 December 2022</td>
                                                <td>Baris Hadapan Sdn Bhd</td>
                                                <td class="fw-bold">4 April 2022</td>
                                                <td>DPZAC201999</td>
                                                <td class="fw-bold">Technical Reviews</td>
                                                <td>
                                                <a href="technical_review.php" class="btn btn-link text-blue">View</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/dee163af04.js" crossorigin="anonymous"></script>
    <script src="../js/app.js"></script>

</body>
</html>