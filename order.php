<?php include('lib/header.php'); ?>
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <div class="container-fluid my-5  d-flex  justify-content-center container-order">
        <div class="card card-1">
            <div class="card-header bg-white">
                <div class="media flex-sm-row flex-column-reverse justify-content-between  ">
                    <div class="col my-auto"> <h4 class="mb-0">Thanks for your Order, <span class="change-color"> Anjali</span> !</h4> </div>
                    <div class="col-auto text-center  my-auto pl-0 pt-sm-4"> <img class="img-fluid my-auto align-items-center mb-0 pt-3"  src="https://i.imgur.com/7q7gIzR.png" width="115" height="115"> </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-between mb-3">
                    <div class="col-auto"> <h6 class="color-1 change-color">Receipt</h6> </div>
                    <div class="col-auto"> <small>Receipt Voucher : 1KAU9-84UIL</small> </div>
                </div>
                <div class="info-client">
                    <button class="btn-client"><p>Adjust information!</p></button>
                </div>
                <div class="client">
                    <p class="cl-1">Name: Minh Phung</p>
                    <p class="cl-1">Address: 3/2 - Hung Loi Distric - CT city</p>
                    <p class="cl-1">Email Address: vmphung126@gmail.com</p>
                    <p class="cl-1">Phone: 093216424</p>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card card-2">
                            <div class="card-body">
                                <div class="media">
                                    <div class="sq align-self-center "> <img class="img-fluid  my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0" src="https://i.imgur.com/RJOW4BL.jpg" width="135" height="135" /> </div>
                                    <div class="media-body my-auto text-right">
                                        <div class="row  my-auto flex-column flex-md-row">
                                            <div class="col my-auto"> <h6 class="mb-3"> Jack lamborghni</h6>  </div>
                                            <div class="col my-auto"> <small>Color : Black</small></div>
                                            <div class="col my-auto"> <small>Quanlity : 1</small></div>
                                            <div class="col my-auto"><h6 class="mb-5">Price  3,600.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-3 ">
                                <div class="row">
                                    <div class="col-md-3 mb-3"> <small> Track Order <span><i class=" ml-2 fa fa-refresh"  aria-hidden="true"></i></span></small> </div>
                                    <div class="col mt-auto">
                                        <div class="progress my-auto"> <div class="progress-bar progress-bar  rounded" style="width: 12%" role="progressbar" aria-valuenow="25" aria-valuemin="0"  aria-valuemax="100"></div> </div>
                                        <div class="media row justify-content-between ">
                                            <div class="col-auto text-right"><span> <small  class="text-right mr-sm-2">Checking</small> <i class="fa fa-circle active"></i> </span></div>
                                            <div class="flex-col"> <span> <small class="text-right mr-sm-2">Out for delivary</small><i class="fa fa-circle active"></i></span></div>
                                            <div class="col-auto flex-col-auto"><small  class="text-right mr-sm-2">Delivered</small><span> <i  class="fa fa-circle"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="row justify-content-between">
                            <div class="col-auto"><p class="mb-1 text-dark"><b>Order Details</b></p></div>
                            <div class="flex-sm-col text-right col"><p class="mb-1"><b>Delivery Charges</b></p></div>
                            <div class="flex-sm-col col-auto"><p class="mb-1">Free</p></div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="flex-sm-col text-right col"><p class="mb-1"> <b>Discount</b></p> </div>
                            <div class="flex-sm-col col-auto"><p class="mb-1">150</p></div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="flex-sm-col text-right col"><p class="mb-1"><b>GST 18%</b></p></div>
                            <div class="flex-sm-col col-auto"><p class="mb-1">843</p></div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="flex-sm-col text-right col"> <p class="mb-1"><b>Total</b></p> </div>
                            <div class="flex-sm-col col-auto"> <p class="mb-1">4,835</p> </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row invoice ">
                    <div class="col"><p class="mb-1"> Invoice Number : 788152</p><p class="mb-1">Invoice Date : 22 Dec,2019</p><p class="mb-1">Recepits Voucher: 18KU-62IIK</p></div>
                </div>
            </div>
            <div class="wrapper-btn">
                <button class="delete-order">Cancel</button>
            </div>
            
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php include('lib/footer.php'); ?>