@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">

            <tbody>
              <tr>
                <td>Amount</td>
                <td>BDT {{ $total }}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>BDT 0</td>
              </tr>
              <tr>
                <td>Delivery charge</td>
                <td>BDT 100</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>BDT {{ $total+100 }}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="Enter Your Address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>Online Payment</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>EMI Payment</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>Cash on Delivary</span> <br><br>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
          </div>
    </div>
</div>
@endsection