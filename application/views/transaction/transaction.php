<div class="main-container container">
        <div class="row">
            <div class="col-md-8">
               <h3 class="title-header">Menu</h3>
               <hr>
                <div class="product-menu-list row">
                    <div class="product col-xs-2">
                        <div class="product-img">
                             <a href="#"><img src="img/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="product-name" >
                            <p class="text-center">T-shirt</p>
                        </div>
                    </div>
                    <div class="product col-xs-2">
                        <div class="product-img">
                             <a href="#"><img src="img/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="product-name">
                            <p class="text-center">T-shirt</p>
                        </div>
                    </div>
                    <div class="product col-xs-2">
                        <div class="product-img">
                             <a href="#"><img src="img/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="product-name">
                            <p class="text-center">T-shirt</p>
                        </div>
                    </div>
                    <div class="product col-xs-2">
                        <div class="product-img">
                             <a href="#"><img src="img/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="product-name">
                            <p class="text-center">T-shirt</p>
                        </div>
                    </div>
                    <div class="product col-xs-2">
                        <div class="product-img">
                             <a href="#"><img src="img/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="product-name">
                            <p class="text-center">T-shirt</p>
                        </div>
                    </div>
                    <div class="product col-xs-2">
                        <div class="product-img">
                             <a href="#"><img src="img/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="product-name">
                            <p class="text-center">T-shirt</p>
                        </div>
                    </div>
                    <div class="product col-xs-2">
                        <div class="product-img">
                             <a href="#"><img src="img/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="product-name">
                            <p class="text-center">T-shirt</p>
                        </div>
                    </div>
                    <div class="product col-xs-2">
                        <div class="product-img">
                             <a href="#"><img src="img/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="product-name">
                            <p class="text-center">T-shirt</p>
                        </div>
                    </div>
                    <div class="product col-xs-2">
                        <div class="product-img">
                             <a href="#"><img src="img/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="product-name">
                            <p class="text-center">T-shirt</p>
                        </div>
                    </div>
                    <div class="product col-xs-2">
                        <div class="product-img">
                             <a href="#"><img src="img/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="product-name">
                            <p class="text-center">T-shirt</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="title-header">Cart</h3>
                <hr>
                <div class="cart-list">
                   <div class="row">
                       <div class="col-xs-6"><b>Items</b></div>
                       <div class="col-xs-2"><b>Quantity</b></div>
                       <div class="col-xs-2"><b>Price</b></div>
                       <div class="col-xs-2"><b>Value</b></div>
                   </div>
                   <div class="row" v-for="i in items">
                       <div class="col-xs-6 ">
                            {{ i.item_name }}
                       </div>
                       <div class="col-xs-2 ">
                           {{ i.item_quantity }}
                       </div>
                       <div class="col-xs-2">
                           {{ i.item_price }}
                       </div>
                       <div class="col-xs-2">
                           {{ i.item_price * i.item_quantity }}
                       </div>
                   </div>
                   <hr>
                   <div class="row">
                       <div class="col-xs-12 total text-right">TOTAL: {{ items | pluckSum 'item_price' 'item_quantity'}}</div>
                   </div> 
                </div>
            </div>
        </div>
    </div>