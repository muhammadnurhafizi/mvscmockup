<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                                                                    <div class="upload-field">
                                                                        <h4 id="title" class="text-grey">Upload document</h4>
                                                                        <div id="gallery" class="gallery"></div>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center overflow overflow-auto">
                                        <div class="w-100 row d-flex justify-content-around">
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
                                                <div class="circle line circle-green mx-auto"></div>
                                                <label class="text-center">Technical Documents Submission</label>
                                            </div>
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
                                                <div class="circle line circle-grey mx-auto"></div>
                                                <label class="text-center">Technical Review</label>
                                            </div>
                                            <div class="col-lg-4 col-12 d-flex flex-column justify-content-center">
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
                                                <th>Submission Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Map A</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Map B</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Softcopy AutoCad</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Development Order</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Single Line Diagram</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Site Plan</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Meter Design & Layout</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Substation Layout</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>MSB Layout</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fire Fighting</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barang Maklumat Awal</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Protection</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Borang A & Geran</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bank Guarantee</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PQ Declaration</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Capacitor Bank Installation</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>SR No</td>
                                                <td class="text-orange fw-bold">Pending Submission</td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-link text-blue">Upload</button>
                                                </td>
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
                                                <button class="btn btn-outline btn-grey">Back</button>
                                            </div>
                                            <div class="col-12 col-lg-3 d-grid px-0 my-1">
                                                <button class="btn btn-outline btn-grey">Cancel</button>
                                            </div>
                                            <div class="col-12 col-lg-3 d-grid px-0 my-1">
                                                <button class="btn btn-outline btn-grey">Save as Draft</button>
                                            </div>
                                            <div class="col-12 col-lg-3 d-grid px-0 my-1">
                                                <button class="btn btn-grey btn-grey-active">Submit</button>
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