<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../css/app.css">
    

    <title>Technical Document</title>
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
                                <h5 class="card-title">Status: Technical Documents Submission</h5>
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
                                                                                    Only the latest update submitted will be sent for processing.
                                                                                </small>
                                                                                <br>
                                                                                <small>
                                                                                    New Supply Required Date can only be set 2 months after the current date.
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
                                                        <div class="modal-dialog modal-dialog-centered modal-lg ">
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
                                                                            <label for="" class="form-label">Time:</label>
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
                                                <label class="text-center mb-1">0%</label>
                                                <a href="technical_document.php" class="circle line1 circle-grey mx-auto"></a>
                                                <label class="text-center">Technical Documents Submission</label>
                                                <br>
                                            </div>
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
                                                <label class="text-center mb-1">0%</label>    
                                                <a href="technical_review.php" class="circle line2 circle-grey mx-auto"></a>
                                                <label class="text-center">Technical Review</label>
                                                <br>
                                            </div>
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
                                                <label class="text-center mb-1">0%</label>
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
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <h5>General Information:</h5>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <small class="text-muted">TETUAN</small>
                                                    <p>Lorem ipsum</p>
                                                </td>
                                                <td>
                                                    <small class="text-muted">SRD</small>
                                                    <p>Lorem ipsum</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <small class="text-muted">MD</small>
                                                    <p>Lorem ipsum</p>
                                                </td>
                                                <td>
                                                    <small class="text-muted">Project No</small>
                                                    <p>Lorem ipsum</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <small class="text-muted">SR</small>
                                                    <p>Lorem ipsum</p>
                                                </td>
                                                <td>
                                                    <small class="text-muted">Developer</small>
                                                    <p>Lorem ipsum</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <small class="text-muted">Application Number</small>
                                                    <p>Lorem ipsum</p>
                                                </td>
                                                <td>
                                                    <small class="text-muted">Consultant</small>
                                                    <p>Lorem ipsum</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <small class="text-muted">Last updated on</small>
                                                    <p>Lorem ipsum</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <small class="text-muted">Description</small>
                                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam molestiae, nesciunt eum reiciendis, accusamus nostrum officia sequi rem deserunt totam ab. Temporibus consectetur officiis possimus quis sapiente consequuntur esse nemo?</p>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td colspan="2">
                                                <button data-bs-toggle="modal" data-bs-target="#modal_edit_information" class="btn btn-green-active float-end">Edit Information</button>
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
                                            </td>
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
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Map A <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Uploaded</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Delete</button>
                                                    | <button data-bs-toggle="modal" data-bs-target="#modal_form_map_a" class="btn btn-link text-blue">Submit</button>

                                                    <form action="">
                                                        <div class="modal fade text-start" id="modal_form_map_a">
                                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Document Name: Map A</h5>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Address of Installation</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Site Location (Lot & Mk No.)</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Single Tenancy or Multi-Tenanted Premise</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Type of Premise</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Total Gross Built-In Floor Area</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Total Land Area</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Name of Architect</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Address</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Telephone No.</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Fax No.</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Email Address</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Name of Surveyor</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Address</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Telephone No.</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Fax No.</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Email Address</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Name of Owner/Developer</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Address</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Telephone No.</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Fax No.</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Email Address</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Name of Consultant/Engineer</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Address</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Telephone No.</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Fax No.</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Email Address</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Name of Electrical Contractor</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Address</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Telephone No.</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Fax No.</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Email Address</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Date Supply Required (Final) MD (Kw)</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Date Supply Required (Final)</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
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
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Map B <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Uploaded</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Delete</button>
                                                    | <a class="btn btn-link text-blue" data-bs-toggle="modal" href="#modal_view_building" role="button">Submit</a>

                                                    <!-- Modal view building -->
                                                    <div class="modal fade" id="modal_view_building" aria-hidden="true" aria-labelledby="modal_view_building_label" tabindex="-1">
                                                        <div class="modal-dialog modal-dialog-centered  modal-xl" >
                                                            <div class="modal-content">
                                                                <div class="modal-header d-block">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h5 class="modal-title text-start" id="modal_view_building_label">Building List</h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <div class="justify-content-between d-flex align-items-end">
                                                                                <h6 class="modal-title mb-0">Add New Building</h6>
                                                                                <button class="btn btn-sm btn-green-active rounded-circle" data-bs-target="#modal_add_building" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="fas fa-plus"></i></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered table-upload">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Number</th>
                                                                                            <th>Building Name</th>
                                                                                            <th>Action</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Tower A</td>
                                                                                            <td>
                                                                                            <a class="btn btn-link text-blue" data-bs-toggle="modal" href="#modal_view_msb" role="button">View</a>
                                                                                                | <button data-bs-target="#modal_add_building" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-link text-blue">Edit</button>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Tower B</td>
                                                                                            <td>
                                                                                                <button class="btn btn-link text-blue">View</button>
                                                                                                | <button class="btn btn-link text-blue">Edit</button>
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

                                                    <!-- Modal add/edit building -->
                                                    <form action="">
                                                        <div class="modal fade text-start" id="modal_add_building" aria-hidden="true" aria-labelledby="modal_add_building_label" tabindex="-1">
                                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="modal_view_building_label">Building Details</h5>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <label class="col-sm-2 col-form-label ">Building Name</label>
                                                                                <div class="col-sm-10">
                                                                                    <input  class="form-control">
                                                                                </div>
                                                                            </div> 
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="w-100 d-flex justify-content-around">
                                                                                <button  data-bs-target="#modal_view_building" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-outline btn-green" type="button">Cancel</button>
                                                                                <button type="submit" class="btn btn-green-active">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    
                                                    <!-- Modal view msb -->
                                                    <div class="modal fade" id="modal_view_msb" aria-hidden="true" aria-labelledby="modal_view_msb_label" tabindex="-1">
                                                        <div class="modal-dialog modal-dialog-centered  modal-xl" >
                                                            <div class="modal-content">
                                                                <div class="modal-header d-block">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h5 class="modal-title text-start" id="modal_view_msb_label">Building Name: Tower A</h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h5 class="modal-title text-start">MSB List</h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <div class="justify-content-between d-flex align-items-end">
                                                                                <h6 class="modal-title mb-0">Add New MSB</h6>
                                                                                <button class="btn btn-sm btn-green-active rounded-circle" data-bs-target="#modal_add_msb" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="fas fa-plus"></i></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered table-upload">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Number</th>
                                                                                            <th>MSB Name</th>
                                                                                            <th>Action</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>MSB A</td>
                                                                                            <td>
                                                                                            <a class="btn btn-link text-blue" data-bs-toggle="modal" href="#modal_view_premis" role="button">View</a>
                                                                                                | <button data-bs-target="#modal_add_msb" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-link text-blue">Edit</button>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>MSB B</td>
                                                                                            <td>
                                                                                                <button class="btn btn-link text-blue">View</button>
                                                                                                | <button class="btn btn-link text-blue">Edit</button>
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

                                                    <!-- Modal add/edit msb -->
                                                    <form action="">
                                                        <div class="modal fade text-start" id="modal_add_msb" aria-hidden="true" aria-labelledby="modal_add_msb_label" tabindex="-1">
                                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="modal_view_msb_label">MSB Details</h5>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <label class="col-sm-2 col-form-label ">MSB Name</label>
                                                                                <div class="col-sm-10">
                                                                                    <input  class="form-control">
                                                                                </div>
                                                                            </div> 
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="w-100 d-flex justify-content-around">
                                                                                <button  data-bs-target="#modal_view_msb" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-outline btn-green" type="button">Cancel</button>
                                                                                <button type="submit" class="btn btn-green-active">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    
                                                    <!-- Modal view premis -->
                                                    <div class="modal fade" id="modal_view_premis" aria-hidden="true" aria-labelledby="modal_view_premis_label" tabindex="-1">
                                                        <div class="modal-dialog modal-dialog-centered  modal-xl" >
                                                            <div class="modal-content">
                                                                <div class="modal-header d-block">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h5 class="modal-title text-start" id="modal_view_premis_label">MSB Name: MSB A</h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h5 class="modal-title text-start">Premise List</h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <div class="justify-content-between d-flex align-items-end">
                                                                                <h6 class="modal-title mb-0">Add New Premise</h6>
                                                                                <button class="btn btn-sm btn-green-active rounded-circle" data-bs-target="#modal_add_premis" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="fas fa-plus"></i></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered table-upload">
                                                                                <thead>
                                                                                        <tr>
                                                                                            <th>Number</th>
                                                                                            <th>Premise Name</th>
                                                                                            <th>Action</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>Premise A</td>
                                                                                            <td>
                                                                                                <button data-bs-target="#modal_add_premis" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-link text-blue">Edit</button>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>Premise B</td>
                                                                                            <td>
                                                                                                <button class="btn btn-link text-blue">Edit</button>
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

                                                    <!-- Modal add/edit premis -->
                                                    <form action="">
                                                        <div class="modal fade text-start" id="modal_add_premis" aria-hidden="true" aria-labelledby="modal_add_premis_label" tabindex="-1">
                                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="modal_view_premis_label">Premise Details</h5>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Premise Name</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">No of Units</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Tariff</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Total Connected Load (kW)/Unit</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Individual Coincident Factor</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">kWMD/Unit</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Total kWMD</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Supply Connection Scheme (Underground/Overhead)</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Voltage Level</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">No of Meters</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">Meter Type</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-3">
                                                                            <label class="col-sm-4 col-form-label ">CT Size (if applicable)</label>
                                                                            <div class="col-sm-8">
                                                                                <input  class="form-control">
                                                                            </div>
                                                                        </div> 
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <div class="w-100 d-flex justify-content-around">
                                                                            <button  data-bs-target="#modal_view_premis" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-outline btn-green" type="button">Cancel</button>
                                                                            <button type="submit" class="btn btn-green-active">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Developer/Project Owner Company <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Uploaded</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Delete</button>
                                                    | <button data-bs-toggle="modal" data-bs-target="#modal_upload_1" class="btn btn-link text-blue">Upload</button>

                                                    <form action="">
                                                        <div class="modal fade" id="modal_upload_1">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Upload Document</h5>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <p class="text-start">Document Name: Developer/Project Owner Company</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="upload-field">
                                                                                    <h4 class="text-grey">Upload document</h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <p class="text-start text-grey">
                                                                                    <small>PNG, JPG, JPEG, PDF and DWG only. Maximum file size is 20MB for each files.</small>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <p class="text-start">Remarks</p>
                                                                                <textarea rows="5" cols="55">
                                                                                </textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <p class="text-start mb-0">
                                                                                    Note: The documents submitted will be sent for processing daily at 12.00AM. 
                                                                                    Only the latest documents submitted will be sent for processing.
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
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Consultant Appointment Letter <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Uploaded</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Delete</button>
                                                    | <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Detailed Site Development Plan <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Uploaded</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Delete</button>
                                                    | <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Single Line Diagram <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Uploaded</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Delete</button>
                                                    | <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Location Plan on Meter Panel <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Uploaded</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Delete</button>
                                                    | <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Latest Development Order Plan <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Uploaded</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Delete</button>
                                                    | <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Site Plan with Proposed Sub-Station <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Uploaded</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Delete</button>
                                                    | <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Layout Plan of Sub-Station Building <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Uploaded</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Delete</button>
                                                    | <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Location and Layout Plan of Main Switch <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Uploaded</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Delete</button>
                                                    | <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Meter Panel/Meter Kiosk/Meter at Gate <span class="text-danger">*</span></td>
                                                <td class="text-green fw-bold">Uploaded</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Delete</button>
                                                    | <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Substation Land: 1 Copy Borang A</td>
                                                <td class="text-green fw-bold">Uploaded</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Delete</button>
                                                    | <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Substation Land: Bank Guarantee</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
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
                                            </tr>
                                            <tr>
                                                <td>Substation Land: 1 Copy of Hakmilik</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
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
                                            </tr>
                                            <tr>
                                                <td>MV & HV Metering: Preliminary Metering</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Protection: Relay Setting</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Fire Fighting Document for Attachment</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Surat Ulasan Kebenaran Merancang TNB </td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Others</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <p>(*) Mandatory file to be attached</p>
                                        <br>
                                        <p>Note: Your application will be unsuccessful if:</p>
                                        <ul>
                                            <li>List of required documents is incomplete</li>
                                            <li>Your documents cannot be read</li>
                                        </ul>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="checkbox">
                                            <label>I have read and agreed to TNB's Terms of Use, Privacy Policy, Anti-Spam Policy and Personal Data Protection Policy</label>
                                        </div>
                                        <div class="form-group d-flex">
                                            <input type="checkbox">
                                            <label>
                                                <ol class="ps-4 list-roman">
                                                    <li>
                                                        I hereby acknowledge that I have read and understood the Supply Application terms and condition 
                                                        as provided and I agree to all of the terms.
                                                    </li>
                                                    <li>
                                                        I hereby acknowledge that all information given are complete, true and accurate. I understand 
                                                        that TNB shall have the right to report directly to The Energy Consumption if the information 
                                                        provided is false. I also understand the possibly that my application will be reworked cancelled 
                                                        if the information is inaccurate and this will result in the document of the supply application 
                                                        to the consumer when I am representing.
                                                    </li>
                                                </ol>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <div class="row">
                                    <div class="col-12 col-lg-6"></div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-12 col-lg-3 d-grid px-0 my-1">
                                                <!-- this button will redirect to dashboard-->
                                                <button class="btn btn-outline btn-grey">Back</button>
                                            </div>
                                            <div class="col-12 col-lg-3 d-grid px-0 my-1">
                                                <!-- this button will revert all changes made -->
                                                <button class="btn btn-outline btn-grey">Cancel</button>
                                            </div>
                                            <div class="col-12 col-lg-3 d-grid px-0 my-1">
                                                <!-- this button will save the data without sending to ICPP -->
                                                <a href="technical_document.php" class="btn btn-outline btn-grey">Save as Draft</a>
                                            </div>
                                            <div class="col-12 col-lg-3 d-grid px-0 my-1">
                                                <!-- this button will save and send data to ICPP -->
                                                <a href="technical_review.php" class="btn btn-grey btn-grey-active">Submit</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src="../js/app.js"></script>
</body>
</html>