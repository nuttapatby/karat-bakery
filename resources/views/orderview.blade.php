@extends('layouts.app')
@section('title')
    Order Detail
@endsection

@section('content')
    <section id="OrderView">
       <div class="container" style="margin-top: 7rem;">
           <div class="row mt-5 mb-4">
               <div class="col-6"><h3 class="ps-0 ps-lg-4">รายละเอียดคำสั่งซื้อ</h3></div>
               <div class="col-6 d-flex justify-content-end ">
                   <a href="{{url('account')}}" class="btn btn-outline-success">Back</a>
               </div>
           </div>

           <div class="row">
               <div class="col-lg-4" style="background-color: #f4dbc9">
                   <h4>ที่อยู่ในการจัดส่ง</h4>
                   <p>ชื่อ: {{$orders->firstname}} {{$orders->lastname}}</p>
                   <small>เบอร์โทร: {{$orders->phone}}</small><br>
                   <small>ที่อยู่จัดส่ง: {{$orders->address}} {{$orders->province}} {{$orders->postal_code}}</small>
               </div>

               <div class=" card col-lg-8 row p-0" style="background-color: #cccccc" id="orderDetails">
                   <div class="card-header">
                       <div class="row">
                           <div class=" col-2 d-flex justify-content-center">Img</div>
                           <div class="col-5">Name</div>
                           <div class="col-2 d-flex justify-content-end">Quantity</div>
                           <div class="col-2 d-flex justify-content-end">Price</div>
                       </div>

                   </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($orders->orderitems as $item)
                                <div class="col-2 mt-2 mb-2 d-flex justify-content-center align-items-center">
                                    <img src="{{asset('storage/'.$item->products->image)}}" style="width: 70px; height: 70px;" alt="Product image">
                                </div>
                                <div class="col-5 d-flex align-items-center">
                                    <p>ชื่อสินค้า {{$item->products->name}}</p>
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