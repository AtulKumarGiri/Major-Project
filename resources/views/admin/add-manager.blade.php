@extends('admin.home')
@section('title','Add Manager')
@section('page-name')
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <input type="submit" name="" value="Login" /><br />
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="">
                    <div class="" id="" role="">
                        <h3 class="register-heading">Add Manager Form</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Branch Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Father's Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Mother's Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Designation</option>
                                        <option>Manager</option>
                                        <option>Asst. Manager</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone"
                                        class="form-control" placeholder="Your Phone *" value="" />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="Marital Status" value="Married" checked>
                                            <span> Married </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="Marital Status" value="Unmarried">
                                            <span>Unmarried </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="DOB *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="State *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="06" maxlength="06" name="txtEmppin"
                                        class="form-control" placeholder="Pin Code *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Higher Qualification</option>
                                        <option>Graduation</option>
                                        <option>Post Graduation</option>
                                        <option>B.E./B.tech/M.sc./MCA/MBA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Category</option>
                                        <option>General</option>
                                        <option>ST</option>
                                        <option>SC</option>
                                        <option>OBC</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Disability</option>
                                        <option>YES</option>
                                        <option>NO</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="12" maxlength="12" name="txtEmppin"
                                        class="form-control" placeholder="Aadhar Number *" value="" />
                                </div>
                                <div class="File"> <label><h6>Photo</h6></label>
                                    <input type="file"
                                    accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"
                                    value="" />
                                </div>
                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection