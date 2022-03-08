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
<body>

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
                                                <button class="btn btn-outline btn-green">Upload Site Progress Photo</button>
                                            </div>
                                            <div class="col-12 col-lg-4 d-grid px-0 my-1">
                                                <button class="btn btn-outline btn-green">Update Supply Required Date</button>
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
                                            <div class="circle circle-grey mx-auto"></div>
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
                                                <th>Status</th>
                                                <th>Submission Date</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>Map A</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer"> 
                                                                        <div class="asgd" style="text-allign:center;margin:auto">
                                                                            <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                            <button type="button" class="btn btn-success">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>Map B</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>Softcopy Autocad</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>Development Order</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>Single Line Diagram</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>Site Plan</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>Meter Design and Layout</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>Substation Layout</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>MSB Layout</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>Fire Fighting</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>Barang Maklumat Awal</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>Protection</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>Borang A & Geran</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>Guarantee</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>PO Declaration</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>Capacitor Bank Installation</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>

                                                <tr>
                                                    <td>SR No</td>
                                                    <td class="text-warning fw-bold">Pending Submission</td>
                                                    <td>-</td>
                                                    <td class ="text-center align-middle">
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Upload</button>
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="file" class="form-control" id="customFile" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <p>(*) Mandatory file to be attached</p>
                                        <br>
                                        
                                        <p>Note: Your application will be unsuccessful if:</p>
                                        <p>-List of required documents is incomplete</p>
                                        <p>-Your documents cannot be saved</p>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I have read and agreed as TNB's term of Use, Privacy Policy and Personal Data Protection Policy 
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                i. I hereby acknowledge that I have read and understood the Supply Application terms and condition as provided 
                                                and I agree to all of the terms. 
                                                <br>
                                                ii. I hereby acknowledge that all information given are complete, true and accurate. I understand that TNB shall have the right to report directly 
                                                to The Energy Consumption if the information provided is false. I also understand the possibly that my application will be reworked cancelled if 
                                                the information is inaccurate and this will result in the document of the supply application to the consumer when I am representing. 
                                            </label>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button class="btn btn-outline-secondary me-md-2" type="button">Back</button>
                                                <button class="btn btn-outline-secondary" type="button">Cancel</button>
                                                <button class="btn btn-outline-secondary" type="button">Save as Draft</button>
                                                <button class="btn btn-outline-secondary" type="button">Submit</button>   
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
</body>
</html>