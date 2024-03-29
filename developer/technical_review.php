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
                                    <div class="col-12 col-lg-8">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 d-grid px-0 my-1">
                                                <button data-bs-toggle="modal" data-bs-target="#modal_upload_site_progress_photos" class="btn btn-outline btn-green">Upload Site Progress Photo</button>

                                                <form>
                                                    <input type="file" id="fileElem" multiple onchange="handleFiles(this.files)" hidden>
                                                    <div class="modal fade" id="modal_upload_site_progress_photos">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Upload site progress photos:</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row mb-3">
                                                                        <div class="col-12">
                                                                            <div class="w-100 d-flex justify-content-around">
                                                                                <button type="button" class="btn btn-outline btn-green">Site Photo</button>
                                                                                <button type="button" class="btn btn-outline btn-green">Substation Photo</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-12">
                                                                            <div class="upload-field">
                                                                                <h4 id="title" class="text-grey">Upload photos</h4>
                                                                                <div id="gallery" class="gallery"></div>
                                                                            </div>
                                                                            <small class="text-grey">PNG, JPG and JPEG. Maximum file size is 20MB for each files</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-12">
                                                                            <label for="remarks" class="form-label">Remarks:</label>
                                                                            <textarea name="remarks" id="remarks" cols="30" rows="5" class="form-control"></textarea>
                                                                            <p>1000 characters left</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-12">
                                                                            <label for="progress" class="form-label">Progress/Percentage:</label>
                                                                            <textarea name="progress" id="progress" cols="30" rows="5" class="form-control"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <div class="w-100 d-flex justify-content-around">
                                                                        <button type="button" data-bs-dismiss="modal" class="btn btn-outline btn-green">Cancel</button>
                                                                        <button type="submit" class="btn btn-green-active">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-12 col-lg-4 d-grid px-0 my-1">
                                                <button data-bs-toggle="modal" data-bs-target="#modal_update_supply_required_date" class="btn btn-outline btn-green">Update Supply Required Date</button>

                                                <form>
                                                    <div class="modal fade" id="modal_update_supply_required_date">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Update Supply Required Date:</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row mb-3">
                                                                        <div class="col-12">
                                                                            <input type="datetime-local" name="" id="" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-12">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered text-nowrap">
                                                                                    <thead class="text-center">
                                                                                        <tr>
                                                                                            <th>Version</th>
                                                                                            <th>Supply Required Date</th>
                                                                                            <th>Submission Date</th>
                                                                                            <th>Submitter</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>12 Dec 2021</td>
                                                                                            <td>15 Sep 2021</td>
                                                                                            <td>Ahmad Albab</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>15 Jan 2022</td>
                                                                                            <td>30 Sep 2021</td>
                                                                                            <td>Ahmad Albab</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <p>
                                                                                <small>
                                                                                    Note: The update Supply Required Date submitted will be sent for processing daily at 12:00AM. 
                                                                                    Only the latest update submitted will be sent for processing.  New Supply Required Date can only be set 2 months after the current date.
                                                                                </small>
                                                                               
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <div class="w-100 d-flex justify-content-around">
                                                                        <button type="button" data-bs-dismiss="modal" class="btn btn-outline btn-green">Cancel</button>
                                                                        <button type="submit" class="btn btn-green-active">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-12 col-lg-4 d-grid px-0 my-1">
                                                <button data-bs-toggle="modal" data-bs-target="#modal_schedule_appointment" class="btn btn-outline btn-green">Schedule Appointment</button>

                                                <form>
                                                    <div class="modal fade" id="modal_schedule_appointment">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Schedule Appointment:</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row mb-3">
                                                                        <div class="col-12">
                                                                            <label for="" class="form-label">Appointment Date:</label>
                                                                            <input type="datetime-local" name="" id="" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-12">
                                                                            <label for="" class="form-label">Name:</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-12">
                                                                            <label for="" class="form-label">Contact Number:</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-12">
                                                                            <label for="" class="form-label">Venue:</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-12">
                                                                            <label for="" class="form-label">Remarks</label>
                                                                            <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                                                            <p>1000 characters left</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-12">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered text-nowrap">
                                                                                    <thead class="text-center">
                                                                                        <tr>
                                                                                            <th>Date</th>
                                                                                            <th>Appointment Date</th>
                                                                                            <th>Venue</th>
                                                                                            <th>Status</th>
                                                                                            <th>Remarks</th>
                                                                                            <th>Remarks from TNB</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>10 Jul 2022</td>
                                                                                            <td>22 Jul 2022 10.00 AM</td>
                                                                                            <td>TNB Office</td>
                                                                                            <td>Rejected</td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>15 Jul 2022</td>
                                                                                            <td>25 Aug 2022 10.00 AM</td>
                                                                                            <td>TNB Office</td>
                                                                                            <td>Rejected</td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <p>Note: The appointment request submitted will be sent for processing daily at 12:00AM. Only the latest appoitment request submitted will be sent for processing. Appointment can only be set 7 days after the current date.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <div class="w-100 d-flex justify-content-around">
                                                                        <button type="button" data-bs-dismiss="modal" class="btn btn-outline btn-green col-3">Cancel</button>
                                                                        <button type="button" class="btn btn-green-active float-right">Cancel Appointment</button>
                                                                        <button type="submit" class="btn btn-green-active col-3">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center overflow overflow-auto">
                                        <div class="w-100 row d-flex justify-content-around">
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
                                                <label class="text-center mb-1">4/18</label>
                                                <a href="technical_document.php" class="circle line1 circle-grey mx-auto"></a>
                                                <label class="text-center">Technical Documents Submission</label>
                                                <br>
                                            </div>
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
                                                <label class="text-center mb-1">4/18</label>    
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
                                            <button data-bs-toggle="modal" data-bs-target="#modal_edit_information" class="btn btn-green-active">
                                                Edit Information
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
                                                                        <input type="text" name="" id="" class="form-control" value="Lorem ipsum">                                           
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
                                <div class="row">
                                    <div class="col d-flex justify-content-end">
                                        <button class="btn btn-outline btn-green">Re-submit Documents</button>
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