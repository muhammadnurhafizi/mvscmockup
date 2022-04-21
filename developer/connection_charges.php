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
                                <h5 class="card-title">Status: Connection Charges</h5>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center overflow overflow-auto">
                                        <div class="w-100 row d-flex justify-content-around">
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
                                                <label class="text-center mb-1">100%</label>
                                                <a href="technical_document.php" class="circle line1 circle-green mx-auto"></a>
                                                <label class="text-center">Technical Documents Submission</label>
                                                <br>
                                            </div>
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
                                                <label class="text-center mb-1">100%</label>   
                                                <a href="technical_review.php" class="circle line2 circle-green mx-auto"></a>
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
                                                <th>Information</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>All Technical Documents Agreed</td>
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
                                                <td>12 July 2022</td>
                                                <td class="text-green fw-bold">Completed</td>
                                            </tr>
                                            <tr>
                                                <td>Connection Charge Ready for Payment</td>
                                                <td>13 July 2022</td>
                                                <td class="text-green fw-bold">Completed</td>
                                            </tr>
                                            <tr>
                                                <td>Connect Charges Amount (RM)</td>
                                                <td>15, 000</td>
                                                <td class="text-green fw-bold">Completed</td>
                                            </tr>
                                            <tr>
                                                <td>Connection Charge Paid</td>
                                                <td>17 Aug 2022</td>
                                                <td class="text-green fw-bold">Completed</td>
                                            </tr>
                                            <tr>
                                                <td>Additional Connect Charges</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Additional Connect Charges Paid</td>
                                                <td></td>
                                                <td></td>
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