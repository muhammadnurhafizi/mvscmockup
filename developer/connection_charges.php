<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">

    <title>Connection Charges</title>
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
                        <button class="btn btn-outline btn-white">Back to Dashboard</button>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Status: Technical Documents</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-5">
                                    <div class="col-12 col-lg-4"></div>
                                    <div class="col-12 col-lg-8">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 d-grid px-0 my-1">
                                                    <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline btn-green" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                        Upload Site Progress Photo
                                                </button> 
                                                    <!-- Modal -->
                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-black" id="staticBackdropLabel">Upload site progress photos</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body text-black">                                                                                                                               
                                                                    <div>
                                                                        <label for="formFileLg" class="form-label">Upload photos</label>
                                                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <div class="footer" style="text-align:center;margin:auto">    
                                                                            <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                            <button type="button" class="btn btn-success">Submit</button>

                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 d-grid px-0 my-1">
                                                
                                                <button type="button" class="btn btn-outline btn-green" data-bs-toggle="modal" data-bs-target="#staticBackdropDate">
                                                    Update Supply Required Date
                                                </button> 
                                                    <!-- Modal -->
                                                <div class="modal fade" id="staticBackdropDate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-black" id="staticBackdropLabel">Upload site progress photos</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body text-black">                                                                                                                               
                                                                    


                                                                </div>
                                                                <div class="modal-footer">                                                                
                                                                    <div class="row" style="text-align:center;margin:auto">
                                                                        <div class="col">
                                                                            <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        </div>
                                                                        <div class="col">
                                                                            <button type="button" class="btn btn-success">Submit</button>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="col-12 col-lg-4 d-grid px-0 my-1">
                                                <button class="btn btn-outline btn-green">Schedule Appointment</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-around">
                                        <div>
                                            <div class="circle circle-green mx-auto"></div>
                                            <label class="text-center">Technical Documents Submission</label>
                                        </div>
                                        <div>
                                            <div class="circle circle-green mx-auto"></div>
                                            <label class="text-center">Technical Review</label>
                                        </div>
                                        <div>
                                            <div class="circle circle-grey mx-auto"></div>
                                            <label class="text-center">Connection Charges</label>
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
                                                <td>Description:</td>
                                                <td>Project No:</td>
                                            </tr>
                                            <tr>
                                                <td>MD:</td>
                                                <td>Developer:</td>
                                            </tr>
                                            <tr>
                                                <td>Last updated on:</td>
                                                <td>Consultant:</td>
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
                                                <th>Date</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>AI Technical Documents Agreed</td>
                                                <td>13 June 2022</td>
                                                <td class="text-green fw-bold">Completed</td>
                                            </tr>
                                            <tr>
                                                <td>Electrification Project Proposal (Preparation)</td>
                                                <td>13 June 2022</td>
                                                <td class="text-green fw-bold">Completed</td>
                                            </tr>
                                            <tr>
                                                <td>Electrification Project Proposal (Completed)</td>
                                                <td>10 July 2022</td>
                                                <td class="text-green fw-bold">Completed</td>
                                            </tr>
                                            <tr>
                                                <td>Electrification Project Proposal (Approved)</td>
                                                <td>10 July 2022</td>
                                                <td class="text-green fw-bold">Completed</td>
                                            </tr>
                                            <tr>
                                                <td>Connection Charges Ready for Payment</td>
                                                <td>13 July 2022</td>
                                                <td class="text-green fw-bold">Completed</td>
                                            </tr>
                                            <tr>
                                                <td>Connection Charges Amount (RM)</td>
                                                <td>15,000</td>
                                                <td class="text-green fw-bold">Completed</td>
                                            </tr>
                                            <tr>
                                                <td>Connection Charge Paid</td>
                                                <td>17 Aug 2022</td>
                                                <td class="text-green fw-bold">Completed</td>
                                            </tr>
                                            <tr>
                                                <td>Connection Charge Paid</td>
                                                <td>17 Aug 2022</td>
                                                <td class="text-green fw-bold"></td>
                                            </tr>
                                            <tr>
                                                <td>Connection Charge Paid</td>
                                                <td>17 Aug 2022</td>
                                                <td class="text-green fw-bold"></td>
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