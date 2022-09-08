@extends('layouts.app')
@section('title')
    Account
@endsection
@section('content')
    <section id="accountProfile" class="account_profile" style="margin-top: 7rem">
        <div class="container">
            <div class="col-12 d-flex justify-content-between">
                <h3>สวัสดีคุณ <span>{{ Auth::user()->firstname }}.</span></h3>

                <div class="sign-out"> {{-- Sign out--}}
                    <form method="POST" action="{{route("logout")}}">
                        @csrf
                        <button type="submit" class="btn logout" style="text-decoration: underline; border: none">Logout</button>
                    </form>
                </div>
            </div>

            <div class="col-12 mt-3">
                <div class="row d-flex">
                    {{-- User Information --}}
                    <div class="col-lg-5 ">
                        <div class="row">
                            <div class="text-center mt-3">
                                <h3>ข้อมูลส่วนตัว</h3>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-2 d-flex justify-content-center align-items-center">
                                                <i class="bi bi-person-circle" style="font-size: 40px"></i>
                                            </div>
                                            <div class="col-10 row align-items-center">
                                                <h5 >email :</h5>
                                                <h5 style="font-weight: 400"> {{Auth::user()->email}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow mt-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-2 d-flex justify-content-center align-items-center">
                                                <i class="bi bi-unlock" style="font-size: 40px"></i>
                                            </div>
                                            <div class="col-10 row align-items-center">
                                                <h5 >password :</h5>
                                                <a href="javascript:void(0)">เปลี่ยนรหัสผ่าน</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow mt-3">
                                    <div class="card-body">
                                        @foreach($user as $item)
                                            <div class="row">
                                                <div class="col-2 d-flex justify-content-center align-items-center">
                                                    <i class="bi bi-house-door" style="font-size: 40px"></i>
                                                </div>
                                                <div class="col-10 row align-items-center">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 >Address :</h5>
                                                    </div>
                                                        <h6 style="font-weight: 200;"><span style="font-weight: 300;">ชื่อ : </span>{{$item->firstname}} {{$item->lastname}}</h6>
                                                        <h6 style="font-weight: 200;"><span style="font-weight: 300;">ที่อยู่ : </span>{{$item->address_line1}} {{$item->city}} {{$item->postal_code}}</h6>
                                                        <h6 style="font-weight: 200;"><span style="font-weight: 300;">โทรศัพท์ : </span>{{$item->phone_no}}</h6>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>

                                    @if(\Illuminate\Support\Facades\DB::table('user_addresses')->where('user_id',Auth::id())->exists())
                                        {{-- Edit Address --}}
                                        <button type="button " value="{{Auth::user()->id}}" class="btn btn-outline-secondary edit-address" data-bs-toggle="modal" data-bs-target="#editAddress"><i class="bi bi-pencil-square me-1"></i>แก้ไข</button>
                                    @else
                                        {{-- Create Address --}}
                                        <a type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#createAddress">เพิ่มที่อยู่</a>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Start Create Address Modal --}}
                    <div class="modal fade" id="createAddress" tabindex="-1" aria-labelledby="createAddressLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{url('create-address')}}" method="POST">
                                    {{csrf_field()}}
                                    <div class="modal-header ">
                                        <h4 class="modal-title" style="font-weight: 400;" id="createAddressLabel">เพิ่มที่อยู่</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            <div class="row checkout-form">
                                                <div class="col-12 mb-2">
                                                    <label for="address">ที่อยู่</label>
                                                    <textarea type="text" class="form-control" name="address" placeholder="ที่อยู่" required=""></textarea>
                                                    <div class="invalid-feedback">
                                                        Please enter your shipping address.
                                                    </div>
                                                </div>

                                                <div class="col-6 mb-2">
                                                    <label for="province">จังหวัด</label>
                                                    <input type="text" class="form-control" name="province" placeholder="จังหวัด" required="">
                                                    <div class="invalid-feedback">
                                                        Province required.
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <label for="zip">รหัสไปรษณีย์</label>
                                                    <input type="text" class="form-control" name="zip" placeholder="รหัสไปรษณีย์" required="">
                                                    <div class="invalid-feedback">
                                                        Zip code required.
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <label for="country">ประเทศ</label>
                                                    <input type="text" class="form-control" name="country" placeholder="ประเทศ" required="">
                                                    <div class="invalid-feedback">
                                                        Country required.
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <label for="phone_no">โทรศัพท์</label>
                                                    <input type="tel" class="form-control" name="phone" placeholder="โทรศัพท์" required="">
                                                    <div class="invalid-feedback">
                                                        Phone number required.
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- End Create Address Modal --}}

                    {{-- Start Edit Address Modal --}}
                    <div class="modal fade" id="editAddress" tabindex="-1" aria-labelledby="editAddressLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header ">
                                    <h4 class="modal-title" style="font-weight: 400;" id="createAddressLabel">แก้ไขที่อยู่</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{url('update-address')}}" method="POST" id="editForm">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" id="user_id" name="user_id">
                                    <div class="modal-body">
                                            <div class="row checkout-form">
                                                <div class="col-6 mb-2">
                                                    <label for="firstName">ชื่อ</label>
                                                    <input type="text" class="form-control" id="e_fname" name="e_fname" placeholder="ชื่อ" required="">
                                                    <div class="invalid-feedback">
                                                        Valid first name is required.
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <label for="lastName">นามสกุล</label>
                                                    <input type="text" class="form-control" id="e_lname" name="e_lname" placeholder="นามสกุล" required="">
                                                    <div class="invalid-feedback">
                                                        Valid last name is required.
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="mb-2">
                                                            <label for="address">ที่อยู่</label>
                                                            <textarea type="text" class="form-control" id="e_address" name="e_address" placeholder="ที่อยู่" required=""></textarea>
                                                            <div class="invalid-feedback">
                                                                Please enter your shipping address.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-6 mb-2">
                                                    <label for="province">จังหวัด</label>
                                                    <input type="text" class="form-control" id="e_city" name="e_city" placeholder="จังหวัด" required="">
                                                    <div class="invalid-feedback">
                                                        Province required.
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <label for="zip">รหัสไปรษณีย์</label>
                                                    <input type="text" class="form-control" id="e_zip" name="e_zip" placeholder="รหัสไปรษณีย์" required="">
                                                    <div class="invalid-feedback">
                                                        Zip code required.
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <label for="country">ประเทศ</label>
                                                    <input type="text" class="form-control" id="e_country" name="e_country" placeholder="ประเทศ" required="">
                                                    <div class="invalid-feedback">
                                                        Country required.
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <label for="phone_no">โทรศัพท์</label>
                                                    <input type="tel" class="form-control" id="e_phone" name="e_phone" placeholder="โทรศัพท์" required="">
                                                    <div class="invalid-feedback">
                                                        Phone number required.
                                                    </div>
                                                </div>

                                            </div>
                                    </div>
                                    <div class="modal-footer">
{{--                                        <div class="me-auto">--}}
{{--                                            <button type="button" class="btn btn-sm btn-danger">Delete</button>--}}
{{--                                        </div>--}}
                                        <div class="ms-auto">
                                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- End Edit Address Modal --}}

                    {{-- Order Detail--}}
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="text-center mt-5 mt-lg-3">
                                <h3>ประวัติการสั่งซื้อ</h3>
                            </div>
                            <div class="card shadow mt-2" style="max-height: 420px; overflow-y: scroll;">
                                <div class="row">
                                    <div class="col-md-12">
                                        @foreach( $order->reverse() as $item)
                                        <div class="card-body mt-2 mb-2" style="border: 3px solid #f4dbc9">
                                            <div class="row m-0">
                                                <div class="col-6 p-0 text-start row" style="height: 30px; line-height: 1">
                                                    <p style="font-weight: 400">หมายเลขคำสั่งซื้อ: <span>1234</span><br> <small style="color: #5c636a">วันที่สั่งซื้อ: {{ date('d/m/Y', strtotime($item->created_at)) }}</small></p>

                                                </div>
                                                <div class="col-6 p-0 text-end" style="height: 30px">
                                                    <p style="font-weight: 300">สถานะ : <span>{{$item->status == '0' ? 'รอการจัดสั่ง' : 'จัดส่งสำเร็จ'}}</span></p>
                                                </div>
                                                <hr>
                                                <div class="col-12 mb-2" style="border-bottom: 1px solid #ccc">
                                                    <h3 class="text-center"></h3>
                                                    <div class="col-3"></div>
                                                    <div class="col-6">
                                                        <h6></h6>
                                                        <small></small>
                                                    </div>
                                                    <div class="col-3"></div>
                                                </div>
                                                <div class="col-6 p-0 text-start" style="height: 30px">
                                                    <p style="font-weight: 300">ยอดคำสั่งซื้อทั้งหมด: <span style="font-size: 20px">&#3647;{{$item->total}}</span></p>
                                                </div>
                                                <div class="col-6 text-end" style="height: 30px">
                                                    <a href="{{ url('account/order/'.$item->id) }}"  class="btn btn-sm btn-outline-primary">ดูรายละเอียด</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
