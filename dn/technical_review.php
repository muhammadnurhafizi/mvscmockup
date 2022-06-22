<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">

    <title>Technical Review</title>
</head>
<body class="bg">

    <div class="container py-5">
        <div class="container-fluid">

            <div class="content-header">
                <div class="row">
                    <div class="col-12">
                        <h1>Project Information</h1>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-link float-end text-white btn-md">Logout</button>
                            </div>
                        </div>
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
                                                <label class="text-center mb-1">5/18</label>
                                                <a href="technical_document.php" class="circle line1 circle-grey mx-auto"></a>
                                                <label class="text-center">Technical Documents Submission</label>
                                                <br>
                                            </div>
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
                                                <label class="text-center mb-1">0/18</label>    
                                                <a href="technical_review.php" class="circle line2 circle-grey mx-auto"></a>
                                                <label class="text-center">Technical Review</label>
                                                <br>
                                            </div>
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
                                                <label class="text-center mb-1">0/7</label>
                                                <a href="connection_charges.php" class="circle circle-grey mx-auto"></a>
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
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                            <tbody>
                                                    <tr>
                                                        <h5>Basic Information:</h5>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Tetuan :</p>
                                                        </td>
                                                        <td>
                                                            <p>Supply Required Date :</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Maximum Demand :</p>
                                                        </td>
                                                        <td>
                                                            <p>Project No :</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        <p>Service Request :</p>
                                                        </td>
                                                        <td>
                                                            <p>Developer :</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Description :</p>
                                                        </td>
                                                        <td>
                                                            <p>Consultant :</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Last updated on :</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-12">
                                        <div class="float-end">
                                            <button type="button" class="btn btn-outline btn-green" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Change Tracking
                                            </button>
                                            <form>
                                                <div class="modal fade" id="modal_edit_information">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">General Information:</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row mb-3">
                                                                    <div class="col-12 col-lg-6" >
                                                                        <label for="" class="form-label"><small class="text-muted">TETUAN</small></label>
                                                                        <input type="text" name="" id="" class="form-control" value="Lorem ipsum" >                                          
                                                                    </div>
                                                                    <div class="col-12 col-lg-6" >
                                                                        <label for="" class="form-label"><small class="text-muted">SRD</small></label>
                                                                        <input type="text" name="" id="" class="form-control" value="Lorem ipsum" readonly>                                          
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-12 col-lg-6" >
                                                                        <label for="" class="form-label"><small class="text-muted">MD</small></label>
                                                                        <input type="text" name="" id="" class="form-control" value="Lorem ipsum" readonly>                                           
                                                                    </div>
                                                                    <div class="col-12 col-lg-6" >
                                                                        <label for="" class="form-label"><small class="text-muted">PROJECT NUMBER</small></label>
                                                                        <input type="text" name="" id="" class="form-control" value="Lorem ipsum" readonly>                                           
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-12 col-lg-6" >
                                                                        <label for="" class="form-label"><small class="text-muted">SR</small></label>
                                                                        <input type="text" name="" id="" class="form-control" value="Lorem ipsum" readonly>                                           
                                                                    </div>
                                                                    <div class="col-12 col-lg-6" >
                                                                        <label for="" class="form-label"><small class="text-muted">DEVELOPER</small></label>
                                                                        <input type="text" name="" id="" class="form-control" value="Lorem ipsum" >                                          
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-12 col-lg-6" >
                                                                        <label for="" class="form-label"><small class="text-muted">APPLICATION NUMBER</small></label>
                                                                        <input type="text" name="" id="" class="form-control" value="Lorem ipsum" readonly>                                          
                                                                    </div>
                                                                    <div class="col-12 col-lg-6" >
                                                                        <label for="" class="form-label"><small class="text-muted">CONSULTANT</small></label>
                                                                        <input type="text" name="" id="" class="form-control" value="Lorem ipsum" >                                          
                                                                    </div>
                                                                </div>  
                                                                <div class="row mb-3">
                                                                    <div class="col-12 col-lg-6" >
                                                                        <label for="" class="form-label"><small class="text-muted">LAST UPDATED ON</small></label>
                                                                        <input type="text" name="" id="" class="form-control" value="Lorem ipsum" readonly> 
                                                                    </div>
                                                                </div>                   
                                                                <div class="row mb-3">
                                                                    <div class="col-12" >
                                                                        <label for="" class="form-label"><small class="text-muted">DESCRIPTION</small></label>
                                                                        <textarea name="" id="" rows="5" class="form-control">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci culpa quisquam ratione quas expedita eaque excepturi facere explicabo numquam possimus, illum cupiditate, labore consequatur voluptas fugiat molestiae laudantium perspiciatis minus?</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="d-flex justify-content-around">
                                                                    <button type="button" data-bs-dismiss="modal" class="btn btn-outline btn-green">Cancel</button>
                                                                    <button type="submit" class="btn btn-green-active">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Change Tracking</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Field</th>
                                                                    <th scope="col">Name</th>
                                                                    <th scope="col">Date</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Tetuan</td>
                                                                    <td>Ahmad</td>
                                                                    <td>22 Jul 2022</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Description</td>
                                                                    <td>Albab</td>
                                                                    <td>25 Aug 2022</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline btn-green" data-bs-dismiss="modal">Back</button>
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
                                                <td>Map A <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Approved</td>
                                                <td>1</td>
                                                <td>22 July 2022</td>
                                                <td>25 August 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button>
                                                    | <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Map B <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Approved</td>
                                                <td>1</td>
                                                <td>22 July 2022</td>
                                                <td>25 August 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button>
                                                    | <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Developer/Project Owner Company <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Approved</td>
                                                <td>1</td>
                                                <td>22 July 2022</td>
                                                <td>25 August 2022</td>
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#modal_view_developer_project_owner_company" class="btn btn-link text-blue">View</button>
                                                    | <button class="btn btn-link text-blue">Download</button>

                                                    <form action="">
                                                        <div class="modal fade" id="modal_view_developer_project_owner_company">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Document Name: Developer/Project Owner Company</h5>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="table-responsive">
                                                                                    <table class="table table-bordered text-nowrap">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Submission</th>
                                                                                                <th>Date</th>
                                                                                                <th>Process</th>
                                                                                                <th>Comment</th>
                                                                                                <th>Attachment</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>1</td>
                                                                                                <td>22 Jul 2022</td>
                                                                                                <td>Submission</td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>1</td>
                                                                                                <td>25 Aug 2022</td>
                                                                                                <td>Review</td>
                                                                                                <td>Please provide image</td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <div class="w-100 d-flex justify-content-around">
                                                                            <button type="button" data-bs-dismiss="modal" class="btn btn-outline btn-green mx-auto">Back</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Consultant Appointment Letter <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Approved</td>
                                                <td>1</td>
                                                <td>22 July 2022</td>
                                                <td>25 August 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button>
                                                    | <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Detailed Site Development Plan <span class="text-danger">*</span></td>
                                                <td class="text-red fw-bold">Resubmit</td>
                                                <td>1</td>
                                                <td>22 July 2022</td>
                                                <td>25 August 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button>
                                                    | <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Single Line Diagram <span class="text-danger">*</span></td>
                                                <td class="text-red fw-bold">Resubmit</td>
                                                <td>1</td>
                                                <td>22 July 2022</td>
                                                <td>25 August 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button>
                                                    | <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Location Plan on Meter Panel <span class="text-danger">*</span></td>
                                                <td class="text-red fw-bold">Resubmit</td>
                                                <td>1</td>
                                                <td>22 July 2022</td>
                                                <td>25 August 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button>
                                                    | <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Latest Development Order Plan <span class="text-danger">*</span></td>
                                                <td class="text-red fw-bold">Resubmit</td>
                                                <td>1</td>
                                                <td>22 July 2022</td>
                                                <td>25 August 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button>
                                                    | <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Site Plan with Proposed Sub-Station <span class="text-danger">*</span></td>
                                                <td class="text-red fw-bold">Resubmit</td>
                                                <td>1</td>
                                                <td>22 July 2022</td>
                                                <td>25 August 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button>
                                                     | <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Layout Plan of Sub-Station Building <span class="text-danger">*</span></td>
                                                <td class="text-red fw-bold">Resubmit</td>
                                                <td>1</td>
                                                <td>22 July 2022</td>
                                                <td>25 August 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button>
                                                    | <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Location and Layout Plan of Main Switch <span class="text-danger">*</span></td>
                                                <td class="text-red fw-bold">Resubmit</td>
                                                <td>1</td>
                                                <td>22 July 2022</td>
                                                <td>25 August 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button> 
                                                    | <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Meter Panel/Meter Kiosk/Meter at Gate <span class="text-danger">*</span></td>
                                                <td class="text-red fw-bold">Resubmit</td>
                                                <td>1</td>
                                                <td>22 July 2022</td>
                                                <td>25 August 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button> 
                                                    | <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Substation Land: 1 Copy Borang A</td>
                                                <td class="text-red fw-bold">Resubmit</td>
                                                <td>1</td>
                                                <td>22 July 2022</td>
                                                <td>25 August 2022</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">View</button> 
                                                    | <button class="btn btn-link text-blue">Download</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Substation Land: Bank Guarantee</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Substation Land: 8 Copies Pre-Com</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Substation Land: 1 Copy of Hakmilik</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Power Quality Compliance Declaration</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>MV & HV Metering: Preliminary Metering</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Protection: Relay Setting</td>
                                                <td class="text-grey fw-bold">Not Applicable</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Fire Fighting Document for Attachment</td>
                                                <td class="text-grey fw-bold">Not Applicable</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Surat Ulasan Kebenaran Merancang TNB </td>
                                                <td class="text-grey fw-bold">Not Applicable</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Others</td>
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
                            <div class="card-footer">
                                
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