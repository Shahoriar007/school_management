@extends('master')
@section('onlineAdmission')    
    

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url(assets/img/shape/6.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Notices</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Notices</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


    <div class="notice-table default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 overflow-auto">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead style="background-color: #016938; color: #fff">
                            <tr>
                                <th style="width:34px;">SN</th>
                                <th style="width:645px;">Title</th>
                                <th style="width: 151px;">Published</th>
                                <th style="width: 50px">File</th>
                                <th style="width: 50px">Download</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Final Exam Schedule-2019 For Grade (One , Two , Three , Four , Six , Seven , Nine)</td>
                                <td>Date</td>
                                <td>View</td>
                                <td>Download</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection