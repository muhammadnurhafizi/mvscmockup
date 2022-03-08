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
<<body class="bg">

<div class="container py-5">
    <div class="container-fluid">

        <div class="content-header">
            <div class="row">
                <div class="col-12"></div>
                <div class="col-12 d-flex align-items-end justify-content-end">
                    <button class="btn btn-outline btn-white">Back to Application Status Page</button>
                </div>
            </div>
        </div>

        <div class="content-body">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body fw-bold">My Project Request</div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-around">
                                    <div>
                                        <h3 class="text-center text-primary fw-bold">10</h3>
                                        <label class="text-center">Total Projects</label>
                                    </div>
                                    <div>
                                        <h3 class="text-center text-primary fw-bold">6</h3>
                                        <label class="text-center">Draft</label>
                                    </div>
                                    <div>
                                        <h3 class="text-center text-primary fw-bold">2</h3>
                                        <label class="text-center">In-Progress</label>
                                    </div>

                                    <div>
                                        <h3 class="text-center text-success fw-bold">2</h3>
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
                        <div class="card-body fw-bold">My Project Status</div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-upload">
                                    <thead>
                                        <tr>
                                            <th>Application Number</th>
                                            <th>Project ID</th>
                                            <th>Service Request/ Notification Number</th>
                                            <th>Status</th>
                                            <th>Project Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PRJ-000-005-1726</td>
                                            <td>DPZAC201780</td>
                                            <td>4002200890</td>
                                            <td class="text-success fw-bold">Completed</td>
                                            <td class="text-primary fw-bold">PROJECT TARIFF MV LANDLORD TENANT > 100KVA</td>
                                            <td>
                                                <button type="button" class="btn btn-link">Rename</button>
                                                <button type="button" class="btn btn-link">View</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>PRJ-000-005-1727</td>
                                            <td>DPZAC201782</td>
                                            <td>4002200811</td>
                                            <td class="text-primary fw-bold">Pending Review</td>
                                            <td class="text-primary fw-bold">PROJECT TARIFF MV SINGLE PREMIE 8E>100KVA</td>
                                            <td>
                                                <button type="button" class="btn btn-link">Rename</button>
                                                <button type="button" class="btn btn-link">View</button>
                                            </td>
                                        </tr>

                                            <tr>
                                                <td>PRJ-000-005-1724</td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-danger fw-bold">Document Rejected</td>
                                                <td class="text-primary fw-bold">PROJECT TARIFF MV SINGLE PREMIE 8E>100KVA</td>
                                                <td>
                                                    <button type="button" class="btn btn-link">Rename</button>
                                                    <button type="button" class="btn btn-link">View</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>PRJ-000-005-1721</td>
                                                <td>DPZAC201999</td>
                                                <td>4002200628</td>
                                                <td class="text-warning fw-bold">Pending Document</td>
                                                <td class="text-primary fw-bold">PROJECT TARIFF MV SINGLE PREMIE 8E < 100KVA</td>
                                                <td>
                                                    <button type="button" class="btn btn-link">Rename</button>
                                                    <button type="button" class="btn btn-link">View</button>
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
</body>
</html>