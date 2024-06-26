@extends('layouts.app')
@section('title')
    Order Detail
@endsection

@section('content')
    <section id="OrderView">
       <div class="container" style="margin-top: 7rem;">
           <div class="row mt-5 mb-4">
               <div class="col-6"><h3 class="ps-0 ps-lg-4">รายละเอียดคำสั่งซื้อ</h3></div>
{{--               <div class="col-6 d-flex justify-content-end ">--}}
{{--                   <a href="{{url('account')}}" class="btn btn-outline-success">Back</a>--}}
{{--               </div>--}}
           </div>


           <div class="row">
               <div class="card col-12" style="background-color: #efefef; border: none ;">
                   <div class="card-body" style="height: 40px; padding: 0">
                       <div class="float-start me-2 mt-2">

                           <p>หมายเลขคำสั่งซื้อ: <span>{{$orders->order_no}}</span></p>
                       </div>
                       <div class="float-end  ms-2 mt-1  d-flex">
{{--                           <p class="mt-0" style="font-weight: 300">สถานะ : <span>{{$orders->status == '0' ? 'รอการจัดสั่ง' : 'จัดส่งสำเร็จ'}}</span></p>--}}
                           <a href="{{url('account')}}" class="btn btn-sm btn-outline-secondary"><i class="bi bi-arrow-bar-left"></i>ย้อนกลับ</a>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4" style="background-color: #FAFAFA;">
                   <div class="mt-3 mb-3">
                       <h4>ที่อยู่ในการจัดส่ง</h4>
                       <h5 style="margin-top: 20px">ชื่อ: <small>{{$orders->firstname}} {{$orders->lastname}}</small></h5>
                       <small>เบอร์โทร: {{$orders->phone}}</small><br>
                       <small>ที่อยู่จัดส่ง: {{$orders->address}} {{$orders->province}} {{$orders->postal_code}}</small>
                   </div>
                   <hr>
                   <div class="mt-3 mb-3">
                       <h5>หมายเลขพัสดุ | <small>{{$orders->tracking_no}}</small></h5>
                       @switch($orders->message)
                           @case('flash')
                           <p>บริษัทขนส่ง : <span style="font-size: 17px">{{$orders->message}}</span> <a href="https://www.flashexpress.co.th/fle/tracking" class="btn btn-sm btn-danger float-end me-4 shadow-sm">ติดตามพัสดุ</a></p>
                           @break
                           @case('kerry')
                           <p>บริษัทขนส่ง : <span style="font-size: 17px">{{$orders->message}}</span> <a href="https://th.kerryexpress.com/th/track/" class="btn btn-sm btn-danger float-end me-4 shadow-sm">ติดตามพัสดุ</a></p>
                           @break
                           @case('ems')
                           <p>บริษัทขนส่ง : <span style="font-size: 17px">{{$orders->message}}</span> <a href="https://track.thailandpost.co.th/" class="btn btn-sm btn-danger float-end me-4 shadow-sm">ติดตามพัสดุ</a></p>
                           @break
                       @endswitch
                   </div>
               </div>

               <div class="card col-lg-8 p-0" style="background-color: #fff" id="orderDetails">
                   <div class="card-header">
                       <div class="row">
                           <div class=" col-2 d-flex justify-content-center"></div>
                           <div class="col-5">ชื่อสินค้า</div>
                           <div class="col-2 d-flex justify-content-end">จำนวน</div>
                           <div class="col-2 d-flex justify-content-end">ราคา</div>
                       </div>

                   </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($orders->orderitems as $item)
                                <div class="col-2 mt-2 mb-2 d-flex justify-content-center align-items-center">
                                    <img src="{{asset('storage/'.$item->products->image)}}" style="width: 70px; height: 70px;" alt="Product image">
                                </div>
                                <div class="col-5 d-flex align-items-center">
                                    <p>{{$item->products->name}}</p>
                                </div>
                                <div class="col-2 d-flex align-items-center justify-content-end">
                                    <p>{{$item->quantity}}</p>
                                </div>
                                <div class="col-2 d-flex align-items-center justify-content-end">
                                    <p>{{$item->price}}&#3647;</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                   <div class="card-footer">
                       <div class="row">
                           <div class="col-12 mt-2 d-flex justify-content-end" style="border-bottom: 1px dotted #000000">
                               <p style="font-size: 14px">ยอดคำสั่งซื้อทั้งหมด <span>&#3647;{{$orders->total}}</span> </p>
                           </div>
                           <div class="col-12 mt-2 d-flex justify-content-end">
                               <p style="font-size: 14px">ช่องทางการชำระเงิน <span>credit/debit</span> </p>
                           </div>
                       </div>

                   </div>
               </div>

           </div>
       </div>
    </section>
@endsection