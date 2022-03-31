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
                                <h5 class="card-title">Status: Technical Documents</h5>
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
                                                                                <h4 id="title" class="text-grey">Upload document</h4>
                                                                                <div id="gallery" class="gallery"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-12">
                                                                            <label for="remarks" class="form-label">Remarks:</label>
                                                                            <textarea name="remarks" id="remarks" cols="30" rows="5" class="form-control"></textarea>
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
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Update Supply Required Date:</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="date-field">
                                                                        <input type="date" name="" id="" class="form-control">
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
                                                        <div class="modal-dialog modal-dialog-centered">
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
                                                                            <label for="" class="form-label">Pic:</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-12">
                                                                            <label for="" class="form-label">Remarks/Objectives:</label>
                                                                            <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-12">
                                                                            <label for="" class="form-label">Reason:</label>
                                                                            <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
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
                                                <div class="circle line circle-green mx-auto"></div>
                                                <label class="text-center">Technical Documents Submission</label>
                                            </div>
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
                                                <label class="text-center mb-1">100%</label>
                                                <div class="circle line circle-green mx-auto"></div>
                                                <label class="text-center">Technical Review</label>
                                            </div>
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
                                                <label class="text-center mb-1">0%</label>
                                                <div class="circle circle-grey mx-auto"></div>
                                                <label class="text-center">Connection Charges</label>
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
                                            <tr>
                                                <td colspan="2">General Information:</td>
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