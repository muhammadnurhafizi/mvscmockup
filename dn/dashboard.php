<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">

    <title>Dashboard</title>
</head>
<body class="bg">

    <div class="container py-5">
        <div class="container-fluid">

            <div class="content-header">
                
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
                                            <label class="text-center">Total Projects</label>
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
                                                <th>Application Number</th>
                                                <th>Project ID</th>
                                                <th>Service Request / Notification Number</th>
                                                <th>Status</th>
                                                <th>Project Name</th>
                                                <th>Percentage</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>PRJ-000-006-1726</td>
                                                <td>DPZAC201780</td>
                                                <td>4002200890</td>
                                                <td class="text-green fw-bold">Completed</td>
                                                <td class="text-blue fw-bold">PROJECT TARIFF MV LANDLORD TENANT > 100KWA</td>
                                                <td class="text-blue fw-bold">100%</td>
                                                <td class="text-nowrap">
                                                    <button class="btn btn-link text-blue">Rename</button> | 
                                                    <a href="document_status.php" class="btn btn-link text-blue">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PRJ-000-006-1727</td>
                                                <td>DPZAC201782</td>
                                                <td>4002200811</td>
                                                <td class="text-blue fw-bold">Pending Review</td>
                                                <td class="text-blue fw-bold">PROJECT TARIFF MV SINGLE PREMISE > 100KWA</td>
                                                <td class="text-blue fw-bold">30%</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Rename</button> | 
                                                    <button class="btn btn-link text-blue">View</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PRJ-000-006-1724</td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-red fw-bold">Document Rejected</td>
                                                <td class="text-blue fw-bold">PROJECT TARIFF MV MULTIPLE PREMISE > 100KWA</td>
                                                <td class="text-blue fw-bold">45%</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Rename</button> | 
                                                    <button class="btn btn-link text-blue">View</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PRJ-000-006-1721</td>
                                                <td>DPZAC201999</td>
                                                <td>4002200628</td>
                                                <td class="text-orange fw-bold">Pending Document</td>
                                                <td class="text-blue fw-bold">PROJECT TARIFF MULTIPLE PREMISE < 100KWA</td>
                                                <td class="text-blue fw-bold">0%</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Rename</button> | 
                                                    <button class="btn btn-link text-blue">View</button>
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
    <script src="../js/app.js"></script>
</body>
</html>