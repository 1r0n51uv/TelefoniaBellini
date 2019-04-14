<div class="row">

    <div class="card col-md-12" style="background-color: #F7F8F9">

        <div class="header text-center">
            <h4 class="title title-up" style="color: black"><i class="far fa-credit-card"></i> Pagamento</h4>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <form action="/api/pay" method="post" id="payment-form">
                            <div class="form-group">

                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display Element errors. -->
                                <div id="card-errors" role="alert"></div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Acquista</button>
                            </div>

                            @if(session()->get('dest') == 'spedizione')
                                <input type="text" hidden value="{{Cart::subtotal() + 10}}" name="amount">
                            @else
                                <input type="text" hidden value="{{Cart::subtotal()}}" name="amount">
                            @endif

                            <input type="text" hidden value="{{Auth::user()->id}}" name="user">

                        </form>
                    </div>

                </div>


            </div>

        </div>


    </div>

</div>