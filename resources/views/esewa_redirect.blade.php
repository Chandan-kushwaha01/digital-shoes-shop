<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Redirecting to eSewa...</title>
</head>

<body onload="document.getElementById('esewaForm').submit();">
    <p>Please wait while we redirect you to eSewa...</p>

    <form id="esewaForm" method="POST" action="{{ $esewa_url }}">
        @csrf

        {{-- Required fields --}}
        <input type="hidden" name="amount" value="{{ $data['amount'] }}">
        <input type="hidden" name="tax_amount" value="{{ $data['tax_amount'] }}">
        <input type="hidden" name="total_amount" value="{{ $data['total_amount'] }}">
        <input type="hidden" name="transaction_uuid" value="{{ $data['transaction_uuid'] }}">
        <input type="hidden" name="product_code" value="{{ $data['product_code'] }}">
        <input type="hidden" name="product_service_charge" value="{{ $data['product_service_charge'] }}">
        <input type="hidden" name="product_delivery_charge" value="{{ $data['product_delivery_charge'] }}">
        <input type="hidden" name="success_url" value="{{ $data['success_url'] }}">
        <input type="hidden" name="failure_url" value="{{ $data['failure_url'] }}">
        <input type="hidden" name="signed_field_names" value="{{ $data['signed_field_names'] }}">
        <input type="hidden" name="signature" value="{{ $data['signature'] }}">
    </form>
</body>

</html>
