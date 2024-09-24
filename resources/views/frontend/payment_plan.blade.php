@extends('frontend.layouts.app')
@section('content')
<div class="detail">
    <div class="row">
        <div class="col-md-12">
                    <div class="payment-detail">
                        <h3>Payment Plan</h3>
                        <p>Binghatti Dawn presents flexible payment plans by Binghatti Developers tailored to meet the diverse needs of prospective homeowners.</p>
                        <h3>1- Attractive 20/80 Installments Payment Plan</h3>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Installment</th>
                                <th>Payment (%)</th>
                                <th>Milestone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Down Payment</td>
                                <td>20%</td>
                                <td>On Booking date</td>
                            </tr>
                            <tr>
                                <td>Final Installment</td>
                                <td>80%</td>
                                <td>On Handover</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3>2- Attractive 50/50 Installments Payment Plan</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Installment</th>
                                <th>Payment (%)</th>
                                <th>Milestone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Down Payment</td>
                                <td>50%</td>
                                <td>On Booking date</td>
                            </tr>
                            <tr>
                                <td>Final Installment</td>
                                <td>50%</td>
                                <td>On Handover</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>3- Full Pay 100% Down Payment</h3>
                </div>
        </div>
    </div>
</div>
@endsection
