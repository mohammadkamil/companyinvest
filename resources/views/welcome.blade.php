@extends('layout')
@section('content')
<div class="grid-container">
    <header class="header">
        <div class="main-header__heading">SAIKOLAB INVESTMENT</div>
    </header>

    <main class="main" onload="getproductuser()">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-lg-2" >
                    <div class="table-responsive-xl">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Product for Sale</th>
                                    <th scope="col">Stock</th>
                                </tr>
                            </thead>
                            <tbody id="companyproduct">


                            </tbody>
                        </table>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Money</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" id="money">5000</th>

                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-10 col-lg-10" >
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="companya-tab" data-toggle="tab" href="#compA" role="tab" aria-controls="home"
                            aria-selected="true">Company A</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="companyb-tab" data-toggle="tab" href="#compB" role="tab" aria-controls="profile"
                            aria-selected="false">Company B</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="companyc-tab" data-toggle="tab" href="#compC" role="tab" aria-controls="contact"
                            aria-selected="false">Company C</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="companyd-tab" data-toggle="tab" href="#compD" role="tab" aria-controls="contact"
                            aria-selected="false">Company D</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="compA" role="tabpanel" aria-labelledby="companya-tab">
                            <div class="col-md-12 col-lg-12 divTab">
                                <div class="table-responsive-xl">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Time left(second)</th>

                                                <th scope="col">Product for Sale</th>
                                                <th scope="col">Qty in Store</th>
                                                <th scope="col">Price per unit (RM)</th>
                                                <th scope="col" width='15%'>Qty to buy</th>
                                                <th scope="col" width="30%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="companyB">

                                        </tbody>
                                    </table>
                                </div>
                            </div></div>
                        <div class="tab-pane fade" id="compB" role="tabpanel" aria-labelledby="companyb-tab">
                            <div class="col-md-12 col-lg-12 divTab">
                                <div class="table-responsive-xl">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Time left(second)</th>

                                                <th scope="col">Product for Sale</th>
                                                <th scope="col">Qty in Store</th>
                                                <th scope="col">Price per unit (RM)</th>
                                                <th scope="col" width='15%'>Qty to buy</th>
                                                <th scope="col" width="30%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="companyC">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="compC" role="tabpanel" aria-labelledby="companyc-tab">
                            <div class="col-md-12 col-lg-12 divTab">
                                <div class="table-responsive-xl">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Time left(second)</th>

                                                <th scope="col">Product for Sale</th>
                                                <th scope="col">Qty in Store</th>
                                                <th scope="col">Price per unit (RM)</th>
                                                <th scope="col" width='15%'>Qty to buy</th>
                                                <th scope="col" width="30%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="companyD">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="compD" role="tabpanel" aria-labelledby="companyd-tab">
                            <div class="col-md-12 col-lg-12 divTab">
                                <div class="table-responsive-xl">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Time left(second)</th>

                                                <th scope="col">Product for Sale</th>
                                                <th scope="col">Qty in Store</th>
                                                <th scope="col">Price per unit (RM)</th>
                                                <th scope="col" width='15%'>Qty to buy</th>
                                                <th scope="col" width="30%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="companyA">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>
                    {{-- <div class="row">
                            <div class="col-md-12 col-lg-12">
                                    <div class="table-responsive-xl">
                                        <h1>Company A</h1>

                                        <table class="table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">Time left(second)</th>

                                                    <th scope="col">Product for Sale</th>
                                                    <th scope="col">Qty in Store</th>
                                                    <th scope="col">Price per unit (RM)</th>
                                                    <th scope="col" width='15%'>Qty to buy</th>
                                                    <th scope="col" width="30%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="companyA">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                        <div class="table-responsive-xl">
                                            <h1>Company B</h1>

                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Time left(second)</th>

                                                        <th scope="col">Product for Sale</th>
                                                        <th scope="col">Qty in Store</th>
                                                        <th scope="col">Price per unit (RM)</th>
                                                        <th scope="col" width='15%'>Qty to buy</th>
                                                        <th scope="col" width="30%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="companyB">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                    </div> <div class="row">
                            <div class="col-md-12 col-lg-12">
                                    <div class="table-responsive-xl">
                                        <h1>Company C</h1>

                                        <table class="table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">Time left(second)</th>

                                                    <th scope="col">Product for Sale</th>
                                                    <th scope="col">Qty in Store</th>
                                                    <th scope="col">Price per unit (RM)</th>
                                                    <th scope="col" width='15%'>Qty to buy</th>
                                                    <th scope="col" width="30%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="companyC">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                        <div class="table-responsive-xl">
                                            <h1>Company D</h1>

                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Time left(second)</th>

                                                        <th scope="col">Product for Sale</th>
                                                        <th scope="col">Qty in Store</th>
                                                        <th scope="col">Price per unit (RM)</th>
                                                        <th scope="col" width='15%'>Qty to buy</th>
                                                        <th scope="col" width="30%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="companyD">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                    </div> --}}

            </div>
            {{-- <button onclick="getproductuser()"></button> --}}
        </div>
    </main>
    <footer class="footer">
        <div class="footer__copyright">&copy;2019 Universiti Utara Malaysia. All Rights Reserved </div>

    </footer>

    <script>
        let highest=0;
        let timers=0;
        getproductuser();
            getcompanyA();

            function getcompanyA() {
              $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
              $.ajax({

                type: 'POST',

                url: '/getCompany',

                success: function(data) {
                  console.log(JSON.stringify(data));
                  $.each(data, function(index, value) {
                      $.each(value,function(index2,value2){
                        console.log(index2);
                        if(index==0){
                            $("#companyA").append("<tr><th scope='row' id='time_"+value2.id+"' class='time' onLoad='saletimer("+value2.id+")'>" + getRndInteger(60,150) + "</th><th scope='row'>" + value2.productName + "</th><td id='quantity_" + value2.id + "'>" + value2.quantity + "</td><td id='price_"+value2.id+"'>" + value2.productPrice + "</td><td><input class='form-control' type='number' value='0' id='" + value2.id + "'></td><td><button class='btn btn-primary btn-raised' style='margin-right:2.5%' onClick='buy(" + value2.id + ",5,"+value2.productID+")' id='buy_"+value2.id+"'>Buy</button><button class='btn btn-primary btn-raised' onClick='sell(" + value2.id + ",5,"+value2.productID+")' id='sell_"+value2.id+"'>Sell</button></td></tr>");

                        }else if(index==1){
                            $("#companyB").append("<tr><th scope='row' id='time_"+value2.id+"' class='time' onLoad='saletimer("+value2.id+")'>" + getRndInteger(60,150) + "</th><th scope='row'>" + value2.productName + "</th><td id='quantity_" + value2.id + "'>" + value2.quantity + "</td><td id='price_"+value2.id+"'>" + value2.productPrice + "</td><td><input class='form-control' type='number' value='0' id='" + value2.id + "'></td><td><button class='btn btn-primary btn-raised' style='margin-right:2.5%' onClick='buy(" + value2.id + ",5,"+value2.productID+")' id='buy_"+value2.id+"'>Buy</button><button class='btn btn-primary btn-raised' onClick='sell(" + value2.id + ",5,"+value2.productID+")' id='sell_"+value2.id+"'>Sell</button></td></tr>");

                        }else if(index==2){
                            $("#companyC").append("<tr><th scope='row' id='time_"+value2.id+"' class='time' onLoad='saletimer("+value2.id+")'>" + getRndInteger(60,150) + "</th><th scope='row'>" + value2.productName + "</th><td id='quantity_" + value2.id + "'>" + value2.quantity + "</td><td id='price_"+value2.id+"'>" + value2.productPrice + "</td><td><input class='form-control' type='number' value='0' id='" + value2.id + "'></td><td><button class='btn btn-primary btn-raised' style='margin-right:2.5%' onClick='buy(" + value2.id + ",5,"+value2.productID+")' id='buy_"+value2.id+"'>Buy</button><button class='btn btn-primary btn-raised' onClick='sell(" + value2.id + ",5,"+value2.productID+")' id='sell_"+value2.id+"'>Sell</button></td></tr>");

                        }else{
                            $("#companyD").append("<tr><th scope='row' id='time_"+value2.id+"' class='time' onLoad='saletimer("+value2.id+")'>" + getRndInteger(60,150) + "</th><th scope='row'>" + value2.productName + "</th><td id='quantity_" + value2.id + "'>" + value2.quantity + "</td><td id='price_"+value2.id+"'>" + value2.productPrice + "</td><td><input class='form-control' type='number' value='0' id='" + value2.id + "'></td><td><button class='btn btn-primary btn-raised' style='margin-right:2.5%' onClick='buy(" + value2.id + ",5,"+value2.productID+")' id='buy_"+value2.id+"'>Buy</button><button class='btn btn-primary btn-raised' onClick='sell(" + value2.id + ",5,"+value2.productID+")' id='sell_"+value2.id+"'>Sell</button></td></tr>");

                        }
                    // if (value2.userID == 5) {

                    // } else {
                    //   $("#companyB").append("<tr><th scope='row' id='time_"+value2.id+"' class='time' onLoad='saletimer("+value2.id+")'>" + getRndInteger(60,150) + "</th><th scope='row'>" + value2.productName + "</th><td id='quantity_" + value2.id + "'>" + value2.quantity + "</td><td id='price_"+value2.id+"'>" + value2.productPrice + "</td><td><input class='form-control' type='number' value='0' id='" + value2.id + "'></td><td><button class='btn btn-primary btn-raised' style='margin-right:2.5%' onClick='buy(" + value2.id + ",5,"+value2.productID+")' id='buy_"+value2.id+"'>Buy</button><button class='btn btn-primary btn-raised' onClick='sell(" + value2.id + ",5,"+value2.productID+")' id='sell_"+value2.id+"'>Sell</button></td></tr>");

                    // }
                    // console.log(index2 + ": " + value2);

                      });



                  });
                  highest=gethighestTime();
                  // foreach(data as product){
                  // alert(product.id);
                  // }
                }

              });

            }

            function buy(id, userID,productID) {
                // alert(id);
              let quantity = $("#" + id).val();
              if(checkMoney(quantity,id)){
                if(checkstock(quantity, id)){
                    updateMoney(quantity,id,1);
                    updateQuantityCompany(quantity,productID,1,id);

//                 $.ajaxSetup({
//                       headers: {
//                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                       }
//                       });
//                   $.ajax({

//                   type:'POST',
//                   data:{productsimulateID:id,userID:userID,quantity:quantity},
//                   url:'/buy',

//                   success:function(data){
//                     $.each(data, function(index, value) {
//                         // alert(data.productID);

// console.log(index + ": " + value);
// });
                    //   alert(data);
                    //   updateMoney(quantity,id);
                    //   updateQuantityCompany(quantity,data.productID);
              // foreach(data as product){
              // alert(product.id);
              // }
            //   }

            //   });
              }else{
                  alert("Not enough quantity in store");
              }
              }else{
                  alert("Not enough money");
              }


            }
            function updateMoney(quantity,id,type){
                if(type==1){
                    let total=parseInt($("#price_"+id).html())*quantity;
                let newmoney=parseInt($("#money").html())-total;
              $("#money").html(newmoney);
                }else{
                    let total=parseInt($("#price_"+id).html())*quantity;
                let newmoney=parseInt($("#money").html())+total;
              $("#money").html(newmoney);
                }

                // alert(total);
            }
            function updateQuantityCompany(quantity,productID,type,id){
                // alert(quantity+" p"+productID+"p "+type);
                if(type==1){
                    let quantityproduct=parseInt($("#"+productID).html());
                    let newquantityproduct=quantityproduct+parseInt(quantity);
                    $("#"+productID).html(newquantityproduct);

                    let quantitycompany=parseInt($("#quantity_"+id).html());
                    let newquantitycompany=quantitycompany-parseInt(quantity);
                    $("#quantity_"+id).html(newquantitycompany);
                }else{
                    let quantityproduct=parseInt($("#"+productID).html());
                    let newquantityproduct=quantityproduct-quantity;
                    $("#"+productID).html(newquantityproduct);
                    let quantitycompany=parseInt($("#quantity_"+id).html());
                    let newquantitycompany=quantitycompany+parseInt(quantity);
                    $("#quantity_"+id).html(newquantitycompany);
                }

                // alert(total);
            }
            function checkMoney(quantity,id){
                let total=parseInt($("#price_"+id).html())*quantity;
                if(total>$("#money").html()){
                    return false;
                }else{
                    return true;
                }
                // alert(total);
            }
            function sell(id, userID,productID) {
                let quantity = $("#" + id).val();

                if(checkstockuser(quantity, productID)){
                    updateMoney(quantity,id,2);
                    updateQuantityCompany(quantity,productID,2,id);
//                 $.ajaxSetup({
//                       headers: {
//                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                       }
//                       });
//                   $.ajax({

//                   type:'POST',
//                   data:{productsimulateID:id,userID:userID,quantity:quantity},
//                   url:'/buy',

//                   success:function(data){
//                     $.each(data, function(index, value) {
//                         // alert(data.productID);

// console.log(index + ": " + value);
// });
                    //   alert(data);
                    //   updateMoney(quantity,id);
                    //   updateQuantityCompany(quantity,data.productID);
              // foreach(data as product){
              // alert(product.id);
              // }
            //   }

            //   });
              }else{
                  alert("Not enough quantity in store");
              }



            }

            function checkstock(quantity, id) {
              if ($("#quantity_" + id).html() >= quantity) {
                return true;
              } else {
                return false;
              }
              // if($("#quantity_"+id).val)
            }
            function checkstockuser(quantity, productID) {
              if ($("#"+productID).html() >= quantity) {
                return true;
              } else {
                return false;
              }
              // if($("#quantity_"+id).val)
            }
            function getproductuser() {
                $("#companyproduct").empty();
              $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
              $.ajax({

                type: 'POST',

                url: '/getProductUser',

                success: function(data) {
                  $.each(data, function(index, value) {
                    $("#companyproduct").append("<tr><th scope='row'>" + value.productName + "</th><td id='"+value.productID+"'>" + value.quantity + "</td></tr>");


                    console.log(index + ": " + value);
                  });
                  // foreach(data as product){
                  // alert(product.id);
                  // }
                }

              });

            }
            function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1) ) + min;
}
function gethighestTime(){
    let high=0;
    $('.time').each(function(i, obj) {
       if(high<parseInt($("#"+this.id).html())){
           high=parseInt($("#"+this.id).html());
       }
    //test
});
return high;
}
var timerint=setInterval(function() {
    timers++;

    if(timers>highest){
clearInterval(timerint);
alert("Your total collection is RM"+$("#money").html());
    }else{
        $('.time').each(function(i, obj) {
        let timer= parseInt($("#"+this.id).html())-1;
// $("#"+this.id).html(timer);
if(timer==0 ){
console.log("0");
    $("#"+this.id).html(timer);
    var str = this.id;
  var id = str.split("_");
    $("#buy_"+id[1]).hide();
    $("#sell_"+id[1]).hide();

}else if(timer>0){
    console.log(">0");

    $("#"+this.id).html(timer);

}
    //test
});
// clearInterval();
console.log("id"+ 1);
    }

}, 1000);
// var x = setInterval(function() {



// }, 1000);
    </script>
</div>
@endsection
