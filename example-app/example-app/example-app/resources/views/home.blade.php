@extends('layout.default')

@section('title','Homepage')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>SE_CAMP_FORM</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">SE_CAMP_FORM</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">ข้อมูลส่วนตัว</h3>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputName">ชื่อ</label>
                                    <input type="name" class="form-control" id="exampleInputName"
                                        placeholder="...  ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputLastName">นามสกุล</label>
                                    <input type="lastname" class="form-control" id="exampleInputLastName"
                                        placeholder="...  ">
                                </div>
                                <div class="form-group">
                                    <label for="dob">วัน/เดือน/ปีเกิด</label>
                                    <input type="date" class="form-control" id="dob" name="dob">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputAge">อายุ</label>
                                    <input type="Age" class="form-control" id="exampleInputAge"
                                        placeholder="...  ">
                                </div>
                                <div class="form-group">
                                    <div> <label>เพศ</label>
                                        <br>
                                        <input id="ชาย" type="radio" name="same_radio">
                                        <label for="">ชาย</label>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                                        <input id="หญิง" type="radio" name="same_radio">
                                        <label for="">หญิง</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">รูป</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose File</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>ที่อยู่ </label>
                                    <textarea class="form-control" rows="3" placeholder="... "></textarea>
                                </div>
                                <div class="form-group">
                                    <label>สีที่ชอบ</label>
                                    <div class="input-group">
                                        <SELECT class="form-control">
                                            <OPTION VALUE=1>สีแดง
                                            <OPTION VALUE=2>สีส้ม
                                            <OPTION VALUE=3>สีเหลือง
                                            <OPTION VALUE=4>สีเขียว
                                            <OPTION VALUE=5>สีฟ้า
                                            <OPTION VALUE=6>สีน้ำเงิน
                                            <OPTION VALUE=7>สีชมพู
                                            <OPTION VALUE=8>สีม่วง
                                            <OPTION VALUE=9>สีน้ำตาล
                                            <option value=10>สีขาว
                                            <option value=10>สีเทา
                                            <option value=10>สีดำ
                                        </SELECT>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div> <label>แนวเพลงที่ชอบ</label>
                                        <br>
                                        <input id="เพื่อชีวิต" type="radio" name="same_radio">
                                        <label for="">เพื่อชีวิต</label>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                                        <input id="ลูกทุ่ง" type="radio" name="same_radio">
                                        <label for="">ลูกทุ่ง</label>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                                        <input id="อื่นๆ" type="radio" name="same_radio">
                                        <label for="">อื่นๆ</label>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">ยินยอมให้เก็บข้อมูล</label>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <button type="submit" class="btn btn-danger float-right">Submit</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
