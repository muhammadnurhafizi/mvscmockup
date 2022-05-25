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
                                <div class="row mb-3">
                                    <div class="col-12 col-md-4 col-lg-2 mb-3">
                                        <select name="" id="" class="form-select">
                                            <option value="" disabled selected>Basic Info</option>
                                            <option value="">Tetuan</option>
                                            <option value="">SRD</option>
                                            <option value="">MD</option>
                                            <option value="">Project No</option>
                                            <option value="">SR</option>
                                            <option value="">Developer</option>
                                            <option value="">Application Number</option>
                                            <option value="">Consultant</option>
                                            <option value="">Last Updated On</option>
                                            <option value="">Description</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-8 col-lg-10 mb-3">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <button class="btn btn-success">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 col-md-4 col-lg-2 mb-3">
                                        <div class="form-floating">
                                            <select name="" id="" class="form-select">
                                                <option value="" disabled selected>-- Select --</option>
                                                <option value="">North 1</option>
                                                <option value="">North 2</option>
                                                <option value="">Central 1</option>
                                                <option value="">Central 2</option>
                                                <option value="">South 1</option>
                                                <option value="">South 2</option>
                                                <option value="">East</option>
                                            </select>
                                            <label>Zone</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-2 mb-3">
                                        <div class="form-floating">
                                            <select name="" id="" class="form-select">
                                                <option value="" disabled selected>-- Select --</option>
                                                <option value="">Penang</option>
                                                <option value="">Perlis</option>
                                                <option value="">Kedah</option>
                                                <option value="">Perak</option>
                                                <option value="">Selangor</option>
                                                <option value="">PJCJ</option>
                                                <option value="">KL</option>
                                                <option value="">Johor 1</option>
                                                <option value="">Johor 2</option>
                                                <option value="">Melaka</option>
                                                <option value="">Negeri Sembilan</option>
                                                <option value="">Kelantan</option>
                                                <option value="">Pahang</option>
                                                <option value="">Terengganu</option>
                                            </select>
                                            <label>Area</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-2">
                                        
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-2 mb-3">
                                        <div class="form-floating">
                                            <select name="" id="" class="form-select">
                                                <option value="" disabled selected>-- Select --</option>
                                                <option value="">Technical Document Submission</option>
                                                <option value="">Technical Review</option>
                                                <option value="">Connection Charges</option>
                                                <option value="">Completed</option>
                                            </select>
                                            <label>Stages</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-2 mb-3">
                                        <div class="form-floating">
                                            <input type="date" name="" id="" class="form-control">
                                            <label>Start Date</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-2 mb-3">
                                        <div class="form-floating">
                                            <input type="date" name="" id="" class="form-control">
                                            <label>End Date</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <button class="btn btn-success float-end">Download List</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
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
                                                            <a href="document_status.php" class="btn btn-link text-blue">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PROJECT TARIFF MV SINGLE PREMISE > 100KVA</td>
                                                        <td>11 November 2022</td>
                                                        <td>ABA Hold</td>
                                                        <td class="fw-bold">20 June 2022</td>
                                                        <td>DPZAC201782</td>
                                                        <td class="fw-bold">Technical Document Resubmission</td>
                                                        <td>
                                                            <button class="btn btn-link text-blue">View</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PROJECT TARIFF MV MULTIPLE PREMISE > 100KVA</td>
                                                        <td>11 December 2022</td>
                                                        <td>Baris Hadapan Sdn Bhd</td>
                                                        <td class="fw-bold">4 April 2022</td>
                                                        <td>DPZAC201999</td>
                                                        <td class="fw-bold">Technical Review</td>
                                                        <td>
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

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/app.js"></script>
</body>
</html>