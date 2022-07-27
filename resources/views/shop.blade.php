@extends('layouts.app')
@section('content')
 <section id="category" >
     <div class="container-fluid">
         <div class="row d-flex">
             <div class="col-lg-2 col-md-3 col-12">

                 <nav class="category w-auto" >
                     <button class="openbtn d-sm-block d-md-none" onclick="openNav()">☰</button>
                     <div class="category-panel" id="categoryPanel">
                         <div class="category-text"> Categories </div>
                         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                         <ul>
                             <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                 </ul>
                             </li>

                             <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                     <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                 </ul>
                             </li>
                             <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                 <ul class="category-sub-manu">
                                     <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                     <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                 </ul>
                             </li>
                         </ul>
                     </div>

                     <div class="d-md-block d-sm-none d-none">
                        <div class="category-text"> Categories </div>
                        <ul>
                            <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                </ul>
                            </li>

                            <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="category-item"> <span>กล่อง</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#" class="category-sub-item"><span>กล่องเล็ก</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องกลาง</span></a></li>
                                    <li><a href="#" class="category-sub-item"><span>กล่องใหญ่</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>ถาด</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>ถาดหลุมอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>ถาดเทฟล่อน</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"class="category-item"> <span>แม่พิมพ์</span> <i class="bi bi-chevron-down icon-dropdown"></i></a>
                                <ul class="category-sub-manu">
                                    <li><a href="#"><span>พิมพ์เค้กอลูมิเนียม</span></a></li>
                                    <li><a href="#"><span>พิมพ์เค้กเทฟล่อน</span></a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                 </nav>
             </div>


             <div class="col-12 col-md-9 col-lg-10 ">
                 <p class="mt-3 me-4 text-end"><span>123</span> Products</p>
                 <div class="row ms-auto me-auto">

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6 ">
                             <a href="/products">
                                 <div class="product-image6">
                                         <img class="pic-1" src="{{asset('image/product1.jpeg')}}" style="height: 200px">
                                 </div>
                                 <div class="product-content">
                                     <h3 class="title">ถาดซิลิโคลน</h3>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                     <div class="price">$11.00
                                         <span>$14.00</span>
                                     </div>
                                 </div>
                             </a>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product2.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product3.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product4.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product1.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product1.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product1.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product1.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product1.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product1.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product1.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product1.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6 ">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product1.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product2.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product3.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product4.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6 ">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product1.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product2.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product3.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-lg-3 col-md-4">
                         <div class="product-grid6">
                             <div class="product-image6">
                                 <a href="#">
                                     <img class="pic-1" src="{{asset('image/product4.jpeg')}}" style="height: 200px">
                                 </a>
                             </div>
                             <div class="product-content">
                                 <h3 class="title"><a href="#">ถาดซิลิโคลน</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, tempora!</p>
                                 <div class="price">$11.00
                                     <span>$14.00</span>
                                 </div>
                             </div>
                             <ul class="social">
                                 <li><a href="" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                 <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </section>

@endsection
