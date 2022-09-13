$(document).ready(function () {
    $('.omise-btn').click(function (e) {
        e.preventDefault();

       var c_firstname = $('.c_firstname').val();
       var c_lastname = $('.c_lastname').val();
       var c_address = $('.c_address').val();
       var c_city = $('.c_city').val();
       var c_zip = $('.c_zip').val();
       var c_country = $('.c_country').val();
       var c_phone = $('.c_phone').val();

       if (!c_firstname){
           fname_error = "First Name is required";
           $('#fname_error').html('');
           $('#fname_error').html(fname_error);
       } else {
           fname_error = "";
           $('#fname_error').html('');
       }

        if (!c_lastname){
            lname_error = "Last Name is required";
            $('#lname_error').html('');
            $('#lname_error').html(lname_error);
        } else {
            lname_error = "";
            $('#lname_error').html('');
        }

        if (!c_address){
            address_error = "Address is required";
            $('#address_error').html('');
            $('#address_error').html(address_error);
        } else {
            address_error = "";
            $('#address_error').html('');
        }

        if (!c_city){
            city_error = "Province is required";
            $('#city_error').html('');
            $('#city_error').html(city_error);
        } else {
            city_error = "";
            $('#city_error').html('');
        }

        if (!c_zip){
            zip_error = "Zip code is required";
            $('#zip_error').html('');
            $('#zip_error').html(zip_error);
        } else {
            zip_error = "";
            $('#zip_error').html('');
        }

        if (!c_country){
            country_error = "Country is required";
            $('#country_error').html('');
            $('#country_error').html(country_error);
        } else {
            country_error = "";
            $('#country_error').html('');
        }

        if (!c_phone){
            phone_error = "Phone number is required";
            $('#phone_error').html('');
            $('#phone_error').html(phone_error);
        } else {
            phone_error = "";
            $('#phone_error').html('');
        }

        if (fname_error != '' || lname_error != '' || address_error != '' || city_error != '' || zip_error != '' || country_error != '' || phone_error != '' ){
            return false;
        } else {
            var data = {

                'c_firstname': c_firstname,
                'c_lastname': c_lastname,
                'c_address': c_address,
                'c_city': c_city,
                'c_zip': c_zip,
                'c_country': c_country,
                'c_phone': c_phone,
            }

            $.ajax({
                method: "POST",
                url: "/proceed-to-pay",
                data: data,
                success: function (response) {
                    // console.log(response)
                    // alert(response.total_price)


                    var form = document.querySelector("#checkoutForm");

                    var options = {
                        publicKey: "pkey_test_5t2b96bzdsilxg00mll",
                        amount: response.total_price +'00',
                        frameLabel: 'Karat Bakery',
                        currency: 'THB',
                        submitLabel: 'ชำระเงิน',
                        otherPaymentMethods:'promptpay' ,
                        onCreateTokenSuccess: function (responsea){
                            // alert(responsea) //response = token
                            form.omiseToken.value = responsea
                            // form.submit()
                            $.ajax({
                                method: "POST",
                                url: "/checkout-order",
                                data: {
                                    'omiseToken' : responsea,
                                    'checkout_fname' : response.c_firstname,
                                    'checkout_lname' : response.c_lastname,
                                    'checkout_address' : response.c_address,
                                    'checkout_province' : response.c_city,
                                    'checkout_zip' : response.c_zip,
                                    'checkout_country' : response.c_country,
                                    'checkout_phone_no' : response.c_phone,
                                    'total' : response.total_price +'00'
                                },
                                success: function (responseb){
                                    // alert(responseb.status)
                                    if (responseb.status === "Order placed successfully"){
                                        window.location.href = "/account";
                                    } else {
                                        window.location.href = "/checkout";
                                    }

                                }
                            })

                        },
                        onFormClosed: function (){
                            console.log('Form is closed.')
                        },
                    }

                    OmiseCard.configure({
                        publicKey: "pkey_test_5t2b96bzdsilxg00mll",
                        submitFormTarget: '#checkoutForm',
                    });
                    OmiseCard.open(options);


                }
            })
        }

    })
})

