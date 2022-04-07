<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">

    <title>Document Status</title>
</head>
<body class="bg">

    <div class="container py-5">
        <div class="container-fluid">

            <div class="content-header">
                <div class="row">
                    <div class="col-12">
                        <h1>Project Information</h1>
                        <h5>Keep up to date with the status of the Technical Document status</h5>
                    </div>
                    <div class="col-12 d-flex align-items-end justify-content-end">
                        <a href="dashboard.php" class="btn btn-outline btn-white">Back to Dashboard</a>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Status: Technical Review</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-5">
                                    <div class="col-12 col-lg-4"></div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center overflow overflow-auto">
                                        <div class="w-100 row d-flex justify-content-around">
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
                                                <label class="text-center mb-1">100%</label>
                                                <div class="circle line1 circle-green mx-auto"></div>
                                                <label class="text-center">Technical Documents Submission</label>
                                                <br>
                                            </div>
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
                                                <label class="text-center mb-1">0%</label>    
                                                <div class="circle line2 circle-grey mx-auto"></div>
                                                <label class="text-center">Technical Review</label>
                                                <br>
                                            </div>
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
                                                <label class="text-center mb-1">0%</label>
                                                <div class="circle circle-grey mx-auto"></div>
                                                <label class="text-center">Connection Charges</label>
                                                <br>
                                            </div>
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
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>Tetuan:</td>
                                                <td>SRD:</td>
                                            </tr>
                                            <tr>
                                                <td>MD:</td>
                                                <td>Project No:</td>
                                            </tr>
                                            <tr>
                                                <td>SR:</td>
                                                <td>Developer:</td>
                                            </tr>
                                            <tr>
                                                <td>Last updated on:</td>
                                                <td>Consultant:</td>
                                                
                                            </tr>
                                            <tr>
                                                <td colspan="2">Description:</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Upload Project Application Documents</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-upload">
                                        <thead>
                                            <tr>
                                                <th>Document Names</th>
                                                <th>Status</th>
                                                <th>Submission No</th>
                                                <th>Submission Date</th>
                                                <th>Review Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Map A</td>
                                                <td class="text-green fw-bold">Approved</td>
                                                <td>2</td>
                                                <td>22 Jul 2022</td>
                                                <td>30 Jul 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button> | 
                                                    <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Map B</td>
                                                <td class="text-green fw-bold">Approved</td>
                                                <td>2</td>
                                                <td>22 Jul 2022</td>
                                                <td>30 Jul 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button> | 
                                                    <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Softcopy AutoCad</td>
                                                <td class="text-green fw-bold">Approved</td>
                                                <td>2</td>
                                                <td>22 Jul 2022</td>
                                                <td>30 Jul 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button> | 
                                                    <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Development Order</td>
                                                <td class="text-green fw-bold">Approved</td>
                                                <td>1</td>
                                                <td>22 Jul 2022</td>
                                                <td>30 Jul 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button> | 
                                                    <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Single Line Diagram</td>
                                                <td class="text-red fw-bold">Resubmit</td>
                                                <td>2</td>
                                                <td>22 Jul 2022</td>
                                                <td>30 Jul 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button> | 
                                                    <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Site Plan</td>
                                                <td class="text-red fw-bold">Resubmit</td>
                                                <td>2</td>
                                                <td>22 Jul 2022</td>
                                                <td>30 Jul 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button> | 
                                                    <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Meter Design & Layout</td>
                                                <td class="text-red fw-bold">Resubmit</td>
                                                <td>2</td>
                                                <td>22 Jul 2022</td>
                                                <td>30 Jul 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button> | 
                                                    <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Substation Layout</td>
                                                <td class="text-red fw-bold">Resubmit</td>
                                                <td>2</td>
                                                <td>22 Jul 2022</td>
                                                <td>30 Jul 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button> | 
                                                    <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>MSB Layout</td>
                                                <td class="text-red fw-bold">Resubmit</td>
                                                <td>2</td>
                                                <td>22 Jul 2022</td>
                                                <td>30 Jul 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button> | 
                                                    <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fire Fighting</td>
                                                <td class="text-orange fw-bold">Not Received</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Barang Maklumat Awal</td>
                                                <td class="text-orange fw-bold">Not Received</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Relay Setting - Protection</td>
                                                <td class="text-orange fw-bold">Not Received</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Borang A & Geran</td>
                                                <td class="text-orange fw-bold">Not Received</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Bank Guarantee</td>
                                                <td class="text-grey fw-bold">Not Applicable</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>PQ Declaration</td>
                                                <td class="text-grey fw-bold">Not Applicable</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Capacitor Bank Installation</td>
                                                <td class="text-grey fw-bold">Not Applicable</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
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