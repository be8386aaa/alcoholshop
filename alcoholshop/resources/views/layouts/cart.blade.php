@include('blocks.head')
@include('blocks.header')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{asset('')}}" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">Chivas Royal Salute 23 years old</a></h4>
                            <p>Web ID: 123001</p>
                        </td>
                        <td class="cart_price">
                            <p>$4.650.000</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">$4.650.000</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="images/cart/two.png" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">Whisky Ballantines 30 years old </a></h4>
                            <p>Web ID: 123002</p>
                        </td>
                        <td class="cart_price">
                            <p>$6.000.000</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">$6.000.000</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="images/cart/three.png" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">Macallan Oscuro </a></h4>
                            <p>Web ID: 123003</p>
                        </td>
                        <td class="cart_price">
                            <p>$28.000.000</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">$28.000.000</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
     <div style="display:flex;align-item:center;justify-content: center;margin-bottom: 30px;" class="checkout_btn">
        <button style="background-color:orange;color:white;font-weight:bold;font-size:20px;" > <a style="color:white" href="{{route('checkout')}}">CHECK OUT</a></button>
    </div>
</section> <!--/#cart_items-->
@include('blocks.footer')